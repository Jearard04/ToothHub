<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Appointment</title>
    <link rel="icon" href="th.png" type="image/x-icon"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 80px;
            background: #2D221E;
            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 28px;
            font-weight: bold;
        }

        .logo img {
            width: 50px; /* Adjust logo size */
            height: auto;
            margin-right: 7px; /* Space between logo and text */
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin: 0 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: 0.3s ease-in-out;
            padding: 5px 10px;
        }

        .nav-links a:hover {
            color: #D9A679;
            border-bottom: 2px solid #D9A679;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 50vh;
            background: url('tooth.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.15);
            padding: 20px 40px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            color: white;
        }

        .hero h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #2D221E;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #2D221E;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #D9A679;
            color: #2D221E;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="thub.png" alt="Tooth Hub Logo">
            Tooth Hub
        </div>
        <ul class="nav-links">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="about us.php">About Us</a></li>
            <li><a href="servicespage.php">Services</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Book Your Dental Appointment</h1>
            <p>Providing top-notch dental care with modern technology.</p>
        </div>
    </section>

    <div class="container">
        <h2>Appointment Form</h2>
        <form id="appointment-form" action="submit_appointment.php" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact" name="contact" required minlength="11">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="preferred-date">Preferred Date</label>
                    <input type="date" id="preferred-date" name="preferred-date" required>
                </div>
                <div class="form-group">
                    <label for="procedure">Procedure</label>
                    <select id="procedure" name="procedure" required>
                        <option value="">Select a procedure</option>
                        <option value="prosthodontics">Prosthodontics</option>
                        <option value="braces">Dental Braces</option>
                        <option value="implants">Dental Implants</option>
                        <option value="teeth-cleaning">Teeth Cleaning</option>
                        <option value="teeth-whitening">Teeth Whitening</option>
                        <option value="root-canal">Root Canal</option>
                        <option value="extraction">Tooth Extraction</option>
                        <option value="crowns">Dental Crowns</option>
                        <option value="fillings">Cosmetic Fillings</option>
                        <option value="veneers">Dental Veneers</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="medical-history">Medical History</label>
                <textarea id="medical-history" name="medical-history" rows="4" placeholder="Please list any medical conditions, allergies, or medications you are taking (OPTIONAL)."></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

<script>
    document.getElementById("appointment-form").addEventListener("submit", function(event) {
        let isValid = true;
        let inputs = document.querySelectorAll("#appointment-form input[required], #appointment-form select[required]");
        let contactInput = document.getElementById("contact");

        // Contact number validation: Only numbers and exactly 11 digits
        let contactValue = contactInput.value.trim();
        if (!/^\d{11}$/.test(contactValue)) {
            isValid = false;
            alert("Please enter a valid contact number with exactly 11 digits.");
            contactInput.focus();
            event.preventDefault();
            return;
        }

        // General form validation
        inputs.forEach(input => {
            if (!input.value.trim()) {
                isValid = false;
                alert(`Please fill out the "${input.previousElementSibling.innerText}" field.`);
                input.focus();
                event.preventDefault();
                return;
            }
        });

        if (isValid) {
            // Allow form submission to proceed
            alert("Form is valid and ready to be submitted.");
        }
    });

    // Prevent non-numeric characters & limit to 11 digits
    document.getElementById("contact").addEventListener("input", function() {
        this.value = this.value.replace(/\D/g, ""); // Remove non-numeric characters
        if (this.value.length > 11) {
            this.value = this.value.slice(0, 11); // Limit to 11 characters
        }
    });
</script>

</body>
</html>






























