{{-- Template Igreja --}}
<x-igreja.head.head />

<x-igreja.nav.nav />

<main>
    @if(session('msg'))
        <p class="mensagem">{{ session('msg') }}</p>
    @endif
    
    @yield('corpo')
</main>

<x-igreja.footer.footer />
