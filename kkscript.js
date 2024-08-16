// Get elements
const modal = document.getElementById('galleryModal');
const link = document.getElementById('openGallery');
const span = document.getElementsByClassName('close')[0];

// Open the modal
link.onclick = function(event) {
    event.preventDefault(); // Prevent default link behavior
    modal.style.display = 'block';
}

// Close the modal
span.onclick = function() {
    modal.style.display = 'none';
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}