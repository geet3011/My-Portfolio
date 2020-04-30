$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 200) {
            $(".fixed").addClass("active-scroll");
        } else {

           $(".fixed").removeClass("active-scroll");
        }
    });
});
