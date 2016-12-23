@extends('angulr.layout.master')

@section('div.app.class', 'app-header-fixed app-aside-fixed app-aside-hidden')

@section('app')

    @include('console.layout.parts.header')

    @include('console.layout.parts.content')

    @include('console.layout.parts.footer')

@endsection

@push('scripts')
<script src="{{url(elixir("js/console.src.js"))}}"></script>
@endpush