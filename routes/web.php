<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,DashboardController,ZoomController,MemberController,MeetingController};
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//authentication
Route::get('/login',[AuthController::class,'create'])->name('login');
Route::post('/login',[AuthController::class,'store'])->name('login.store');
Route::post('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',fn()=>inertia('Auth/Register'))->name('register')->breadcrumbs('User Registration');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])
         ->name('dashboard')
         ->breadcrumbs('dashboard');
    Route::get('/',[DashboardController::class,'index']);

    Route::get('members/export', [MemberController::class, 'export'])->name('members.export');
    Route::post('members/drop',[MemberController::class,'destroy'])->name('members.drop');
    Route::post('members/import',[MemberController::class,'memberUpload'])->name('members.import');
    Route::get('members/list',[MemberController::class,'list'])->name('members.list');
    Route::get('members/create',[MemberController::class,'create'])->name('members.create')->breadcrumbs('Create');
    // Route::get('members/show',[MemberController::class,'create'])->name('members.create')->breadcrumbs('Create');
    Route::resource('members', MemberController::class)
        ->breadcrumbs([
        'index' => 'Member',
        'create' => 'New member',
        'show' => fn(App\Models\Member $member) => $member->name,
        'edit' => 'Edit',
        ]);

    Route::resource('meetings', MeetingController::class)
        ->breadcrumbs([
        'index' => 'Meeting',
        'create' => 'New Meeting',
        'show' => fn(App\Models\Meeting $Meeting) => $meeting->name,
        'edit' => 'Edit',
        ]);



});


// Route::get('/',fn()=>ZoomController::list_meetings());


