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
});

Route::get('/contato',function(){
    return "<h2>jesrelgoncalves@gmail.com</h2>";
});

Route::get('/sobre', function(){
    return "<p><h3>Aluno do IFCE na disciplina de PW2</h3></p>";
});
