function handleDragStart(e){
  this.style.opacity = '0'; //Cambiar la opacidad del elemento al iniciar el arrastre
}

function handleDragOver(e){
  if (e.preventDefault){
    e.preventDefault();

var cols = document.querySelectorAll('#columns column');
[].forEach.call(cols, function(col){
  col.addEventListener('dragstart', handleDragStart, false);
});
