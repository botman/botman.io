@extends('layout/layout')

@section('content')
    <section class="font-sans">
        @include('partials.menu-docs')
        <div class="pt-16 h-screen overflow-hidden">
            <div class="w-8/5-screen md:w-4/3-screen lg:w-full flex h-full">
                <div class="w-3/5-screen overflow-y-scroll bg-grey-lighter p-4 botman-sidebar
                    md:w-1/3-screen lg:w-1/3">
                    {!! $index !!}
                </div>
                <div class="w-screen lg:w-2/3 p-4 overflow-y-scroll">
                    {!! $documentation !!}
                </div>
            </div>
        </div>
    </section>
@endsection
