<?php

use App\Http\Controllers\OrganizationSurveyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Exports\OrganizationSurveysExport;
use Maatwebsite\Excel\Facades\Excel;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [OrganizationSurveyController::class, 'create'])->name('organizationForm');
Route::post('/organization-form', [OrganizationSurveyController::class, 'store'])->name('submit.organizationForm');



Route::get('/admin/surveys', [OrganizationSurveyController::class, 'index']);
Route::get('/survey/{id}/print', [OrganizationSurveyController::class, 'print']);
Route::get('/surveys/export', function () {
    return Excel::download(new OrganizationSurveysExport, 'organization_surveys.xlsx');
});
require __DIR__.'/auth.php';
