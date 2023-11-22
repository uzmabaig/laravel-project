<?php

use Illuminate\Support\Facades\Route;




Route::get('/first-project',function(){
    return view('new-project');
});

Route::view('contentfile','myfile');



