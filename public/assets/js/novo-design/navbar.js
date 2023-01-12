function navSlide() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.links');
    const nav_links = document.querySelectorAll('.links li');
    
    burger.addEventListener('click', () => {
        // Abrir/fechar navbar
        nav.classList.toggle('nav-active');

        // Animar links
        nav_links.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `nav_links 0.5s ease fowards ${index / 7 + 1.5}s`;
            }
        });

        // Animação do menu hambúrguer
        burger.classList.toggle('toggle');
    });
}   

navSlide();