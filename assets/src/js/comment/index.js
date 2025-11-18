document.addEventListener('DOMContentLoaded', function() {
    // Check if the comment form is present
    var commentForm = document.querySelector('#commentform'); // WordPress comment form ID

    if (commentForm) {
        commentForm.addEventListener('submit', function(event) {
            // Fields for validation
            var commentField = document.getElementById('comment'); // Comment textarea field ID
            var authorField = document.getElementById('author');   // Name field ID
            var emailField = document.getElementById('email');     // Email field ID

            // Check comment field first
            if (!commentField.value.trim()) {
                alert('Please enter a comment.');
                event.preventDefault(); // Prevent form submission
                return; // Stop here, wait for comment to be filled
            }

            // If comment is filled, check author (name) field
            if (!authorField.value.trim()) {
                alert('Please enter your name.');
                event.preventDefault(); // Prevent form submission
                return; // Stop here, wait for name to be filled
            }

            // If name is filled, check email field
            if (!emailField.value.trim()) {
                alert('Please enter your email.');
                event.preventDefault(); // Prevent form submission
                return; // Stop here, wait for email to be filled
            }

            // If all fields are filled, show approval message for guest users
            if (authorField.value) {
                alert('Thank you for your comment! Your comment is awaiting approval.');
            }
        });
    }
});
