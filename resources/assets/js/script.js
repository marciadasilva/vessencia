window.onload = function() {

  const items = document.querySelectorAll('.item');

  items.forEach(item => (changeBackgroundColor(item)));

};

function changeBackgroundColor(item){
  const color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
  item.style.backgroundColor = color;
}
