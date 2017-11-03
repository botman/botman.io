@extends('layout.layout')

@section('content')
    <section class="font-sans bg-teal min-h-screen">
        @include('partials.menu')

        <div class="container mx-auto text-center md:mt-8">
            <div class="w-full text-center">
                @svg('botman', ['class' => '-ml-8'])
                <h1 class="text-3xl text-white font-normal mt-4 tracking-wide">
                    BotMan
                </h1>
                <h2 class="text-xl text-white font-normal mt-4 px-4 leading-normal">
                    The only PHP chatbot framework you will ever need.
                </h2>
            </div>
            <div class="w-full flex flex-wrap mt-8 md:mt-16">
                <div class="w-full mx-1 overflow-hidden md:w-1/3 md:ml-auto">
                    <div class="browser-mockup landing-code h-64 w-full ">
                        <pre>@include('partials.landing-code')</pre>
                    </div>
                </div>
                <div class="w-full mt-1 mx-1 md:w-1/3 md:mt-0 md:mr-auto" id="landing-bot">
                    <div class="browser-mockup botui-app-container h-64 w-full">
                        <bot-ui></bot-ui>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-wrap text-center mt-8">
                <div class="w-full md:w-1/2 md:text-right">
                    <a class="btn btn-outline text-white border-white"
                       href="https://github.com/botman/botman">
                        GitHub
                    </a>
                </div>
                <div class="w-full mt-4 md:w-1/2 md:mt-0 md:text-left">
                    <a class="btn bg-white rounded-full text-black"
                       href="/{{ config('botman.default_version') }}">
                        Documentation
                    </a>
                </div>
            </div>
        </div>
        <footer class="p-4 mt-8 text-sm md:mt-16">
            <div class="text-center text-white">
                <p>
                    <span>BotMan by</span>
                    <a class="text-white" href="https://twitter.com/marcelpociot">Marcel Pociot</a>.
                </p>
                <p class="mt-2">
                    <a class="text-white px-1" href="https://github.com/botman/botman/stargazers">
                        <i class="fa fa-star"></i> {{ $stars }} stargazers
                    </a>
                    <a class="text-white px-1" href="https://twitter.com/botman_io">
                        <i class="fa fa-twitter"></i> @botman_io
                    </a>
                    <a class="text-white px-1" href="https://slack.botman.io">
                        <i class="fa fa-slack"></i> Slack
                    </a>
                </p>
            </div>
        </footer>
    </section>
@endsection
