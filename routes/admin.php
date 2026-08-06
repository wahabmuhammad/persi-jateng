<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TrainingController;
use App\Http\Controllers\Admin\FigureController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/api/statistics', [DashboardController::class, 'statistics'])->name('api.statistics');
    Route::get('/api/recent-activities', [DashboardController::class, 'recentActivities'])->name('api.recent-activities');

    // Articles
    Route::resource('articles', ArticleController::class);
    Route::post('/articles/bulk-delete', [ArticleController::class, 'bulkDelete'])->name('articles.bulk-delete');
    Route::get('/articles/search', [ArticleController::class, 'search'])->name('articles.search');
    Route::post('/articles/toggle-publish/{id}', [ArticleController::class, 'togglePublish'])->name('articles.toggle-publish');

    // Events
    Route::resource('events', EventController::class);
    Route::post('/events/bulk-delete', [EventController::class, 'bulkDelete'])->name('events.bulk-delete');
    Route::get('/events/search', [EventController::class, 'search'])->name('events.search');
    Route::post('/events/toggle-publish/{id}', [EventController::class, 'togglePublish'])->name('events.toggle-publish');

    // Trainings
    Route::resource('trainings', TrainingController::class);
    Route::post('/trainings/bulk-delete', [TrainingController::class, 'bulkDelete'])->name('trainings.bulk-delete');
    Route::get('/trainings/search', [TrainingController::class, 'search'])->name('trainings.search');
    Route::get('/trainings/{id}/registrations', [TrainingController::class, 'registrations'])->name('trainings.registrations');
    Route::post('/trainings/registrations/{id}/status', [TrainingController::class, 'updateRegistrationStatus'])->name('trainings.update-registration');

    // Figures
    Route::resource('figures', FigureController::class);
    Route::post('/figures/toggle-active/{id}', [FigureController::class, 'toggleActive'])->name('figures.toggle-active');
    Route::post('/figures/reorder', [FigureController::class, 'reorder'])->name('figures.reorder');
    Route::get('/figures/search', [FigureController::class, 'search'])->name('figures.search');

    // Categories
    Route::resource('categories', CategoryController::class);
    Route::post('/categories/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('categories.bulk-delete');
    Route::post('/categories/toggle-active/{id}', [CategoryController::class, 'toggleActive'])->name('categories.toggle-active');

    // Users
    Route::resource('users', UserController::class);
    Route::post('/users/toggle-active/{id}', [UserController::class, 'toggleActive'])->name('users.toggle-active');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
});