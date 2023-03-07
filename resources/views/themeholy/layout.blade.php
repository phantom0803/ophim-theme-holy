@extends('themes::layout')

@php
    $menu = \Ophim\Core\Models\Menu::getTree();
@endphp

@push('header')
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('/themes/holy/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/themes/holy/css/fontstyle.css') }}" rel="stylesheet" />
    <link href="{{ asset('/themes/holy/fonts/simple-line-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/themes/holy/css/styles.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/themes/holy/css/baguetteBox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/themes/holy/css/custom.css') }}" rel="stylesheet" />
@endpush

@section('body')
    @include('themes::themeholy.inc.nav')
    <main class="page landing-page">
        @yield('content')
    </main>

@endsection

@push('scripts')
@endpush

@section('footer')
    {!! get_theme_option('footer') !!}
    <script defer src="{{ asset('/themes/holy/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('/themes/holy/js/script.min.js') }}"></script>
    {!! setting('site_scripts_google_analytics') !!}
@endsection
