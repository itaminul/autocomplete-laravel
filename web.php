<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AcademyOfficerController;
use Illuminate\Http\Request;
 
 Route::get('/autocomplete', [App\Http\Controllers\AutoCompleteController::class, 'search'])->name('autocomplete');
		











