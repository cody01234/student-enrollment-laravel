
<?php
# Arvin Reil Tupal
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'root'] );

Route::get('/enrollment', [EnrollmentController::class, 'root'] );

Route::get('/teacher', [TeacherController::class, 'root'] );

Route::get('/subject', [SubjectController::class, 'root'] );

Route::get('/student', [StudentController::class, 'root'] )->name('student.root');

Route::get('/room', [RoomController::class, 'root'] );

Route::get('/student/create', [StudentController::class, 'create'] )->name('student.create');

Route::post('/student', [StudentController::class, 'store'] )->name('student.store');

# Arvin Reil Tupal