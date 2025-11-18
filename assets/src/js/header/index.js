
window.addEventListener('scroll', function() {
    const header = document.getElementById('masthead');
    
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});







// const close = document.getElementById('close-btn');
// const hamburger_input = document.getElementById('hamburger-input');
// const body = document.body;
// const overlay = document.getElementById('menu-overlay');

// close.addEventListener('click', function(e) {
//     hamburger_input.checked = false; // Unchecks the checkbox
//     overlay.style.display = 'none';
//     body.style.overflow = 'auto';
// });



hamburger_input.addEventListener('change', function(e) {
    if (hamburger_input.checked) {
        body.style.overflow = 'hidden'; // Disable scrolling when checked
        overlay.style.display = 'block'; // Show overlay
    } else {
        body.style.overflow = 'auto'; // Enable scrolling when unchecked
        overlay.style.display = 'none';
    }
});

