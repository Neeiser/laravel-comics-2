@extends('template.base')

@section('title', 'DC Comics')

@section('content')
    <main class="main-single-comic">
        <div class="blue-banner">
            <div class="margin-250">
                <div class="comic-thumb">
                    <span>COMIC BOOK</span>
                    <img src="{{ $thumb }}" alt="">
                    <a href="">VIEW GALLERY</a>
                </div>
            </div>
        </div>
        <div class="margin-250 comic-box">
            <div class="comic-desc">
                <h2>{{ $title }}</h2>
                <div class="comic-box-stock">
                    <div class="comic-box-price">
                        <span>U.S. Price: <var>{{ $price }}</var></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="comic-box-availability">
                        <a href="">Check Availability</a>
                    </div>
                </div>
                <p>{{$description}}</p>
            </div>
            <div class="comic-adv">
                <h3>ADVERTISEMENT</h3>
                <img src="{{asset('images/addd.jpg')}}" alt="">
            </div>
        </div>
        <div class="margin-250 comic-box-bottom">
            <div class="comic-talent">
                <h2>Talent</h2>
                <div class="comic-talent-artists">
                    <h3>Art by:</h3>
                    <a href="">
                    @foreach ($artists as $artist)
                        {{$artist}},
                    @endforeach
                    </a>
                </div>
                <div class="comic-talent-writers">
                    <h3>Written by:</h3>
                    <a href="">
                    @foreach ($writers as $writer)
                        {{$writer}},
                    @endforeach
                    </a>
                </div>
            </div>
            <div class="comic-specs">
                <h2>Specs</h2>
                <div class="comic-specs-series">
                    <h3>Series:</h3>
                    <a href="">{{$series}}</a>
                </div>
                <div class="comic-specs-price">
                    <h3>U.S. Price:</h3>
                    <span>{{$price}}</span>
                </div>
                <div class="comic-specs-date">
                    <h3>On Sale Date:</h3>
                    <span>{{$sale_date}}</span>
                </div>
            </div>
        </div>
    </main>
@endsection