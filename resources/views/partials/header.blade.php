<header class="debug py-4">
    <nav>
        <ul class="d-flex mb-0">
            <li><a class="{{ Route::currentRouteName() === 'home'? 'active': '' }}" href="{{ route('home') }}">Home</a></li>
            <li><a class="{{ Route::currentRouteName() === 'comics.index'? 'active': '' }}" href="{{ route('comics.index') }}">Comics</a></li>
            <li><a class="{{ Route::currentRouteName() === 'comics.create'? 'active': '' }}" href="{{ route('comics.create') }}">Create</a></li>
        </ul>
    </nav>
</header>
