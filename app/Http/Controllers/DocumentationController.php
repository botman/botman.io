<?php

namespace App\Http\Controllers;

use File;
use App\Documentation;
use Illuminate\Http\Request;
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

    public function show($version = null, $page = null)
    {
        if (is_null($version)) {
            $version = config('botman.default_version');
        }

        if (is_null($page)) {
            $page = $version;
            $version = config('botman.default_version');
            return redirect('/'.$version.'/'.$page, 301);
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
        return in_array($version, config('botman.available_versions'));
    }
}
