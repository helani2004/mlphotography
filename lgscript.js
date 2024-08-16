// Get elements
//const modal = document.getElementById('loginModal');
//const btn = document.getElementById('loginButton');
//const span = document.getElementsByClassName('close')[0];

// Open the modal
//btn.onclick = function() {
//    modal.style.display = 'block';
//}

// Close the modal
//span.onclick = function() {
//    modal.style.display = 'none';
//}

// Close the modal when clicking outside of it
//window.onclick = function(event) {
//    if (event.target === modal) {
//        modal.style.display = 'none';
//    }
//}

//document.addEventListener("DOMContentLoaded", function() {
//    const loginButton = document.getElementById('loginButton');
  //  const modal = document.getElementById('loginModal');
    //const close = document.querySelector('.close');

    //loginButton.onclick = function() {
      //  modal.style.display = "block";
    //}

    //close.onclick = function() {
      //  modal.style.display = "none";
    //}

    //window.onclick = function(event) {
      //  if (event.target === modal) {
        //    modal.style.display = "none";
        //}
    //}
//});

document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.getElementById('loginButton');
    const modal = document.getElementById('loginModal');
    const close = document.querySelector('.close');

    loginButton.onclick = function() {
        modal.style.display = "block";
    }

    close.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
});



