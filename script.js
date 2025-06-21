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
    const dotsContainer = document.getElementById("carousel-dots");

    if (carousel && prevBtn && nextBtn) {
        let currentIndex = 0;

        function updateCarousel() {
            const cardWidth = carousel.children[0].offsetWidth;
            carousel.style.transform = `translateX(-${
                currentIndex * cardWidth
            }px)`;
            updateDots();
        }

        function updateDots() {
            const dots = dotsContainer.children;
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove("bg-blue-500", "scale-125");
                dots[i].classList.add("bg-gray-300");
            }
            if (dots[currentIndex]) {
                dots[currentIndex].classList.remove("bg-gray-300");
                dots[currentIndex].classList.add("bg-blue-500", "scale-125");
            }
        }

        function createDots() {
            for (let i = 0; i < carousel.children.length; i++) {
                const dot = document.createElement("button");
                dot.className =
                    "w-3 h-3 rounded-full bg-gray-300 hover:bg-blue-400 transition transform duration-300";
                dot.addEventListener("click", () => {
                    currentIndex = i;
                    updateCarousel();
                });
                dotsContainer.appendChild(dot);
            }
        }

        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) currentIndex--;
            updateCarousel();
        });

        nextBtn.addEventListener("click", () => {
            if (currentIndex < carousel.children.length - 1) currentIndex++;
            updateCarousel();
        });

        createDots();
        updateCarousel();
    }
});
