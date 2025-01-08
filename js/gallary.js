function openModal(imageId) {
  var modal = document.getElementById("modal");
  var modalImg = document.getElementById("modal-img");

  if (imageId === "img1") {
    modalImg.src = "https://via.placeholder.com/600x400?text=Product+1";
  } else if (imageId === "img2") {
    modalImg.src = "https://via.placeholder.com/600x400?text=Product+2";
  } else if (imageId === "img3") {
    modalImg.src = "https://via.placeholder.com/600x400?text=Workshop+1";
  } else if (imageId === "img4") {
    modalImg.src = "https://via.placeholder.com/600x400?text=Workshop+2";
  }

  modal.style.display = "flex";
}

function closeModal() {
  var modal = document.getElementById("modal");
  modal.style.display = "none";
}
