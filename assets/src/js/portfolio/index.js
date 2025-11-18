
document.addEventListener('DOMContentLoaded', function() {
    let carousel = document.getElementById('carouselExampleCaptions');
    let totalSlides = document.querySelectorAll('#carouselExampleCaptions .carousel-item').length;
    let active_number = document.querySelector('#active-number');
    let total_number = document.querySelector('#total-number');

    // Set the total number of slides
    total_number.innerHTML = totalSlides;

    // Function to update the active slide text
    function updateSlideNumber(event) {
        let activeSlideIndex = event.to + 1; // 'event.to' gives 0-based index, so add 1 to make it human-readable
        active_number.innerHTML = activeSlideIndex; // Update the active number on slide change
    }

    // Attach event listener to the carousel
    carousel.addEventListener('slide.bs.carousel', function(event) {
        updateSlideNumber(event);
    });

    // Initialize with the first slide (as on page load, no event is triggered)
    let initialActiveSlideIndex = document.querySelector('#carouselExampleCaptions .carousel-item.active');
    let initialIndex = Array.from(initialActiveSlideIndex.parentElement.children).indexOf(initialActiveSlideIndex) + 1;

    active_number.innerHTML = initialIndex; // Set initial active slide number
    total_number.innerHTML = totalSlides;   // Set total number of slides
});




