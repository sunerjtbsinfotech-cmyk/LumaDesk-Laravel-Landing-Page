// LumaDesk JavaScript
// Demonstrates navigation, smooth interaction, validation and scroll-triggered animations.

document.addEventListener("DOMContentLoaded", () => {
    const header = document.querySelector(".site-header");
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");
    const contactForm = document.querySelector("#contactForm");
    const formMessage = document.querySelector("#formMessage");
    const navAnchors = document.querySelectorAll(".nav-links a");

    // Add a visual header state after scrolling.
    const updateHeader = () => {
        header.classList.toggle("scrolled", window.scrollY > 30);
    };

    window.addEventListener("scroll", updateHeader);
    updateHeader();

    // Mobile navigation menu.
    menuToggle?.addEventListener("click", () => {
        const expanded = menuToggle.getAttribute("aria-expanded") === "true";
        menuToggle.setAttribute("aria-expanded", String(!expanded));
        navLinks.classList.toggle("active");
        menuToggle.textContent = expanded ? "☰" : "✕";
    });

    // Close mobile menu after selecting a navigation item.
    navAnchors.forEach(anchor => {
        anchor.addEventListener("click", () => {
            navLinks.classList.remove("active");
            menuToggle?.setAttribute("aria-expanded", "false");
            if (menuToggle) menuToggle.textContent = "☰";
        });
    });

    // Scroll reveal animation using IntersectionObserver.
    const revealElements = document.querySelectorAll(".reveal");

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealElements.forEach(element => observer.observe(element));

    // Front-end contact form validation.
    contactForm?.addEventListener("submit", event => {
        event.preventDefault();

        const name = document.querySelector("#name").value.trim();
        const email = document.querySelector("#email").value.trim();
        const message = document.querySelector("#message").value.trim();

        if (!name || !email || !message) {
            formMessage.textContent = "Please complete all required fields.";
            formMessage.style.color = "#d64545";
            return;
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            formMessage.textContent = "Please enter a valid email address.";
            formMessage.style.color = "#d64545";
            return;
        }

        formMessage.textContent =
            `Thanks, ${name}! Your message has been received for this demo.`;
        formMessage.style.color = "#168c7b";

        contactForm.reset();
    });

    // Demo buttons: give the user immediate feedback without a backend.
    document.querySelectorAll("[data-space]").forEach(button => {
        button.addEventListener("click", () => {
            const space = button.dataset.space;
            alert(`${space} selected! In a real system, this would open the booking page.`);
        });
    });
});
