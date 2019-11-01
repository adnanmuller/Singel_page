


document.addEventListener('DOMContentLoaded', function(){
  var width=window.innerWidth;
  var height=window.innerHeight;
  console.log(width,height);
  var first= document.getElementById('width');
  var second=document.getElementById('height');
  first.innerHTML=' '+ width +' px';
  second.innerHTML=' '+ height + ' px';
});
