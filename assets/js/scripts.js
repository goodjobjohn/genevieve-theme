document.addEventListener("DOMContentLoaded", function () {
    // Handler when the DOM is fully loaded
    console.log("js executed...");
});

//
// Navigation toggle
//
window.addEventListener("load", function () {
    let main_navigation = document.querySelector("#nav-wrapper");
    document
        .querySelector("#primary-menu-toggle")
        .addEventListener("click", function (e) {
            e.preventDefault();
            main_navigation.classList.toggle("show-menu");
        });
});
