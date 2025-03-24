document.addEventListener("DOMContentLoaded", function () {
  AOS.init({
    duration: 1000, // Duration of the animation
    easing: "ease-in-out", // Easing function
    once: true, // Trigger animation only once
    offset: 200, // Start animation when element is 200px away from viewport
  });
});
