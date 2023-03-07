@extends('themes::themeholy.layout')
@section('content')
    @include('themes::themeholy.inc.main_search')
    <section style="margin-top: 8vh;">
        <div class="container" style="margin-bottom: 5vh;">
            <h2 id="main" class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">
                {{ $section_name }}</h2>
            <hr
                style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
        </div>
        <div class="container">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">
                @foreach ($data as $movie)
                    @include('themes::themeholy.inc.section_movies_item')
                @endforeach
            </div>
        </div>
        {{ $data->appends(request()->all())->links('themes::themeholy.inc.pagination') }}
    </section>
@endsection
