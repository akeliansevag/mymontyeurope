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
    document.getElementById("mobile-nav").classList.toggle("hidden");
});

// Toggle location dropdown
document.getElementById("location-toggle").addEventListener("click", () => {
    document.getElementById("location-dropdown").classList.toggle("hidden");
});
