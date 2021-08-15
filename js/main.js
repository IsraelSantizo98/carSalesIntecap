/*Theme */
const themeToggleBtn = document.querySelector("#theme-toggle-btn");
const toggleIcon = document.querySelector(".toggle-icon");
themeToggleBtn.addEventListener("change", function () {
    if (this.checked) {
        document.documentElement.setAttribute("data-theme", "dark");
        toggleIcon.classList.remove("fa-moon");
        toggleIcon.classList.add("fa-sun");
        localStorage.setItem("dark-mode", "true");
    } else {
    document.documentElement.setAttribute("data-theme", "light");
    toggleIcon.classList.remove("fa-sun");
    toggleIcon.classList.add("fa-moon");
    localStorage.setItem("dark-mode", "false");
    }
});
//Obtener el modo actual del modo
if (localStorage.getItem("dark-mode") === "true") {
    document.documentElement.setAttribute("data-theme", "dark");
    toggleIcon.classList.remove("fa-moon");
    toggleIcon.classList.add("fa-sun");
} else {
    document.documentElement.setAttribute("data-theme", "light");
    toggleIcon.classList.remove("fa-sun");
    toggleIcon.classList.add("fa-moon");
}
/* GLIDER */
window.addEventListener('load', function(){
    //Elemento donde queremos agregar el carousel y la opcion como queres tener visualmente el carousel
    new Glider(document.querySelector('.container-carousel'), {
        //Cuantos slides se muestran
        slidesToShow: 1,
        //Al presionar la flecha cuandos slides avanzar
        slidesToScroll: 1,
        //Si se activa que se puede mover con el dedo (celular)
        draggable: true,
        //Indicadores (carousel-indicadores)
        dots: '.carousel-indicadores',
        arrows: {
            prev: '.flecha-anterior',
            next: '.flecha-siguiente'
        },
        responsive: [
            {
            // screens greater than >= 775px
            breakpoint: 768 ,
            settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 1,
            slidesToScroll: 1
            }
            },{
                // screens greater than >= 1024px
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
        ]
    });
});