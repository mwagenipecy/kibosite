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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




// Route::get('/', HomePage::class)->name('home');
// Route::get('/about', AboutPage::class)->name('about');
// Route::get('/services', ServicesPage::class)->name('services');
// Route::get('/portfolio', PortfolioPage::class)->name('portfolio');
// Route::get('/team', TeamPage::class)->name('team');
// Route::get('/testimonials', TestimonialsPage::class)->name('testimonials');
// Route::get('/blog', BlogPage::class)->name('blog');
// Route::get('/blog/{slug}', BlogPost::class)->name('blog.post');
// Route::get('/contact', ContactPage::class)->name('contact');




Route::get('/',[DashboardController::class,'index'])->name('home');
Route::get('/about',[DashboardController::class,'aboutPage'])->name('about');
Route::get('/services',[DashboardController::class,'servicePage'])->name('services');
Route::get('/contact',[DashboardController::class,'contactPage'])->name('contact');
Route::get('/team',[DashboardController::class,'teamPage'])->name('team');
Route::get('testimonials',[DashboardController::class,'testmonialPage'])->name('testimonials');
Route::get('/portfolio',[DashboardController::class,'portfolioPage'])->name('portfolio');
Route::get('/blog',[DashboardController::class,'blogPage'])->name('blog');
Route::get('/blog/{slug}',[DashboardController::class,'blogPost'])->name('blog.post');