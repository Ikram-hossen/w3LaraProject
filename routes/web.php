<?php

require 'admin.php';
Route::view('/', 'site.pages.homepage');
Auth::routes();