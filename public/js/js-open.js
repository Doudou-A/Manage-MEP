
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
