<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProjectManageController;
use App\Http\Controllers\ProjectController;

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

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

    Route::get('/forgot-password', [\App\Http\Controllers\AuthController::class, 'forgotView'])->name('forgotView');
    Route::post('/forgot', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::get('/register-actor', [\App\Http\Controllers\AuthController::class, 'registerActor'])->name('registerActor');
});

Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contactUs'])->name('contactUs');
Route::get('/about-us', [\App\Http\Controllers\PagesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/how-it-works', [\App\Http\Controllers\PagesController::class, 'howWorks'])->name('howWorks');
Route::get('/services', [\App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/faq', [\App\Http\Controllers\PagesController::class, 'faq'])->name('faq');
Route::post('/contact-us', [\App\Http\Controllers\Mail\MailController::class, 'contactUs'])->name('contact-us');

Route::get('/actor-list', [ActorController::class, 'index'])->name('actorList');
Route::get('/fetch-actor', [ActorController::class, 'list'])->name('fetchActorList');
Route::get('/actors/filter', [ActorController::class, 'listByQuery']);
Route::get('/actor-list/{id}', [ActorController::class, 'show'])->name('actorProfile');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/chat', [ChatController::class, 'index'])->name('dashboard/chat');
    Route::post('/dashboard/chat/message', [ChatController::class, 'sendMessage'])->name('sendMessage');
    Route::post('/dashboard/chat/upload-file', [ChatController::class, 'uploadFile'])->name('uploadFile');
    // actor
    Route::get('/dashboard/actor-profile', [ActorController::class, 'profileSettingView'])->name('actorProfileSettingsView');
    Route::post('/dashboard/actor-profile', [ActorController::class, 'updateProfileSettings'])->name('actorProfileSettings');

    Route::get('/dashboard/actor-portfolio', [ActorController::class, 'portfolioSettingsView'])->name('actorPortfolioSettingsView');
    Route::post('/dashboard/actor-portfolio', [ActorController::class, 'updatePortfolioSettings'])->name('actorPortfolioSettings');
    Route::post('/dashboard/actor-portfolio/voice', [ActorController::class, 'uploadVoice'])->name('uploadVoice');
    Route::delete('/dashboard/actor-portfolio', [ActorController::class, 'deleteVoice'])->name('deleteVoice');

    // client
    Route::get('/dashboard/client-profile', [ClientController::class, 'profileSettingView'])->name('clientProfileSettingsView');
    Route::post('/dashboard/client-profile', [ClientController::class, 'updateProfileSettings'])->name('clientProfileSettings');

    // project
    Route::get('/projects/{actorId}', [ProjectController::class, 'index'])->name('createProjectView');
    Route::post('/projects/{actorId}', [ProjectController::class, 'store'])->name('createProject');
    Route::put('/projects/{contactProjectId}', [ProjectController::class, 'edit'])->name('updateProject');
    Route::get('/projects-overview', [ProjectOverviewController::class, 'index'])->name('projectOverview');
    Route::get('/projects-management/{projectId}', [ProjectManageController::class, 'index'])->name('projectManage');
    Route::post('/project/upload-file', [ProjectManageController::class, 'uploadProjectFile'])->name('uploadProjectFile');
    Route::post('/project/upload-edit-file/{projectId}', [ProjectManageController::class, 'uploadEditProjectFile'])->name('uploadEditProjectFile');
    Route::delete('/project/temp-attachment/{fileId}', [ProjectManageController::class, 'deleteTempProjectFile'])->name('deleteTempProjectFile');
    Route::delete('/project/attachment/{fileId}', [ProjectManageController::class, 'deleteProjectFile'])->name('deleteProjectFile');
});
