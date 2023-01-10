document.addEventListener("DOMContentLoaded", function () {
    // Handler when the DOM is fully loaded
    console.log("js executed...");
});

//
// Primary Menu
// toggle mobile menu on click
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
const activeItem = document.querySelector(".current_page_item a");

menuItems.forEach((item) => {
    item.addEventListener("mouseover", function () {
        activeItem.classList.add("!opacity-50");
    });
    item.addEventListener("mouseout", function () {
        activeItem.classList.remove("!opacity-50");
    });
});
