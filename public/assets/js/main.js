window.addEventListener("load", function () {
    // Check register last session
    if (sessionStorage.getItem('periodik') == 'true') {
        jumpToUploadFiles();
    } else if (sessionStorage.getItem('orangTua') == 'true') {
        jumpToDataPeriodik()
    } else if (sessionStorage.getItem('biodata') == 'true') {
        jumpToDataOrangTua();
    }
})

// Navbar Animation on Scroll
let navbar = document.querySelector(".navbar");
let offset = 0;
window.addEventListener("scroll", function () {
    let st = window.pageYOffset;
    if (st > offset) {
        navbar.classList.add("fixed-nav");
        // document.querySelector(".scroll-top-btn").classList.add("bottom-20");
        // document.querySelector(".scroll-top-btn").classList.remove("-bottom-10");
    } else {
        navbar.classList.remove("fixed-nav");
        // document.querySelector(".scroll-top-btn").classList.remove("bottom-20");
        // document.querySelector(".scroll-top-btn").classList.add("-bottom-10");
    }
});

// Progress Bar fixed on scroll
let progressBar = document.querySelector(".progress-bar");
let offsetProgressBar = 91;
if (window.location.pathname == "/register") {
    window.addEventListener("scroll", function () {
        let st = window.pageYOffset;
        if (st > offsetProgressBar) {
            progressBar.classList.add("fixed-nav");
        } else {
            progressBar.classList.remove("fixed-nav");
        }
    });
}
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

// Toggle dropdown
const menuPortalDropdown = document.querySelector(".dropdown-portal");
menuPortalDropdown.addEventListener("click", () => {
    document
        .querySelector(".menu-dropdown-portal")
        .classList.toggle("invisible");
    document
        .querySelector(".menu-dropdown-portal")
        .classList.toggle("opacity-0");
});

// Fasilitas Carousel
if (window.innerWidth < 768) {
    // Carousel
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
} else {
    // Carousel
    document.addEventListener("DOMContentLoaded", function () {
        var splide = new Splide(".splide", {
            type: "loop",
            perPage: 3,
            perMove: 3,
            arrows: false,
            classes: {
                pagination: "splide__pagination fasilitas-pagination",
                page: "splide__pagination__page fasilitas-page",
            },
        });
        splide.mount();
    });
}
// Show Login Form
const lastMenu = document.querySelector(".nav-menu").lastElementChild;

if (lastMenu.querySelector("a").innerHTML != "Logout") {
    document
        .querySelector("#login-btn")
        .addEventListener("click", function (e) {
            e.preventDefault();
            document.querySelector("#login-form").classList.remove("invisible");
            document.querySelector("#login-form").classList.remove("opacity-0");
        });
}

// Close Login Form
document
    .querySelector("#close-login-btn")
    .addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelector("#login-form").classList.add("invisible");
        document.querySelector("#login-form").classList.add("opacity-0");
    });

// Show Password
document
    .querySelector("#showPassword")
    .addEventListener("change", function (e) {
        if (this.checked) {
            document.querySelector("#password").type = "text";
        } else {
            document.querySelector("#password").type = "password";
        }
    });
