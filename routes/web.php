<?php

use Illuminate\Support\Facades\Route;

// Route::get('/myfile',function(){
//     return view('contentfile');
    
// });


Route::get('/first-project',function(){
    return view('new-project');
});

Route::view('/myfile','contentfile');


