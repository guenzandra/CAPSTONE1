const toggleBtn = document.querySelector(".toggle-cart");
const cart = document.querySelector(".cart-container");

toggleBtn.addEventListener("click", function () {
    cart.classList.toggle("active");
    toggleBtn.classList.toggle("active");

    // Change arrow direction
    if (cart.classList.contains("active")) {
        toggleBtn.innerHTML = "◀"; // Cart open
    } else {
        toggleBtn.innerHTML = "▶"; // Cart closed
    }
});
