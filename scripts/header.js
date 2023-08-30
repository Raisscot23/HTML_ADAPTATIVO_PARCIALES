const menu = document.querySelector('.menuHamburguesa');
const navegador = document.querySelector('.navegador');
const body = document.querySelector('body');

document.addEventListener('DOMContentLoaded', ()=>{
    eventos();
})
const eventos = () =>{
    menu.addEventListener('click', abrirMenu);
}


const abrirMenu = () =>{
    navegador.classList.remove('ocultar');
    botoncerrar();
}
console.log(navegador.children)

const botoncerrar = () =>{
    

    const overlay = document.createElement('div');
    const botonCerrar = document.createElement('span');

    if(document.querySelectorAll('fullScreen').length > 0) return

    overlay.classList.add('fullscreen');
    body.appendChild(overlay);

    
    botonCerrar.textContent = 'X';
    botonCerrar.classList.add('botonCerrar');

    navegador.appendChild(botonCerrar);
    cerrarMenu(botonCerrar, overlay);
    
}

const cerrarMenu = (boton, overlay) => {
    boton.addEventListener('click', ()=>{
                    navegador.classList.add('ocultar');
                    overlay.remove();
                    boton.remove();
    });

    overlay.onclick = function(){
                    navegador.classList.add('ocultar');
                    overlay.remove();
                    boton.remove();
    }
}


