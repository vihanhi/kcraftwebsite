const exchangeRate = 320; // LKR to USD rate

function updateCurrency() {
  const currency = document.getElementById("currency").value;
  const prices = document.getElementsByClassName("price");
  const itemTotals = document.getElementsByClassName("item-total");

  for (let i = 0; i < prices.length; i++) {
    const lkrPrice = prices[i].getAttribute("data-lkr");
    const usdPrice = prices[i].getAttribute("data-usd");
    prices[i].textContent =
      currency === "LKR"
        ? `LKR ${Number(lkrPrice).toLocaleString()}`
        : `USD ${usdPrice}`;

    // Update item totals
    const quantity =
      prices[i].parentElement.querySelector(".quantity-input").value;
    const total =
      currency === "LKR" ? lkrPrice * quantity : usdPrice * quantity;
    itemTotals[i].textContent = `${currency} ${total.toLocaleString(undefined, {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2,
    })}`;
  }
  calculateTotal();
}

function updateTotal(input) {
  const row = input.parentElement.parentElement;
  const price = row.querySelector(".price");
  const currency = document.getElementById("currency").value;
  const priceValue =
    currency === "LKR"
      ? Number(price.getAttribute("data-lkr"))
      : Number(price.getAttribute("data-usd"));
  const quantity = Number(input.value);
  const total = priceValue * quantity;

  row.querySelector(
    ".item-total"
  ).textContent = `${currency} ${total.toLocaleString(undefined, {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
  })}`;
  calculateTotal();
}

function calculateTotal() {
  const currency = document.getElementById("currency").value;
  let total = 0;
  let selectedCount = 0;

  document.querySelectorAll(".select-item:checked").forEach((checkbox) => {
    const row = checkbox.parentElement.parentElement;
    const price = row.querySelector(".price");
    const priceValue =
      currency === "LKR"
        ? Number(price.getAttribute("data-lkr"))
        : Number(price.getAttribute("data-usd"));
    const quantity = Number(row.querySelector(".quantity-input").value);
    total += priceValue * quantity;
    selectedCount++;
  });

  document.getElementById("selected-count").textContent = selectedCount;
  document.getElementById(
    "total-amount"
  ).textContent = `${currency} ${total.toLocaleString(undefined, {
    minimumFractionDigits: 2,
    maximumFractionDigits: 2,
  })}`;
}

function deleteItem(button) {
  button.parentElement.parentElement.remove();
  calculateTotal();
}

function proceedToCheckout() {
  const selectedItems = document.querySelectorAll(".select-item:checked");
  if (selectedItems.length === 0) {
    alert("Please select at least one item to checkout");
    return;
  }
  // Add your checkout logic here
  alert("Proceeding to payment gateway...");
}


// quantity
function decreaseQuantity() {
  var qtyInput = document.getElementById('quantity');
  var formQtyInput = document.getElementById('formQuantity');
  var qty = parseInt(qtyInput.value);
  if (qty > 1) {
      qtyInput.value = qty - 1;
      formQtyInput.value = qty - 1;
  }
}

function increaseQuantity() {
  var qtyInput = document.getElementById('quantity');
  var formQtyInput = document.getElementById('formQuantity');
  var qty = parseInt(qtyInput.value);
  qtyInput.value = qty + 1;
  formQtyInput.value = qty + 1;
}
