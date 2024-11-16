document.addEventListener('DOMContentLoaded', function() {
    // Añadir clase para activar animación
    const misionCard = document.querySelector('.mision-card');
    if (misionCard) {
        misionCard.classList.add('animate');
    }

    // Efecto hover para el botón
    const returnButton = document.querySelector('.return-button');
    if (returnButton) {
        returnButton.addEventListener('mouseover', function() {
            this.classList.add('hover-effect');
        });
        returnButton.addEventListener('mouseout', function() {
            this.classList.remove('hover-effect');
        });
    }
});
