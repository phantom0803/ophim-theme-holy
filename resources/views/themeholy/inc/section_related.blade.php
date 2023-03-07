<section style="margin-top: 8vh;">
    <div class="container" style="margin-bottom: 5vh;">
        <h2 class="display-6 text-warning" style="font-size: calc(1.325rem + 0.9vw);text-align: center;">Phim cùng thể loại</h2>
        <p class="text-center text-light" style="font-size: calc(0.8rem + 0.1vw);">Biết đâu bạn thích?</p>
        <hr style="background: linear-gradient(90deg, var(--bs-cyan), var(--bs-yellow)), rgb(255,193,7);transform: scale(1);width: 100%;height: 2px;filter: saturate(200%);">
    </div>

    <div class="container">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">

            @foreach ($movie_related as $movie)
                @include('themes::themeholy.inc.section_movies_item')
            @endforeach
        </div>
    </div>

    <div class="text-center" style="margin-top: 3vh;">
        <button class="btn btn-outline-warning" type="button" onclick="location.href='/';" style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);font-weight: bold;margin-bottom: 1vh;">
            Công Cụ Tìm Kiếm
        </button>
    </div>
</section>
