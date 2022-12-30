{{-- 
    + ---------------------------------- +
    | Componente do carrossel de imagens |
    | presente na página principal.      |
    + ---------------------------------- +
--}}

{{-- CSS e JS do carrossel --}}
<link rel="stylesheet" href="assets/css/igreja/carrossel/carrossel.css">
<script src="assets/js/carousel.js"></script>

<div class="container">
    <button class="arrow-left control" aria-label="Previous image">&#8592;</button>
    <button class="arrow-right control" aria-label="Next image">&#8594;</button>
    <div class="gallery-wrapper">
        <div class="gallery">
            <img class="item" src="/assets/img/igreja/carrossel-adad-grupo.jpg" alt="foto de distribuição de Bíblias">
            <img class="item current-item" src="/assets/img/igreja/carrossel-templo.jpg" alt="foto de distribuição de Bíblias">
            <img class="item" src="/assets/img/igreja/carrossel-adad-faixa.jpg"
                alt="foto de distribuição de Bíblias">
            <img class="item" src="/assets/img/igreja/carrossel-lideranca.jpeg" alt="foto de distribuição de Bíblias">
            <img class="item" src="/assets/img/igreja/carrossel-biblia.jpeg" alt="foto de distribuição de Bíblias">
            <img class="item" src="/assets/img/igreja/carrossel-doacao-roupas.jpg" alt="foto de distribuição de Bíblias">
            <img class="item" src="/assets/img/igreja/carrossel-adad-bandeiras.jpeg" alt="foto de distribuição de Bíblias">
        </div>
    </div>
</div>

{{-- Script do carrossel --}}
<script>
    slide();
</script>
