document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way
    
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    
    if (!name || !email || !message) {
        alert('Please fill in all fields.');
    } else {
        // Here, you would typically handle the form data, e.g., sending it to a server
        alert('Thank you for your message, ' + name + '!');
        
        // Reset the form after submission for convenience
        this.reset();
    }
});