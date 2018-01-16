@extends('layout/layout')

@section('content')
    <section class="font-sans bg-teal">
        @include('partials.menu')
        <div class="pt-16 h-screen overflow-hidden">
            <div class="container mx-auto max-w-md text-white">
                <h1 class="title">Responsible for this website</h1>
                Marcel Pociot<br/>
                Kleinenbroicher Str. 71<br>
                41352 Korschenbroich<br>
                Germany<br><br>
                E-Mail: m.pociot@gmail.com
                <hr>
                The BotMan character and logo is &copy; Marcel Pociot.<br><br>
                BotMan is licensed under the MIT license.<br><br>
                Copyright (c) 2017 Marcel Pociot<br><br>
                Permission is hereby granted, free of charge, to any person obtaining a copy
                of this software and associated documentation files (the "Software"), to deal
                in the Software without restriction, including without limitation the rights
                to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                copies of the Software, and to permit persons to whom the Software is
                furnished to do so, subject to the following conditions:<br><br>
                The above copyright notice and this permission notice shall be included in all
                copies or substantial portions of the Software.<br><br>
                THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                SOFTWARE.
            </div>
        </div>
    </section>
@endsection
