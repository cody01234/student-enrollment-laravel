
<?php
# Arvin Reil Tupal
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'root'] )->name('home');

