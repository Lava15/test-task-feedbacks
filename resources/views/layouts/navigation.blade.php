<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Feedbacks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="{{ request()->is('feedbacks') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{route('feedbacks')}}">Все отзывы</a>
            </li>
            <li class="{{ request()->is('admin') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{route('admin')}}">Модерация</a>
            </li>
        </ul>
        @if(request()->is('feedbacks'))
            <form action="{{route('feedbacks')}}" class="input-group mx-auto wd-500 transition">
                <input  id="searchbox" name="search" type="search" class="form-control " placeholder="Введите ключевое слово">
                <button class="btn btn-dark" type="submit">Поиск</button>
            </form>
        @endif

    </div>
</nav>
