@extends('layout.app')

@section('CSS')
    <link rel="stylesheet" href="{{asset('css/single.css')}}">
@endsection

@section('content')
    <main>
        @if(isset($comic))
            <div class="jumbo-container">
                <img src="{{asset('img/jumbotron.jpg')}}" alt="">
            </div>
            <div class="blue-bar">
                <div class="card">
                    <img src="{{$comic->thumb}}" alt="">
                    <div class="top">
                        <p>COMIC BOOK</p>
                    </div>
                    <div class="bottom">
                        <p>WIEW GALLERY</p>
                    </div>
                </div>    
            </div>
            <div class="single-content">
                <div class="description-container">
                    <div class="description">
                        <div class="title">
                            <h1>{{$comic->title}}</h1>
                        </div>
                        <div class="green-bar">
                            <div class="left">
                                <p>U.S. Price <em>{{$comic->price}}</em></p>
                                <p>AVIABLE</p>
                            </div>
                            <div class="right">
                                <p><strong>Check Availability</strong> &dtrif;</p>
                            </div>
                        </div>
                        <div class="desc-text">
                            <p>{{$comic->description}}</p>
                        </div>
                    </div>
                    <div class="advertisement">
                        <h4>ADVERTISEMENT</h4>
                        <a href="#"><img src="{{asset('img/single.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="single-info">
                <div class="info-centered">
                    <div class="info-content">
                        <div class="talent">
                            <h2>Talent</h2>
                            <div class="artists-container">
                                <p class="title"><strong>Art by:</strong></p>
                                <div class="artists">
                                    
                                </div>    
                            </div>
                            <div class="writers-container">
                                <p class="title"><strong>Written by:</strong></p>
                                <div class="writers">
                                    
                                </div>    
                            </div>
                        </div>
                        <div class="specs">
                            <h2>Specs</h2>
                            <div class="series">
                                <p class="title"><strong>Series</strong></p>
                                <a href="#">{{$comic->series}}</a>
                            </div>
                            <div class="price">
                                <p class="title"><strong>U.S. Price:</strong></p>
                                <p>{{$comic->price}}</p>
                            </div>
                            <div class="sale">
                                <p class="title"><strong>On Sale Date:</strong></p>
                                <p>{{date("F d Y" , strtotime($comic->sale_date))}}</p>
                            </div>
                        </div>
                    </div>    
                </div> 
                <div class="info-footer">
                    <div class="info-link">
                        <h4>DIGITAL COMICS</h4>
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" srcset="">
                    </div>
                    <div class="info-link">
                        <h4>SHOP DC</h4>
                        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" srcset="">
                    </div>
                    <div class="info-link">
                        <h4>COMIC SHOP LOCATOR</h4>
                        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" srcset="">
                    </div>
                    <div class="info-link">
                        <h4>SUBSCRIPTIONS</h4>
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" srcset="">
                    </div>
                </div>   
            </div>
        @elseif(isset($video))
            <div class="jumbo-container">
                <img src="{{asset('img/jumbotron.jpg')}}" alt="">
            </div>
            <div class="single-content">
                <div class="description-container">
                    <div class="description">
                        <div class="title">
                            <h1>{{$video->title}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-info">
                <div class="info-centered">
                    <div class="info-content">
                        <div class="specs">
                            <h2>Specs</h2>
                            <div class="series">
                                <p class="title"><strong>Owner</strong></p>
                                <a href="#">{{$video->owner}}</a>
                            </div>
                            <div class="price">
                                <p class="title"><strong>Duration</strong></p>
                                <p>{{$video->duration}} minutes</p>
                            </div>
                            <div class="sale">
                                <p class="title"><strong>Type</strong></p>
                                <p>{{$video->type}}</p>
                            </div>
                        </div>
                    </div>    
                </div> 
                <div class="info-footer">
                    <div class="info-link">
                        <h4>DIGITAL COMICS</h4>
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="" srcset="">
                    </div>
                    <div class="info-link">
                        <h4>SHOP DC</h4>
                        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="" srcset="">
                    </div>
                    <div class="info-link">
                        <h4>COMIC SHOP LOCATOR</h4>
                        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="" srcset="">
                    </div>
                    <div class="info-link">
                        <h4>SUBSCRIPTIONS</h4>
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="" srcset="">
                    </div>
                </div>   
            </div>
        @endif
    </main>
@endsection

@section('script')
    <script>
        let links = document.getElementsByClassName('hlink');
        links[2].classList.add('active')
    </script>
@endsection    