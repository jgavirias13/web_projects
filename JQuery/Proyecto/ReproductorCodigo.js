$(function(){
  $(".boton").hover(function(){
    $(this).addClass("botonMarcado");
  }, function(){
    $(this).removeClass("botonMarcado");
  });

  $(".boton").click(function(){
    $(this).toggleClass("botonEnfocado");
    $(this).removeClass("botonMarcado");
    var panelId = $(this).attr("id") + "Panel";
    $("#"+panelId).toggleClass("panelOculto");
    var numeroPanelesActivos = 4-$(".panelOculto").length;
    $(".panel").width(
      ($(window).width()/numeroPanelesActivos)-10
    );
  });

  $(".panel").height(
    $(window).height()-$("#encabezado").height()-15
  );
  $(".panel").width(
    ($(window).width()/2)-10
  );

  $("textarea").on("change keyup paste", function(){
    actualizarSalida();
  });

  function actualizarSalida(){
    $("#outputPanel").contents().find("html").html(
      "<html>"+
      "<head>"+
      "<style>"+
      $("#cssPanel").val()+
      "</style>"+
      "</head>"+
      "<body>"+
      $("#htmlPanel").val()+
      "</body>"
    );
    var ifrm = document.getElementById("outputPanel");
    ifrm.contentWindow.eval($("#javascriptPanel").val());
  };
  actualizarSalida();
});
