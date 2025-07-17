<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Home;
use App\Livewire\LambangDaerah;
use App\Livewire\StrukturPemerintahan;

Route::get('/', Home::class)->name('home');

// Profil Kota
Route::get('/struktur-pemerintahan', StrukturPemerintahan::class)->name('strukturPemerintahan');
Route::get('/lambang-daerah', LambangDaerah::class)->name('lambangDaerah');
