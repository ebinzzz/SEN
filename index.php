<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZORQENT Technologies - Software Development Company</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            overflow-x: hidden;
        }

        /* Header & Navigation */
        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            position: fixed;
            width: 100%;
            top: 0;
            height:12%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            max-width: 1200px;
            margin: 0 auto;
            margin-top:-32px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo-img {
            width: 120px;
            height: 120px;
            filter: brightness(0) invert(1);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a:hover {
            color: #74b9ff;
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: #74b9ff;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 5px;
        }

        .mobile-menu span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .mobile-menu.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .mobile-menu.active span:nth-child(2) {
            opacity: 0;
        }

        .mobile-menu.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: slideInUp 1s ease-out;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: slideInUp 1s ease-out 0.3s both;
            font-weight: 300;
        }

        .cta-button {
            background: linear-gradient(45deg, #e74c3c, #f39c12);
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(231, 76, 60, 0.3);
            animation: slideInUp 1s ease-out 0.6s both;
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 35px rgba(231, 76, 60, 0.4);
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Sections */
        .section {
            padding: 5rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section h2 {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: #2c3e50;
            position: relative;
            font-weight: 600;
        }

        .section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(45deg, #3498db, #2c3e50);
            border-radius: 2px;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #5d6d7e;
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            border-radius: 20px;
            color: white;
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(52, 152, 219, 0.3);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        /* Products Section */
        .products-grid {            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #e8eaed;
            position: relative;
            overflow: hidden;
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(52, 152, 219, 0.1), transparent);
            transition: left 0.5s;
        }

        .product-card:hover::before {
            left: 100%;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
            border-color: #3498db;
        }

        .product-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #3498db, #2c3e50);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 2rem;
        }

        .product-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .product-card p {
            color: #5d6d7e;
            line-height: 1.6;
        }

        /* Features Section */
        .features {
            background: #f8f9fa;
            margin: 5rem 0;
            padding: 5rem 5%;
        }

        .features .section {
            padding: 0;
        }

        .features h2 {
            color: #2c3e50;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-item {
            text-align: center;
            padding: 2.5rem 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: 1px solid #e8eaed;
        }

        .feature-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(52, 152, 219, 0.15);
            border-color: #3498db;
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .feature-item h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .feature-item p {
            color: #5d6d7e;
            line-height: 1.6;
            font-size: 1rem;
        }

        /* Contact Section */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid #e8eaed;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e8eaed;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background: #fff;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        .contact-info {
            padding: 2rem 0;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border: 1px solid #e8eaed;
        }

        .contact-item:hover {
            background: #3498db;
            color: white;
            transform: translateX(10px);
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.3);
        }

        .contact-icon {
            font-size: 1.5rem;
            margin-right: 1rem;
            width: 40px;
            text-align: center;
        }

        .contact-item h4 {
            margin-bottom: 0.25rem;
            font-weight: 600;
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            padding: 3rem 5% 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #3498db;
            font-weight: 600;
        }

        .footer-section p,
        .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.8;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #3498db;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: #3498db;
            color: white;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .social-links a:hover {
            background: #e74c3c;
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            color: #bdc3c7;
        }

        /* Scroll Indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(45deg, #3498db, #2c3e50);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #2c3e50;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10000;
            transition: opacity 0.5s ease;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #34495e;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(45deg, #3498db, #2c3e50);
            color: white;
            border: none;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: scale(1.1);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(44, 62, 80, 0.95);
                flex-direction: column;
                padding: 1rem;
                backdrop-filter: blur(10px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 0.5rem 0;
            }

            .mobile-menu {
                display: flex;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .section {
                padding: 3rem 5%;
            }

            .section h2 {
                font-size: 2rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-content {
                grid-template-columns: 1fr;
            }

            .nav {
                padding: 1rem 5%;
            }

            .logo {
                font-size: 1.5rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .about-stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section {
                padding: 2rem 3%;
            }

            .cta-button {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }

            .features {
                padding: 3rem 3%;
            }

            .stat-item {
                padding: 1.5rem;
            }

            .stat-number {
                font-size: 2rem;
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Notification Styles */
        .notification {
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 10px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            transform: translateX(400px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 300px;
            word-wrap: break-word;
        }

        .notification.success {
            background: linear-gradient(45deg, #27ae60, #2ecc71);
        }

        .notification.error {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
        }

        .notification.info {
            background: linear-gradient(45deg, #3498db, #2980b9);
        }

        .notification.show {
            transform: translateX(0);
        }
    </style>
</head>
<body>
    <!-- Loading Overlay -->
    <div class="loading-overlay">
        <div class="loading-spinner"></div>
    </div>

    <div class="scroll-indicator" id="scrollIndicator"></div>
    
    <header class="header">
        <nav class="nav">
            <a href="#" class="logo">
                <img src="assets/logo.png" alt="ZORQENT Logo" class="logo-img" />
                ZORQENT
            </a>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Innovative Software Solutions</h1>
            <p>Empowering businesses with cutting-edge technology and custom software development</p>
            <a href="#contact" class="cta-button">Get Started Today</a>
        </div>
    </section>

    <section id="about" class="section fade-in">
        <h2>About Zorqent Technologies</h2>
        <div class="about-content">
            <div class="about-text">
                <p>We are a leading software development company specializing in creating innovative, scalable, and user-friendly solutions for businesses of all sizes. With years of experience in the industry, our team of expert developers and designers work tirelessly to transform your ideas into powerful digital solutions.</p>
                <p>Our mission is to bridge the gap between technology and business needs, delivering custom software that drives growth, efficiency, and success for our clients across various industries.</p>
            </div>
            <div class="about-stats">
                <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div>Projects Completed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div>Happy Clients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3+</div>
                    <div>Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div>Support</div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="section fade-in">
        <h2>Our Products & Services</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-icon">🍽️</div>
                <h3>Restaurant Management System</h3>
                <p>Comprehensive solution for managing orders, inventory, staff, and customer relationships. Streamline your restaurant operations with our intuitive platform.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">🎓</div>
                <h3>Student Management System</h3>
                <p>Complete educational management platform covering admissions, grades, attendance, and communication between students, teachers, and parents.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">💪</div>
                <h3>Gym Management System</h3>
                <p>All-in-one fitness center management solution with member tracking, workout plans, payment processing, and equipment maintenance.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">🏢</div>
                <h3>Custom Software Development</h3>
                <p>Tailored software solutions designed specifically for your business needs, from web applications to mobile apps and enterprise systems.</p>
            </div>
            <div class="product-card">
                <div class="product-icon">☁️</div>
                <h3>Cloud Solutions</h3>
                <p>Scalable cloud-based applications and services that grow with your business, ensuring reliability and accessibility from anywhere.</p>
            </div>
            <div class="product-card">
    <div class="product-icon">🎓</div>
    <h3>Project Guidance</h3>
    <p>We assist students in planning, developing, and completing their mini and major academic projects with expert guidance and hands-on support.</p>
</div>

        </div>
    </section>

    <section id="features" class="features">
        <div class="section fade-in">
            <h2>Why Choose ZORQENT Technologies?</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <h3>Fast Development</h3>
                    <p>Rapid prototyping and agile development methodology to bring your ideas to life quickly</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure & Reliable</h3>
                    <p>Industry-standard security practices and robust architecture for maximum reliability</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📱</div>
                    <h3>Mobile-First Design</h3>
                    <p>Responsive and mobile-optimized solutions that work seamlessly across all devices</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🎯</div>
                    <h3>Custom Solutions</h3>
                    <p>Tailored software development that perfectly fits your unique business requirements</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section fade-in">
        <h2>Get In Touch</h2>
        <div class="contact-content">
            <div class="contact-form">
                <form id="contactForm" method="POST" action="email/send_email.php">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="cta-button">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div>
                        <h4>Address</h4>
                        <p>Cherthala ,Alappuzha District  Kerala</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <h4>Phone</h4>
                        <p>+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div>
                        <h4>Email</h4>
                        <p>info@ZORQENTtechnologies.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">🕒</div>
                    <div>
                        <h4>Business Hours</h4>
                        <p>Mon - Fri: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
                <div class="contact-item">
    <div class="contact-icon">📄</div>
    <div>
        <h4>Submit Your Query</h4>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScvG3ToS7d5821iRby3LAGNdox4g62g6YEyX0bpCNL7Tp7QNg/viewform" target="_blank">
            <button style="padding: 8px 16px; background-color: #5D3FD3; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Open Google Form
            </button>
        </a>
    </div>
</div>

            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>ZORQENT Technologies</h3>
                <p>Leading software development company creating innovative solutions for modern businesses. We transform ideas into powerful digital experiences.</p>
                <div class="social-links">
                    <a href="#" title="Facebook">f</a>
                    <a href="#" title="Twitter">t</a>
                    <a href="#" title="LinkedIn">in</a>
                    <a href="#" title="Instagram">ig</a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <p><a href="#">Custom Software Development</a></p>
                <p><a href="#">Web Application Development</a></p>
                <p><a href="#">Cloud Solutions</a></p>
                <p><a href="#">UI/UX Design</a></p>
            </div>
            <div class="footer-section">
                <h3>Products</h3>
                <p><a href="#">Restaurant Management</a></p>
                <p><a href="#">Student Management</a></p>
                <p><a href="#">Gym Management</a></p>
                <p><a href="#">Project Guidance</a></p>
                <p><a href="#">CRM Solutions</a></p>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>📍Cherthala ,Alappuzha District Kerala</p>
                <p>📞 +1 (555) 123-4567</p>
                <p>✉️ info@ZORQENTtechnologies.com</p>
                <p>🌐 www.ZORQENTtechnologies.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 ZORQENT Technologies. All rights reserved. Designed with ❤️ for innovation.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">↑</button>

    <script>
        // Loading screen
        window.addEventListener('load', function() {
            const loadingOverlay = document.querySelector('.loading-overlay');
            setTimeout(() => {
                loadingOverlay.style.opacity = '0';
                setTimeout(() => {
                    loadingOverlay.style.display = 'none';
                }, 500);
            }, 1000);
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.querySelector('.header').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Scroll progress indicator
        function updateScrollIndicator() {
            const scrolled = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            document.getElementById('scrollIndicator').style.width = Math.min(scrolled, 100) + '%';
        }

        // Header background on scroll
        function updateHeaderOnScroll() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(44, 62, 80, 0.95)';
                header.style.backdropFilter = 'blur(15px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #2c3e50 0%, #3498db 100%)';
                header.style.backdropFilter = 'blur(10px)';
            }
        }

        // Mobile menu toggle
        const mobileMenu = document.querySelector('.mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        mobileMenu.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navLinks.contains(event.target) || mobileMenu.contains(event.target);
            if (!isClickInsideNav && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            }
        });

        // Scroll animations
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in');
            const windowHeight = window.innerHeight;
            
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');

        function toggleBackToTopButton() {
            if (window.scrollY > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        }

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Contact form handling
            document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const formData = new FormData(form);
    const submitButton = form.querySelector('.cta-button');
    const originalText = submitButton.textContent;

    // Basic client-side validation
    const name = formData.get('name');
    const email = formData.get('email');
    const subject = formData.get('subject');
    const message = formData.get('message');

    if (!name || !email || !subject || !message) {
        showNotification('Please fill in all fields.', 'error');
        return;
    }

    if (!isValidEmail(email)) {
        showNotification('Please enter a valid email address.', 'error');
        return;
    }

    // Send form via fetch
    submitButton.textContent = 'Sending...';
    submitButton.disabled = true;

    fetch('email/send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            showNotification(data.message || 'Message sent successfully!', 'success');
            form.reset();
        } else {
            showNotification(data.message || 'Failed to send message.', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('An error occurred while sending your message.', 'error');
    })
    .finally(() => {
        submitButton.textContent = originalText;
        submitButton.disabled = false;
    });
});

function isValidEmail(email) {
    // Basic email regex
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

  // Notification system
        function showNotification(message, type) {
            // Remove existing notifications
            const existingNotifications = document.querySelectorAll('.notification');
            existingNotifications.forEach(notification => notification.remove());
            
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.textContent = message;
            
            // Add to DOM
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);
            
            // Remove after delay
            setTimeout(() => {
                notification.classList.remove('show');
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }, 4000);
        }

        // Animate statistics on scroll
        function animateStats() {
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const finalNumber = stat.textContent;
                const isVisible = stat.getBoundingClientRect().top < window.innerHeight;
                
                if (isVisible && !stat.classList.contains('animated')) {
                    stat.classList.add('animated');
                    animateNumber(stat, finalNumber);
                }
            });
        }

        function animateNumber(element, finalNumber) {
            const isNumberOnly = /^\d+$/.test(finalNumber);
            if (!isNumberOnly) return;
            
            const duration = 2000;
            const steps = 60;
            const stepValue = parseInt(finalNumber) / steps;
            let currentValue = 0;
            
            const timer = setInterval(() => {
                currentValue += stepValue;
                if (currentValue >= parseInt(finalNumber)) {
                    element.textContent = finalNumber;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(currentValue).toString();
                }
            }, duration / steps);
        }

        // Performance optimization: throttle scroll events
        function throttle(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // Apply throttling to scroll events
        const throttledScrollHandler = throttle(() => {
            updateScrollIndicator();
            updateHeaderOnScroll();
            handleScrollAnimations();
            animateStats();
            toggleBackToTopButton();
        }, 16); // ~60fps

        window.addEventListener('scroll', throttledScrollHandler);

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                mobileMenu.classList.remove('active');
            }
        });

        // Initialize animations on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Initial check for visible elements
            handleScrollAnimations();
            
            // Add some delay for better UX
            setTimeout(() => {
                const heroContent = document.querySelector('.hero-content');
                if (heroContent) {
                    heroContent.style.opacity = '1';
                }
            }, 1500);
        });

        // Smooth reveal animation for product cards using Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${Array.from(entry.target.parentNode.children).indexOf(entry.target) * 0.1}s`;
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe product cards and feature items
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.product-card, .feature-item');
            cards.forEach(card => {
                observer.observe(card);
            });
        });

        // Add CSS for card animations
        const style = document.createElement('style');
        style.textContent = `
            .product-card, .feature-item {
                opacity: 0;
                transform: translateY(30px);
                transition: all 0.6s ease;
            }
            .product-card.visible, .feature-item.visible {
                opacity: 1;
                transform: translateY(0);
            }
        `;
        document.head.appendChild(style);
        
    </script>
</body>
</html>
