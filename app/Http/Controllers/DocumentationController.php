<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;

class DocumentationController extends Controller
{
    public function __construct(protected Documentation $docs)
    {
    }

    public function landing()
    {
        $stars = Cache::remember('github_stars', now()->addHours(2), function () {
            $package = Http::timeout(5)->get('https://packagist.org/packages/botman/botman.json')->json();

            return Arr::get($package, 'package.github_stars');
        });

        return view('landing')->with('stars', $stars);
    }

    public function show($version = null, $page = null)
    {
        $version ??= config('botman.default_version');

        if (is_null($page)) {
            $page = $version;

            $version = config('botman.default_version');
            $path = resource_path('docs/'.$version.'/'.$page.'.md');
            if (File::exists($path)) {
                return redirect('/'.$version.'/'.$page);
            } else {
                return redirect('/'.$version.'/welcome');
            }
        }

        if (! $this->isVersion($version)) {
            return redirect('/master/welcome', 301);
        }

        if (! defined('CURRENT_VERSION')) {
            define('CURRENT_VERSION', $version);
        }

        $path = base_path('resources/docs/'.$version.'/'.$page.'.md');
        if (File::exists($path)) {
            $content = markdown(File::get($path));
            $title = (new Crawler($content))->filterXPath('//h1');

            return view('docs', [
                'index' => $this->docs->getIndex($version),
                'currentVersion' => $version,
                'page' => $page,
                'documentation' => $this->docs->getContent($version, $page),
                'title' => count($title) ? $title->text() : null,
            ]);
        }

        return response()->view('errors.404', [
            'index' => $this->docs->getIndex($version),
            'currentVersion' => $version,
            'title' => null,
        ], 404);
    }

    /**
     * Determine if the given URL segment is a valid version.
     */
    protected function isVersion($version): bool
    {
        return in_array($version, config('botman.available_versions'));
    }
}
