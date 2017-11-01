$(function () 
{
    setNavigation();
});

/** 
Setting an active menu item based on the current URL
*/
function setNavigation() 
{
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");    
    path = decodeURIComponent(path);

    $(".nav a").each(function () {
        var href = $(this).attr('href');
        if (path.substr(path.lastIndexOf('/')+1) === href.substr(href.lastIndexOf('/')+1)) {
            $(this).closest('li').addClass('active');
        }
    });
}