var now = new Date().getTime();

async function cambiarForma(){
    var forma = document.getElementById("forma");
    forma.style.display = "none";
    var finish = new Date().getTime();
    var difference = (finish - now)/1000;
    console.log(difference);

    var parrafoRespuesta = document.getElementById("tiempoSpan");
    parrafoRespuesta.innerText = difference;

    var msToSleep = Math.random() * 2000;

    await sleep(msToSleep);
    
    aparecerForma(forma);

    now = new Date().getTime();
}

function aparecerForma(forma){
    forma.style.display = "block";
    var colores = ["red", "black", "blueviolet", "yellow"];

    var color = Math.floor(Math.random() * colores.length);
    var top = Math.random() * 400;
    var left = Math.random() * 400;
    var width = Math.random() * 161 + 100;
    var height = Math.random() * 161 + 100;
    var radius = Math.random() * 51;

    forma.style.top = top + "px";
    forma.style.left = left + "px";
    forma.style.width = width + "px";
    forma.style.height = height + "px";
    forma.style.borderRadius = radius + "%";
    forma.style.backgroundColor = colores[color];
}

function sleep(ms){
    return new Promise(resolve => setTimeout(resolve, ms));
}