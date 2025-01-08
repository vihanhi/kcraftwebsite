// Function to update the cart display
function updateCart() {
  const cartItemsContainer = document.getElementById("cart-items");
  cartItemsContainer.innerHTML = ""; // Clear current items

  cartItems.forEach((item, index) => {
    const itemElement = document.createElement("div");
    itemElement.classList.add("cart-item");

    itemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <h3>${item.name}</h3>
            <div class="price">LKR ${item.price}</div>
            <div class="quantity">
                <button onclick="decreaseQuantity(${index})">-</button>
                <input type="number" value="${item.quantity}" id="quantity${index}" min="1" max="10" onchange="updateQuantity(${index}, this.value)">
                <button onclick="increaseQuantity(${index})">+</button>
            </div>
            <button class="remove-item" onclick="removeItem(${index})">Remove Item</button>
        `;

    cartItemsContainer.appendChild(itemElement);
  });

  updateTotal();
}

// Increase quantity
function increaseQuantity(index) {
  cartItems[index].quantity++;
  document.getElementById(`quantity${index}`).value = cartItems[index].quantity;
  updateTotal();
}

// Decrease quantity
function decreaseQuantity(index) {
  if (cartItems[index].quantity > 1) {
    cartItems[index].quantity--;
    document.getElementById(`quantity${index}`).value =
      cartItems[index].quantity;
    updateTotal();
  }
}

// Update quantity from input
function updateQuantity(index, value) {
  const quantity = parseInt(value);
  if (quantity >= 1) {
    cartItems[index].quantity = quantity;
    updateTotal();
  } else {
    document.getElementById(`quantity${index}`).value =
      cartItems[index].quantity;
  }
}

// Remove item from cart
function removeItem(index) {
  cartItems.splice(index, 1);
  updateCart();
}

// Update total price
function updateTotal() {
  let subtotal = 0;
  cartItems.forEach((item) => {
    subtotal += item.price * item.quantity;
  });

  const shipping = 500; // Fixed shipping cost
  const taxes = 500; // Fixed taxes
  const total = subtotal + shipping + taxes;

  document.getElementById("subtotal").textContent = `LKR ${subtotal}`;
  document.getElementById("total").textContent = `LKR ${total}`;
}

// Proceed to checkout (just an alert for now)
function checkout() {
  alert("Proceeding to checkout...");
  // Add functionality to proceed with the checkout process.
}

// Initialize cart
updateCart();

// cart.js
let exchangeRate = 0.0031; // LKR to USD conversion rate

function updateCurrency() {
  const currency = document.getElementById("currency").value;
  const subtotalElement = document.getElementById("subtotal");
  const shippingElement = document.getElementById("shipping");
  const taxElement = document.getElementById("tax");
  const totalElement = document.getElementById("total");

  // Get the amounts in LKR
  const subtotalLKR = parseFloat(subtotalElement.getAttribute("data-lkr"));
  const shippingLKR = parseFloat(shippingElement.getAttribute("data-lkr"));
  const taxLKR = parseFloat(taxElement.getAttribute("data-lkr"));
  const totalLKR = parseFloat(totalElement.getAttribute("data-lkr"));

  if (currency === "USD") {
    subtotalElement.textContent = `USD ${(subtotalLKR * exchangeRate).toFixed(
      2
    )}`;
    shippingElement.textContent = `USD ${(shippingLKR * exchangeRate).toFixed(
      2
    )}`;
    taxElement.textContent = `USD ${(taxLKR * exchangeRate).toFixed(2)}`;
    totalElement.textContent = `USD ${(totalLKR * exchangeRate).toFixed(2)}`;
  } else {
    subtotalElement.textContent = `LKR ${subtotalLKR.toFixed(2)}`;
    shippingElement.textContent = `LKR ${shippingLKR.toFixed(2)}`;
    taxElement.textContent = `LKR ${taxLKR.toFixed(2)}`;
    totalElement.textContent = `LKR ${totalLKR.toFixed(2)}`;
  }
}

function updateQuantity(itemId, change) {
  const quantityInput = document.querySelector(`#quantity-${itemId}`);
  let newQuantity = parseInt(quantityInput.value) + change;

  if (newQuantity < 1) newQuantity = 1;

  quantityInput.value = newQuantity;
  updateItemTotal(itemId);
}

function updateItemTotal(itemId) {
  const quantityInput = document.querySelector(`#quantity-${itemId}`);
  const priceElement = document.querySelector(`#price-${itemId}`);
  const totalElement = document.querySelector(`#total-${itemId}`);

  const quantity = parseInt(quantityInput.value);
  const price = parseFloat(priceElement.getAttribute("data-price"));
  const total = quantity * price;

  totalElement.textContent = `LKR ${total.toFixed(2)}`;
  totalElement.setAttribute("data-total", total);

  updateCartTotals();
}

function updateCartTotals() {
  const itemTotals = document.querySelectorAll("[data-total]");
  let subtotal = 0;

  itemTotals.forEach((item) => {
    subtotal += parseFloat(item.getAttribute("data-total"));
  });

  const shipping = subtotal > 0 ? 500 : 0; // LKR 500 for shipping if cart is not empty
  const tax = subtotal * 0.15; // 15% tax
  const total = subtotal + shipping + tax;

  // Update summary elements and store LKR values as data attributes
  const subtotalElement = document.getElementById("subtotal");
  const shippingElement = document.getElementById("shipping");
  const taxElement = document.getElementById("tax");
  const totalElement = document.getElementById("total");

  subtotalElement.setAttribute("data-lkr", subtotal);
  shippingElement.setAttribute("data-lkr", shipping);
  taxElement.setAttribute("data-lkr", tax);
  totalElement.setAttribute("data-lkr", total);

  // Update displayed values based on selected currency
  updateCurrency();
}

function removeItem(itemId) {
  const item = document.querySelector(`#cart-item-${itemId}`);
  item.remove();
  updateCartTotals();
}

function proceedToCheckout() {
  const currency = document.getElementById("currency").value;
  const total = document.getElementById("total").getAttribute("data-lkr");

  // Store cart data in session
  sessionStorage.setItem("cartCurrency", currency);
  sessionStorage.setItem("cartTotal", total);

  // Redirect to checkout page
  window.location.href = "checkout.php";
}

// Quantity
function decreaseQuantity() {
  var qty = parseInt(document.getElementById("quantity").value);
  if (qty > 1) {
    document.getElementById("quantity").value = qty - 1;
  }
}

function increaseQuantity() {
  var qty = parseInt(document.getElementById("quantity").value);
  document.getElementById("quantity").value = qty + 1;
}

function showLoginModal() {
  document.getElementById("loginModal").style.display = "block";
}

function hideLoginModal() {
  document.getElementById("loginModal").style.display = "none";
}
