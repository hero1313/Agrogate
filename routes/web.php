<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('website.components.main');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



// for website -----------------------------------------------------------------------------------------------------
// Route::get('/', [MainController::class, 'index'])->name('website.index');
Route::get('/about', [MainController::class, 'about'])->name('website.about');
Route::get('/hotels', [MainController::class, 'hotels'])->name('website.hotels');
Route::get('/hotel/{id}', [MainController::class, 'showHotel'])->name('website.hotelshow.');
Route::get('/company-register', [MainController::class, 'storeCompany'])->name('website.companystore.');

// contact
Route::get('/contact', [ContactController::class, 'contact'])->name('website.contact');
Route::post('/contact', [ContactController::class, 'storeContact'])->name('contact.contactstore.');

// booking
Route::post('/booking/hotel/{id}', [RoomBookingController::class, 'store'])->name('booking.store');





// for company --------------------------------------------------------------------------------------------------
Route::get('/company/dashboard', [CompanyController::class, 'index'])->name('company.index');

// profile
Route::get('/company/profile', [ProfileController::class, 'index'])->name('company.profile.index');
Route::put('/company/edit/profile', [ProfileController::class, 'update'])->name('company.profile.update');

// hotels
Route::get('/company/hotels', [HotelController::class, 'index'])->name('company.hotel.index');
Route::post('/company/hotels/store', [HotelController::class, 'store'])->name('company.hotel.indexe');
Route::put('/company/hotels/{id}/update', [HotelController::class, 'update'])->name('company.hotel.index');
Route::delete('/company/hotels/{id}/destroy', [HotelController::class, 'destroy'])->name('company.hotel.index');

// bookings
Route::get('/company/bookings', [BookingController::class, 'index'])->name('company.booking.index');
Route::post('/company/bookings/store', [BookingController::class, 'store'])->name('company.booking.index');
Route::put('/company/bookings/{id}/update', [BookingController::class, 'update'])->name('company.booking.index');
Route::delete('/company/bookings/{id}/destroy', [BookingController::class, 'destroy'])->name('company.booking.index');

// rooms
Route::get('/company/rooms', [RoomController::class, 'index'])->name('company.room.index');
Route::post('/company/rooms/store', [RoomController::class, 'store'])->name('company.room.index');
Route::put('/company/rooms/{id}/update', [RoomController::class, 'update'])->name('company.room.index');
Route::delete('/company/rooms/{id}/destroy', [RoomController::class, 'destroy'])->name('company.room.index');

// services
Route::get('/company/services', [ServiceController::class, 'index'])->name('company.service.index');
Route::post('/company/services/store', [ServiceController::class, 'store'])->name('company.service.index');
Route::put('/company/services/{id}/update', [ServiceController::class, 'update'])->name('company.service.index');
Route::delete('/company/services/{id}/destroy', [ServiceController::class, 'destroy'])->name('company.service.index');


// for admin -------------------------------------------------------------------------------------------------------------
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/bookings', [AdminController::class, 'indexBooking'])->name('admin.booking.index');


// companies
Route::get('/admin/companies', [AdminController::class, 'indexCompany'])->name('admin.company.index');
Route::put('/admin/companies/{id}/update', [AdminController::class, 'updateCompany'])->name('admin.company.index');
Route::delete('/admin/companies/{id}/destroy', [AdminController::class, 'destroyCompany'])->name('admin.company.index');

// hotels
Route::get('/admin/hotels', [AdminController::class, 'indexHotel'])->name('admin.hotel.index');
Route::put('/admin/hotels/{id}/update', [AdminController::class, 'updateHotel'])->name('admin.hotel.index');
Route::delete('/admin/hotels/{id}/destroy', [AdminController::class, 'destroyHotel'])->name('admin.hotel.index');

// services
Route::get('/admin/services', [AdminController::class, 'indexService'])->name('admin.service.index');
Route::put('/admin/services/{id}/update', [AdminController::class, 'updateService'])->name('admin.service.index');
Route::delete('/admin/services/{id}/destroy', [AdminController::class, 'destroyService'])->name('admin.service.index');





