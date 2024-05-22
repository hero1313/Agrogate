<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Company\ProfileController;
use App\Http\Controllers\Company\RoomController;
use App\Http\Controllers\Company\ServiceController;
use App\Http\Controllers\Company\BookingController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Company\HotelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('website.index');

});



// for website -----------------------------------------------------------------------------------------------------
Route::get('/', [MainController::class, 'index'])->name('website.index');
Route::get('/about', [MainController::class, 'about'])->name('website.about');
Route::get('/hotels', [MainController::class, 'hotels'])->name('website.hotels');
Route::get('/hotel/{id}', [MainController::class, 'showHotel'])->name('website.hotel.show');
Route::get('/company-register', [MainController::class, 'storeCompany'])->name('website.company.store');
Route::get('/blog', [MainController::class, 'blog'])->name('website.blog');
Route::get('/faq', [MainController::class, 'faq'])->name('website.faq');

// contact
Route::get('/contact', [MainController::class, 'contact'])->name('website.contact');
Route::post('/contact', [MainController::class, 'storeContact'])->name('contact.contact.store.');

// booking
Route::post('/booking/hotel/{id}', [BookingController::class, 'store'])->name('booking.store');



// for company --------------------------------------------------------------------------------------------------
Route::middleware(['auth', 'company'])->group(function () {
    Route::get('/company/dashboard', [CompanyController::class, 'index'])->name('company.index');

    // profile
    Route::get('/company/profile', [ProfileController::class, 'index'])->name('company.profile.index');
    Route::put('/company/edit/profile', [ProfileController::class, 'update'])->name('company.profile.update');

    // hotels
    Route::get('/company/hotels', [HotelController::class, 'index'])->name('company.hotel.index');
    Route::get('/company/hotels/{id}', [HotelController::class, 'show'])->name('company.hotel.show');
    Route::post('/company/hotels/store', [HotelController::class, 'store'])->name('company.hotel.store');
    Route::put('/company/hotels/{id}/update', [HotelController::class, 'update'])->name('company.hotel.update');
    Route::delete('/company/hotels/{id}/destroy', [HotelController::class, 'destroy'])->name('company.hotel.destroy');

    // bookings
    Route::get('/company/bookings', [BookingController::class, 'index'])->name('company.booking.index');
    Route::put('/company/bookings/{id}/update', [BookingController::class, 'update'])->name('company.booking.update');
    Route::delete('/company/bookings/{id}/destroy', [BookingController::class, 'destroy'])->name('company.booking.destroy');

    // rooms
    Route::post('/company/rooms/store', [RoomController::class, 'store'])->name('company.room.store');
    Route::put('/company/rooms/{id}/update', [RoomController::class, 'update'])->name('company.room.update');
    Route::delete('/company/rooms/{id}/destroy', [RoomController::class, 'destroy'])->name('company.room.destroy');

    // services
    Route::get('/company/services', [ServiceController::class, 'index'])->name('company.service.index');
    Route::post('/company/services/store', [ServiceController::class, 'store'])->name('company.service.store');
    Route::put('/company/services/{id}/update', [ServiceController::class, 'update'])->name('company.service.update');
    Route::delete('/company/services/{id}/destroy', [ServiceController::class, 'destroy'])->name('company.service.destroy');
});



// for admin -------------------------------------------------------------------------------------------------------------
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/bookings', [AdminController::class, 'indexBooking'])->name('admin.booking.index');


    // companies
    Route::get('/admin/companies', [AdminController::class, 'indexCompany'])->name('admin.company.index');
    Route::put('/admin/companies/{id}/update', [AdminController::class, 'updateCompany'])->name('admin.company.update');
    Route::delete('/admin/companies/{id}/destroy', [AdminController::class, 'destroyCompany'])->name('admin.company.destroy');

    // hotels
    Route::get('/admin/hotels', [AdminController::class, 'indexHotel'])->name('admin.hotel.index');
    Route::get('/admin/hotels/{id}', [AdminController::class, 'showHotel'])->name('admin.hotel.show');
    Route::put('/admin/hotels/{id}/update', [AdminController::class, 'updateHotel'])->name('admin.hotel.update');
    Route::delete('/admin/hotels/{id}/destroy', [AdminController::class, 'destroyHotel'])->name('admin.hotel.destroy');

    // Bookings
    Route::get('/admin/bookings', [AdminController::class, 'indexBooking'])->name('admin.booking.index');
    Route::put('/admin/bookings/{id}/update', [AdminController::class, 'updateBooking'])->name('admin.booking.update');
    Route::delete('/admin/bookings/{id}/destroy', [AdminController::class, 'destroyBooking'])->name('admin.booking.destroy');
});





