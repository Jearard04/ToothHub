<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tooth Hub</title>
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
            background-color: #F8F1E9;
            color: #2D221E;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 80px;
            background: #2D221E;
            color: white;
            position: relative;
            z-index: 10;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 28px;
            font-weight: bold;
        }

        .logo img {
            width: 50px;
            height: auto;
            margin-right: 7px; 
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

        /* CONTACT SECTION */
        .contact-container {
            display: flex;
            flex: 1;
            width: 100%;
            height: 100%;
        }

        /* Left side: Contact Form */
        .contact-form {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            background: #F8F1E9;
        }

        .contact-form h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #2D221E;
        }

        .contact-form p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #7A4E31;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #2D221E;
            border-radius: 8px;
            background: #FFF;
            color: #2D221E;
        }

        .contact-form textarea {
            height: 100px;
            resize: none;
        }

        /* Send Button */
        .contact-form button {
            background-color: #2D221E;
            color: white;
            border: none;
            padding: 14px 24px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 18px;
            width: 230px;
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .contact-form button:hover {
            background-color: #1F1713;
        }

        /* Contact Details Section */
        .contact-details {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            justify-content: center;
        }

        .contact-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 230px;
            min-height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .contact-card img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        .contact-card h3 {
            font-size: 16px;
            color: #2D221E;
            margin-bottom: 5px;
        }

        .contact-card p {
            font-size: 14px;
            word-wrap: break-word;
            text-align: center;
        }

        .contact-card p a {
            text-decoration: none;
            color: #7A4E31;
            font-weight: bold;
            display: block;
            word-break: break-word;
            max-width: 100%;
        }

        /* Right side: Full-screen Image */
        .contact-image {
            flex: 1;
            background: url('c.png') center/cover no-repeat;
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .contact-container {
                flex-direction: column;
            }
            .contact-image {
                height: 50vh;
            }
            .contact-details {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header class="header">
        <div class="logo">
            <img src="thub.png" alt="Tooth Hub Logo">
            Tooth Hub
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="about us.php">About Us</a></li>
                <li><a href="servicespage.php">Services</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- CONTACT SECTION -->
    <div class="contact-container">
        <div class="contact-form">
            <h1>Call Us, We Don't Bite</h1>
            <p>We’d love to hear from you. Get in touch today!</p>

            <input type="text" id="name" placeholder="Full Name">
            <input type="tel" id="phone" placeholder="Phone">
            <input type="email" id="email" placeholder="Email">
            <textarea id="message" placeholder="Write Us"></textarea>
            <button id="sendButton">Send →</button>

            <div class="contact-details">
                <div class="contact-card">
                    <img src="mobile.png" alt="Phone Icon">
                    <h3>Give Us A Call</h3>
                    <p><a href="tel:+1234567890">+1 234 567 890</a></p>
                </div>

                <div class="contact-card">
                    <img src="email.png" alt="Email Icon">
                    <h3>Write Us</h3>
                    <p><a href="mailto:toothhub@gmail.com">toothhub@gmail.com</a></p>
                </div>

                <div class="contact-card">
                    <img src="facebook.png" alt="Facebook Icon">
                    <h3>Follow Us</h3>
                    <p><a href="https://facebook.com/toothhub" target="_blank">facebook.com/toothhub</a></p>
                </div>
            </div>
        </div>

        <div class="contact-image"></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const phoneInput = document.getElementById("phone");
            const sendButton = document.getElementById("sendButton");

            phoneInput.addEventListener("input", function () {
                this.value = this.value.replace(/\D/g, "").slice(0, 11);
            });

            sendButton.addEventListener("click", function (event) {
                event.preventDefault();

                const name = document.getElementById("name").value.trim();
                const phone = phoneInput.value.trim();
                const email = document.getElementById("email").value.trim();
                const message = document.getElementById("message").value.trim();

                if (!name || !phone || !email || !message) {
                    alert("Please fill in all fields.");
                    return;
                }

                if (phone.length !== 11) {
                    alert("Phone number must be exactly 11 digits.");
                    return;
                }

                alert("Your message has been sent successfully!");
                document.querySelector(".contact-form").reset();
            });
        });
    </script>

</body>
</html>
