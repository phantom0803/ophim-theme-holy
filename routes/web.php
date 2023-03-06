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
    Route::get(sprintf('/%s/{category}', config('ophim.routes.category', 'the-loai')), [ThemeHolyController::class, 'getMovieOfCategory'])->name('categories.movies.index');
    Route::get(sprintf('/%s/{actor}', config('ophim.routes.actors', 'dien-vien')), [ThemeHolyController::class, 'getMovieOfActor'])->name('actors.movies.index');
    Route::get(sprintf('/%s/{director}', config('ophim.routes.directors', 'dao-dien')), [ThemeHolyController::class, 'getMovieOfDirector'])->name('directors.movies.index');
    Route::get(sprintf('/%s/{tag}', config('ophim.routes.tags', 'tu-khoa')), [ThemeHolyController::class, 'getMovieOfTag'])->name('tags.movies.index');
    Route::get(sprintf('/%s/{region}', config('ophim.routes.region', 'quoc-gia')), [ThemeHolyController::class, 'getMovieOfRegion'])->name('regions.movies.index');
    Route::get(sprintf('/%s/{type}', config('ophim.routes.types', 'danh-sach')), [ThemeHolyController::class, 'getMovieOfType'])->name('types.movies.index');
    Route::get(sprintf('/%s/{movie}', config('ophim.routes.movie', 'phim')), [ThemeHolyController::class, 'getMovieOverview'])->name('movies.show');
    Route::get(sprintf('/%s/{movie}/{episode}', config('ophim.routes.movie', 'phim')), [ThemeHolyController::class, 'getEpisode'])->name('episodes.show');
    Route::post(sprintf('/%s/{movie}/{episode}/report', config('ophim.routes.movie', 'phim')), [ThemeHolyController::class, 'reportEpisode'])->name('episodes.report');
    Route::post(sprintf('/%s/{movie}/rate', config('ophim.routes.movie', 'phim')), [ThemeHolyController::class, 'rateMovie'])->name('movie.rating');
});
