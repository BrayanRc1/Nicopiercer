//Codigo para mostar y cerrar  productos
const vista_preliminar = document.querySelector('.vista_producto');
const vista_caja = vista_preliminar.querySelectorAll('.vista_previa');

document.querySelectorAll('.contenedor_principal .caja').forEach(caja =>{
    caja.onclick = (event) => {
        event.preventDefault();
    vista_preliminar.style.display = 'flex';
        const nombre = caja.getAttribute('data-nombre');
        vista_caja.forEach(preview =>{
            const target = preview.getAttribute('data-target');
            if(nombre === target){
                preview.style.display = 'block';
            } else {
                preview.style.display = 'none';
            }
        });
    };
});

//Codigo para cerrar la vista del producto con la X
vista_caja.forEach(close =>{
    close.querySelector('.fa-times').onclick = () =>{
        close.classList.remove('active');
        vista_preliminar.style.display = 'none';
    }
});