<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	// profile admin
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
	// end

	// user-management admin
	Route::get('/user-management', function () {
		return view('laravel-examples/user-management');
	})->middleware('auth')->name('user-management');
	// end

	// tampilan crud beasiswa admin
	Route::get('tables', function () {
		return view('tables');
	})->name('tables');
	
	Route::get('tables', [BeasiswaController::class, 'tables'])->name('tables');
	// end

	// crud beasiswa admin
	Route::get('edit/{id}', [PublicController::class, 'edit'])->name('beasiswa.edit');
	Route::put('edit/{id}', [PublicController::class, 'update'])->name('beasiswa.update');
	Route::delete('delete/{id}', [PublicController::class, 'destroy'])->name('beasiswa.destroy');
	Route::delete('/beasiswa/{id}', [PublicController::class, 'destroy'])->name('beasiswa.destroy');
	// end

	// logout admin dan user
	Route::get('/logout', [SessionsController::class, 'destroy']);
	// end

	// login
	Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
	// end
});

// menuju halaman dashboard admin
Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware('role:admin')->name('dashboard');
// end
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('role:admin')->name('dashboard');

// menuju halaman register dan login
Route::get('/signup', function () {
	return view('auth.register');
});

Route::get('/login', function () {
	return view('auth/login');
})->name('login');
// end

// menuju halaman user
Route::get('/', [PublicController::class, 'awal'])->name('awal');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::middleware('auth')->get('/menu', [PublicController::class, 'menu'])->name('menu');
Route::get('/tips', [PublicController::class, 'tips'])->name('tips');
Route::get('/detail', [PublicController::class, 'detail'])->name('detail');
Route::get('/motivasi', [PublicController::class, 'motivasi'])->name('motivasi');
Route::middleware('auth')->get('/s1', [PublicController::class, 's1'])->name('s1');
Route::middleware('auth')->get('/s2', [PublicController::class, 's2'])->name('s2');
Route::middleware('auth')->get('/s3', [PublicController::class, 's3'])->name('s3');
Route::get('/detail-tips', [PublicController::class, 'detail_tips'])->name('detail-tips');
Route::get('/detail-motivasi', [PublicController::class, 'detail_motivasi'])->name('detail-motivasi');
Route::get('/detail-s1', [PublicController::class, 'detail_s1'])->name('detail-s1');
Route::get('/detail-s2', [PublicController::class, 'detail_s2'])->name('detail-s2');
Route::get('/detail-s3', [PublicController::class, 'detail_s3'])->name('detail-s3');
Route::get('/profile', [PublicController::class, 'profile'])->name('profile');
Route::get('/simpan', [PublicController::class, 'simpan'])->name('simpan');
Route::get('/add', [PublicController::class, 'add'])->name('add');
Route::get('/syarat', [PublicController::class, 'syarat'])->name('syarat');
Route::get('/kebijakan', [PublicController::class, 'kebijakan'])->name('kebijakan');
Route::get('/detail-tips2', [PublicController::class, 'detail_tips2'])->name('detail-tips2');
Route::get('/detail-tips3', [PublicController::class, 'detail_tips3'])->name('detail-tips3');
Route::get('/detail-tips4', [PublicController::class, 'detail_tips4'])->name('detail-tips4');
Route::get('/detail-motivasi2', [PublicController::class, 'detail_motivasi2'])->name('detail-motivasi2');
Route::get('/detail-motivasi3', [PublicController::class, 'detail_motivasi3'])->name('detail-motivasi3');
Route::get('/detail-motivasi4', [PublicController::class, 'detail_motivasi4'])->name('detail-motivasi4');
Route::get('/keep', [PublicController::class, 'keep'])->name('keep');
Route::put('/update/{id}', [PublicController::class, 'update'])->name('update');
// end

// detail beasiswa
Route::get('/detail/{id}', [PublicController::class, 'detail_beasiswa'])->name('detail');
// end

// add beasiswa
Route::get('/add', [BeasiswaController::class, 'create'])->name('beasiswa.create');
Route::post('/add', [BeasiswaController::class, 'store'])->name('beasiswa.store');
// end

// keep beasiswa

// end

// autentikasi login dan register
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
	return view('dashboard');
})->middleware('auth');
// end

// profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
// end

// sign in google
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('google.callback');
// end

// home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// end

// rating & commment
Route::middleware(['auth'])->group(function () {
    Route::post('/beasiswa/{beasiswa}/rate', [BeasiswaController::class, 'storeRating'])->name('beasiswa.rate');
    Route::post('/beasiswa/{beasiswa}/comment', [BeasiswaController::class, 'storeComment'])->name('beasiswa.comment');
});
// end

// bookmarks
Route::put('/beasiswa/{beasiswa}/save-bookmark', [BeasiswaController::class, 'saveBookmark'])->name('saveBookmark');
Route::get('/beasiswa/{beasiswa}/remove-bookmark', [BeasiswaController::class, 'removeBookmark'])->name('removeBookmark');
// end

// search
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
// end

