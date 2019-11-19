( function($) {

    document.addEventListener("DOMContentLoaded", function () {

        const searchIcon = document.getElementById("search-icon");
        const searchField = document.getElementById("search-field");
        
        searchIcon.addEventListener("click", function(event){
            event.preventDefault();
            // searchField.classList.toggle("search-toggle");
        
            $(searchField).animate({
                width: 'toggle'
            }, 400);
        })
        
    });


    
})(jQuery);
