<?php

use Illuminate\Support\Facades\Route;
use Ophim\ThemeHoly\Controllers\ThemeHolyController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
    ),
], function () {
    Route::get('/', [ThemeHolyController::class, 'index']);

    Route::get(setting('site_routes_category', '/the-loai/{category}'), [ThemeHolyController::class, 'getMovieOfCategory'])
        ->where(['category' => '.+', 'id' => '[0-9]+'])
        ->name('categories.movies.index');

    Route::get(setting('site_routes_region', '/quoc-gia/{region}'), [ThemeHolyController::class, 'getMovieOfRegion'])
        ->where(['region' => '.+', 'id' => '[0-9]+'])
        ->name('regions.movies.index');

    Route::get(setting('site_routes_tag', '/tu-khoa/{tag}'), [ThemeHolyController::class, 'getMovieOfTag'])
        ->where(['tag' => '.+', 'id' => '[0-9]+'])
        ->name('tags.movies.index');

    Route::get(setting('site_routes_types', '/danh-sach/{type}'), [ThemeHolyController::class, 'getMovieOfType'])
        ->where(['type' => '.+', 'id' => '[0-9]+'])
        ->name('types.movies.index');

    Route::get(setting('site_routes_actors', '/dien-vien/{actor}'), [ThemeHolyController::class, 'getMovieOfActor'])
        ->where(['actor' => '.+', 'id' => '[0-9]+'])
        ->name('actors.movies.index');

    Route::get(setting('site_routes_directors', '/dao-dien/{director}'), [ThemeHolyController::class, 'getMovieOfDirector'])
        ->where(['director' => '.+', 'id' => '[0-9]+'])
        ->name('directors.movies.index');

    Route::get(setting('site_routes_episode', '/phim/{movie}/{episode}-{id}'), [ThemeHolyController::class, 'getEpisode'])
        ->where(['movie' => '.+', 'movie_id' => '[0-9]+', 'episode' => '.+', 'id' => '[0-9]+'])
        ->name('episodes.show');

    Route::post(sprintf('/%s/{movie}/{episode}/report', config('ophim.routes.movie', 'phim')), [ThemeHolyController::class, 'reportEpisode'])->name('episodes.report');
    Route::post(sprintf('/%s/{movie}/rate', config('ophim.routes.movie', 'phim')), [ThemeHolyController::class, 'rateMovie'])->name('movie.rating');

    Route::get(setting('site_routes_movie', '/phim/{movie}'), [ThemeHolyController::class, 'getMovieOverview'])
        ->where(['movie' => '.+', 'id' => '[0-9]+'])
        ->name('movies.show');

});
