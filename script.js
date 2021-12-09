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
})



// TOGGLE MENU 
const toggleMenu = document.querySelector('.toggle__menu');
const nav = document.querySelector('nav');

toggleMenu.addEventListener('click', () => {
    nav.classList.toggle('open')
    toggleMenu.classList.toggle('open');
})
// END


// SMOOTH SCROLL
document.querySelectorAll('.smooth-scroll').forEach(anchor => {
    anchor.onclick = (e) => {
        e.preventDefault()
        const href = anchor.getAttribute('href')
        const target = document.querySelector(href)
        const to = target.offsetTop
        scrollTo(document.documentElement, to, 500)

        nav.classList.remove('open')
        toggleMenu.classList.remove('open');
    }
})

const scrollTo = (element, to, duration) => {
    let start = element.offsetTop
    let change = to - start
    let currentTime = 0
    let increment = 20;


    const animateScroll = () => {
        currentTime += increment;
        const val = easeInOutQuad(currentTime, start, change, duration);
        element.scrollTop = val;
        if (currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    }

    animateScroll()
}

const easeInOutQuad = (t, b, c, d) => {
    t /= d / 2
    if (t < 1) return c / 2 * t * t + b
    t--
    return -c / 2 * (t * (t - 2) - 1) + b
}

// END



// BACK TO TOP 
const btnTop = document.querySelector('.backtotop');

window.addEventListener('scroll', () => {

    if (window.scrollY > 100) {
        btnTop.classList.add('show');

    } else {
        btnTop.classList.remove('show');
    }
})