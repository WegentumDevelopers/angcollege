<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

use App\Http\Controllers\OurteamController;

use App\Http\Controllers\EnquiryController;

use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\SubscribeController;

use App\Http\Controllers\ServiceController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\mainController;

use App\Http\Controllers\SettingController;

use App\Http\Controllers\ExpertController;

use App\Http\Controllers\AgentController;

use App\Http\Controllers\CeoController;

use App\Http\Controllers\PropertyController;

use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SubscribeUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'home']);
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog-list', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}', [FrontendController::class, 'blog'])->name('blog');
Route::get('/law', [FrontendController::class, 'law'])->name('law');
Route::get('/labs', [FrontendController::class, 'labs'])->name('labs');
Route::get('/library', [FrontendController::class, 'library'])->name('library');


Route::get('/course/{id}',[FrontendController::class, 'course']);
Route::post('/subscrib',[SubscribeUsController::class,'store'])->name('subscribe_store');
Route::post('/contact-request',[ContactController::class,'store'])->name('contact.store');



// Backend routes

Route::get('/adminlogin', [LoginController::class, 'page']);
Route::post('/adminlogin', [LoginController::class, 'authentic']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::group(['middleware' => ['adminpage'], 'prefix' => '/admin'], function () {
    Route::get('/dashboard', [mainController::class, 'main'])->name('dash');

    Route::resource('gallery', GalleryController::class);
    Route::resource('ourteam', OurteamController::class);
    Route::resource('enquiries', EnquiryController::class);
    Route::resource('testimonial', FeedbackController::class);
    Route::resource('subscribe', SubscribeController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('expert', ExpertController::class);
    Route::resource('agent', AgentController::class);
    Route::resource('ceo', CeoController::class);
    Route::resource('partner', PartnerController::class);
    Route::resource('property', PropertyController::class);
    Route::resource('about_us',AboutController::class);
    Route::resource('course',CourseController::class);

    Route::get('/blogs', [BlogController::class, 'index'])->name('blog.list');
    Route::get('/blogs-create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog-store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog-edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog-update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog-destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});
