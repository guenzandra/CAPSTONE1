function updateCart() {
    cartItems.innerHTML = "";
    let total = 0;
    let itemCount = 0;

    Object.keys(cart).forEach(item => {
        let li = document.createElement("li");
        li.classList.add("cart-item");
        li.innerHTML = `
          <span>${item} - PHP ${cart[item].price.toFixed(2)}</span>
          <span class="quantity">x${cart[item].quantity}</span>
          <button class="remove-btn" onclick="removeItem('${item}')">
            <img src="trash-icon.png" alt="Remove">
          </button>
        `;
        cartItems.appendChild(li);
        total += cart[item].price * cart[item].quantity;
        itemCount += cart[item].quantity;
    });

    cartTotal.textContent = total.toFixed(2);
    totalItems.textContent = itemCount;

    if (Object.keys(cart).length > 0) {
        cartSidebar.classList.add("active");
        document.body.classList.add("sidebar-active"); // ADD CLASS TO BODY
    } else {
        cartSidebar.classList.remove("active");
        document.body.classList.remove("sidebar-active"); // REMOVE CLASS FROM BODY
    }
}
