{{-- Template Igreja --}}
<x-associacao.head.head />

<x-associacao.nav.nav />

<main id="teste">
    @if(session('msg'))
        <p class="mensagem">{{ session('msg') }}</p>
    @endif
    
    @yield('corpo')
</main>

<x-associacao.footer.footer />
