@extends('angulr.layout.master')

@section('div.app.class', 'app-header-fixed app-aside-fixed app-aside-hidden')

@section('app')

    @include('angulr.layout.parts.header')

    @include('angulr.layout.parts.content')

    @include('angulr.layout.parts.footer')

@endsection

@push('scripts')
<script src="{{url(elixir("js/app.src.js"))}}"></script>
@endpush