document.addEventListener('DOMContentLoaded', function () {
    $("#form").submit(function () {
        var arForm = $("#form").serialize();
        $.ajax({
            url: "contact.php",
            type: "post",
            data: arForm,
            success: function (data) {
                var keyVal = $.parseJSON(data);
                if (keyVal.msgSuccess == "") {
                    $(".alert-danger").html(keyVal.msg);
                    $(".alert-danger").css({ "display": "block", "color": "red", "textAlign": "center", "border": "solid 1px red", "padding": "5px" });

                } else {
                    $(".alert-danger").html(keyVal.msg);
                    $(".alert-danger").css("display", "block");
                    $(".alert-danger").css({ "display": "block", "color": "green", "textAlign": "center", "border": "solid 1px green", "padding": "5px" });
                    $("form").trigger("reset");
                }
            }
        });

        return false;
    });

        // SMOOTH SCROLLING

        $('.smooth-scroll').on('click', function(e) {
            if(this.hash !== '') {
                e.preventDefault();
                $('nav').removeClass('show');
                const hash = this.hash;
    
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 20
                }, 800)
            }
        })
    


})


/* Responsive Menu */ 
const toggleMenu = document.querySelector('.toggle__menu');
const nav = document.querySelector('nav');

if(toggleMenu) {
    toggleMenu.addEventListener('click', () => {
        nav.classList.toggle('show');
    })
}

