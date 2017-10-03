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
    return response()->json([]);
});

Route::get('query/', function () {
    abort(400);
});

Route::get('query/{id?}', function ($id) {
    if (gettype($id) == 'string') {
        $client = new GuzzleHttp\Client();
        $res = $client->get('http://api.tvmaze.com/search/shows?q=' . $id);
        if ($res->getStatusCode() == 200) {
            return response()->json(json_decode($res->getBody()));
        }
    }
    abort(400);

});