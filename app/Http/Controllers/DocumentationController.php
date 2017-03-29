<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class DocumentationController extends Controller
{
    public function show($version, $page = 'installation')
    {
        if (! $this->isVersion($version)) {
            return redirect('/master/installation', 301);
        }

        if (! defined('CURRENT_VERSION')) {
            define('CURRENT_VERSION', $version);
        }

    	$path = base_path('resources/docs/'.$version.'/'.$page.'.md');
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

    /**
     * Determine if the given URL segment is a valid version.
     *
     * @param  string  $version
     * @return bool
     */
    protected function isVersion($version)
    {
        return in_array($version, ['master', '1.5']);
    }
}
