<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found - ZORQENT Technologies</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
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
            --error-red: #DC2626;
            --success-green: #059669;
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
            background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 50%, #EEF2FF 100%);
            overflow-x: hidden;
            min-height: 100vh;
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
            box-shadow: var(--shadow-light);
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
        }

        /* 404 Error Page Styles */
        .error-container {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .error-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(107, 114, 128, 0.03)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            animation: float 30s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); }
        }

        .error-content {
            text-align: center;
            z-index: 10;
            position: relative;
        }

        /* Animated 404 Number */
        .error-number {
            font-size: 12rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--accent-color), #1E40AF, #7C3AED);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin-bottom: 2rem;
            position: relative;
            animation: glitch 2s infinite;
        }

        @keyframes glitch {
            0%, 90%, 100% {
                transform: translate(0);
            }
            10% {
                transform: translate(-2px, 2px);
            }
            20% {
                transform: translate(2px, -2px);
            }
            30% {
                transform: translate(-2px, 2px);
            }
            40% {
                transform: translate(2px, -2px);
            }
            50% {
                transform: translate(-2px, 2px);
            }
            60% {
                transform: translate(2px, -2px);
            }
            70% {
                transform: translate(-2px, 2px);
            }
            80% {
                transform: translate(2px, -2px);
            }
        }

        /* Glassmorphism Card */
        .error-card {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            padding: 3rem 2rem;
            box-shadow: 
                0 20px 50px rgba(31, 38, 135, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
            position: relative;
            overflow: hidden;
            max-width: 600px;
            margin: 0 auto;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-color), transparent);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

        .error-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }

        .error-subtitle {
            font-size: 1.25rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            animation: fadeInUp 0.6s ease-out 0.4s both;
        }

        .error-description {
            font-size: 1rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.7;
            animation: fadeInUp 0.6s ease-out 0.6s both;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Buttons */
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--accent-color), #1E40AF);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-light);
            animation: fadeInUp 0.6s ease-out 0.8s both;
        }

        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #1E40AF, var(--accent-color));
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
            color: white;
        }

        .btn-secondary-custom {
            background: transparent;
            color: var(--text-primary);
            border: 2px solid var(--border-color);
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 12px;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
            transition: all 0.3s ease;
            animation: fadeInUp 0.6s ease-out 1s both;
        }

        .btn-secondary-custom:hover {
            background: var(--text-primary);
            color: var(--bg-primary);
            border-color: var(--text-primary);
            transform: translateY(-3px);
        }

        /* Floating Icons */
        .floating-icon {
            position: absolute;
            color: var(--accent-color);
            opacity: 0.1;
            animation: floatIcon 6s ease-in-out infinite;
        }

        .floating-icon:nth-child(1) {
            top: 20%;
            left: 10%;
            font-size: 2rem;
            animation-delay: 0s;
        }

        .floating-icon:nth-child(2) {
            top: 60%;
            left: 80%;
            font-size: 1.5rem;
            animation-delay: 2s;
        }

        .floating-icon:nth-child(3) {
            top: 30%;
            right: 15%;
            font-size: 2.5rem;
            animation-delay: 4s;
        }

        .floating-icon:nth-child(4) {
            bottom: 30%;
            left: 15%;
            font-size: 1.8rem;
            animation-delay: 1s;
        }

        .floating-icon:nth-child(5) {
            bottom: 20%;
            right: 20%;
            font-size: 2.2rem;
            animation-delay: 3s;
        }

        @keyframes floatIcon {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.1;
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
                opacity: 0.3;
            }
        }

        /* Search Bar */
        .search-container {
            max-width: 400px;
            margin: 2rem auto;
            position: relative;
            animation: fadeInUp 0.6s ease-out 1.2s both;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid var(--border-color);
            border-radius: 12px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
            font-size: 1.1rem;
        }

        /* Quick Links */
        .quick-links {
            margin-top: 3rem;
            animation: fadeInUp 0.6s ease-out 1.4s both;
        }

        .quick-links h6 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .quick-links ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .quick-links li {
            margin: 0;
        }

        .quick-links a {
            color: var(--text-secondary);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: block;
        }

        .quick-links a:hover {
            color: var(--accent-color);
            background: rgba(59, 130, 246, 0.1);
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .error-number {
                font-size: 8rem;
            }

            .error-title {
                font-size: 2rem;
            }

            .error-subtitle {
                font-size: 1.1rem;
            }

            .error-card {
                padding: 2rem 1.5rem;
                margin: 0 1rem;
            }

            .btn-primary-custom,
            .btn-secondary-custom {
                display: block;
                margin: 0.5rem auto;
                width: 100%;
                max-width: 250px;
            }

            .floating-icon {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .error-number {
                font-size: 6rem;
            }

            .error-title {
                font-size: 1.75rem;
            }

            .error-card {
                padding: 1.5rem 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <div class="logo-container">
                    <img src="assets/logo.png" alt="ZORQENT Logo" class="logo-img" onerror="this.style.display='none'" /> 
                    <span>ZORQENT</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="careers.html">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 404 Error Section -->
    <section class="error-container">
        <!-- Floating Background Icons -->
        <i class="floating-icon fas fa-code"></i>
        <i class="floating-icon fas fa-laptop-code"></i>
        <i class="floating-icon fas fa-rocket"></i>
        <i class="floating-icon fas fa-cog"></i>
        <i class="floating-icon fas fa-lightbulb"></i>

        <div class="container">
            <div class="error-content">
                <div class="error-card">
                    <div class="error-number">404</div>
                    
                    <h1 class="error-title">Oops! Page Not Found</h1>
                    <p class="error-subtitle">The page you're looking for doesn't exist</p>
                    <p class="error-description">
                        Don't worry! Sometimes even the best code has a bug. The page you're trying to reach might have been moved, deleted, or the URL might be typed incorrectly. Let's get you back on track!
                    </p>

                    <!-- Search Bar -->
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Search for pages, services, or content..." id="searchInput">
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4">
                        <a href="index.php" class="btn-primary-custom">
                            <i class="fas fa-home me-2"></i>Go to Homepage
                        </a>
                        <a href="javascript:history.back()" class="btn-secondary-custom">
                            <i class="fas fa-arrow-left me-2"></i>Go Back
                        </a>
                    </div>

                    <!-- Quick Links -->
                    <div class="quick-links">
                        <h6>Popular Pages:</h6>
                        <ul>
                            <li><a href="index.php#services">Our Services</a></li>
                            <li><a href="careers/careers.php">Careers</a></li>
                            <li><a href="index.php#features">Features</a></li>
                            <li><a href="index.php#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Simple search functionality
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const query = this.value.toLowerCase().trim();
                if (query) {
                    // Simple redirect logic based on search terms
                    if (query.includes('home') || query.includes('index')) {
                        window.location.href = 'index.php';
                    } else if (query.includes('career') || query.includes('job')) {
                        window.location.href = 'careers/careers.php';
                    } else if (query.includes('service') || query.includes('product')) {
                        window.location.href = 'index.php#services';
                    } else if (query.includes('contact') || query.includes('reach')) {
                        window.location.href = 'index.php#contact';
                    } else if (query.includes('about') || query.includes('feature')) {
                        window.location.href = 'index.php#features';
                    } else {
                        // If no match found, show alert and go to homepage
                        alert('No exact match found. Redirecting to homepage...');
                        setTimeout(() => {
                            window.location.href = 'index.php';
                        }, 1000);
                    }
                }
            }
        });

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Parallax effect for floating icons
            document.addEventListener('mousemove', function(e) {
                const icons = document.querySelectorAll('.floating-icon');
                const x = e.clientX / window.innerWidth;
                const y = e.clientY / window.innerHeight;

                icons.forEach((icon, index) => {
                    const speed = (index + 1) * 0.5;
                    const xPos = (x - 0.5) * speed * 20;
                    const yPos = (y - 0.5) * speed * 20;
                    
                    icon.style.transform = `translate(${xPos}px, ${yPos}px) rotate(${xPos}deg)`;
                });
            });

            // Add click event to the 404 number for easter egg
            const errorNumber = document.querySelector('.error-number');
            let clickCount = 0;
            
            errorNumber.addEventListener('click', function() {
                clickCount++;
                if (clickCount === 3) {
                    this.style.animation = 'glitch 0.5s infinite';
                    setTimeout(() => {
                        this.style.animation = 'glitch 2s infinite';
                        alert('🎉 Easter egg found! You clicked the 404 three times!');
                    }, 2000);
                    clickCount = 0;
                }
            });
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
    </script>
</body>
</html>