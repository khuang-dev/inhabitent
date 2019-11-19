( function($) {
    
    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener("scroll", function(){
            const scrollY = window.scrollY;
            const masthead = document.getElementById('masthead');

            if (scrollY > document.getElementById('banner-image').offsetHeight) {
                masthead.classList.add('fixed-header');
                $('.green-header-logo').css("display", "block");
                $('.white-header-logo').css("display", "none");
                
            } else  {
                masthead.classList.remove('fixed-header');
                $('.green-header-logo').css("display", "none");
                $('.white-header-logo').css("display", "block");
            };
        });
    });
})(jQuery);

