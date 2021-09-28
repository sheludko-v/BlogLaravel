<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #2d3748;">

    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">
            <img src="/logo.png" alt="{{'app.name'}}" width="45" height="45">
            {{config('app.name')}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link active" aria-current="page">
                        {{__('Главная')}}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('blog')}}" class="nav-link">
                        {{__('Статьи')}}
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link" aria-current="page">
                        {{__('Регистрация')}}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link">
                        {{__('Вход')}}
                    </a>
                </li>
            </ul>


        </div>
    </div>
</nav>
