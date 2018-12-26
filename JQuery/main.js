var numFiguras = 1;

$(".figura").mouseover(function(){
  cambioColor($(this));
});

$(".figura").click(function(){
  $(this).fadeOut("slow", function(){
    numActuales = numFiguras
    for(i = 0; i<numActuales*2; i++){
      crearFigura();
    }
    numFiguras--;
  });
});

function randomColor(){
    return Math.floor(Math.random() * 256);
}

function cambioColor(figura){
  var rColor = randomColor();
  var gColor = randomColor();
  var bColor = randomColor();
  figura.css("background-color", "rgb("+rColor+","+gColor+","+bColor+")");
}

function crearFigura(){
  numFiguras++;
  var rColor = randomColor();
  var gColor = randomColor();
  var bColor = randomColor();

  var $nuevaFigura = $('<div class="figura cuadrado_rojo"></div>');
  $nuevaFigura.css("background-color", "rgb("+rColor+", "+gColor+", "+bColor+")");
  $("#contenedor").append($nuevaFigura);
  $nuevaFigura.mouseover(function(){cambioColor($(this))});
  $nuevaFigura.click(function(){
    $(this).fadeOut("slow", function(){
      numActuales = numFiguras
      for(i = 0; i<numActuales*2; i++){
        crearFigura();
      }
      numFiguras--;
    });
  });
}
