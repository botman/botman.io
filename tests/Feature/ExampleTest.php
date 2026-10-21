<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_landing_page_renders(): void
    {
        Http::fake(['packagist.org/*' => Http::response(['package' => ['github_stars' => 6000]])]);

        $this->get('/')
            ->assertOk()
            ->assertSee('BotMan')
            ->assertSee('6000');
    }

    public function test_docs_page_renders_markdown(): void
    {
        $this->get('/2.0/installation')->assertOk()->assertSeeHtml('<h1>');
    }

    public function test_unknown_version_redirects_to_master(): void
    {
        $this->get('/1.2/installation')->assertRedirect('/master/welcome');
    }

    public function test_missing_page_returns_404(): void
    {
        $this->get('/2.0/does-not-exist')->assertNotFound();
    }

    public function test_studio_archive_redirects_to_bucket(): void
    {
        config(['botman.studio_download_url' => 'https://bucket.example.com']);

        $this->get('/studio/latest.zip')->assertRedirect('https://bucket.example.com/studio/latest.zip');
    }

    public function test_botman_widget_answers(): void
    {
        // The web driver sends its JSON reply itself instead of returning a response.
        $this->expectOutputRegex('/"text":"hello"/');

        $this->post('/botman', ['driver' => 'web', 'userId' => 'test', 'message' => 'hi'])->assertOk();
    }
}
