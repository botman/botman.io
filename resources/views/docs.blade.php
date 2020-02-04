@extends('layout.layout')

@section('content')
    <section class="font-sans">
        @include('partials.menu')
        <div class="pt-16">
            <div class="w-full bg-grey-lightest flex justify-center items-center text-white px-2"  style="background-color: #6574cd">
                 <p class="pl-2 p-4 mb-0 text-white">
                    <div class="hidden shadow md:inline mr-8 my-4 px-4 py-2 rounded-full text-teal bg-white" style="background: #ff7f68">
                        <a class="text-white no-underline" href="https://tinkerwell.app/?ref=botman&utm_source=botman-docs&amp;utm_medium=navigation&amp;utm_campaign=video_course" target="_blank">
                            <span class="font-bold">💫 Introducing Tinkerwell - The PHP Code runner app</span>
                        </a>
                    </div>
                 </p>
            </div>
            <div class="js-content-container transition-200ms w-8/5-screen md:w-4/3-screen lg:w-full flex h-full">
                <div class="w-3/5-screen bg-white p-4
                    sm:w-1/3-screen lg:w-1/3 xl:w-1/5 xl:p-16">

                    <div id="ad" class="botman-sidebar border border-grey-light border-dashed p-4 mb-4 max-w-xs
                        overflow-hidden text-sm text-center">
                        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=botmanio" id="_carbonads_js"></script>
                    </div>
                    <div class="botman-sidebar">
                        {!! $index !!}
                    </div>

                </div>
                <div class="w-screen overflow-touch overflow-y-scroll leading-loose lg:w-2/3 xl:w-4/5
                    md:w-2/3-screen botman-documentation-content">
                    <div class="text-grey-darkest py-4 px-8 lg:max-w-md lg:px-16 xl:max-w-full xl:ml-8">
                        {!! $documentation !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            @include('partials.footer')
        </div>
    </section>
@endsection
