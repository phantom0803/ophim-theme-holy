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
    {{-- <style>
        img.lazy {
            background-image: url('http://jquery.eisbehr.de/lazy/images/loading.gif');
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }
    </style> --}}
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

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js">
    </script>
    <script>
        $(function() {
            $('.lazy').lazy({
                effect: "fadeIn",
                effectTime: 2000,
                threshold: 0
            });
        });
    </script>
    <script defer src="{{ asset('/themes/holy/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{ asset('/themes/holy/js/script.min.js') }}"></script>
    {!! setting('site_scripts_google_analytics') !!}
@endsection
