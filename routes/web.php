<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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


//All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});


//Single Listing
Route::get('/listing/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing,
    ]);
});


// Route::get('/hello', function (){
//     return response("hello world", 200)
//         ->header('Content-Type', 'text/plain');
// });


// Route::get('posts/{id}', function ($id) {
//     //dd => die, dump
//     //ddd => die, dump, debug
//     // ddd($id);
//     return response('Post ' .$id);
// })->where('id', '[0-9]+');


// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->age;
// });
