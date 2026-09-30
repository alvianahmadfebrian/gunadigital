<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InvitationController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialFaqController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/syarat-ketentuan', [PageController::class, 'terms'])->name('terms');
Route::get('/kebijakan-pengembalian-dana', [PageController::class, 'refund'])->name('refund');
Route::get('/kebijakan-privasi', [PageController::class, 'privacy'])->name('privacy');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::post('/kontak', [PageController::class, 'submitContact'])->middleware('throttle:contact')->name('contact.submit');

Route::prefix('cms-admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])
            ->middleware('throttle:login')
            ->name('login.submit');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::resource('websites', WebsiteController::class)->except(['create', 'show', 'edit']);

        Route::resource('invitations', InvitationController::class)->except(['create', 'show', 'edit']);

        Route::resource('portfolios', PortfolioController::class)->except(['create', 'show', 'edit']);

        Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
        Route::put('messages/{message}', [MessageController::class, 'update'])->name('messages.update');
        Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

        Route::resource('packages', PackageController::class)->except(['create', 'show', 'edit']);

        Route::get('testimonials-faq', [TestimonialFaqController::class, 'index'])->name('testimonials_faq.index');
        Route::post('testimonials', [TestimonialFaqController::class, 'storeTestimonial'])->name('testimonials.store');
        Route::put('testimonials/{testimonial}', [TestimonialFaqController::class, 'updateTestimonial'])->name('testimonials.update');
        Route::delete('testimonials/{testimonial}', [TestimonialFaqController::class, 'destroyTestimonial'])->name('testimonials.destroy');
        Route::post('faqs', [TestimonialFaqController::class, 'storeFaq'])->name('faqs.store');
        Route::put('faqs/{faq}', [TestimonialFaqController::class, 'updateFaq'])->name('faqs.update');
        Route::delete('faqs/{faq}', [TestimonialFaqController::class, 'destroyFaq'])->name('faqs.destroy');

        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::put('settings/profile', [SettingController::class, 'updateProfile'])->name('settings.profile');
        Route::put('settings/password', [SettingController::class, 'updatePassword'])->name('settings.password');
        Route::put('settings/site', [SettingController::class, 'updateSiteSettings'])->name('settings.site');
    });
});
