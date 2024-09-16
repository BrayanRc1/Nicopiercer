const vistaCalendario = document.querySelector('.calendario'); // Selecciona el contenedor del calendario
const botonCerrarCalendario = vistaCalendario.querySelector('.fa-times'); // Botón de cerrar

// Al hacer clic en el icono de calendario, muestra el calendario
document.querySelector('.fa-calendar').onclick = (event) => {
    event.preventDefault();
    vistaCalendario.style.display = 'flex'; // Muestra el calendario
};

// Código para cerrar la vista de perfil con la X
botonCerrarCalendario.onclick = () => {
    vistaCalendario.style.display = 'none'; // Oculta el calendario al cerrar
};