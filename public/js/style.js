/* Requêtes Ajax */
$(function () {
    $('.js-test').click(function (event) {
        var request = "#" + this.id + "_request";
        var idtest = "#" + this.id + "_sign";
        var idmoins = "#" + this.id + "_sign-";
        $.ajax({
            type: 'GET',
            url: '/sub_folder/' + this.id + '/request',
            timeout: 3000,
            success: function (data) {
                console.log(data);
                $(request).html(data.html);
                $(idtest).html('');
                $(idmoins).html('-');
            },
            error: function () {
                alert('La requête n\'a pas abouti');
            }
        });
    });
});
$(function () {
    $('.js-test-moins').click(function (event) {
        var divTest = document.getElementById(this.id + "_sign");
        var divTestMoins = document.getElementById(this.id + "_sign-");
        var divRequest = document.getElementById(this.id + "_request");
        divTest.innerHTML = '+';
        divTestMoins.innerHTML = '';
        divRequest.innerHTML = '';
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