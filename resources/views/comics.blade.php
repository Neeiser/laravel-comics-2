@extends('template.base')

@section('title', 'DC Comics - Comics')

@section('content')
    <main>
        <div class="margin-100 comics-container">
            <h1>CURRENT SERIES</h1>
            @foreach ($comics as $comic)
                <div class="comics-box">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h2>{{ $comic['series'] }}</h2>
                </div>
            @endforeach
            <button>LOAD MORE</button>
        </div>
        <section>
            <div class="margin-100 merch-container">
                <a href="">
                    <img src="./images/buy-comics-digital-comics.png" alt="">
                    <span>DIGITAL COMICS</span>
                </a>
                <a href="">
                    <img src="./images/buy-comics-merchandise.png" alt="">
                    <span>DC MERCHANDISE</span>
                </a>
                <a href="">
                    <img src="./images/buy-comics-subscriptions.png" alt="">
                    <span>SUBSCRIPTION</span>
                </a>
                <a href="">
                    <img src="./images/buy-comics-shop-locator.png" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </a>
                <a href="">
                    <img src="./images/buy-dc-power-visa.svg" alt="">
                    <span>DC POWER VISA</span>
                </a>
            </div>
        </section>
    </main>
@endsection
    