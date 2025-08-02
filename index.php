<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZORQENT Technologies - Innovative Software Solutions</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #000000;
            --secondary-color: #6B7280;
            --accent-color: #3B82F6;
            --light-gray: #F9FAFB;
            --medium-gray: #E5E7EB;
            --dark-gray: #374151;
            --white: #FFFFFF;
            --shadow-light: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            --shadow-medium: 0 4px 6px rgba(0, 0, 0, 0.07), 0 10px 15px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 10px 25px rgba(0, 0, 0, 0.15), 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--primary-color);
            background-color: var(--white);
            overflow-x: hidden;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Navigation */
        .navbar {
            background: transparent;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--medium-gray);
            transition: all 0.3s ease;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar.scrolled {
            box-shadow: var(--shadow-medium);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .navbar-nav .nav-link {
            color: var(--secondary-color) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: var(--accent-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }

        /* Logo styling - Fixed */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--accent-color), #1E40AF);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Alternative logo if you have an image */
        .logo-img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: contain;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--light-gray) 0%, var(--white) 100%);
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(107, 114, 128, 0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-gray) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            animation: slideInUp 0.8s ease-out 0.3s forwards;
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--secondary-color);
            margin-bottom: 2rem;
            opacity: 0;
            animation: slideInUp 0.8s ease-out 0.6s forwards;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            opacity: 0;
            animation: slideInUp 0.8s ease-out 0.9s forwards;
        }

        .btn-primary-custom {
            background: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: var(--shadow-light);
        }

        .btn-primary-custom:hover {
            background: var(--dark-gray);
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
            color: var(--white);
        }

        .btn-secondary-custom {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--medium-gray);
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary-custom:hover {
            background: var(--primary-color);
            color: var(--white);
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }

        .hero-image {
            position: relative;
            opacity: 0;
            animation: slideInRight 1s ease-out 0.6s forwards;
        }

        .floating-card {
            position: absolute;
            background: var(--white);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            backdrop-filter: blur(20px);
            border: 1px solid var(--medium-gray);
        }

        .floating-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: var(--shadow-heavy);
        }

        .floating-card-1 {
            top: 15%;
            left: 80%;
            animation: float 3s ease-in-out infinite;
        }

        .floating-card-2 {
            bottom: 50%;
            right: 10%;
            animation: float 3s ease-in-out infinite 1.5s;
        }

        .floating-card-3 {
            top: 50%;
            right: 40%;
            animation: float 3s ease-in-out infinite 0.8s;
        }
        
        .floating-card-4 {
            margin-top: 15%;
            left: 40%;
            animation: float 3s ease-in-out infinite 0.5s;
        }

        /* Services Section */
        .services {
            padding: 6rem 0;
            background: var(--white);
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-gray) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-title p {
            font-size: 1.125rem;
            color: var(--secondary-color);
            max-width: 600px;
            margin: 0 auto;
        }

        .service-card {
            background: var(--white);
            border-radius: 20px;
            padding: 2.5rem;
            height: 100%;
            border: 1px solid var(--medium-gray);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.05), transparent);
            transition: left 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: var(--shadow-heavy);
            border-color: var(--accent-color);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--accent-color), #1E40AF);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .service-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .service-card p {
            color: var(--secondary-color);
            line-height: 1.6;
        }

        /* Features Section */
        .features {
            padding: 6rem 0;
            background: var(--light-gray);
        }

        .feature-item {
            text-align: center;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--accent-color);
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
        }

        .feature-item:hover .feature-icon {
            transform: scale(1.1);
            box-shadow: var(--shadow-medium);
        }

        .feature-item h4 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .feature-item p {
            color: var(--secondary-color);
        }

        /* Contact Section */
        .contact {
            padding: 6rem 0;
            background: var(--white);
        }

        .contact-card {
            background: var(--white);
            border-radius: 24px;
            padding: 3rem;
            box-shadow: var(--shadow-medium);
            border: 1px solid var(--medium-gray);
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
        }

        .form-control {
            border: 2px solid var(--medium-gray);
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.1);
            background: var(--white);
        }

        .form-label {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            background: var(--light-gray);
            border-radius: 16px;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .contact-info-item:hover {
            background: var(--white);
            box-shadow: var(--shadow-light);
            transform: translateX(10px);
        }

        .contact-info-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: var(--accent-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--white);
            font-size: 1.25rem;
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: var(--white);
            padding: 3rem 0 1rem;
        }

        .footer h5 {
            color: var(--white);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .footer p, .footer a {
            color: #9CA3AF;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--white);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--dark-gray);
            color: var(--white);
            text-align: center;
            line-height: 40px;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--accent-color);
            transform: translateY(-3px);
        }

        /* Animations */
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

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            font-size: 1.25rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: var(--shadow-medium);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--dark-gray);
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.125rem;
            }

            .hero-cta {
                justify-content: center;
            }

            .floating-card {
                display: none;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .service-card {
                margin-bottom: 2rem;
            }

            .contact-card {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }

            .btn-primary-custom,
            .btn-secondary-custom {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
            }

            .service-card {
                padding: 2rem;
            }

            .contact-card {
                padding: 1.5rem;
            }
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-color), #1E40AF);
            z-index: 10000;
            transition: width 0.3s ease;
        }

        /* Button loading state */
        .btn-primary-custom.loading::after {
            content: '';
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-left: 8px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Enhanced animations */
        .animate-in {
            animation: slideInUp 0.6s ease-out forwards;
        }
    </style>
</head>
<body>
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
           <a href="#" class="navbar-brand">
                <div class="logo-container">
                    <!-- Option 1: CSS-based logo icon -->
                    <!--<div class="logo-icon">Z</div>-->
                    <!-- Option 2: If you have a logo image, uncomment the line below and comment out the div above -->
                    <img src="assets/logo.png" alt="ZORQENT Logo" class="logo-img" /> 
                    <span>ZORQENT</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Innovative Software Solutions</h1>
                        <p>Empowering businesses with cutting-edge technology and custom software development. We transform ideas into powerful digital experiences.</p>
                        <div class="hero-cta">
                            <a href="#contact" class="btn-primary-custom">Get Started</a>
                            <a href="#services" class="btn-secondary-custom">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="floating-card floating-card-1">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-code text-primary me-2"></i>
                                <span class="fw-semibold">Custom Development</span>
                            </div>
                        </div>
                        <div class="floating-card floating-card-2">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-cloud text-info me-2"></i>
                                <span class="fw-semibold">Cloud Solutions</span>
                            </div>
                        </div>
                        <div class="floating-card floating-card-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-mobile-alt text-success me-2"></i>
                                <span class="fw-semibold">Mobile Apps</span>
                            </div>
                        </div>
                         <div class="floating-card floating-card-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-graduation-cap text-success me-2"></i>
                                <span class="fw-semibold">Project Guidance</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services fade-in">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer comprehensive software development solutions tailored to your business needs</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Restaurant Management</h3>
                        <p>Comprehensive solution for managing orders, inventory, staff, and customer relationships. Streamline your restaurant operations with our intuitive platform.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3>Student Management</h3>
                        <p>Complete educational management platform covering admissions, grades, attendance, and communication between students, teachers, and parents.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h3>Gym Management</h3>
                        <p>All-in-one fitness center management solution with member tracking, workout plans, payment processing, and equipment maintenance.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Custom Development</h3>
                        <p>Tailored software solutions designed specifically for your business needs, from web applications to mobile apps and enterprise systems.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Cloud Solutions</h3>
                        <p>Scalable cloud-based applications and services that grow with your business, ensuring reliability and accessibility from anywhere.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3>Project Guidance</h3>
                        <p>We assist students in planning, developing, and completing their mini and major academic projects with expert guidance and hands-on support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features fade-in">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose ZORQENT?</h2>
                <p>We deliver exceptional software solutions with modern technology and expert craftsmanship</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h4>Fast Development</h4>
                        <p>Rapid prototyping and agile development methodology to bring your ideas to life quickly</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Secure & Reliable</h4>
                        <p>Industry-standard security practices and robust architecture for maximum reliability</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Mobile-First Design</h4>
                        <p>Responsive and mobile-optimized solutions that work seamlessly across all devices</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Custom Solutions</h4>
                        <p>Tailored software development that perfectly fits your unique business requirements</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
   <section id="contact" class="contact fade-in">
   <div class="container">
       <div class="section-title">
           <h2>Get In Touch</h2>
           <p>Ready to start your project? Let's discuss how we can help transform your ideas into reality</p>
       </div>
       
       <div class="row g-5">
           <div class="col-lg-8">
               <div class="contact-card">
                   <form id="contactForm" method="POST" action="email/send_email.php">
                       <div class="row g-3">
                           <div class="col-md-6">
                               <label for="name" class="form-label">Full Name</label>
                               <input type="text" class="form-control" id="name" name="name" required>
                           </div>
                           <div class="col-md-6">
                               <label for="email" class="form-label">Email Address</label>
                               <input type="email" class="form-control" id="email" name="email" required>
                           </div>
                           <div class="col-12">
                               <label for="subject" class="form-label">Subject</label>
                               <input type="text" class="form-control" id="subject" name="subject" required>
                           </div>
                           <div class="col-12">
                               <label for="message" class="form-label">Message</label>
                               <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                           </div>
                           <div class="col-12">
                               <button type="submit" class="btn-primary-custom">Send Message</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
           
           <div class="col-lg-4">
               <div class="contact-info-item">
                   <div class="contact-info-icon">
                       <i class="fas fa-map-marker-alt"></i>
                   </div>
                   <div>
                       <h5 class="mb-1">Address</h5>
                       <p class="mb-0">Cherthala, Alappuzha District<br>Kerala, India</p>
                   </div>
               </div>
               
               <div class="contact-info-item">
                   <div class="contact-info-icon">
                       <i class="fas fa-envelope"></i>
                   </div>
                   <div>
                       <h5 class="mb-1">Email</h5>
                       <p class="mb-0">info@zorqenttechnologies.com</p>
                   </div>
               </div>
               
               <div class="contact-info-item">
                   <div class="contact-info-icon">
                       <i class="fas fa-clock"></i>
                   </div>
                   <div>
                       <h5 class="mb-1">Business Hours</h5>
                       <p class="mb-0">Mon - Fri: 9:00 AM - 6:00 PM</p>
                   </div>
               </div>
               
               <div class="contact-info-item">
                   <div class="contact-info-icon">
                       <i class="fas fa-file-alt"></i>
                   </div>
                   <div>
                       <h5 class="mb-1">Submit Query</h5>
                       <a href="https://docs.google.com/forms/d/e/1FAIpQLScvG3ToS7d5821iRby3LAGNdox4g62g6YEyX0bpCNL7Tp7QNg/viewform" target="_blank" class="btn-secondary-custom btn-sm">Open Google Form</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>ZORQENT Technologies</h5>
                    <p>Leading software development company creating innovative solutions for modern businesses. We transform ideas into powerful digital experiences.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5>Services</h5>
                    <p><a href="#services">Custom Development</a></p>
                    <p><a href="#services">Web Applications</a></p>
                    <p><a href="#services">Cloud Solutions</a></p>
                    <p><a href="#services">Mobile Apps</a></p>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5>Products</h5>
                    <p><a href="#services">Restaurant Management</a></p>
                    <p><a href="#services">Student Management</a></p>
                    <p><a href="#services">Gym Management</a></p>
                    <p><a href="#services">Project Guidance</a></p>
                </div>
                
                <div class="col-lg-4">
                    <h5>Contact Info</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>Cherthala, Alappuzha District, Kerala</p>
                    <p><i class="fas fa-envelope me-2"></i>info@zorqenttechnologies.com</p>
                    <p><i class="fas fa-globe me-2"></i>www.zorqent.wuaze.com</p>
                </div>
            </div>
            
            <hr class="my-4" style="border-color: #374151;">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 ZORQENT Technologies. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Designed with ❤️ for innovation</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Scroll Progress Bar
        function updateScrollProgress() {
            const scrolled = (window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            document.getElementById('scrollProgress').style.width = Math.min(scrolled, 100) + '%';
        }

        // Navbar scroll effect
        function updateNavbar() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }

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
        function toggleBackToTop() {
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Back to top functionality
        document.getElementById('backToTop').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Contact form handling with fetch API
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = this;
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            // Show loading state
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;
            submitButton.classList.add('loading');

            fetch('email/send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification(data.message || 'Message sent successfully! We\'ll get back to you soon.', 'success');
                    form.reset();
                } else {
                    showNotification(data.message || 'Failed to send message. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('An error occurred while sending your message. Please try again.', 'error');
            })
            .finally(() => {
                submitButton.textContent = originalText;
                submitButton.disabled = false;
                submitButton.classList.remove('loading');
            });
        });

        // Notification system
        function showNotification(message, type) {
            // Remove existing notifications
            const existingNotifications = document.querySelectorAll('.notification');
            existingNotifications.forEach(notification => notification.remove());
            
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                <div class="d-flex align-items-center">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                    <span>${message}</span>
                </div>
            `;
            
            // Add styles
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                padding: 1rem 1.5rem;
                border-radius: 12px;
                color: white;
                font-weight: 500;
                z-index: 10000;
                transform: translateX(400px);
                transition: all 0.3s ease;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                max-width: 350px;
                background: ${type === 'success' ? 'linear-gradient(45deg, #10B981, #059669)' : 'linear-gradient(45deg, #EF4444, #DC2626)'};
            `;
            
            // Add to DOM
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            // Remove after delay
            setTimeout(() => {
                notification.style.transform = 'translateX(400px)';
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }, 4000);
        }

        // Parallax effect for floating cards
        function handleParallax() {
            const cards = document.querySelectorAll('.floating-card');
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            cards.forEach((card, index) => {
                const speed = 0.5 + (index * 0.2);
                card.style.transform = `translateY(${rate * speed}px)`;
            });
        }

        // 3D tilt effect for service cards
        function initTiltEffect() {
            const cards = document.querySelectorAll('.service-card');
            
            cards.forEach(card => {
                card.addEventListener('mousemove', handleTilt);
                card.addEventListener('mouseleave', resetTilt);
            });
        }

        function handleTilt(e) {
            const card = e.currentTarget;
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-15px)`;
        }

        function resetTilt(e) {
            const card = e.currentTarget;
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
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
            updateScrollProgress();
            updateNavbar();
            handleScrollAnimations();
            toggleBackToTop();
            handleParallax();
        }, 16); // ~60fps

        // Event listeners
        window.addEventListener('scroll', throttledScrollHandler);
        window.addEventListener('load', function() {
            handleScrollAnimations();
            initTiltEffect();
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            }
        });

        // Add loading animation to buttons
        document.querySelectorAll('.btn-primary-custom, .btn-secondary-custom').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!this.classList.contains('loading')) {
                    this.classList.add('loading');
                    setTimeout(() => {
                        this.classList.remove('loading');
                    }, 1000);
                }
            });
        });

        // Enhanced service card interactions
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transition = 'all 0.4s ease';
            });
        });

        // Intersection Observer for better performance
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    // Add staggered animation delay for children
                    const children = entry.target.querySelectorAll('.service-card, .feature-item');
                    children.forEach((child, index) => {
                        child.style.animationDelay = `${index * 0.1}s`;
                        child.classList.add('animate-in');
                    });
                }
            });
        }, observerOptions);

        // Observe sections for animations
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('.fade-in');
            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</body>
</html>