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
            carousel.style.transform = `translateX(-${
                currentIndex * cardWidth
            }px)`;
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= cardCount - visible;
        }
        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });
        nextBtn.addEventListener("click", () => {
            const visible = getVisibleCards();
            if (currentIndex < cardCount - visible) {
                currentIndex++;
                updateCarousel();
            }
        });
        window.addEventListener("resize", () => {
            const visible = getVisibleCards();
            if (currentIndex > cardCount - visible) {
                currentIndex = Math.max(0, cardCount - visible);
            }
            updateCarousel();
        });
        updateCarousel();
    }
});
