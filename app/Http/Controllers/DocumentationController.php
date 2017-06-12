<?php

namespace App\Http\Controllers;

use File;
use Cache;
use App\Documentation;
use Symfony\Component\DomCrawler\Crawler;

class DocumentationController extends Controller
{
    /**
     * The documentation repository.
     *
     * @var Documentation
     */
    protected $docs;
    /**
     * Create a new controller instance.
     *
     * @param  Documentation  $docs
     * @return void
     */
    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }

    public function landing()
    {
        $stars = Cache::remember('github_stars', 120, function() {
            $stars = json_decode(file_get_contents('https://packagist.org/packages/mpociot/botman.json'),true);
            return array_get($stars, 'package.github_stars');
        });

        return view('landing')->with('stars', $stars);
    }

    public function show($version = null, $page = null)
    {
        if (is_null($version)) {
            $version = config('botman.default_version');
        }

        if (is_null($page)) {
            $page = $version;
            $version = config('botman.default_version');
            $path = base_path('resources/docs/'.$version.'/'.$page.'.md');
            if (File::exists($path)) {
                return redirect('/'.$version.'/'.$page, 301);
            } else {
                return redirect('/'.$version.'/installation', 301);
            }
        }

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
                'index' => $this->docs->getIndex($version),
                'currentVersion' => $version,
                'page' => $page,
	    		'documentation' => $this->docs->getContent($version, $page),
	    		'title' => count($title) ? $title->text() : null
    		]);
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
        return in_array($version, config('botman.available_versions'));
    }
}
