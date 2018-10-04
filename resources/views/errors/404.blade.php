@extends('layout.layout')

@section('content')
    <section class="font-sans">
        @include('partials.menu')
        <div class="pt-16">
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
                    <div class="flex h-screen-80 text-grey-darkest py-4 px-8 lg:max-w-md lg:px-16 xl:max-w-full xl:ml-8">
                        <div class="flex justify-center my-auto align-middle my-auto">
                            <img class="block w-1/3 xl:w-1/5 h-full" src="https://laravel.com/assets/img/lamp-post.jpg">
                            <h3 class="pl-6 my-auto">You seem to have upset the delicate internal balance of my housekeeper.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            @include('partials.footer')
        </div>
    </section>
@endsection
