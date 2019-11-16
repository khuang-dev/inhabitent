document.addEventListener("DOMContentLoaded", function () {
});
const searchIcon = document.getElementById("search-icon");
const searchField = document.getElementById("search-field");

searchIcon.addEventListener("click", function(){
    searchField.classList.toggle("search-toggle");
})

