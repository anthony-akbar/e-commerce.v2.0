<?php

use App\Http\Controllers\admin\DashboardController;
use App\Models\Category;
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
    $categories = Category::all();
    return view('front.front', compact('categories'));
});

Route::group(['namespace'=>'admin', 'prefix'=>'admin'], function () {
   Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
});

Route::get('/admin', function (){
   return view('admin.index');
});

Route::get('/test', function () {
   $categories = Category::all();

   foreach ($categories as $category) {
       if(!$category->children->isEmpty()){
           dump($category->title . '      +');
       }else {
           dump($category->title);
       }
   }

});
