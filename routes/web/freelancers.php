<?php

use App\Http\Controllers\FreelancerController;
use Illuminate\Support\Facades\Route;

Route::get('freelancers', [FreelancerController::class, 'index']);