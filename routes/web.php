<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/register', function(){
    return view('register');
});
Route::get('/checkout', function(){
    return view('checkout');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/forgot_password', function(){
    return view('forgot-password');
});
Route::get('/new_password', function(){
    return view('new-password');
});

Route::get('/edit_company', function(){
    return view('Dashboard/dashboard-edit-company');
});
Route::get('/add_category', function(){
    return view('Dashboard/dashboard-add-category');
});
Route::get('/edit_category', function(){
    return view('Dashboard/dashboard-edit-category');
});
Route::get('/add_employee', function(){
    return view('Dashboard/dashboard-add-employee');
});
Route::get('/edit_employee', function(){
    return view('Dashboard/dashboard-edit-employee');
});
Route::get('/employee_list', function(){
    return view('Dashboard/dashboard-employee-list');
});
Route::get('/add_product', function(){
    return view('Dashboard/dashboard-add-product');
});
Route::get('/edit_product', function(){
    return view('Dashboard/dashboard-edit-product');
});
Route::get('/product_list', function(){
    return view('Dashboard/dashboard-product-list');
});
Route::get('/add_designation', function(){
    return view('Dashboard/dashboard-add-designation');
});
Route::get('/company_list', function(){
    return view('Dashboard/dashboard-company-list');
});
Route::get('/company_details', function(){
    return view('Dashboard/dashboard-company-details');
});
Route::get('/general_setting', function(){
    return view('Dashboard/dashboard-generalsettings');
});
Route::get('/note_setting', function(){
    return view('Dashboard/dashboard-notes-settings');
});
Route::get('/products', function(){
    return view('Dashboard/dashboard-products');
});
Route::get('/waste_type', function(){
    return view('Dashboard/dashboard-waste-type');
});
Route::get('/dashboard', function(){
    return view('Dashboard/dashboard-insightsuser');
});