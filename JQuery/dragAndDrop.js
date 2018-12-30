$(function(){
  $("#cuadradoAzul").draggable();
  $("#cuadradoAmarillo").draggable();
  $("#cuadradoAmarillo").droppable({
    drop: function(event, ui){
      $(this).css("background-color", "red");
    }
  });
});
