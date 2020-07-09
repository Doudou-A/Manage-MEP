
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