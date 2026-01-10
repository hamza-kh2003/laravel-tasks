<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TeacherProfileController;

// INDEX - عرض كل المدرسين
Route::get('/teacher-profiles', [TeacherProfileController::class, 'index'])
    ->name('teacher_profiles.index');

// CREATE - صفحة إضافة مدرس
Route::get('/teacher-profiles/create', [TeacherProfileController::class, 'create'])
    ->name('teacher_profiles.create');

// STORE - حفظ مدرس جديد
Route::post('/teacher-profiles', [TeacherProfileController::class, 'store'])
    ->name('teacher_profiles.store');

// SHOW - عرض مدرس واحد (اختياري)
Route::get('/teacher-profiles/{id}', [TeacherProfileController::class, 'show'])
    ->name('teacher_profiles.show');

// EDIT - صفحة تعديل مدرس
Route::get('/teacher-profiles/{id}/edit', [TeacherProfileController::class, 'edit'])
    ->name('teacher_profiles.edit');

// UPDATE - حفظ التعديل
Route::put('/teacher-profiles/{id}', [TeacherProfileController::class, 'update'])
    ->name('teacher_profiles.update');

// DESTROY - حذف مدرس
Route::delete('/teacher-profiles/{id}', [TeacherProfileController::class, 'destroy'])
    ->name('teacher_profiles.destroy');
