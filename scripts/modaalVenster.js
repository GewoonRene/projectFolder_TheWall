var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

// SHOW
btn.onclick = function() {
    modal.style.display = "block";
};

// HIDE
span.onclick = function() {
    modal.style.display = "none";
};

// Buiten de Modaalvenster
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#upload')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}