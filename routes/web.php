<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Http;
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

Route::group([
    // 'middleware' => ['']
], function () {
    Route::post('upload-file', [App\Http\Controllers\UploadFileController::class, 'upload'])->name('upload.file');
});
Route::any('admin/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => [
    'auth.admin'
]], function () {
    Route::any("clear-cache", function () {
        Cache::flush();
        Cache::store(env("CONFIG_CACHE_MODEL", "file"))->flush();
        \ResponseCache::clear();
        return redirect()->back();
    })->name('clear.cache');

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('category-game',  [App\Http\Controllers\Admin\CategoryController::class, 'game'])->name('category.game');
    Route::get('category-post',  [App\Http\Controllers\Admin\CategoryController::class, 'post'])->name('category.post');
    Route::resource('category',  App\Http\Controllers\Admin\CategoryController::class)->except('index');

    Route::get('drag-game',  [App\Http\Controllers\Admin\DragController::class, 'game'])->name('drag.game');
    Route::get('drag-category',  [App\Http\Controllers\Admin\DragController::class, 'category'])->name('drag.category');

    Route::get('game',  [App\Http\Controllers\Admin\GameController::class, 'game'])->name('game');
    Route::get('app',  [App\Http\Controllers\Admin\GameController::class, 'app'])->name('app');
    Route::resource('games',  App\Http\Controllers\Admin\GameController::class)->except('index');
    Route::resource('tag',  App\Http\Controllers\Admin\TagsController::class);
    Route::resource('post',  App\Http\Controllers\Admin\PostController::class);
    Route::resource('menu',  App\Http\Controllers\Admin\MenuController::class);
    Route::resource('redirect',  App\Http\Controllers\Admin\RedirectController::class);
    Route::resource('page',  App\Http\Controllers\Admin\PageController::class);
    Route::resource('drag',  App\Http\Controllers\Admin\DragController::class)->only(['store']);
    Route::any('setting', [App\Http\Controllers\Admin\SettingController::class, 'setting'])->name('setting');
    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function () {
        Route::get('/game', [App\Http\Controllers\Admin\GameController::class, 'ajax_load_data']);
        Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'ajax_load_data']);
        Route::get('/redirect', [App\Http\Controllers\Admin\RedirectController::class, 'ajax_load_data']);
        Route::get('/page', [App\Http\Controllers\Admin\PageController::class, 'ajax_load_data']);
        Route::get('/tag', [App\Http\Controllers\Admin\TagsController::class, 'ajax_load_data']);
        Route::get('/post', [App\Http\Controllers\Admin\PostController::class, 'ajax_load_data']);
        Route::get('/menu', [App\Http\Controllers\Admin\MenuController::class, 'ajax_load_data']);
        Route::get('list-drag',  [App\Http\Controllers\Admin\DragController::class, 'ajax_load_data']);
    });
    Route::get('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
});


Route::get('/sitemap_news.xml', function () {
    $posts =  \App\Models\Page::where([
        'is_status' => 1,
    ])->orderBy('updated_at', 'desc')->limit(100)->offset(0)->get();
    return response()->view('front_end.sitemap.sitemap_new', ['data' => $posts])->header('Content-Type', 'text/xml');
});
Route::get('rss-google-news.rss', function () {
    $posts =  \App\Models\Post::where([
        'is_status' => 1,
    ])->orderBy('updated_at', 'desc')->limit(100)->offset(0)->get();
    return response()->view('front_end.sitemap.rss', ['data' => $posts])->header('Content-Type', 'text/xml');
});


Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function () {
});
Route::group([
    'middleware' => ['redirect_301']
], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('homepage')->middleware('cacheResponse:86400'); 
    Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'page'])->name('page')->where(['slug' => '[a-z0-9-_]+'])->middleware('cacheResponse:86400'); 
});
// Route::get('{slug}.html', [App\Http\Controllers\HomeController::class, 'page'])->name('page')->where(['slug' => '[a-z0-9-_]+']);
// Route::get('search', [App\Http\Controllers\HomeController::class, 'search'])->name('search')->middleware('doNotCacheResponse');
// Route::get('{slug}-g{id}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail.game')->where(['slug' => '[a-z0-9-_]+', 'id' => '[0-9]+']);
// // Route::get('{slug}/history/{code}', [App\Http\Controllers\HomeController::class, 'old_version'])->name('old_version.game')->where(['slug' => '[a-z0-9-_]+', 'code' => '[a-z0-9-_]+']);

// Route::get('{slug}', [App\Http\Controllers\HomeController::class, 'category_game'])->name('category.game')->where(['slug' => '[a-z0-9-_]+', 'id' => '[0-9]+']);
