<header>
    <div class="header-container">

      
        <div class="logo">
            <!--carico il logo con asset-->
            <img src="{{ asset('img/dc-logo.png')}}" alt="logo">
        </div>
        

       
        <nav class="navbar">
            <ul>
                

                <li><a href="{{ route('characters') }}"></a>characters</li>
                <li><a href="{{ route('comics') }}"></a>comics</li>
                <li><a href="{{ route('movies') }}"></a>movies</li>
                <li><a href="{{ route('tv') }}"></a>tv</li>
                <li><a href="{{ route('games') }}"></a>games</li>
                <li><a href="{{ route('collectibles') }}"></a>collectibles</li>
                <li><a href="{{ route('videos') }}"></a>videos</li>
                <li><a href="{{ route('fans') }}"></a>fans</li>
                <li><a href="{{ route('news') }}"></a>news</li>
                <li><a href="{{ route('shop') }}"></a>shop</li>
                
            </ul>
        </nav>
       
    </div>
</header>