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

// drop all menu items opacity on hover except for current hovered item
const menuItems = document.querySelectorAll("#menu-main a");
menuItems.forEach((item) => {
    item.addEventListener("mouseover", function () {
        menuItems.forEach((item) => {
            item.classList.add("opacity-50");
        });
        this.classList.remove("opacity-50");
    });
    item.addEventListener("mouseout", function () {
        menuItems.forEach((item) => {
            item.classList.remove("opacity-50");
        });
    });
});
