// ──────────────────────────────────────────────────
//   :::::: Apagar y Prender video
// ──────────────────────────────────────────────────

let boton = document.querySelector(".videoOffOn");
boton.textContent = "video Off";

let titulo = document.getElementById('titulo');

let video = document.querySelector(".bg-video");
let x = true;
boton.addEventListener("click", function videoOffOn() {
  if (x === true) {
    video.style.display = "block";
    boton.textContent = "video On";
    titulo.style.zIndex = "9";
    video.play();
    x = false;
  } else if (x === false) {
    video.style.display = "none";
    boton.textContent = "video Off";
    titulo.style.zIndex = "10";
    x = true
  }
});

video.addEventListener("pause", function(){

  video.style.display = "none";
  boton.textContent = "video Off";
  titulo.style.zIndex = "10";

});

// ──────────────────────────────────────────────────
//   :::::: Seleccion de productos
// ──────────────────────────────────────────────────

let taza = document.getElementsByClassName('taza');
let poloche = document.getElementsByClassName('poloche');
let gorra = document.getElementsByClassName('gorra');
let fondo = document.getElementsByClassName('slide');

// ──────────────────────────────────────────────────
//   :::::: colores
// ──────────────────────────────────────────────────

let ponloBlanco = document.getElementsByClassName('blanco-1');
let ponloNegro = document.getElementsByClassName('negro-1');


function tazaD (){

  for (var i = 0; i < poloche.length; i++) {
    poloche[i].style.display = "none";
    gorra[i].style.display = "none";
    taza[i].style.display = "block";
    fondo[0].style.backgroundImage = "url('media/taza/taza-1.png')";
    fondo[1].style.backgroundImage = "url('media/taza/taza-2.png')";
    fondo[2].style.backgroundImage = "url('media/taza/disney.png')";
    fondo[3].style.backgroundImage = "url('media/taza/care.png')";
    fondo[4].style.backgroundImage = "url('media/taza/x.png')";
    fondo[5].style.backgroundImage = "url('media/taza/naruto.png')";
    fondo[6].style.backgroundImage = "url('media/taza/mama.png')";
    fondo[7].style.backgroundImage = "url('media/taza/mother.png')";
    }
  };


function polocheD (){

  for (var i = 0; i < poloche.length; i++) {
    poloche[i].style.display = "block";
    taza[i].style.display = "none";
    gorra[i].style.display = "none";
    fondo[0].style.backgroundImage = "url('media/poloche/polo-1.png')";
    fondo[1].style.backgroundImage = "url('media/poloche/conejo.png')";
    fondo[2].style.backgroundImage = "url('media/poloche/flor.png')";
    fondo[3].style.backgroundImage = "url('media/poloche/negro.png')";
    for (x of ponloBlanco){
      x.style.color = "white";
    }
    fondo[4].style.backgroundImage = "url('media/poloche/im-queen.png')";
    fondo[5].style.backgroundImage = "url('media/poloche/stop-thinking.png')";
    fondo[6].style.backgroundImage = "url('media/poloche/rosado.png')";
    fondo[7].style.backgroundImage = "url('media/poloche/dejen-su-loquera.png')";

    }
  };

  function gorraD (){

    for (var i = 0; i < poloche.length; i++) {
      poloche[i].style.display = "none";
      taza[i].style.display = "none";
      gorra[i].style.display = "block";
      fondo[0].style.backgroundImage = "url('media/gorra/gorra-1.png')";
      fondo[1].style.backgroundImage = "url('media/gorra/gorra-2.png')";
      fondo[2].style.backgroundImage = "url('media/gorra/gorra-1.png')";
      fondo[3].style.backgroundImage = "url('media/gorra/gorra-2.png')";
      fondo[4].style.backgroundImage = "url('media/gorra/gorra-1.png')";
      fondo[5].style.backgroundImage = "url('media/gorra/gorra-2.png')";
      fondo[6].style.backgroundImage = "url('media/gorra/gorra-1.png')";
      fondo[7].style.backgroundImage = "url('media/gorra/gorra-2.png')";

      }
    };
