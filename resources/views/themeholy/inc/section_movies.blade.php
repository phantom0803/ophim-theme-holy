<section style="margin-top: 8vh;">
    <div class="container" style="margin-bottom: 5vh;">
        <h2 class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">
            {{ $item['label'] }}</h2>
        <p class="text-center text-light" style="font-size: calc(0.8rem + 0.1vw);">{{ $item['description'] }}</p>
        <hr
            style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
    </div>

    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">
            @foreach ($item['data'] as $movie)
                @include('themes::themeholy.inc.section_movies_item')
            @endforeach
        </div>
    </div>

    @if ($item['link'] !== '' && $item['link'] !== '#')
        <div class="text-center" style="margin-top: 3vh;">
            <a class="btn btn-outline-warning" type="button" href="{{ $item['link'] }}"
                style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;">
                <b>Xem Thêm</b>
            </a>
        </div>
    @endif
</section>
