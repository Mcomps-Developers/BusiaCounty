<?php

use App\Http\Controllers\DailyParkingPayment;
use App\Http\Controllers\IDVerificationController;
use App\Http\Controllers\SaveTransaction;
use App\Livewire\Account\AccountDashboard;
use App\Livewire\Account\AddBusiness;
use App\Livewire\Account\AllParking;
use App\Livewire\Account\ManageBusiness;
use App\Livewire\Account\Parking;
use App\Livewire\Account\ParkingDetails;
use App\Livewire\Account\PayDailyParking;
use App\Livewire\Account\Transactions;
use App\Livewire\HomeComponent;
use App\Livewire\Pages\AboutCounty;
use App\Livewire\Pages\Budget;
use App\Livewire\Pages\ChiefOfficers;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\DepartmentDetails;
use App\Livewire\Pages\Departments;
use App\Livewire\Pages\Destination;
use App\Livewire\Pages\Downloads;
use App\Livewire\Pages\EServices;
use App\Livewire\Pages\EventDetails;
use App\Livewire\Pages\Events;
use App\Livewire\Pages\GovernorNote;
use App\Livewire\Pages\InvestorGuide;
use App\Livewire\Pages\JobDetails;
use App\Livewire\Pages\Jobs;
use App\Livewire\Pages\Municipality;
use App\Livewire\Pages\NewsAndSpeeches;
use App\Livewire\Pages\NewsAndSpeechesDetails;
use App\Livewire\Pages\ProjectDetails;
use App\Livewire\Pages\Projects;
use App\Livewire\Pages\PublicServiceBoard;
use App\Livewire\Pages\ServiceDetails;
use App\Livewire\Pages\Subcounties;
use App\Livewire\Pages\SubcountyDetails;
use App\Livewire\Pages\Tenders;
use App\Livewire\Pages\TheExecutive;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class);
Route::get('/contact', Contact::class)->name('contact');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/project/details', ProjectDetails::class)->name('project.details');
Route::get('/departments', Departments::class)->name('departments');
Route::get('/department/details', DepartmentDetails::class)->name('department.details');
Route::get('/investors-guide', InvestorGuide::class)->name('investor');
Route::get('/tourism/destination', Destination::class)->name('destination');
Route::get('/career-center', Jobs::class)->name('jobs');
Route::get('/job/details', JobDetails::class)->name('job.details');

Route::prefix('e-services')->group(function () {
    Route::get('/services', EServices::class)->name('eservices');
    Route::get('/service/unified-license', ServiceDetails::class)->name('service.details');
    Route::get('/service/parking', ParkingDetails::class)->name('parking.details');
});

Route::prefix('/about')->group(function () {
    Route::get('/busia-county', AboutCounty::class)->name('about');
    Route::get('/governors-note', GovernorNote::class)->name('governors.note');
    Route::get('/county-executive', TheExecutive::class)->name('executive');
    Route::get('/chief-officers', ChiefOfficers::class)->name('chief.officers');
    Route::get('public-service', PublicServiceBoard::class)->name('public.service');
    Route::get('/sub-counties', Subcounties::class)->name('subcounties');
    Route::get('/subcounty/details', SubcountyDetails::class)->name('subcounty.details');

    Route::prefix('/municipality')->group(function () {
        Route::get('/municipality-name', Municipality::class)->name('municipality');
    });
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

Route::middleware('auth')->group(function () {
    Route::get('/account', AccountDashboard::class)->name('dashboard');
    Route::get('/add-business', AddBusiness::class)->name('business.add');
    Route::get('/transactions', Transactions::class)->name('transactions');
    Route::get('/manage/{reference}', ManageBusiness::class)->name('business.manage');
    Route::get('/my/parking',AllParking::class)->name('parking');
    Route::get('/parking/daily', Parking::class)->name('daily.parking');
    Route::get('/daily-parking/{sticker}/payment',PayDailyParking::class)->name('daily.parking.pay');
});

Route::post('/verify-id', [IDVerificationController::class, 'verify'])->name('verify-id');
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {
    Route::post('/callback-url', [SaveTransaction::class, 'saveTransaction'])->name('save.transaction');
    Route::post('/daily-parking/callback', [DailyParkingPayment::class, 'saveTransaction'])->name('save.transaction');
});
