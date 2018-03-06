<?php

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
use League\CommonMark\Converter;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use Webuni\CommonMark\TableExtension\TableExtension;

/**
 * Convert some text to Markdown...
 */
if (!function_exists('markdown')) {
    function markdown($text)
    {
        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new TableExtension());

        $converter = new Converter(new DocParser($environment), new HtmlRenderer($environment));

        return $converter->convertToHtml($text);
    }
}
Route::get('/', 'DocumentationController@landing');
Route::any('/botman', function() {
    app('botman')->listen();
});
Route::get('/imprint', function(){
    return view('imprint')->with('title', 'Imprint');
});
Route::get('/partners', function(){
    return view('partner')->with('title', 'Partners');
});

Route::get('/{version?}/{page?}', 'DocumentationController@show');
