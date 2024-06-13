const menu = document.querySelector('.hamburguesa');
const navegacion = document.querySelector('.navegacion');
const imagenes = document.querySelectorAll('img');
const btnTodos = document.querySelector('.todos');
const btnPlatos = document.querySelector('.platos');
const btnCorreas = document.querySelector('.correas');
const btnJuguetes = document.querySelector('.juguetes');
const btnCamas = document.querySelector('.camas');
const contenedorProductos = document.querySelector('.productos');
document.addEventListener('DOMContentLoaded',()=>{
    eventos();
    productos();
});

const eventos = () =>{
    menu.addEventListener('click',abrirMenu);
}

const abrirMenu = () =>{
     navegacion.classList.remove('ocultar');
     botonCerrar();
}

const botonCerrar = () =>{
    const btnCerrar = document.createElement('p');
    const overlay  = document.createElement('div');
    overlay.classList.add('pantalla-completa');
    const body = document.querySelector('body');
    if(document.querySelectorAll('.pantalla-completa').length > 0) return;
    body.appendChild(overlay);
    btnCerrar.textContent = 'x';
    btnCerrar.classList.add('btn-cerrar');

    // while(navegacion.children[5]){
    //     navegacion.removeChild(navegacion.children[5]);
    // }
    navegacion.appendChild(btnCerrar);   
    cerrarMenu(btnCerrar,overlay);
    
}

const observer = new IntersectionObserver((entries, observer)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                const imagen = entry.target;
                imagen.src = imagen.dataset.src;
                observer.unobserve(imagen);
            }
        }); 
});


imagenes.forEach(imagen=>{
   
    observer.observe(imagen);
});

const cerrarMenu = (boton, overlay) =>{
    boton.addEventListener('click',()=>{
        navegacion.classList.add('ocultar');
        overlay.remove();
        boton.remove();
    });

    overlay.onclick = function(){
        overlay.remove();
        navegacion.classList.add('ocultar');  
        boton.remove();
    }
}

const productos = () =>{
    let productosArreglo = [];
    const productos = document.querySelectorAll('.producto');

    productos.forEach(producto=> productosArreglo = [...productosArreglo,producto]);

    const platos = productosArreglo.filter(ensalada=> ensalada.getAttribute('data-producto') === 'plato');
    const correas = productosArreglo.filter(correa => correa.getAttribute('data-producto') === 'correa');
    const juguetes = productosArreglo.filter(juguete => juguete.getAttribute('data-producto') === 'juguete');
    const camas = productosArreglo.filter(cama=> cama.getAttribute('data-producto') === 'cama');

    mostrarProductos(platos, correas, juguetes, camas, productosArreglo);

}

const mostrarProductos = (platos, correas, juguetes, camas, todos) =>{
    btnPlatos.addEventListener('click', ()=>{
        limpiarHtml(contenedorProductos);
        platos.forEach(ensalada=> contenedorProductos.appendChild(ensalada));
    });

    btnCorreas.addEventListener('click', ()=>{
        limpiarHtml(contenedorProductos);
        correas.forEach(correa=> contenedorProductos.appendChild(correa));
    });

    btnJuguetes.addEventListener('click', ()=>{
        limpiarHtml(contenedorProductos);
        juguetes.forEach(juguete=> contenedorProductos.appendChild(juguete));
    });
    btnCamas.addEventListener('click', ()=>{
        limpiarHtml(contenedorProductos);
        camas.forEach(cama=> contenedorProductos.appendChild(cama));
    });
    btnTodos.addEventListener('click',()=>{
        limpiarHtml(contenedorProductos);
        todos.forEach(todo=> contenedorProductos.appendChild(todo));
    });
}

const limpiarHtml = (contenedor) =>{
    while(contenedor.firstChild){
        contenedor.removeChild(contenedor.firstChild);
    }
}