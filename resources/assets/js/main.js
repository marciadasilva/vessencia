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

// Slider
var sliderImages = document.querySelectorAll(".slide"),
arrowLeft = document.querySelector("#arrow-left"),
arrowRight = document.querySelector("#arrow-right"),
current = 0;

// Clear all images
function reset() {
    for (var i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.display = "none";
    }
}

// Init slider
function startSlide() {
    reset();
    sliderImages[0].style.display = "block";
}

// Show prev
function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = "block";
    current--;
}

// Show next
function slideRight() {
    reset();
    sliderImages[current + 1].style.display = "block";
    current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
    if (current === 0) {
        current = sliderImages.length;
    }
    slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
    if (current === sliderImages.length - 1) {
        current = -1;
    }
    slideRight();
});

startSlide();