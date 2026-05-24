// Handles the contact modal logic
function openContactModal(event) {
  if (event) {
    event.preventDefault();
  }
  document.getElementById("modalGlobalContactUs").classList.add("visible");
}

// Open modal when any element with the class 'openModal' is clicked
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll(".openModal").forEach(button => {
    button.addEventListener("click", openContactModal);
  });

  // Close modal when the close button or overlay is clicked
  document.getElementById("closeModal").addEventListener("click", function() {
    document.getElementById("modalGlobalContactUs").classList.remove("visible");
  });
  document.getElementById("modalOverlay").addEventListener("click", function() {
    document.getElementById("modalGlobalContactUs").classList.remove("visible");
  });

  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const contactform = this;
    const form = e.target;
    const formData = new FormData(form);
    const responseDiv = document.getElementById("formResponse");

    fetch("pages/process_contact_form.php", {
        method: "POST",
        body: formData,
      })
      .then(response => response.json())
      .then(data => {
        responseDiv.style.display = "block";
        if (data.status === "success") {
          contactform.reset();
          responseDiv.style.color = "green";
        } else {
          responseDiv.style.color = "red";
        }
        responseDiv.textContent = data.message;
      })
      .catch(error => {
        responseDiv.style.display = "block";
        responseDiv.style.color = "red";
        responseDiv.textContent = "An error occurred. Please try again.";
      });
  });
});
