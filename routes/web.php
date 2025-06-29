<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Livewire\HomePage;
use App\Livewire\AboutPage;
use App\Livewire\ServicesPage;
use App\Livewire\PortfolioPage;
use App\Livewire\TeamPage;
use App\Livewire\TestimonialsPage;
use App\Livewire\BlogPage;
use App\Livewire\BlogPost;
use App\Livewire\ContactPage;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});


Route::redirect('/login', '/error');
Route::redirect('/register', '/error');
Route::redirect('/password/reset', '/error');
Route::redirect('/password/forgot', '/error');



Route::get('error', function () {
    return view('errors.404');
})->name('error');


Route::get('/',[DashboardController::class,'index'])->name('home'); //done
Route::get('/about',[DashboardController::class,'aboutPage'])->name('about'); //done
Route::get('/services',[DashboardController::class,'servicePage'])->name('services');
Route::get('/contact',[DashboardController::class,'contactPage'])->name('contact'); //done
Route::get('/team',[DashboardController::class,'teamPage'])->name('team'); //done
Route::get('testimonials',[DashboardController::class,'testmonialPage'])->name('testimonials'); //done
Route::get('/portfolio',[DashboardController::class,'portfolioPage'])->name('portfolio'); //done
Route::get('/blog',[DashboardController::class,'blogPage'])->name('blog'); //done
Route::get('/blog/{slug}',[DashboardController::class,'blogPostPage'])->name('blog.post');