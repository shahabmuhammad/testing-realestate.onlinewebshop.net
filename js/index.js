function toggleMenu() {
    const sidebarMenu = document.getElementById("sidebarMenu");
    sidebarMenu.classList.toggle("open");
}


// Scroll to All News Section
window.addEventListener('load', () => {
    const allNewsSection = document.getElementById('all-news');
    if (allNewsSection) {
        allNewsSection.scrollIntoView({ behavior: 'smooth' });
    }
});


// Select the navbar to change color on scroll
//const navbar = document.querySelector('.navbar');

// Add a scroll event listener to the window
//window.addEventListener('scroll', () => {
//    if (window.scrollY > 50) {
//        navbar.classList.add('scrolled'); // Apply new styles when scrolled
//    } else {
//        navbar.classList.remove('scrolled'); // Revert to original styles
//    }
// });



//**********************************Navar scroll
let lastScrollTop = 0;
            const header = document.getElementById("header");

            window.addEventListener("scroll", function () {
                let scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scroll Down: Hide Header
                    header.classList.add("hidden");
                } else {
                    // Scroll Up: Show Header & Make Dark
                    header.classList.remove("hidden");
                    header.classList.add("dark");
                }

                // Back to top: Make Transparent Again
                if (scrollTop === 0) {
                    header.classList.remove("dark");
                }

                lastScrollTop = scrollTop;
            });