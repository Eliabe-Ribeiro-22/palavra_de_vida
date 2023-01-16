function clickMenu() {
    const links = document.querySelector("#links")
    const burger = document.querySelector("#burger")

    if (links.style.display == 'block') {
        links.style.display = 'none';
        burger.style.textAlign = "left"
    }
    else{
        links.style.display = 'block';
        burger.style.textAlign = "center"   
    }
}
