    <header>
        <div class="top_header">
            <span>dc power visa</span>
            <span>addicional dc sites</span>
        </div>
        <div class="nav_header">
            <img src="{{asset('img/dc-logo.png')}}" alt="">
            
            <nav>
                <a href="{{route('characters')}}" class="{{ Route::currentRouteName() === 'characters' ? 'active' : '' }}">Characters</a>
                <a href="{{route('comics')}}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">Comics</a>
                <a href="{{route('movies')}}" class="{{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">Movies</a>
                <a href="{{route('tv')}}" class="{{ Route::currentRouteName() === 'tv' ? 'active' : '' }}">Tv</a>
                <a href="{{route('games')}}" class="{{ Route::currentRouteName() === 'games' ? 'active' : '' }}">Games</a>
                <a href="{{route('collectibles')}}" class="{{ Route::currentRouteName() === 'collectibles' ? 'active' : '' }}">Collectibles</a>
                <a href="{{route('videos')}}" class="{{ Route::currentRouteName() === 'videos' ? 'active' : '' }}">Videos</a>
                <a href="{{route('fans')}}" class="{{ Route::currentRouteName() === 'fans' ? 'active' : '' }}">Fans</a>
                <a href="{{route('news')}}" class="{{ Route::currentRouteName() === 'news' ? 'active' : '' }}">News</a>
                <a href="{{route('shop')}}" class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}">Shop</a>
            </nav>
            
            <form action="search">
                <input type="text" placeholder="Search">
            </form>
       </div>

    </header>
