<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - ZORQENT Technologies</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            /* Light mode colors */
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
            
            /* Background and text */
            --bg-primary: #FFFFFF;
            --bg-secondary: #F9FAFB;
            --text-primary: #000000;
            --text-secondary: #6B7280;
            --border-color: #E5E7EB;
        }

        [data-theme="dark"] {
            /* Dark mode colors */
            --primary-color: #FFFFFF;
            --secondary-color: #9CA3AF;
            --accent-color: #60A5FA;
            --light-gray: #1F2937;
            --medium-gray: #374151;
            --dark-gray: #F3F4F6;
            --white: #111827;
            --shadow-light: 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px 2px rgba(0, 0, 0, 0.4);
            --shadow-medium: 0 4px 6px rgba(0, 0, 0, 0.2), 0 10px 15px rgba(0, 0, 0, 0.3);
            --shadow-heavy: 0 10px 25px rgba(0, 0, 0, 0.4), 0 20px 40px rgba(0, 0, 0, 0.3);
            
            /* Background and text */
            --bg-primary: #111827;
            --bg-secondary: #1F2937;
            --text-primary: #FFFFFF;
            --text-secondary: #9CA3AF;
            --border-color: #374151;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background-color: var(--bg-primary);
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Dark Mode Toggle */
        .theme-toggle {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--accent-color);
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            z-index: 1001;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .theme-toggle:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: var(--shadow-heavy);
        }

        .theme-toggle i {
            transition: all 0.3s ease;
        }

        .theme-toggle.rotating i {
            transform: rotate(360deg);
        }

        /* Navigation */
        .navbar {
            background: var(--bg-primary);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
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
            color: var(--text-primary) !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .navbar-nav .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--text-primary) !important;
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

        .navbar-toggler {
            border: none;
            color: var(--text-primary);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Logo styling */
        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: contain;
            filter: var(--logo-filter, none);
            transition: filter 0.3s ease;
        }

        [data-theme="dark"] .logo-img {
            --logo-filter: brightness(1.2) contrast(1.1);
        }

        /* Careers Hero Section */
        .careers-hero {
            min-height: 60vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%);
            position: relative;
            overflow: hidden;
            margin-top: 120px;
        }

        .careers-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(107, 114, 128, 0.05)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        [data-theme="dark"] .careers-hero::before {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(156, 163, 175, 0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Glassmorphism Effects */
        .glass-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 
                0 8px 32px rgba(31, 38, 135, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        [data-theme="dark"] .glass-container {
            background: rgba(17, 24, 39, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 
                0 8px 32px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .glass-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        [data-theme="dark"] .glass-container::before {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

        .glass-container:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 20px 50px rgba(31, 38, 135, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
        }

        /* Job Card Styling */
        .job-card {
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .job-card:hover {
            transform: translateY(-10px) scale(1.02);
        }

        .job-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .job-department {
            color: var(--accent-color);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .job-location {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .job-description {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .job-requirements {
            margin-bottom: 2rem;
        }

        .job-requirements ul {
            list-style: none;
            padding: 0;
        }

        .job-requirements li {
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .job-requirements li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
        }

        .btn-apply {
            background: linear-gradient(135deg, var(--accent-color), #1E40AF);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: var(--shadow-light);
        }

        .btn-apply:hover {
            background: linear-gradient(135deg, #1E40AF, var(--accent-color));
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            color: white;
        }

        /* Benefits Section */
        .benefits-section {
            padding: 6rem 0;
            background: var(--bg-secondary);
        }

        .benefit-item {
            text-align: center;
            padding: 2rem;
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-color), #1E40AF);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .benefit-item:hover .benefit-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--text-primary) 0%, var(--text-secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-title p {
            font-size: 1.125rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact CTA Section */
        .contact-cta {
            background: linear-gradient(135deg, var(--accent-color), #1E40AF);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .contact-cta h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .contact-cta p {
            font-size: 1.125rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .contact-btn {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .contact-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            color: white;
        }

        /* Footer */
        .footer {
            background: var(--text-primary);
            color: var(--bg-primary);
            padding: 3rem 0 1rem;
        }

        .footer h5 {
            color: var(--bg-primary);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .footer p, .footer a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--bg-primary);
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--bg-secondary);
            color: black;
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
            background: var(--text-primary);
            color: var(--bg-primary);
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
            background: var(--text-secondary);
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .theme-toggle {
                top: 120px;
                right: 15px;
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }

            .careers-hero {
                min-height: 40vh;
                margin-top: 100px;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .job-card {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            .job-card {
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
    </style>
</head>
<body>
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Dark Mode Toggle -->
    <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
        <i class="fas fa-moon" id="themeIcon"></i>
    </button>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
           <a href="index.html" class="navbar-brand">
                <div class="logo-container">
                   <img src="../assets/logo.png" alt="ZORQENT Logo" class="logo-img" /> 
                    <span>ZORQENT</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.ph#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="careers.php">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.ph#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Careers Hero Section -->
    <section class="careers-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 style="font-size: 3.5rem; font-weight: 700; margin-bottom: 1.5rem; background: linear-gradient(135deg, var(--text-primary) 0%, var(--text-secondary) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Join Our Team</h1>
                    <p style="font-size: 1.25rem; color: var(--text-secondary); margin-bottom: 2rem;">Build the future of technology with us. We're looking for passionate individuals to help create innovative software solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="py-5" style="padding: 6rem 0; background: var(--bg-primary);">
        <div class="container">
            <div class="section-title fade-in">
                <h2>Open Positions</h2>
                <p>Discover exciting opportunities to grow your career with ZORQENT Technologies</p>
            </div>

            <div class="row">
                <!-- Full Stack Developer Position -->
                <div class="col-lg-6 mb-4 fade-in">
                    <div class="glass-container job-card">
                        <div class="job-title">Full Stack Developer</div>
                        <div class="job-department">Development Team</div>
                        <div class="job-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Cherthala, Kerala (Remote/Hybrid)
                        </div>
                        <div class="job-description">
                            Join our development team to build cutting-edge web applications using modern technologies. Work on diverse projects including our student management, gym management, and restaurant management systems.
                        </div>
                        <div class="job-requirements">
                            <h6 style="color: var(--text-primary); margin-bottom: 1rem; font-weight: 600;">Requirements:</h6>
                            <ul>
                                <li>3+ years of experience in web development</li>
                                <li>Proficiency in React, Node.js, and databases</li>
                                <li>Experience with cloud platforms (AWS/Azure)</li>
                                <li>Strong problem-solving skills</li>
                                <li>Bachelor's degree in Computer Science or related field</li>
                            </ul>
                        </div>
                        <a href="../404.php" class="btn-apply">Learn More</a>
                    </div>
                </div>

                <!-- UI/UX Designer Position -->
                <div class="col-lg-6 mb-4 fade-in">
                    <div class="glass-container job-card">
                        <div class="job-title">UI/UX Designer</div>
                        <div class="job-department">Design Team</div>
                        <div class="job-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Cherthala, Kerala (Remote/Hybrid)
                        </div>
                        <div class="job-description">
                            Create intuitive and visually appealing user interfaces for our software solutions. Work closely with developers to ensure seamless user experiences across all our platforms.
                        </div>
                        <div class="job-requirements">
                            <h6 style="color: var(--text-primary); margin-bottom: 1rem; font-weight: 600;">Requirements:</h6>
                            <ul>
                                <li>2+ years of UI/UX design experience</li>
                                <li>Proficiency in Figma, Adobe Creative Suite</li>
                                <li>Strong understanding of user-centered design</li>
                                <li>Portfolio showcasing web and mobile designs</li>
                                <li>Knowledge of HTML/CSS is a plus</li>
                            </ul>
                        </div>
                        <a href="../404.php" class="btn-apply">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section fade-in">
        <div class="container">
            <div class="section-title">
                <h2>Why Work With Us?</h2>
                <p>Join a company that values innovation, growth, and work-life balance</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4>Innovation First</h4>
                        <p>Work with cutting-edge technologies and contribute to innovative solutions that make a real impact</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Continuous Learning</h4>
                        <p>Access to training programs, conferences, and resources to keep your skills sharp and up-to-date</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Flexible Work</h4>
                        <p>Hybrid and remote work options to maintain perfect work-life balance and productivity</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Great Team</h4>
                        <p>Join a collaborative, supportive team that celebrates achievements and grows together</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture Section -->
        <section class="py-5 fade-in" style="padding: 6rem 0; background: var(--bg-primary);">
   <div class="container">
       <div class="section-title">
           <h2>Our Culture</h2>
           <p>At ZORQENT, we believe in creating an environment where innovation thrives and people grow</p>
       </div>

       <div class="row g-4">
           <div class="col-lg-4">
               <div class="glass-container" style="padding: 2rem; height: 100%; text-align: center;">
                   <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-color), #1E40AF); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                       <i class="fas fa-lightbulb"></i>
                   </div>
                   <h4 style="color: var(--text-primary); margin-bottom: 1rem;">Innovation Driven</h4>
                   <p style="color: var(--text-secondary);">We encourage creative thinking and provide the freedom to explore new technologies and methodologies to solve complex problems.</p>
               </div>
           </div>

           <div class="col-lg-4">
               <div class="glass-container" style="padding: 2rem; height: 100%; text-align: center;">
                   <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-color), #1E40AF); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                       <i class="fas fa-handshake"></i>
                   </div>
                   <h4 style="color: var(--text-primary); margin-bottom: 1rem;">Collaborative Spirit</h4>
                   <p style="color: var(--text-secondary);">Our open culture promotes teamwork, knowledge sharing, and mutual support to achieve common goals and celebrate success together.</p>
               </div>
           </div>

           <div class="col-lg-4">
               <div class="glass-container" style="padding: 2rem; height: 100%; text-align: center;">
                   <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-color), #1E40AF); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                       <i class="fas fa-chart-line"></i>
                   </div>
                   <h4 style="color: var(--text-primary); margin-bottom: 1rem;">Growth Focused</h4>
                   <p style="color: var(--text-secondary);">We invest in our people's professional development through training, mentorship, and opportunities to take on challenging projects.</p>
               </div>
           </div>

           <div class="col-lg-4">
               <div class="glass-container" style="padding: 2rem; height: 100%; text-align: center;">
                   <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-color), #1E40AF); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                       <i class="fas fa-balance-scale"></i>
                   </div>
                   <h4 style="color: var(--text-primary); margin-bottom: 1rem;">Work-Life Balance</h4>
                   <p style="color: var(--text-secondary);">We believe in maintaining a healthy balance between professional excellence and personal well-being through flexible schedules and remote work options.</p>
               </div>
           </div>

           <div class="col-lg-4">
               <div class="glass-container" style="padding: 2rem; height: 100%; text-align: center;">
                   <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-color), #1E40AF); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                       <i class="fas fa-award"></i>
                   </div>
                   <h4 style="color: var(--text-primary); margin-bottom: 1rem;">Excellence & Quality</h4>
                   <p style="color: var(--text-secondary);">We maintain the highest standards in everything we do, from code quality to client relationships, always striving for excellence in our deliverables.</p>
               </div>
           </div>

           <div class="col-lg-4">
               <div class="glass-container" style="padding: 2rem; height: 100%; text-align: center;">
                   <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-color), #1E40AF); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.5rem; color: white;">
                       <i class="fas fa-heart"></i>
                   </div>
                   <h4 style="color: var(--text-primary); margin-bottom: 1rem;">Caring Community</h4>
                   <p style="color: var(--text-secondary);">We foster a supportive environment where everyone feels valued, respected, and empowered to contribute their unique perspectives and talents.</p>
               </div>
           </div>
       </div>
   </div>
</section>

    <!-- FAQ Section -->
    <section class="py-5 fade-in" style="padding: 6rem 0; background: var(--bg-secondary);">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Got questions about working at ZORQENT? We've got answers</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="glass-container" style="padding: 2rem;">
                        <div class="accordion" id="faqAccordion" style="border: none;">
                            <div class="accordion-item" style="background: transparent; border: none; border-bottom: 1px solid var(--border-color); margin-bottom: 1rem;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" style="background: transparent; color: var(--text-primary); border: none; font-weight: 600; padding: 1rem 0;">
                                        What is the interview process like?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 1rem 0; color: var(--text-secondary);">
                                        Our interview process typically consists of 3 stages: initial screening call, technical assessment, and final interview with the team. The entire process usually takes 1-2 weeks.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" style="background: transparent; border: none; border-bottom: 1px solid var(--border-color); margin-bottom: 1rem;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" style="background: transparent; color: var(--text-primary); border: none; font-weight: 600; padding: 1rem 0;">
                                        Do you offer remote work options?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 1rem 0; color: var(--text-secondary);">
                                        Yes! We offer flexible work arrangements including fully remote, hybrid, and on-site options depending on the role and team requirements.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" style="background: transparent; border: none; border-bottom: 1px solid var(--border-color); margin-bottom: 1rem;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" style="background: transparent; color: var(--text-primary); border: none; font-weight: 600; padding: 1rem 0;">
                                        What benefits do you provide?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 1rem 0; color: var(--text-secondary);">
                                        We offer comprehensive benefits including health insurance, professional development budget, flexible PTO, performance bonuses, and modern equipment for remote work.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item" style="background: transparent; border: none; border-bottom: 1px solid var(--border-color); margin-bottom: 1rem;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" style="background: transparent; color: var(--text-primary); border: none; font-weight: 600; padding: 1rem 0;">
                                        How soon will I hear back after applying?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body" style="padding: 1rem 0; color: var(--text-secondary);">
                                        We aim to respond to all applications within 5-7 business days. If your profile matches our requirements, our HR team will reach out to schedule an initial call.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    

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
                    <p><a href="index.html#services">Custom Development</a></p>
                    <p><a href="index.html#services">Web Applications</a></p>
                    <p><a href="index.html#services">Cloud Solutions</a></p>
                    <p><a href="index.html#services">Mobile Apps</a></p>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5>Products</h5>
                    <p><a href="index.html#services">Restaurant Management</a></p>
                    <p><a href="index.html#services">Student Management</a></p>
                    <p><a href="index.html#services">Gym Management</a></p>
                    <p><a href="index.html#services">Project Guidance</a></p>
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
        // Dark Mode Functionality
        class ThemeManager {
            constructor() {
                this.themeToggle = document.getElementById('themeToggle');
                this.themeIcon = document.getElementById('themeIcon');
                this.currentTheme = localStorage.getItem('theme') || 'light';
                
                this.init();
            }
            
            init() {
                this.setTheme(this.currentTheme);
                this.themeToggle.addEventListener('click', () => {
                    this.toggleTheme();
                });
                
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                    if (!localStorage.getItem('theme')) {
                        this.setTheme(e.matches ? 'dark' : 'light');
                    }
                });
            }
            
            setTheme(theme) {
                this.currentTheme = theme;
                document.documentElement.setAttribute('data-theme', theme);
                
                this.themeToggle.classList.add('rotating');
                setTimeout(() => {
                    this.themeIcon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
                    this.themeToggle.classList.remove('rotating');
                }, 150);
                
                localStorage.setItem('theme', theme);
                window.dispatchEvent(new CustomEvent('themeChange', { detail: { theme } }));
            }
            
            toggleTheme() {
                const newTheme = this.currentTheme === 'light' ? 'dark' : 'light';
                this.setTheme(newTheme);
            }
        }

        const themeManager = new ThemeManager();

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

        const throttledScrollHandler = throttle(() => {
            updateScrollProgress();
            updateNavbar();
            handleScrollAnimations();
            toggleBackToTop();
        }, 16);

        // Event listeners
        window.addEventListener('scroll', throttledScrollHandler);
        window.addEventListener('load', function() {
            handleScrollAnimations();
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

        // Auto-detect system theme preference on load
        if (!localStorage.getItem('theme')) {
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            themeManager.setTheme(prefersDark ? 'dark' : 'light');
        }
    </script>
</body>
</html>