<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tooth Hub</title>
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

        /* About Section */
        .about-container {
            margin: 80px auto;
            width: 80%;
            max-width: 1200px;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #2D221E;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .mission-vision-container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-top: 40px;
        }

        .mission, .vision {
            flex: 1;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
            background: #D9A679;
            color: white;
        }

        .mission:hover, .vision:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .mission h3, .vision h3 {
            text-align: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .mission p, .vision p {
            font-size: 16px;
            color: #fff;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .mission-vision-container {
                flex-direction: column;
                gap: 20px;
            }

            .about-container {
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
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="about us.php">About Us</a></li>
                <li><a href="servicespage.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="about-container">
        <h1>Who we are?</h1>
        <div class="section">
            <p>At Tooth Hub Dental Clinic, we are a team of experienced dental professionals committed to providing top-tier dental services with a focus on comfort, technology, and patient satisfaction.</p>
        </div>

        <div class="mission-vision-container">
            <div class="mission">
                <h3>Our Mission</h3>
                <p>Our mission is to provide personalized, high-quality dental care that focuses on patient comfort and long-term health.</p>
            </div>
            <div class="vision">
                <h3>Our Vision</h3>
                <p>We aspire to be the most trusted dental clinic, recognized for our commitment to excellence, innovation, and compassionate care.</p>
            </div>
        </div>
    </div>
</body>
</html>
