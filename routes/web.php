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

Route::get('query', function () {
    abort(400);
});

Route::get('query/{id?}', function ($id) {
    if ($id=='deadwood') {
        return response()->json(json_decode('[{"score":29.350138,"show":{"id":565,"url":"http://www.tvmaze.com/shows/565/deadwood","name":"Deadwood","type":"Scripted","language":"English","genres":["Drama","Crime","Western","History"],"status":"Ended","runtime":60,"premiered":"2004-03-21","officialSite":null,"schedule":{"time":"21:00","days":[]},"rating":{"average":9.1},"weight":72,"network":{"id":8,"name":"HBO","country":{"name":"United States","code":"US","timezone":"America/New_York"}},"webChannel":null,"externals":{"tvrage":3267,"thetvdb":72023,"imdb":"tt0348914"},"image":{"medium":"http://static.tvmaze.com/uploads/images/medium_portrait/4/11724.jpg","original":"http://static.tvmaze.com/uploads/images/original_untouched/4/11724.jpg"},"summary":"<p>The outlaw camp of Deadwood marches slowly towards civilization, facing its first elections. But the power struggles continue over everything in Deadwood—influence, money, and whores—as the founding camp members form strategic alliances to face down the threat of a powerful newcomer, seeking to remake Deadwood in his image.</p>","updated":1493803965,"_links":{"self":{"href":"http://api.tvmaze.com/shows/565"},"previousepisode":{"href":"http://api.tvmaze.com/episodes/53049"}}}},{"score":3.922347,"show":{"id":28118,"url":"http://www.tvmaze.com/shows/28118/deadpool","name":"Deadpool","type":"Animation","language":"English","genres":[],"status":"In Development","runtime":null,"premiered":null,"officialSite":null,"schedule":{"time":"","days":[]},"rating":{"average":null},"weight":0,"network":{"id":47,"name":"FXX","country":{"name":"United States","code":"US","timezone":"America/New_York"}},"webChannel":null,"externals":{"tvrage":null,"thetvdb":null,"imdb":null},"image":{"medium":"http://static.tvmaze.com/uploads/images/medium_portrait/111/278158.jpg","original":"http://static.tvmaze.com/uploads/images/original_untouched/111/278158.jpg"},"summary":"<p>Wade Wilson is <i>so</i> touching himself tonight, after hearing this news.</p><p>Marvel comics\' Deadpool is coming to TV as the star of an animated adult action-comedy for FXX, it was announced on Wednesday.</p><p>FXX has ordered 10 episodes of the untitled Marvel Television/FX Productions/ABC Signature Studios co-production, which boasts <i>Atlanta</i>‘s WGA Award-winning Donald Glover and Stephen Glover as showrunners, executive producers and writers. Marvel\'s Jeph Loeb and Jim Chory will also serve as EPs on the series, which is eyed to debut in 2018.</p>","updated":1496053194,"_links":{"self":{"href":"http://api.tvmaze.com/shows/28118"}}}},{"score":2.8233626,"show":{"id":2514,"url":"http://www.tvmaze.com/shows/2514/redwood-kings","name":"Redwood Kings","type":"Reality","language":"English","genres":[],"status":"Running","runtime":60,"premiered":"2014-08-01","officialSite":"http://www.animalplanet.com/tv-shows/redwood-kings/","schedule":{"time":"21:00","days":["Friday"]},"rating":{"average":null},"weight":25,"network":{"id":92,"name":"Animal Planet","country":{"name":"United States","code":"US","timezone":"America/New_York"}},"webChannel":null,"externals":{"tvrage":39106,"thetvdb":276663,"imdb":null},"image":{"medium":"http://static.tvmaze.com/uploads/images/medium_portrait/13/33588.jpg","original":"http://static.tvmaze.com/uploads/images/original_untouched/13/33588.jpg"},"summary":"<p><i><b>\"Redwood Kings\"</b> is an Animal Planet reality show that follows fraternal twins, Ron and John Daniels as they run their tree house and theming business, Daniels Wood Land.</i></p>","updated":1459169528,"_links":{"self":{"href":"http://api.tvmaze.com/shows/2514"},"previousepisode":{"href":"http://api.tvmaze.com/episodes/203937"}}}}]'));
    } else {
        return response()->json;
    }

});