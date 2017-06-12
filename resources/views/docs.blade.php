@extends('layout/layout_docs')

<!-- <a target="_external" class="btn btn-primary pull-right" href="https://github.com/mpociot/botman-docs/edit/master/{{ $page }}.md">Edit on <i class="fa fa-github"></i></a> -->
@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <div id="index">
                    <div class="buttons">
                        <a class="button is-info is-small" href="https://patreon.com/botman">Become a Backer</a>
                    </div>

                    <span id="versionswitch" class="select is-small">
                      <select>
                        <option>Version</option>
                          @foreach(config('botman.available_versions') as $version)
                              <option value="{{ $version }}">{{ $version }}</option>
                          @endforeach
                      </select>
                    </span>

                    {!! str_replace('<ul>', '<ul class="menu-list">', $index) !!}
                </div>
            </div>
            <div class="column">
                {!! $documentation !!}
            </div>
        </div>
    </div>
@endsection
