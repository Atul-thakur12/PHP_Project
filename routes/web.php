<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('website.index'); });
// Route::get('about-us', function () { return view('website.about-us'); });
// Route::get('services', function () { return view('website.services'); }); //Dynamic
// Route::get('service-details', function () { return view('website.service-details'); }); //Dynamic
Route::get('portfolio', function () { return view('website.portfolio'); }); //Dynamic
Route::get('contact-us', function () { return view('website.contact-us'); }); //Dynamic
Route::get('service-detail/{service_id?}', [Controller::class, 'services_detail_get']);
Route::get('about-us', [Controller::class, 'about_us']);
Route::get('/', [Controller::class, 'index']);
Route::post('send_contact_mail', [Controller::class, 'send_contact_mail'])->name('send_contact_mail');
