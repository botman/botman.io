<?php

use App\Http\Controllers\BotManController;
use App\Http\Controllers\DocumentationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DocumentationController::class, 'landing']);
Route::any('/botman', BotManController::class);
Route::view('/imprint', 'imprint', ['title' => 'Imprint']);
Route::view('/partners', 'partner', ['title' => 'Partners']);

// The BotMan installer (`botman new`) downloads http://botman.io/studio/latest.zip; the archives live in object storage.
Route::get('/studio/{file}', fn (string $file) => redirect()->away(rtrim(config('botman.studio_download_url'), '/').'/studio/'.$file))
    ->where('file', '[A-Za-z0-9_.-]+\.zip');

Route::get('/{version?}/{page?}', [DocumentationController::class, 'show']);
