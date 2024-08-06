document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");

    loginForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(loginForm);
        fetch("/api/auth/login", {
            method: "POST",
            body: formData,
            headers: {
                Accept: "application/json",
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    // Handle success, e.g., redirect or show a success message
                    alert("Login successful!");
                } else {
                    // Handle error, e.g., show error message
                    alert("Login failed: " + data.message);
                }
            })
            .catch((error) => console.error("Error:", error));
    });

    registerForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(registerForm);
        fetch("/api/auth/register", {
            method: "POST",
            body: formData,
            headers: {
                Accept: "application/json",
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    // Handle success, e.g., redirect or show a success message
                    alert("Registration successful!");
                } else {
                    // Handle error, e.g., show error message
                    alert("Registration failed: " + data.message);
                }
            })
            .catch((error) => console.error("Error:", error));
    });
});
