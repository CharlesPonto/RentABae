// main.js

document.addEventListener("DOMContentLoaded", function () {
    // Navbar mobile menu
    const navToggle = document.getElementById("nav-toggle");
    const mobileNav = document.getElementById("mobile-nav");
    const navClose = document.getElementById("nav-close");
    if (navToggle && mobileNav && navClose) {
        navToggle.addEventListener("click", () => {
            mobileNav.classList.remove("hidden");
        });
        navClose.addEventListener("click", () => {
            mobileNav.classList.add("hidden");
        });
        window.closeMobileNav = function () {
            mobileNav.classList.add("hidden");
        };
    }

    // Boyfriend carousel
    const carousel = document.getElementById("boyfriend-carousel");
    const prevBtn = document.getElementById("boyfriend-prev");
    const nextBtn = document.getElementById("boyfriend-next");
    if (carousel && prevBtn && nextBtn) {
        let currentIndex = 0;
        const getVisibleCards = () => {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        };
        const cardCount = carousel.children.length;
        function updateCarousel() {
            const visible = getVisibleCards();
            const cardWidth = carousel.children[0].offsetWidth;
            carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
        prevBtn.addEventListener("click", () => {
            const visible = getVisibleCards();
            currentIndex = (currentIndex - 1 + cardCount) % cardCount;
            updateCarousel();
        });
        nextBtn.addEventListener("click", () => {
            const visible = getVisibleCards();
            currentIndex = (currentIndex + 1) % cardCount;
            updateCarousel();
        });
        window.addEventListener("resize", () => {
            updateCarousel();
        });
        updateCarousel();
    }
});
