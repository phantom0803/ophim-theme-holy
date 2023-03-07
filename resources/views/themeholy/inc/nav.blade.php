@php
    $logo = setting('site_logo', '');
    $brand = setting('site_brand', '');
    $title = isset($title) ? $title : setting('site_homepage_title', '');
@endphp

<nav class="navbar navbar-dark navbar-expand-lg fixed-top clean-navbar"
    style="color: rgba(33,37,41,0.2);background: rgba(0,0,0,0.3);">
    <div class="container">
        <a class="navbar-brand logo" href="/" style="color: rgb(240,190,12);font-size: calc(1.325rem + 0.6vw);">
            @if ($logo)
                {!! $logo !!}
            @else
                {!! $brand !!}
            @endif
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto">
                @foreach ($menu as $item)
                    @if (count($item['children']))
                        <li class="nav-item dropdown flex-nowrap" style="margin-top: 0px;">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                            <div class="dropdown-menu dropdown-menu-dark"
                                style="background: linear-gradient(180deg, rgba(0,0,0,0.3), rgba(0,0,0,1.0));">
                                @foreach ($item['children'] as $children)
                                    <a class="dropdown-item" href="{{ $children['link'] }}">{{ $children['name'] }}</a>
                                @endforeach
                            </div>
                        </li>
                    @else
                        <li class="nav-item item"><a class="nav-link" href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
