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
                        <span>Check Availability</span>
                    </div>
                </div>
                <p>{{$description}}</p>
            </div>
            <div class="comic-adv">
                <h3>ADVERTISEMENT</h3>
                <img src="{{asset('images/addd.jpg')}}" alt="">
            </div>
        </div>
    </main>
@endsection