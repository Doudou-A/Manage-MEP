/* Requêtes Ajax Ajouter les folder/file */
$(function () {
    $('body').on('click', '.js-close', function () {
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

/* Cacher les folder/file */
$(function () {
    $('body').on('click', '.js-open', function () {
        var divClose = "." + this.id + "_close";
        var divOpen = "." + this.id + "_open";
        var divRequest = "#" + this.id + "_request";
        $.ajax({
            success: function () {
                $(divClose).removeClass("d-none").addClass("d-block");
                $(divOpen).removeClass("d-block").addClass("d-none");
                $(divRequest).html('');

            },
        });
    });
});

/* Display formulaire */
var divPrecedent = document.getElementById('div_0_add');
function visibiliteAdd(divId) {
    divPresent = document.getElementById(divId+'_folder_add');
    divForm = document.getElementById(divId+'_folder_form');
    if (divPresent.style.display == 'none'){
        divPresent.style.display = 'block';
        divForm.style.display = 'none';
    } else divPresent.style.display = 'none';
}
var divPrecedent = document.getElementById('div_0_folder_add');
function visibiliteFolder(divId) {
    divPresent = document.getElementById(divId+'_form');
    divAdd = document.getElementById(divId+'_add');
    if (divPresent.style.display == 'none'){
        divAdd.style.display = 'none';
        divPresent.style.display = 'block';
    } else divPresent.style.display = 'none';
}
