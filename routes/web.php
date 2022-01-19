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


Route::get('/',[
    'uses'=>'NewShopController@index',
    'as'  => '/'
]);

Route::get('/catagory_product',[
    'uses'=>'NewShopController@',
    'as' =>'catagory_product'

]);

Route::get('/catagory_product',[

        'uses'=>'NewShopController@catagoyProduct',
        'as'  =>'catagory_product'
]);

Route::get('/bolg',[
    'uses'=>'NewShopController@blog',
    'as' =>'/blog'
]);

Route::get('/login',[
    'uses'=>'NewShopController@login',
    'as'=>'/login'
]);

Route::get('/rag',[
    'uses'=>'NewShopController@rag',
    'as'=>'/rag'
]);
Route::get('/catagory/add',[
    'uses'=>'CatagoryController@index',
    'as'=>'/addcatagory'
]);

Route::post('/catagory/save',[
    'uses'=>'CatagoryController@saveCatagoryInfo',
    'as'=>'newcatagory'
]);

Route::get('/catagory/manage',[
    'uses'=>'CatagoryController@manageCatagoryInfo',
    'as'=>'manage-catagory'
]);

Route::get('/catagory/unpublish/{id}',[
    'uses'=>'CatagoryController@UnpublishCatagoryInfo',
    'as'=>'unpublish-catagory'
]);

Route::get('/catagory/publish/{id}',[
    'uses'=>'CatagoryController@publishCatagory',
    'as'=>'published-catagory'
]);

Route::get('/catagory/edit/{id}',[

        'uses'=>'CatagoryController@editCatagory',
        'as'=>'edit-catagory'
]);

Route::post('/catagory/update',[
    'uses'=>'CatagoryController@updateCatagory',
    'as'=>'update-catagory'
]);
Route::get('/catagory/deleat/{id}',[
    'uses'=>'CatagoryController@deleatCatagory',
    'as'=>'deleat-catagory'
]);

Route::get('/brand/add',[
    'uses'=>'BrandController@index',
    'as'=>'add-brand'
]);

Route::post('/brand/save',[
    'uses'=>'BrandController@saveCatagorybrand',
    'as'=>'new-brand'
]);

Route::get('/product/add',[
    'uses'=>'ProductController@index',
    'as'=>'add-product'
]);

Route::post('/product/save',[
    'uses'=>'ProductController@saveProduct',
    'as'=>'new-product'
]);

Route::get('/product/manage',[
    'uses'=>'ProductController@manageProduct',
    'as'=>'manage-product'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
