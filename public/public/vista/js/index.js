document.getElementById('thumb').onmousemove = function(e) {
  $(".full").addClass('active');
  var x = e.offsetX == undefined ? e.layerX : e.offsetX;
  var y = e.offsetY == undefined ? e.layerY : e.offsetY;
  percentX = x/($("#thumb").width()/100);
  percentY = y/($("#thumb").height()/100);
  fullX = percentX * ($(".full img").width()/100) - $(".full").width()/2;
  fullY = percentY * ($(".full img").height()/100) - $(".full").height()/2;
  console.log(percentX+'% : '+percentY+'%');
  console.log(fullX+'px : '+fullY+'px');
  $(".full img").css('transform','translateX(-'+fullX+'px) translateY(-'+fullY+'px)');
}
document.getElementById('thumb').onmouseout = function(){
  $(".full").removeClass('active');
}