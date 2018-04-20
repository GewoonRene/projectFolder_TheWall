// =============================================================
// LOGIN
const modal = document.getElementById('myModal');
const myBtn = document.getElementById('login');
const span = document.getElementsByClassName("close")[0];

// SHOW
myBtn.onclick = function() {
    modal.style.display = "block";
};

// HIDE
span.onclick = function() {
    modal.style.display = "none";
};

// HIDE < CLICK OUTSIDE MODAL
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

// =============================================================
// REGISTER
const modal2 = document.getElementById('myModal2');
const btn2 = document.getElementById('register');
const span2 = document.getElementsByClassName("close2")[0];

// SHOW
btn2.onclick = function() {
    modal2.style.display = "block";
};

// HIDE
span2.onclick = function() {
    modal2.style.display = "none";
};

// HIDE < CLICK OUTSIDE MODAL
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
};

