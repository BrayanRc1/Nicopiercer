const vistaUsuario = document.querySelector('.perfil'); // Selecciona el contenedor del perfil
const botonCerrarPerfil = vistaUsuario.querySelector('.fa-times'); // Botón de cerrar

// Al hacer clic en el icono de usuario, muestra el perfil
document.querySelector('.fa-user').onclick = (event) => {
    event.preventDefault();
    vistaUsuario.style.display = 'flex'; // Muestra el perfil
};

// Código para cerrar la vista de perfil con la X
botonCerrarPerfil.onclick = () => {
    vistaUsuario.style.display = 'none'; // Oculta el perfil al cerrar
};