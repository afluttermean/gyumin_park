$(document).ready(function() {
    $(".gnb_menu>ul>li").mouseenter(function() {
        $(this).find("ul").stop().slideDown("fast");
        $(".nav_bg").stop().slideDown("fast");

    });

    $(".gnb_menu>ul>li").mouseleave(function() {
        $(this).find("ul").stop().slideUp("fast");
        $(".nav_bg").stop().slideUp("fast");
    });
});
$(function() {
    $("form legend").mouseenter(function() {
        $("form input").stop().show("fast");
    });
    $("form input").mouseleave(function() {
        $("form input").stop().hide("fast");
    });
});