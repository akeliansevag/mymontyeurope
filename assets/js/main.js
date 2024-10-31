// Handle scroll direction
let lastScrollPosition = 0;
const header = document.getElementById("header");

window.addEventListener("scroll", () => {
    const currentScrollPosition = window.scrollY;

    if (currentScrollPosition > lastScrollPosition) {
        header.classList.add("-translate-y-full");
    } else {
        header.classList.remove("-translate-y-full");
    }
    lastScrollPosition = currentScrollPosition;
});

// Toggle mobile navigation
document.getElementById("nav-toggle").addEventListener("click", () => {
    document.getElementById("nav-toggle").classList.toggle("toggled");
    document.getElementById("mobile-nav").classList.toggle("-translate-x-full");
});

function toggleMultipleClasses(element, classes) {
    classes.forEach(className => element.parentElement.classList.toggle(className));
}

// Use the helper function in the event listener
document.querySelectorAll(".children-toggle").forEach(toggle => {
    toggle.addEventListener("click", () => {
        toggleMultipleClasses(toggle.nextElementSibling, ["active"]);
    });
});
