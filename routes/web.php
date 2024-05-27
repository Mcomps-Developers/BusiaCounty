<?php

use App\Livewire\HomeComponent;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Downloads;
use App\Livewire\Pages\EventDetails;
use App\Livewire\Pages\Events;
use App\Livewire\Pages\NewsAndSpeeches;
use App\Livewire\Pages\NewsAndSpeechesDetails;
use App\Livewire\Pages\ProjectDetails;
use App\Livewire\Pages\Projects;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);
Route::get('/contact', Contact::class)->name('contact');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/project/details',ProjectDetails::class)->name('project.details');
Route::prefix('resources')->group(function () {
    Route::get('/downloads', Downloads::class)->name('downloads');
    Route::get('/news-and-spechees', NewsAndSpeeches::class)->name('news.speeches');
    Route::get('/news/details', NewsAndSpeechesDetails::class)->name('news.speeches.details');
    Route::get('/events', Events::class)->name('events');
    Route::get('/event/details', EventDetails::class)->name('event.details');
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
