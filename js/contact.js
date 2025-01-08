document
  .getElementById("contactForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();

    // Basic validation
    if (!name || !email || !phone || !message) {
      document.getElementById("feedback").textContent =
        "Please fill in all fields.";
      document.getElementById("feedback").className = "error";
      return;
    }

    // Simulate form submission success
    document.getElementById("feedback").textContent =
      "Thank you for your inquiry! We'll get back to you soon.";
    document.getElementById("feedback").className = "message";

    // Clear the form
    document.getElementById("contactForm").reset();
  });
