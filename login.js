document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('loginForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const username = document.getElementById('uname').value;
        const password = document.getElementById('psw').value;

        // Check credentials
        if (username === 'Admin' && password === 'Malcome123') {
            // Redirect to admin dashboard
            window.location.href = 'admin.html';
        } else if (username === 'Client' && password === 'client123') {
            // Redirect to client page
            window.location.href = 'client.html';
        } else {
            alert('Invalid Username or Password');
        }
    });
});

