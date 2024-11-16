
const changeColorButton = document.querySelector('.change-color-button');

// Seleccionar la tarjeta de visión
const visionCard = document.querySelector('.vision-card');

// Función para cambiar el color de fondo de la tarjeta de visión
function changeCardColor() {
    const randomColor = Math.floor(Math.random()*16777215).toString(16);
    visionCard.style.backgroundColor = `#${randomColor}`;
}

// Evento de clic en el botón para cambiar el color de la tarjeta de visión
changeColorButton.addEventListener('click', changeCardColor);

// Ejemplo: Agregar un efecto de transición al cambiar el color de fondo
visionCard.style.transition = 'background-color 0.5s ease';

// Ejemplo: Añadir una clase de animación al hacer clic en la tarjeta
visionCard.addEventListener('click', () => {
    visionCard.classList.toggle('animated');
});
