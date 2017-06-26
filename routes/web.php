<?php

use App\Product;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api'], function () use ($app) {

    $app->get('products', function () {
        // Matches The "/admin/users" URL
        return Product::all();
    });

    $app->get('offers', 'OfferController@index');
    $app->post('offers', 'OfferController@store');
});
