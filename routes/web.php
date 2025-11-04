<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', ['title' => 'Jeffer Doria - Fullstack Developer']);
});

Route::get('/contact', function () {
    return view('pages.contact', ['title' => 'Contacto']);
});

Route::get('/projects', function () {
    return view('pages.projects', ['title' => 'Proyectos']);
});