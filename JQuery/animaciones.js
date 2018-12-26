$("#circulo").click(function(){
  $(this).animate({
    width:"400px",
    height:"400px",
    marginLeft:"150px",
  }, 2000, function(){
    $(this).css("background-color", "red");
  });
});
