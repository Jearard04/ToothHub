<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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

        .carousel-container {
            position: relative;
            overflow: hidden;
            width: 90%;
            margin: auto;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .service {
            min-width: 280px;
            max-width: 320px;
            height: 400px;
            margin: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: white;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .service:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .service img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .service .info {
            padding: 15px;
        }

        .service .info .name {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 14px;
            opacity: 0.8;
        }

        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .carousel-controls button {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 50%;
        }

        .carousel-controls button:hover {
            background-color: rgba(0, 0, 0, 0.8);
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
                <li><a href="#">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Our Dental Services</h1>
            <p>Providing top-notch dental care with modern technology.</p>
        </div>
    </section>

    <div class="carousel-container">
        <div class="carousel">
            <div class="service"><img src="prosthodontics.jpg" alt="Prosthodontics"><div class="info"><div class="name">Prosthodontics</div><p>Restoring and replacing missing teeth with crowns, bridges, and dentures.</p></div></div>
            <div class="service"><img src="braces.jpg" alt="Dental Braces"><div class="info"><div class="name">Dental Braces</div><p>Teeth alignment services for a straighter smile.</p></div></div>
            <div class="service"><img src="implant.jpg" alt="Dental Implants"><div class="info"><div class="name">Dental Implants</div><p>Permanently replacing missing teeth with artificial roots.</p></div></div>
            <div class="service"><img src="cleaning.jpg" alt="Teeth Cleaning"><div class="info"><div class="name">Teeth Cleaning</div><p>Professional removal of plaque and tartar to maintain oral hygiene and prevent cavities.</p></div></div>
            <div class="service"><img src="whitening.jpg" alt="Teeth Whitening"><div class="info"><div class="name">Teeth Whitening</div><p>A cosmetic procedure that removes stains and brightens teeth for a whiter smile.</p></div></div>
            <div class="service"><img src="rootcanal.jpg" alt="Root Canal"><div class="info"><div class="name">Root Canal</div><p>A procedure to save a damaged or infected tooth by removing the infected pulp and sealing it.</p></div></div>
            <div class="service"><img src="extraction.jpg" alt="Tooth Extraction"><div class="info"><div class="name">Tooth Extraction</div><p>The removal of a tooth due to damage, infection, or overcrowding.</p></div></div>
            <div class="service"><img src="crown.jpg" alt="Dental Crown"><div class="info"><div class="name">Dental Crown</div><p>A custom cap placed over a damaged or weakened tooth to restore its shape, strength, and appearance</p></div></div>
            <div class="service"><img src="fillings.jpg" alt="Cosmetic Fillings"><div class="info"><div class="name">Cosmetic Fillings</div><p>Tooth-colored fillings used to restore cavities while maintaining a natural look.</p></div></div>
            <div class="service"><img src="veneers.jpg" alt="Dental Veneers"><div class="info"><div class="name">Dental Veneers</div><p>Thin porcelain or composite shells bonded to the front of teeth to improve their shape, color, and appearance.</p></div></div>
        </div>
        <div class="carousel-controls">
            <button onclick="prevSlide()">&#10094;</button>
            <button onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    <script>
        let index = 0;
        const services = document.querySelectorAll('.service');
        const carousel = document.querySelector('.carousel');
        const visibleItems = Math.floor(document.querySelector('.carousel-container').offsetWidth / 320); 
        const maxIndex = services.length - visibleItems;

        function nextSlide() {
            if (index < maxIndex) {
                index++;
                updateCarousel();
            }
        }

        function prevSlide() {
            if (index > 0) {
                index--;
                updateCarousel();
            }
        }

        function updateCarousel() {
            carousel.style.transform = `translateX(${-index * 320}px)`;
            carousel.style.transition = "transform 0.5s ease-in-out";
        }
    </script>
</body>
</html>


