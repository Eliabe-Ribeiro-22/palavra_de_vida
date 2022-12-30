<nav>
    <div>
        <a href="{{ route('main.page') }}">
            <img id="logo-igreja" src="#" alt="Logo do Palavra de Vida">
        </a>
    </div>

    <div class="nav-logo">
        <h4>Palavra de Vida</h4>
    </div>
    
    <ul class="nav-links">
        <li class="nav-btn"><a href="{{ route('main.page') }}">Início</a></li>
        <li class="nav-btn"><a href="{{ route('contact.page') }}">Seja mantenedor</a></li>
        <li class="nav-btn"><a href="{{ route('projects.page') }}">Divulgação</a></li>
    
    </ul>
    
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

    {{-- Navbar script --}}
    <script src="/assets/js/novo-design/navbar.js"></script>
</nav>
