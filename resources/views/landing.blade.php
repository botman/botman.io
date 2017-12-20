@extends('layout.layout')

@section('content')
    <section class="font-sans bg-teal bg-gradient min-h-screen">
        @include('partials.menu')

        <div class="container mx-auto text-center">
            <div class="w-full text-center pt-12">
                @svg('botman', ['class' => 'botman-logo h-full w-full -ml-8'])
                <h1 class="font-varela-round antialiased text-4xl text-white font-normal mt-4">
                    <a class="no-underline text-white" href="/{{ config('botman.default_version') }}">BotMan</a>
                </h1>
                <h2 class="font-varela-round antialiased text-xl text-white font-normal mt-2 px-4 leading-normal">
                    The only PHP chatbot framework you will ever need.
                </h2>
            </div>
            <div class="w-full flex flex-wrap mb-16 mt-8 md:mt-16">
                <div class="w-full md:w-1/2 md:ml-auto px-4 md:px-0">
                    <div class="browser-mockup landing-code h-64 mx-auto w-full md:w-11/12 ">
                        <pre>@include('partials.landing-code')</pre>
                    </div>
                </div>
                <div class="w-full mt-1 md:w-1/2 md:mt-0 md:mr-auto px-4 md:px-0 pt-4 md:pt-0" id="landing-bot">
                    <div class="browser-mockup botui-app-container h-64 w-full md:w-11/12">
                        <bot-ui></bot-ui>
                    </div>
                </div>
            </div>

            <h2 class="font-varela-round antialiased text-3xl text-white font-normal mt-8">One Codebase - Multiple Services</h2>
            <p class="font-varela-round antialiased text-3xl text-grey-darkest font-normal mt-8"></p>
        </div>
        <div class="container mx-auto px-4 md:px-0 mt-32 md:mt-0">
            <div class="block md:flex flex-wrap w-full md:w-4/5 mx-auto bg-white shadow-lg rounded-sm">
                <div class="flex border-b">
                    <div class="flex w-full lg:w-2/5 h-64">
                        <div class="ml-8 mt-8">
                            <h1 class="font-varela-round text-teal antialiased text-grey-darkest text-2xl">
                                Want to support a new messenger? Easy!
                            </h1>
                            <p class="mt-4 text-grey-darkest leading-normal">
                                Write your chatbot logic once and connect it to one of the available messaging services, including Amazon Alexa, Facebook Messenger, Slack, Telegram or even your own Website.
                            </p>
                        </div>
                    </div>
                    <div class="overflow-hidden h-64 hidden lg:flex lg:w-3/5">
                        <div class="browser-mockup mt-8 ml-4 w-full">
                            <div class="bg-black text-green-lighter h-full w-full font-mono p-4">
                                ~/my-bot$ composer require botman/driver-slack<br/>
                                ~/my-bot$ composer require botman/driver-facebook<br/>
                                ~/my-bot$ composer require botman/driver-web
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex border-b">
                    <div class="overflow-hidden h-64 hidden lg:flex lg:w-3/5">
                        <div class="browser-mockup mt-8 ml-4 mr-4 w-full">
                            <div class="bg-black text-green-lighter h-full w-full font-mono p-4">
                                ~/my-bot$ botman new chatbot
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full lg:w-2/5 h-64">
                        <div class="ml-8 mt-8">
                            <h1 class="mt-0 font-varela-round text-teal antialiased text-grey-darkest text-2xl">
                                Existing project?<br>
                                Starting from scratch?<br>
                                We got you covered!
                            </h1>
                            <p class="mt-4 pr-8 text-grey-darkest leading-normal">
                                BotMan is framework agnostic - that means you can use it in your existing codebase, whatever framework you might use. Starting a new chatbot project? <b class="text-teal">BotMan Studio</b> is a Laravel 5.5 boiler project to get you started in no time!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex border-b">
                    <div class="flex w-full lg:w-2/5 h-64">
                        <div class="ml-8 mt-8">
                            <h1 class="font-varela-round text-teal antialiased text-grey-darkest text-2xl">
                                We like readable code
                            </h1>
                            <p class="mt-4 text-grey-darkest leading-normal">
                                BotMan is all about having an expressive, yet powerful syntax that allows you to focus on the business logic - not on framework code.
                            </p>
                        </div>
                    </div>
                    <div class="overflow-hidden h-64 hidden lg:flex lg:w-3/5">
                        <div class="browser-mockup mt-8 ml-4 w-full">
                            <pre>@include('partials.landing-readable')</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="p-4 mt-8 text-sm md:mt-16">

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
            <div class="text-center text-white mt-6">
                <div>
                    <span>BotMan by</span>
                    <a class="text-white no-underline" href="https://twitter.com/marcelpociot">Marcel Pociot</a>.
                </div>
                <div class="mt-6">
                    <a class="text-white px-1 no-underline" href="https://github.com/botman/botman/stargazers">
                        <i class="fa fa-star"></i> {{ $stars }} stargazers
                    </a>
                    <a class="text-white px-1 no-underline" href="https://twitter.com/botman_io">
                        <i class="fa fa-twitter"></i> @botman_io
                    </a>
                    <a class="text-white px-1 no-underline" href="https://slack.botman.io">
                        <i class="fa fa-slack"></i> Slack
                    </a>
                </div>
            </div>
        </footer>
    </section>
@endsection
