{{-- Template Igreja --}}
<x-igreja.head.head />

<x-igreja.nav.nav />

<main>
    @if(session('msg'))
        <p class="mensagem">{{ session('msg') }}</p>
    @endif
    
    @yield('corpo')
</main>
<script type="text/javascript">
const links = document.querySelector("#links")
const burger = document.querySelector("#burger")

function clickMenu() {
    
    if (links.style.display == 'block') {
        links.style.display = 'none';
        burger.style.textAlign = "left"
    }
    else{
        links.style.display = 'block';
        burger.style.textAlign = "center"   
    }
}
</script>
<x-igreja.footer.footer />
