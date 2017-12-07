//Get modal element
var modal = document.getElementsByClassName('simpleModal')[0];
//Get open modal button
var modalBtn = document.getElementById('modalBtn');
//Get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

//listen for open Click
modalBtn.addEventListener('click', openModal);

//listen for close Click
closeBtn.addEventListener('click', closeModal);
//Listen for outside Click

window.addEventListener('click', clickOutside);

//function to open modal
function openModal(){
  modal.style.display = 'block';
}

//function to close modal
function closeModal(){
  modal.style.display = 'none';
}

//function to close modal if outside clickOutside
function clickOutside(e){
  if(e.target == modal){
      modal.style.display = 'none';
  }
}
