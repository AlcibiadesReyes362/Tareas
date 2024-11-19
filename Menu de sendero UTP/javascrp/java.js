document.addEventListener("DOMContentLoaded", function() {
    const carrusel = document.querySelector(".carrusel");
    const carruselInner = document.querySelector(".carrusel-inner");
    const imagenes = document.querySelectorAll(".carrusel-inner img");
    const botonAnterior = document.getElementById("anterior");
    const botonSiguiente = document.getElementById("siguiente");
    let indiceActual = 0;
  
    // Botón Anterior
    botonAnterior.addEventListener("click", function() {
      if (indiceActual > 0) {
        imagenes[indiceActual + 2].style.display = "none";
        indiceActual--;
        imagenes[indiceActual].style.display = "block";
      }
    });
  
    // Botón Siguiente
    botonSiguiente.addEventListener("click", function() {
      if (indiceActual < imagenes.length - 3) {
        imagenes[indiceActual].style.display = "none";
        indiceActual++;
        imagenes[indiceActual + 2].style.display = "block";
      }
    });
  });
  