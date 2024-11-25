// Filtrado de la Galería de Fotos
$(document).ready(function () {
    // Botón de filtro de galería
    $(".filter-button").click(function () {
        var filterValue = $(this).attr('data-filter');

        if (filterValue == "all") {
            $(".gallery-item").show('1000');
        } else {
            $(".gallery-item").not('.' + filterValue).hide('3000');
            $(".gallery-item").filter('.' + filterValue).show('3000');
        }

        // Actualización de la clase activa en el botón de filtro
        $(".filter-button").removeClass("active");
        $(this).addClass("active");
    });
});

// Despliegue del menú de navegación en dispositivos móviles
$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $("#navbarNav").toggleClass("show");
    });
});

// Desplazamiento suave a las secciones al hacer clic en los enlaces del menú
$("a.nav-link").on('click', function (event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top - 70 // Ajuste de desplazamiento
        }, 800, function () {
            window.location.hash = hash;
        });
    }
});
