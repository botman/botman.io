@extends('layout.layout')

@section('content')
    <section class="hero is-fullheight has-text-centered">
        <div class="hero-head">
            <div class="container is-fluid">
                <nav class="nav">
                    <div class="container is-fluid">
                        <div class="nav-left">
                            <a class="nav-item brand" href="/{{ config('botman.default_version') }}">
                                @svg('botman-head')
                                <span>BotMan</span>
                            </a>
                        </div>
                        <span class="nav-toggle is-hidden-mobile">
              <span></span>
              <span></span>
              <span></span>
            </span>
                        <div class="nav-right nav-menu">
                            <a class="nav-item" href="https://github.com/mpociot/botman">
                                <span class="icon">
                                    <i class="fa fa-github"></i>
                                </span>
                            </a>
                            <a class="nav-item" href="https://twitter.com/botman_io">
                                <span class="icon">
                                    <i class="fa fa-twitter"></i>
                                </span>
                            </a>
                            <a class="nav-item" href="/{{ config('botman.default_version') }}">
                                Documentation
                            </a>
                            <div class="navbar-item">
                                <div class="field is-grouped">
                                    <p class="control">
                                        <a class="button is-inverted is-rounded is-outlined is-primary" href="https://buildachatbot.io/?utm_source=landing&utm_medium=navigation&utm_campaign=video_course" target="_blank">
                                            Video Course
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="hero-body">
            <div class="container">
                @svg('botman', 'botman-hero')
                <br>
                <h1 class="title is-3">BotMan</h1>
                <h2 class="subtitle is-4">The only PHP chatbot framework you will ever need.</h2>
                <div class="columns">
                    <div class="column is-5 is-offset-1">
                        <div class="landing-code browser-mockup">
                            <pre><code class="language-php">
$botman->hears('Hello BotMan!', function($bot) {
    $bot->reply('Hello!');
    $bot->ask('Whats your name?', function($answer, $bot) {
        $bot->say('Welcome '.$answer->getText());
    });
});

$botman->listen();</code>
                            </pre>
                        </div>
                    </div>
                    <div class="column is-5">
                        <div class="botui-app-container browser-mockup" id="landing-bot">
                            <bot-ui></bot-ui>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <a class="button is-large" href="https://github.com/botman/botman">GitHub</a>
                    <a class="button is-inverted is-primary is-outlined is-large mobile-margin-top-10" href="/{{ config('botman.default_version') }}">Documentation</a>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="content has-text-centered">
                    <p>
                        <strong>BotMan</strong> by <a href="https://twitter.com/marcelpociot">Marcel Pociot</a>.
                    </p>
                    <div class="columns">
                        <div class="column">
                            <a href="https://github.com/botman/botman/stargazers">
                                <span class="icon">
                                    <i class="fa fa-star"></i>
                                </span> {{ $stars }} stargazers
                            </a>
                        </div>
                        <div class="column">
                            <a href="https://twitter.com/botman_io">
                                <span class="icon">
                                    <i class="fa fa-twitter"></i>
                                </span> @botman_io
                            </a>
                        </div>
                        <div class="column">
                            <a href="https://slack.botman.io">
                                <span class="icon">
                                    <i class="fa fa-slack"></i>
                                </span> Slack
                            </a>
                        </div>
                        <div class="column is-hidden-tablet">
                            <a href="https://buildachatbot.io/?utm_source=landing&utm_medium=footer&utm_campaign=video_course" target="_blank">
                                <span class="icon">
                                    <i class="fa fa-play"></i>
                                </span> Video Course
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection
