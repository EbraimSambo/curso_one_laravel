@props(['header'])

<header id="header">
    <a href="/">PostFace</a>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/allposts">Publicações</a></li>
            <li><a href="/about">Sobre</a></li>
            @auth
            <li><a href="/listings/create">Criar</a></li>
            @endauth
        </ul>
        <x-search />
        <ul>
            @auth
                <li> {{Auth::user()->name}}</li>
                <li><a href="/listing/manage">Perfil</a></li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit">Sair</button>
                </form>
            @else
            <li><a href="/register">Registrar</a></li>
            <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </nav>
</header>
