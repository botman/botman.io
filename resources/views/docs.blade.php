@extends('layout/layout')

@section('content')
	<a target="_external" class="btn btn-primary pull-right" href="https://github.com/mpociot/botman-docs/edit/master/{{ $page }}.md">Edit on <i class="fa fa-github"></i></a>

    {!! $documentation !!}
@endsection
