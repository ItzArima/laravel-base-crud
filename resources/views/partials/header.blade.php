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
            @foreach(config('header-links') as $item)
                <a href="{{route($item['href'])}}" class="hlink {{Route::currentRouteName() === $item['href'] ? 'active' : ''}}">{{$item['name']}}</a>
            @endforeach
        </nav>
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="Search">
                <img src="{{asset('img/search-solid.svg')}}" alt="">
            </form>
        </div>
    </div>
</header>