<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/details', 'DetailsController@DetailsSelect');
$router->post('/details', 'DetailsController@DetailsCreate');
$router->delete('/details', 'DetailsController@DetailsDelete');
$router->put('/details', 'DetailsController@DetailsUpdate');


// $router->get('/builder','BuilderController@AllRows');
// $router->get('/builder','BuilderController@Rows');
// $router->get('/builder','BuilderController@SingleData');
// $router->get('/builder','BuilderController@ListColumn');
$router->get('/builder','BuilderController@Aggregate');

$router->post('/builder','BuilderController@Insert');

$router->delete('/builder','BuilderController@Delete');

$router->put('/builder','BuilderController@Update');