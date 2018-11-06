$(function() {

    $(document).ready(function(){
        $(".toolbar_nav_list").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top -90}, 1200);
        });
    });


//    -----------------form----------------

    
});
