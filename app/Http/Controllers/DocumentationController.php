<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class DocumentationController extends Controller
{
    public function show($page = 'installation')
    {
    	$path = base_path('resources/docs/'.$page.'.md');
    	if (File::exists($path)) {
			$file = File::get($path);

			$content = markdown($file);
			$title = (new Crawler($content))->filterXPath('//h1');

	    	return view('docs', [
                'page' => $page,
	    		'documentation' => $content,
	    		'title' => count($title) ? $title->text() : null
    		])->with('documentation', markdown($file));
    	}
    	abort(404);
    }
}
