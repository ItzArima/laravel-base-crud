@extends('layout.app')

@section('CSS')
    <link rel="stylesheet" href="{{asset('css/comics.css')}}">
@endsection

@section('content')
    <main>
        <div class="jumbo-container">
            <img src="{{asset('img/jumbotron.jpg')}}" alt="">
            <div class="title">
                <h2>CURRENT SERIES</h2>
            </div>
        </div>
        <div class="comicses-container">
            @foreach ($comicses as $key=>$comics)
                <div class="comics">
                    <a href="{{route('single',['key' => $key, 'name' => $comics['title']])}}"><img src="{{$comics['thumb']}}" alt=""></a>
                    <h4>{{$comics['series']}}</h4>
                </div>    
            @endforeach    
        </div>
        <div class="button-container">
            <button>LOAD MORE</button>
        </div>
        <div class="links">
            <div class="link">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" srcset="">
                <h4>DIGITAL COMICS</h4>
            </div>
            <div class="link">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" srcset="">
                <h4>DC MERCHANDISE</h4>
            </div>
            <div class="link">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" srcset="">
                <h4>SUBSCRIPTIONS</h4>
            </div>
            <div class="link">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" srcset="">
                <h4>COMIC SHOP LOCATOR</h4>
            </div>
            <div class="link">
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" srcset="">
                <h4>DC POWER VISA</h4>
            </div>
        </div>
    </main>    
@endsection

@section('script')
    <script>
        let active = document.getElementById('comics');
        active.classList.add('active');
    </script>
@endsection    