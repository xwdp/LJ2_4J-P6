// Function to create independent slideshow functionality
function createSlideshow(containerClass, dotClass) {
    let slideIndex = 1;
    const container = document.querySelector(containerClass);
    const slides = container.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName(dotClass);

    function showSlides(n) {
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        
        // Hide all slides
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        
        // Remove active class from all dots
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        
        // Display current slide and mark corresponding dot as active
        if (slides[slideIndex-1]) {
            slides[slideIndex-1].style.display = "block";
        }
        if (dots[slideIndex-1]) {
            dots[slideIndex-1].className += " active";
        }
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    // Initial display
    showSlides(slideIndex);

    // Auto-advance slides every 5 seconds
    setInterval(plusSlides, 5000, 1);

    // Return functions to be attached to buttons
    return { plusSlides, currentSlide };
}

// Initialize slideshows when page loads
document.addEventListener('DOMContentLoaded', () => {
    const slideshow1 = createSlideshow('.slideshow-container-1', 'dot-1');
    const slideshow2 = createSlideshow('.slideshow-container-2', 'dot-2');
    const slideshow3 = createSlideshow('.slideshow-container-3', 'dot-3');

    // Attach global functions for each slideshow
    window.plusSlides1 = slideshow1.plusSlides;
    window.currentSlide1 = slideshow1.currentSlide;
    window.plusSlides2 = slideshow2.plusSlides;
    window.currentSlide2 = slideshow2.currentSlide;
    window.plusSlides3 = slideshow3.plusSlides;
    window.currentSlide3 = slideshow3.currentSlide;
});