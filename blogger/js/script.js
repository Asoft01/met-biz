/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "400px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


$(".readmore-link").click(function (e) {
    // record if our text is expanded
    var isExpanded = $(e.target).hasClass("expand");

    //close all open paragraphs
    $(".readmore.expand").removeClass("expand");
    $(".readmore-link.expand").removeClass("expand");

    // if target wasn't expand, then expand it
    if (!isExpanded) {
        $(e.target).parent(".readmore").addClass("expand");
        $(e.target).addClass("expand");
    }
});

/* Open when someone clicks on the span element */
function openPop() {
    document.getElementById("myPopUp").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closePop() {
    document.getElementById("myPopUp").style.width = "0%";
}




$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 50,
    nav: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})


const toggleSearch = document.querySelector("#toggle-search")
const formSearch = document.querySelector(".form-search-1")

toggleSearch.addEventListener("click", function () {
    formSearch.classList.toggle("toggle-form-search")
})

$('#toggle-search').click(function () {
    // $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-search fa-times');
});
