//animate scroll

$('#view-work').on('click', function () {
    const images = $('#images').position().top;

    $('html, body').animate(
        {
            scrollTop: images
        },
        900
    );
});

//fade in/ fade out
$("#header").hover(function () {
    $(this).find("h2").fadeOut();
    $(".caption h3").css("color", "gray");
}, function () {
    $(this).find("h2").fadeIn();
});


// enty element dziedziczący
$("footer h3").hover(function () {
    $("footer p:nth-child(3)").css("color", "red");
});

// target only google link + zmiana kursora
$("footer h3").hover(function () {
    $("footer h3").css('cursor', 'pointer');
    $("a[href*='google']").css("font-weight", "bolder").css("color", "#333");
});

//alert dodanie p przed link
$("footer h3").click(function () {
    alert($("footer p").text());
    $("footer a").before("<p class='dt'>Dodany Tekst</p>");
});

//działa tylko gdy zawiera One
$(".caption h3:contains(One)").click(function () {
    $(this).css("color", "red");
});

//dodanie klasy
$("footer").dblclick(function () {
$("footer a").addClass("btn");
});


//koordynaty klikniecia na dokumencie
$(document).click(function(e){
$(".dt").text(e.pageX);
})


