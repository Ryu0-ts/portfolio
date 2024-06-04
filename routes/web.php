<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ManagementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::resource('portfolio',MainController::class);

//共通画面
Route::get('common', [PortfolioController::class,"common"]);

// ホーム
Route::get('portfolio',[PortfolioController::class,'index'])->name('portfolio.index');

//初めての方へ
Route::get('portfolio/about',[PortfolioController::class,'about'])->name('portfolio.about');

//保護犬を探す
Route::get('portfolio/search/dog',[PortfolioController::class,'search_dog'])->name('portfolio.search_dog');

//保護猫を探す
Route::get('portfolio/search/cat',[PortfolioController::class,'search_cat'])->name('portfolio.search_cat');

//詳細画面
Route::get('portfolio/search/show/{id}',[PortfolioController::class,'show'])->name('portfolio.show');

//お問い合わせ
Route::get('portofolip/contact',[PortfolioController::class,'contact'])->name('portfolio.contact');


//管理画面
Route::get('portfolio/management',[ManagementController::class,'index'])->name('management.index');

//一覧画面
Route::get('portfolio/management/show',[ManagementController::class,'list'])->name('management.list');

//詳細画面
Route::get('portfolio/management/show/{id}',[ManagementController::class,'show'])->name('management.show');

//追加画面
Route::get('portfolio/management/add',[ManagementController::class,'add'])->name('management.add');
Route::post('portfolio/management/store',[ManagementController::class,'store'])->name('management.store');

//編集画面
Route::get('portfolio/management/edit/{id}',[ManagementController::class,'edit'])->name('management.edit');
Route::post('portfolio/update/{id}',[ManagementController::class,'update'])->name('management.update');


// 削除画面
Route::get('portfolio/management/delete/{id}',[ManagementController::class,'delete'])->name('management.delete');



require __DIR__.'/auth.php';
