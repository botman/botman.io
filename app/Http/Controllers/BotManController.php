<?php

namespace App\Http\Controllers;

class BotManController extends Controller
{
    /**
     * Answer the web widget on the landing page.
     */
    public function __invoke(): void
    {
        require base_path('routes/botman.php');

        app('botman')->listen();
    }
}
