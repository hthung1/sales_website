
// show cart
(function() {
    const cartInfo = document.getElementById("cart-info"); // dat ten bien
    const cart = document.getElementById("cart");

    cartInfo.addEventListener("click", function() {
        cart.classList.toggle("show-cart");
    })
})();

// add items to the cart


