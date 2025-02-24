<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tooth Hub - Dental Care</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f8f9fa;
            color: #333;
        }

        /* Header */
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

        .book-btn {
            background: #D9A679;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: #2D221E;
            font-weight: bold;
            transition: 0.3s ease-in-out;
        }

        .book-btn:hover {
            background: #b8865d;
        }

        /* Hero Section */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('toothhub.png') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 80px;
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
            padding: 30px 40px;
            border-radius: 10px;
            max-width: 450px;
            backdrop-filter: blur(10px);
            color: white;
        }

        .hero h2 {
            font-size: 20px;
            font-weight: 400;
        }

        .hero h1 {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .hero .book-btn {
            display: inline-block;
            margin-top: 10px;
            background: #D9A679;
            color: #2D221E;
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .hero .book-btn:hover {
            background: #b8865d;
        }

        .hero .contact {
            margin-top: 10px;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                padding: 15px 30px;
            }

            .hero {
                padding: 20px;
                text-align: center;
                justify-content: center;
            }

            .hero-content {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="thub.png" alt="Tooth Hub Logo">
            Tooth Hub
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="about us.php">About Us</a></li>
                <li><a href="servicespage.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Tooth Hub<br>Dental Clinic</h1>
            <p>The more you care, the more it will last.</p>
            <a href="booking.html" class="book-btn">Book An Appointment</a>
        </div>
    </section>
</body>
</html>
