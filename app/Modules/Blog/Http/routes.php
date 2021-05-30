<?php
namespace App\Modules\Blog\Http;

use App\Modules\Blog\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
