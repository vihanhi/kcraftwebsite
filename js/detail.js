 // Change main image
 function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

// Increase quantity
function increaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    quantityInput.value = parseInt(quantityInput.value) + 1;
}

// Decrease quantity
function decreaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    if (quantityInput.value > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
    }
}

function decreaseQuantity() {
    var quantity = document.getElementById('quantity');
    if(quantity.value > 1) {
        quantity.value = parseInt(quantity.value) - 1;
    }
}

function increaseQuantity() {
    var quantity = document.getElementById('quantity');
    quantity.value = parseInt(quantity.value) + 1;
}

function changeImage(src) {
    document.getElementById('mainImage').src = src;
}

