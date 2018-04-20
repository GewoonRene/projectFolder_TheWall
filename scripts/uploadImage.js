// =============================================================
// MODAL
const modal = document.getElementById('myModal');
let btn = document.getElementById('upload_btn');
const span = document.getElementsByClassName("close")[0];

// SHOW
btn.onclick = function() {
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
// PREVIEW IMAGE
function readURL(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();

        reader.onload = function (e) {
            $('#upload')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}