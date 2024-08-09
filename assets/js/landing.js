document.addEventListener("DOMContentLoaded", () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector("nav ul");

    burger.addEventListener("click", () => {
        nav.classList.toggle("active");
        burger.classList.toggle("active");
    });

    // Service animations
    const services = document.querySelectorAll('.service');

    function checkIfInView() {
        const windowHeight = window.innerHeight;

        services.forEach(service => {
            const rect = service.getBoundingClientRect();
            if (rect.top <= windowHeight && rect.bottom >= 0) {
                service.classList.add('in-view');
            } else {
                service.classList.remove('in-view');
            }
        });
    }

    // Listen for events
    window.addEventListener('scroll', checkIfInView);
    window.addEventListener('resize', checkIfInView);

    // Initial check
    checkIfInView();
});
