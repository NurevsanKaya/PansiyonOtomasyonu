const slides = document.querySelector('.slides');
const totalSlides = document.querySelectorAll('.slide').length;
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

let currentIndex = 0;

function updateSliderPosition() {
    const offset = -currentIndex * 100;
    slides.style.transform = `translateX(${offset}%)`;
}

prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
    updateSliderPosition();
});

nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
    updateSliderPosition();
});
