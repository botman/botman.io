@extends('layout/layout')

@section('content')
    <section class="font-sans">
        @include('partials.menu', ['currentVersion' => '2.0'])
        <div class="px-8 pt-16 h-screen overflow-hidden">
            <div class="container mx-auto max-w-lg text-grey-darkest">
                <h1>BotMan Partners</h1>
                <p class="leading-loose text-lg text-grey-dark font-light">
                    BotMan Partners are chatbot and web-development companies with a great experise in BotMan development and consulting.<br>
                    Our partners can help you create an outstanding chatbot project.
                </p>
                <div class="my-8 rounded-lg shadow-lg items-center flex">
                    <div class="opacity-75 bg-black p-6">
                        <a href="https://beyondco.de" title="Beyond Code">
                            <img src="https://beyondco.de/wp-content/uploads/2018/01/bc_logo_negativ.png" />
                        </a>
                    </div>
                </div>
                <blockquote class="notification is-info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>
                    <p>
                        If you're a company creating high-quality chatbots with BotMan and you want to become an official BotMan partner, we would love to <a href="mailto:hello@botman.io">talk to you</a>.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>
@endsection
