window.onload = function () {

    const items = Array.from(document.querySelectorAll('.navbar-admin .navbar-nav li a'));

    var url_atual = window.location.href;

    if (url_atual.search("category") != -1){
        items[1].setAttribute('class', 'item-checked')
    } else if (url_atual.search("menu") != -1){
        items[2].setAttribute('class', 'item-checked')
    } else if (url_atual.search("services") != -1){
        items[3].setAttribute('class', 'item-checked')
    } else if (url_atual.search("company") != -1){
        items[4].setAttribute('class', 'item-checked')
    } else if (url_atual.search("help") != -1){
        items[5].setAttribute('class', 'item-checked')
    } else{
        items[0].setAttribute('class', 'item-checked')
    }
};

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


// Show image on select file

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            const panel = document.getElementById('file-selected');
            panel.setAttribute('src', e.target.result);
            panel.setAttribute('width',150);
            panel.setAttribute('height', 200);
        };
        document.getElementById('file-selected').removeAttribute('style');
        reader.readAsDataURL(input.files[0]);
    }
}