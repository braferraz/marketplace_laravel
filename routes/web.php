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
    return view('welcome');
})->name('home');

Route::get('/model', function(){
    //$products = \App\Product::all();
    //$user = new \App\User();
    //$user = \App\User::find(41);
    //$user->name = 'Usuário Teste Editado..';
    //$user->save();
    //Criar uma loja para um usuário
    /*
    $user = \App\User::find(10);
    $store = $user->store()->create([
        'name' => 'Loja Teste',
        'description' => 'Loja teste de produtos de informática',
        'mobile_phone' => 'XX-XXXXX-XXXX',
        'phone' => 'XX-XXXXX-XXXX',
        'slug' => 'loja-teste'
    ]);
    */
    //Criar um produto para uma loja
    // $store = \App\Store::find(41);
    // $store->products()->create([
    //     'name' => 'Notebook Dell',
    //     'description' => 'Core i5 10GB',
    //     'body' => 'Qualquer coisa...',
    //     'price' => 2999.90,
    //     'slug' =>'notebook-dell',
    // ]);

    //Criar uma categoria

    // \App\Category::create([
    //     'name' => 'Games',
    //     'slug' => 'games'
    // ]);
    
    // \App\Category::create([
    //     'name' => 'Notebooks',
    //     'description' => null,
    //     'slug' => 'notebooks'
    // ]);

    // return \App\Category::All();

    //Adcionar um produto para uma categoria

    // $product = \App\Product::find(49);
    // $product->categories()->attach([1]);

    return \App\User::all();
});


Route::group(['middleware' =>['auth']], function(){
    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){

        Route::prefix('stores')->name('stores.')->group(function(){
            
            Route::get('/', 'StoreController@index')->name('index');
            Route::get('/create', 'StoreController@create')->name('create');
            Route::post('/store', 'StoreController@store')->name('store');
            Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
            Route::post('/update/{store}', 'StoreController@update')->name('update');
            Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
        });
    
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');
        
        Route::post('photos/remove', 'ProductPhotoController@removePhoto')->name('photo.remove');
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
