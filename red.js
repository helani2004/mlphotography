document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way
    
    var username = document.getElementById('uname').value;
    var password = document.getElementById('psw').value;

    if (username === 'Admin' && password === '123Malcome') {
        window.location.href = 'client.html'; // Redirect to client.html
    } else {
        alert('Invalid Username or Password'); // Display an error message
    }
});
