// Function to Load Workshops
function loadWorkshops() {
    const workshopList = document.getElementById("workshopList");
    workshopList.innerHTML = ""; // Clear existing workshops
    workshops.forEach((workshop, index) => {
        workshopList.innerHTML += `
            <div class="workshop">
                <img src="${workshop.imageUrl}" alt="${workshop.title}">
                <div class="workshop-content">
                    <h2>${workshop.title}</h2>
                    <p>${workshop.description}</p>
                    <p><strong>Date:</strong> ${workshop.date}</p>
                    <p class="price">Price: Rs. ${workshop.price}</p>
                    <a href="register.php"><button class="register-btn" onclick="registerWorkshop(${index})">Register Now</button></a>
                </div>
            </div>
        `;
    });
}

// Function to Add Workshop
function addWorkshop() {
    const title = document.getElementById("title").value;
    const description = document.getElementById("description").value;
    const date = document.getElementById("date").value;
    const price = document.getElementById("price").value;
    const imageUrl = document.getElementById("imageUrl").value;

    if (title && description && date && price && imageUrl) {
        workshops.push({ title, description, date, price: parseInt(price), imageUrl });
        loadWorkshops();
        document.getElementById("workshopForm").reset(); // Reset form fields
        alert("Workshop added successfully!");
    } else {
        alert("Please fill all fields.");
    }
}

// Function to Register for a Workshop
function registerWorkshop(index) {
    const workshop = workshops[index];
    alert(`You have registered for "${workshop.title}" on ${workshop.date} for Rs. ${workshop.price}.`);
}

// Load Workshops on Page Load
loadWorkshops();

// JavaScript function to handle the payment process
function handlePayment() {
    // Show an alert confirming the payment
    alert("Payment Successful!");

    // Redirect to the cart page after the user clicks "OK"
    window.location.href = "cart.php";
}