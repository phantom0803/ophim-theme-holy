<div class="col-md-2.5" style="margin-bottom: 1vh;padding-right: 4px;padding-left: 4px;">
    <div class="card" style="background: rgb(20,20,20);">
        <a href="{{$movie->getUrl()}}">
            <img
                class="lazy card-img-top w-100 d-block"
                style="height: 145px"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="{{ $movie->poster_url ?: $movie->thumb_url}}" alt="{{$movie->name}} - {{$movie->origin_name}} ({{$movie->publish_year}})">
        </a>
        <div class="card-body" style="padding: 10px;padding-right: 1px;padding-left: 1px;">
            <h4 class="text-truncate card-title" style="text-align: center;color: rgb(255,193,10);font-size: calc(0.8rem + 0.4vw);width: 100%;">
            {{$movie->name}}
            </h4>
            <p class="text-truncate card-text"
               style="text-align: center;color: rgb(255,255,255);width: 100%;font-size: calc(0.8rem + 0.1vw);">
                ({{$movie->publish_year}})</p>
        </div>
        <div class="mx-auto">
            <a class="btn btn-outline-warning btn-sm" type="button"
               href="{{$movie->getUrl()}}">Xem Phim</a>
        </div>
    </div>
</div>
