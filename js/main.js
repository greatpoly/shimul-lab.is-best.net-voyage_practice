/* adding active class to nav link which is the current page */
$(document).ready(function() {
    $("nav [href]").each(function() {
        if (this.href === window.location.href) {
            $(this).addClass("active");
        }
    });
});
/* ends */