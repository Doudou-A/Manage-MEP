/* Requêtes Ajax */
$(function () {
    $('.js-close').click(function (event) {
        var divClose = "." + this.id + "_close";
        var divOpen = "." + this.id + "_open";
        var divRequest = "#" + this.id + "_request";
        $.ajax({
            type: 'GET',
            url: '/sub_folder/' + this.id + '/request',
            timeout: 3000,
            success: function (data) {
                $(divRequest).html(data.html);
                /* $(divClose).html(''); */
                $(divClose).removeClass("d-block").addClass("d-none");
                $(divOpen).removeClass("d-none").addClass("d-block");
            },
            error: function () {
                alert('La requête n\'a pas abouti');
            }
        });
    });
});
$(function () {
    $('.js-open').click(function (event) {
        /* var divClose = document.getElementById(this.id + "_close");
        var divOpen = document.getElementById(this.id + "_open");
        var divRequest = document.getElementById(this.id + "_request"); */
        var divClose = "." + this.id + "_close";
        var divOpen = "." + this.id + "_open";
        var divRequest = "#" + this.id + "_request";
        $.ajax({
            success: function () {
                /* $(divClose).html(''); */
                $(divClose).removeClass("d-none").addClass("d-block");
                $(divOpen).removeClass("d-block").addClass("d-none");
                $(divRequest).html('');
            },
            /* divOpen.classList.remove("d-block");
            divOpen.className("d-none");
            divClose.innerHTML = '+';
            divOpen.innerHTML = ''; 
            divRequest.innerHTML = ''; */
        });
    });
});

/* Display formulaire */
var divPrecedent = document.getElementById('div_form0');
function visibilite(divId) {
    divPresent = document.getElementById(divId);
    if (divPresent.style.display == 'none')
        divPresent.style.display = 'block';
    else
        divPresent.style.display = 'none';
}