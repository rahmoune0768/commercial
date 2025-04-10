<?php
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\QuoteItemController;
use App\Http\Controllers\InvoiceItemController;
use App\Http\Controllers\LegalStatutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('documents', DocumentController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('products', ProductController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('reminders', ReminderController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('quotes', QuoteController::class);
   
    Route::resource('industries', IndustryController::class);
    Route::resource('invoices', InvoiceController::class);
    Route::resource('quote-items', QuoteItemController::class);
    Route::resource('invoice-items', InvoiceItemController::class);
    Route::resource('legal-statuts', LegalStatutController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 //settings
    Route::prefix('settings')->name('settings.')->group(function () {

    // Show the settings page (index)
    Route::get('/', [SettingController::class, 'index'])->name('index');

    // Show form to create a new setting (if applicable)
    Route::get('create', [SettingController::class, 'create'])->name('create');

    // Store a new setting
    Route::post('store', [SettingController::class, 'store'])->name('store');

    // Show form to edit a specific setting
    Route::get('edit/{setting}', [SettingController::class, 'edit'])->name('edit');

    // Update a specific setting
    Route::put('update/{setting}', [SettingController::class, 'update'])->name('update');

    // Delete a specific setting
    Route::delete('delete/{setting}', [SettingController::class, 'destroy'])->name('destroy');
});

});

require __DIR__.'/auth.php';
