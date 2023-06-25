<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('service',[ServiceController::class,'service_all'])->name('services');
Route::get('service/{service}',[ServiceController::class,'show'])->name('service.show');
Route::get('project',[ProjectController::class,'project_all'])->name('projects');
Route::get('project/{project}',[ProjectController::class,'show'])->name('project.show');
Route::get('blog',[BlogController::class,'blog_all'])->name('blogs');
Route::get('blog/{slug}',[BlogController::class,'show'])->name('blog.show');
