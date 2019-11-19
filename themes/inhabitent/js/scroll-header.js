( function($) {
    
    document.addEventListener("DOMContentLoaded", function () {

        window.addEventListener("scroll", function(){
            // event.preventDefault();
            const scrollY = window.scrollY;
            const masthead = document.getElementById('masthead');

            if (scrollY > document.getElementById('banner-image').offsetHeight) {
                masthead.classList.add('fixed-header');
                $('.green-header-logo').css("display", "block");
                $('.white-header-logo').css("display", "none");
                $('.fa').css({"color": "#248a83", "text-shadow": "none"});
                
            } else  {
                masthead.classList.remove('fixed-header');
                $('.green-header-logo').css("display", "none");
                $('.white-header-logo').css("display", "block");
                $('.fa').css({"color": "white", "text-shadow": "1px 1px 2px #323232"});
            };
        });
    });
})(jQuery);

