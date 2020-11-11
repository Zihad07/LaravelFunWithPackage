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

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    // alert()->success('title','lorem lorem');
    // alert()->error('error title', 'detatils');
    // Alert::toast('Succefully login', 'Success');
    // Alert::toast('Succefully login', 'Success');
    // Alert::alert('Title', 'lorem ipsome');
    return view('welcome');
});

Route::get('/post', function(){ return view('welcome');});

Route::post('/post', function(Request $request) {
    // $request->validate([
    //     'title' => 'required|min:3',
    //     'body' => 'required|min:3'
    // ]);

    return redirect(url('/post'))->with('success', 'Created Successully');
});
