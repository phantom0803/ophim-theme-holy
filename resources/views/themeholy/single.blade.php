@extends('themes::themeholy.layout')

@php
    $watchUrl = '#';
    if (!$currentMovie->is_copyright && count($currentMovie->episodes) && $currentMovie->episodes[0]['link'] != '') {
        $firstWatch = $currentMovie->episodes
            ->sortBy([['server', 'asc']])
            ->groupBy('server')
            ->first()
            ->sortByDesc('name', SORT_NATURAL)
            ->groupBy('name')
            ->last()
            ->sortByDesc('type')
            ->first();
        $watchUrl = $firstWatch->getUrl();
    }
@endphp

@section('content')
    <section class="clean-block clean-hero"
        style="color: rgba(20,20,20,0.85);background: url({{ $currentMovie->getPosterUrl() }}) center/cover no-repeat;margin-top: -28vh;filter: blur(0px);">
        <div class="text" style="margin-top: 20vh;width: 80vw;max-width: 1280px;height: auto;">
            <h1 style="font-size: calc(1.325rem + 0.9vw);color: rgb(240,190,8);">{{ $currentMovie->name }}
                ({{ $currentMovie->publish_year }})</h1>
            <p style="font-style: italic;font-size: calc(1rem + 0.5vw);">{{ $currentMovie->origin_name }}</p>
            <div class="mx-auto">
                <a class="btn btn-outline-warning btn-sm" type="button" href="{{ $watchUrl }}">Xem Phim</a>
            </div>
        </div>
    </section>
    <div class="container" style="margin-top: 1vw;">
        <div class="text-light block-content">
            <div class="post-body">

                <h3 style="color: rgb(255,193,7);text-align: justify;">{{ $currentMovie->name }}
                    ({{ $currentMovie->publish_year }})</h3>
                <div class="post-info" style="text-align: justify;"><span
                        style="text-align: justify;"><b>{{ $currentMovie->origin_name }}</b></span>
                </div>

                <p style="margin-top: 8px;text-align: justify;">
                <p>
                    {!! $currentMovie->content !!}
                </p>
                <br>
                </p>

                <p style="margin-top: 8px;">
                    Lượt Xem: {{ $currentMovie->view_total }}<br />
                    Quốc Gia: {!! $currentMovie->regions->map(function ($region) {
                            return '<a href="' .
                                $region->getUrl() .
                                '" tite="Phim ' .
                                $region->name .
                                ' rel="tag"">' .
                                $region->name .
                                '</a>';
                        })->implode(', ') !!} <br />
                    Năm Sản Xuất: {{ $currentMovie->publish_year }}<br />
                    Thể Loại: {!! $currentMovie->categories->map(function ($category) {
                            return '<a href="' .
                                $category->getUrl() .
                                '" tite="Phim ' .
                                $category->name .
                                ' rel="tag"">' .
                                $category->name .
                                '</a>';
                        })->implode(', ') !!}<br />

                    Diễn viên: {!! $currentMovie->actors->map(function ($actor) {
                            return '<a href="' .
                                $actor->getUrl() .
                                '" tite="Diễn viên ' .
                                $actor->name .
                                ' rel="tag"">' .
                                $actor->name .
                                '</a>';
                        })->implode(', ') !!}<br />

                    Đạo diễn: {!! $currentMovie->directors->map(function ($director) {
                            return '<a href="' .
                                $director->getUrl() .
                                '" tite="Đạo diễn ' .
                                $director->name .
                                ' rel="tag"">' .
                                $director->name .
                                '</a>';
                        })->implode(', ') !!}<br />

                    Tags: {!! $currentMovie->tags->map(function ($tag) {
                            return '<a href="' . $tag->getUrl() . '" tite="Phim ' . $tag->name . ' rel="tag"">' . $tag->name . '</a>';
                        })->implode(', ') !!}<br />
                </p>
            </div>
        </div>

        @include('themes::themeholy.inc.comment')
    </div>

    @include('themes::themeholy.inc.section_related')
@endsection

@push('scripts')
    {!! setting('site_scripts_facebook_sdk') !!}
@endpush
