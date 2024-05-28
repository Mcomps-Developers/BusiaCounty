<?php

use App\Livewire\HomeComponent;
use App\Livewire\Pages\AboutCounty;
use App\Livewire\Pages\Budget;
use App\Livewire\Pages\ChiefOfficers;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\DepartmentDetails;
use App\Livewire\Pages\Departments;
use App\Livewire\Pages\Downloads;
use App\Livewire\Pages\EventDetails;
use App\Livewire\Pages\Events;
use App\Livewire\Pages\GovernorNote;
use App\Livewire\Pages\NewsAndSpeeches;
use App\Livewire\Pages\NewsAndSpeechesDetails;
use App\Livewire\Pages\ProjectDetails;
use App\Livewire\Pages\Projects;
use App\Livewire\Pages\PublicServiceBoard;
use App\Livewire\Pages\Tenders;
use App\Livewire\Pages\TheExecutive;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);
Route::get('/contact', Contact::class)->name('contact');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/project/details', ProjectDetails::class)->name('project.details');
Route::get('/departments', Departments::class)->name('departments');
Route::get('/department/details', DepartmentDetails::class)->name('department.details');
Route::prefix('/about')->group(function () {
    Route::get('/busia-county', AboutCounty::class)->name('about');
    Route::get('/governors-note', GovernorNote::class)->name('governors.note');
    Route::get('/county-executive', TheExecutive::class)->name('executive');
    Route::get('/chief-officers', ChiefOfficers::class)->name('chief.officers');
    Route::get('public-service', PublicServiceBoard::class)->name('public.service');
});


Route::prefix('resources')->group(function () {
    Route::get('/downloads', Downloads::class)->name('downloads');
    Route::get('/news-and-spechees', NewsAndSpeeches::class)->name('news.speeches');
    Route::get('/news/details', NewsAndSpeechesDetails::class)->name('news.speeches.details');
    Route::get('/events', Events::class)->name('events');
    Route::get('/event/details', EventDetails::class)->name('event.details');
    Route::get('/tenders', Tenders::class)->name('tenders');
    Route::get('/budgets', Budget::class)->name('budget');
});








// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
