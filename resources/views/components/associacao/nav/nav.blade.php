<header>
    {{-- Menu Icon --}}     
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <div class="logo">
        <h4>Palavra de Vida</h4>
    </div>

    <i class="material-icons" id="burger" onclick="clickMenu()">menu</i>
    <ul class="links" id="links">
        <li class="nav-btn"><a href="{{ route('main.page') }}">Início</a></li>
        <li class="nav-btn"><a href="{{ route('sobre.page') }}">Sobre Nós</a></li>
        <li class="nav-btn"><a href="{{ route('maintainer.page') }}">Mantenedor</a></li>
        <li class="nav-btn"><a href="{{ route('divulgation.page') }}">Divulgação</a></li>
    </ul>

    {{-- Navbar script --}}
    <script type="text/javascript" src="/assets/js/novo-design/navbar.js"></script> 
</header>
