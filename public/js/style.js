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
    divPresent = document.getElementById(divId + '_folder_add');
    divForm = document.getElementById(divId + '_folder_form');
    if (divPresent.style.display == 'none') {
        divPresent.style.display = 'block';
        divForm.style.display = 'none';
    } else divPresent.style.display = 'none';
}
var divPrecedent = document.getElementById('div_0_folder_add');
function visibiliteFolder(divId) {
    divPresent = document.getElementById(divId + '_form');
    divAdd = document.getElementById(divId + '_add');
    if (divPresent.style.display == 'none') {
        divAdd.style.display = 'none';
        divPresent.style.display = 'block';
    } else divPresent.style.display = 'none';
}

// Requete pour afficher les file/folder modifiés d'un projet
$(function () {
    $("select").change(function () {
        $.ajax({
            type: 'GET',
            url: '/project',
            timeout: 3000,
            success: function (data) {
                var i = 1; // compteur initialisé à 1 car 0 correspond au nombre d'index
                function myLoopASubFolderModif(data) { // creation de la boucle function Array contenant aJsId[]
                    setTimeout(function () {
                        var j = 1; // compteur initialisé à 1 car 0 correspond au nombre d'index
                        function myLoopAJsId(data) { // creation de la boucle function contenant les JsId
                            setTimeout(function () {
                                if (!$('#' + data[j]).hasClass('d-none')) {
                                    $('#' + data[j]).trigger('click'); // Click sur la div si elle est fermé
                                }
                                j++; // increment le compteur
                                if (j < data[0]) { // Si le compteur < nombre d'index, appel de la fonction à nouveau
                                    myLoopAJsId(data); // ..  rappel de la fonction
                                } // ..  setTimeout()
                            }, 100)
                        }
                        myLoopAJsId(data[i]);
                        i++; // increment the counter
                        console.log(data);
                        if (i < data[0] + 1) {
                            myLoopASubFolderModif(data);
                        }
                    }, 500)
                }
                myLoopASubFolderModif(data);
            },
            error: function () {
                alert('La requête n\'a pas abouti');
            }
        });
    }
    );
});

