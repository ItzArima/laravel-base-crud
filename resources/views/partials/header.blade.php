<header>
    <div class="header-top-bar">
        <p>DC POWER &#8480; VISA &REG;</p>
        <select name="sites" id="sites">
            <option value="">ADDITIONAL DC SITES</option>
            <option value="option1">Option1</option>
            <option value="option2">Option2</option>
        </select>
    </div>
    <div class="header-main">
        <div class="logo-container">
            <img src="{{asset('img/dc-logo.png')}}" alt="" srcset="">
        </div>
        <nav>
            <a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}}" href="{{route('characters')}}">CHARACTERS</a>
            <a class="{{(Route::currentRouteName() === 'comics')||(Route::currentRouteName() === 'single') ? 'active' : ''}}" href="{{route('comics')}}">COMICS</a>
            <a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">MOVIES</a>
            <a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}}" href="{{route('tv')}}">TV</a>
            <a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}}" href="{{route('games')}}">GAMES</a>
            <a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}}" href="{{route('collectibles')}}">COLLECTIBLES</a>
            <a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}}" href="{{route('videos')}}">VIDEOS</a>
            <a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}}" href="{{route('fans')}}">FANS</a>
            <a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}" href="{{route('news')}}">NEWS</a>    
            <div class="shop-select">
                <a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}}" href="{{route('shop')}}">SHOP</a>
                <p>&dtrif;</p>
            </div>        
        </nav>
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="Search">
                <img src="{{asset('img/search-solid.svg')}}" alt="">
            </form>
        </div>
    </div>
</header>