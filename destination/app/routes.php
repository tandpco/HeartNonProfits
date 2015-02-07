<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.index');
});
/*
|----------------
| BOARD SERVICES 
|----------------
*/ 
// Services
Route::get('/board-services/services', function()
{
	return View::make('pages.board-services.services');
});
// Client Companies
Route::get('/board-services/client-companies', function()
{
	return View::make('pages.board-services.clients-companies');
});
// Advisors
Route::get('/board-services/advisors', function()
{
	return View::make('pages.board-services.advisors');
});
// Sustainable Value Wheel
Route::get('/board-services/sustainable-value-wheel', function()
{
	return View::make('pages.board-services.sustainable-value-wheel');
});
// Learning Center
Route::get('/board-services/learning-center', function()
{
	return View::make('pages.board-services.learning-center');
});
/*
|----------------
| ABOUT US
|----------------
*/
// About Main
Route::get('/about-us', function()
{
	return View::make('pages.about.about-us');
});
// Founders
Route::get('/about-us/founders', function()
{
	return View::make('pages.about.founders');
});
Route::get('/founders/william-hawfield', function()
{
	return View::make('pages.about.will-hawfield');
});
Route::get('/founders/john-zaepfel', function()
{
	return View::make('pages.about.john-zaepfel');
});
// Exec Director
Route::get('/executive-director', function()
{
	return View::make('pages.about.ken-ude');
});
// Board of Advisors
Route::get('/board-of-advisors', function()
{
	return View::make('pages.about.board-of-advisors');
});
// TBG Partners
Route::get('/our-partners', function()
{
	return View::make('pages.about.tbgPartners');
});
// Our Book
Route::get('/about-us/our-book', function()
{
	return View::make('pages.about.ourBook');
});
/*
|----------------
| WHAT WE DO
|----------------
*/
Route::get('/what-we-do', function()
{
	return View::make('pages.whatWeDo');
});
/*
|----------------
| CLIENTS AND CASE STUDIES
|----------------
*/
Route::get('/clients', function()
{
	return View::make('pages.candcs.clients');
});
Route::get('/case-studies', function()
{
	return View::make('pages.candcs.metagenics');
});
Route::get('/case-studies/metagenics', function() {
	return View::make('pages.candcs.metagenics');
});
Route::get('/case-studies/case-swayne', function() {
	return View::make('pages.candcs.boardpower');
});
Route::get('/case-studies/industrial-metal-supply', function() {
	return View::make('pages.candcs.caseswayne');
});
Route::get('/case-studies/trojan-battery', function() {
	return View::make('pages.candcs.trojan');
});
Route::get('/case-studies/sunrise-growers', function() {
	return View::make('pages.candcs.strawberry');
});
Route::get('/case-studies/us-container-corp', function() {
	return View::make('pages.candcs.container');
});
/*
|----------------
| CONTACT US
|----------------
*/
// Contact Page
Route::get('contact', 'ContactController@getContact');

// Form request:: POST action will trigger to controller
Route::post('contact-request','ContactController@getContactUsForm');

// Contact Page
Route::get('/subscribe', 'SubscribeController@getSubscribe');

// Form request:: POST action will trigger to controller
Route::post('subscribe-post','SubscribeController@getSubscribeForm');

// Route::get('/contact', function()
// {
// 	return View::make('pages.contact');
// });
// Route::post('/contact', function() 
// {
// 	return View::make('pages.contact');
// });