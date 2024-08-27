document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    document.getElementById("formMessage").textContent = "Thank you, " + document.getElementById("name").value + "! I'll be in touch soon.";
});

