<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $id = request()->q;
    if (gettype($id) == 'string') {
        $client = new GuzzleHttp\Client();
        $res = $client->get('http://api.tvmaze.com/search/shows?q=' . $id);
        $filtered = [];
        if ($res->getStatusCode() == 200) {
            $array = json_decode($res->getBody());
            foreach ($array as $key => $value) {
                $pos = strpos(strtolower($value->show->name), strtolower($id));
                if ($pos !== false) {
                    $filtered[] = array('title' => $value->show->name,'score' => $value->score);
                }
            }
            return response()->json($filtered);
        }
    }
    abort(400);
    return response()->json([]);
});