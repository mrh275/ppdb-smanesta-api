require("./bootstrap");

// Toggle Menu
let hMenu = document.querySelector(".toggle-menu");
hMenu.addEventListener("click", function () {
    if (!hMenu.classList.contains("show")) {
        this.classList.add("show");
        document.querySelector(".nav-menu").classList.add("show");
        document.querySelector(".navbar").classList.add("show");
    } else {
        this.classList.remove("show");
        document.querySelector(".nav-menu").classList.remove("show");
        document.querySelector(".navbar").classList.remove("show");
    }
});

// Toggle dark mode
const toggleSwitch = document.querySelector("#toggle-darkMode");
toggleSwitch.addEventListener("click", () => {
    document.body.classList.toggle("dark");
});

// Fasilitas Carousel
document.addEventListener("DOMContentLoaded", function () {
    var splide = new Splide(".splide", {
        type: "loop",
        perPage: 2,
        perMove: 2,
        arrows: false,
        classes: {
            pagination: "splide__pagination fasilitas-pagination",
            page: "splide__pagination__page fasilitas-page",
        },
    });
    splide.mount();
});
