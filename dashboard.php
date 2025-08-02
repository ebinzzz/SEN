<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZORQENT Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-black: #000000;
            --primary-white: #FFFFFF;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --gray-800: #1F2937;
            --gray-900: #111827;
            --accent-blue: #3B82F6;
            --accent-green: #10B981;
            --accent-red: #EF4444;
            --accent-yellow: #F59E0B;
            --accent-purple: #8B5CF6;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --sidebar-width: 280px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: var(--gray-50);
            color: var(--gray-900);
            line-height: 1.6;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--primary-black);
            color: var(--primary-white);
            z-index: 1000;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--gray-700);
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-white);
            text-decoration: none;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-white);
            color: var(--primary-black);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
        }

        .sidebar-nav {
            padding: 1rem 0;
        }

        .nav-section {
            margin-bottom: 2rem;
        }

        .nav-section-title {
            padding: 0 1.5rem 0.5rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--gray-400);
        }

        .nav-item {
            margin-bottom: 0.25rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1.5rem;
            color: var(--gray-300);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            background: var(--gray-800);
            color: var(--primary-white);
        }

        .nav-link.active {
            background: var(--gray-800);
            color: var(--primary-white);
        }

        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--primary-white);
        }

        .nav-icon {
            width: 20px;
            text-align: center;
            font-size: 1rem;
        }

        .nav-badge {
            margin-left: auto;
            background: var(--accent-red);
            color: var(--primary-white);
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
            border-radius: 10px;
            font-weight: 600;
        }

        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        /* Header */
        .header {
            background: var(--primary-white);
            border-bottom: 1px solid var(--gray-200);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow-sm);
        }

        .header-content {
            display: flex;
            justify-content: between;
            align-items: center;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--gray-900);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-left: auto;
        }

        .search-box {
            position: relative;
        }

        .search-input {
            width: 300px;
            padding: 0.5rem 1rem 0.5rem 2.5rem;
            border: 1px solid var(--gray-300);
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-black);
            box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
        }

        .notification-btn {
            position: relative;
            background: none;
            border: none;
            font-size: 1.25rem;
            color: var(--gray-600);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .notification-btn:hover {
            color: var(--primary-black);
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--accent-red);
            color: var(--primary-white);
            font-size: 0.7rem;
            padding: 0.2rem 0.4rem;
            border-radius: 10px;
            font-weight: 600;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .user-profile:hover {
            background: var(--gray-100);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            background: var(--primary-black);
            color: var(--primary-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--gray-900);
        }

        .user-role {
            font-size: 0.8rem;
            color: var(--gray-500);
        }

        /* Content Area */
        .content {
            padding: 2rem;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--primary-white);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-200);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary-white);
        }

        .stat-icon.clients { background: var(--accent-blue); }
        .stat-icon.projects { background: var(--accent-green); }
        .stat-icon.expenses { background: var(--accent-red); }
        .stat-icon.revenue { background: var(--accent-purple); }

        .stat-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--gray-500);
            margin-bottom: 0.5rem;
        }

        .stat-change {
            font-size: 0.8rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .stat-change.positive { color: var(--accent-green); }
        .stat-change.negative { color: var(--accent-red); }

        /* Content Sections */
        .content-section {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .content-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Cards */
        .card {
            background: var(--primary-white);
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-200);
            overflow: hidden;
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--gray-200);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--gray-900);
        }

        .card-body {
            padding: 1.5rem;
        }

        /* Tables */
        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table th {
            background: var(--gray-50);
            border: none;
            font-weight: 600;
            color: var(--gray-700);
            font-size: 0.9rem;
            padding: 1rem;
        }

        .table td {
            border: none;
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid var(--gray-200);
        }

        /* Buttons */
        .btn {
            border-radius: 8px;
            font-weight: 600;
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary {
            background: var(--primary-black);
            color: var(--primary-white);
        }

        .btn-primary:hover {
            background: var(--gray-800);
            color: var(--primary-white);
        }

        .btn-outline-primary {
            border: 1px solid var(--primary-black);
            color: var(--primary-black);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: var(--primary-black);
            color: var(--primary-white);
        }

        .btn-success {
            background: var(--accent-green);
            color: var(--primary-white);
        }

        .btn-danger {
            background: var(--accent-red);
            color: var(--primary-white);
        }

        .btn-sm {
            padding: 0.375rem 0.75rem;
            font-size: 0.8rem;
        }

        /* Status Badges */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-active { background: #D1FAE5; color: #065F46; }
        .status-pending { background: #FEF3C7; color: #92400E; }
        .status-completed { background: #DBEAFE; color: #1E40AF; }
        .status-cancelled { background: #FEE2E2; color: #991B1B; }

        /* Forms */
        .form-control {
            border: 1px solid var(--gray-300);
            border-radius: 8px;
            padding: 0.75rem;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-black);
            box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: var(--gray-700);
            margin-bottom: 0.5rem;
        }

        /* Grid Layouts */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .header {
                padding: 1rem;
            }

            .search-input {
                width: 200px;
            }

            .content {
                padding: 1rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .header-actions {
                gap: 0.5rem;
            }

            .user-info {
                display: none;
            }
        }

        /* Menu Toggle */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--gray-600);
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
        }

        /* Modal Enhancements */
        .modal-content {
            border-radius: 12px;
            border: none;
            box-shadow: var(--shadow-lg);
        }

        .modal-header {
            border-bottom: 1px solid var(--gray-200);
            padding: 1.5rem;
        }

        .modal-body {
            padding: 1.5rem;
        }

        .modal-footer {
            border-top: 1px solid var(--gray-200);
            padding: 1.5rem;
        }

        /* Chart Container */
        .chart-container {
            background: var(--primary-white);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--gray-200);
            margin-bottom: 1.5rem;
        }

        /* Quick Actions */
        .quick-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .quick-action {
            background: var(--primary-white);
            border: 1px solid var(--gray-200);
            border-radius: 8px;
            padding: 1rem;
            text-decoration: none;
            color: var(--gray-700);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
        }

        .quick-action:hover {
            background: var(--gray-50);
            color: var(--primary-black);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                <div class="brand-icon">Z</div>
                <span>ZORQENT</span>
            </a>
        </div>
        
        <div class="sidebar-nav">
            <!-- Main Navigation -->
            <div class="nav-section">
                <div class="nav-section-title">Main</div>
                <div class="nav-item">
                    <a href="#" class="nav-link active" data-section="dashboard">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <span>Dashboard</span>
                    </a>
                </div>
            </div>

            <!-- Business Management -->
            <div class="nav-section">
                <div class="nav-section-title">Business</div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="clients">
                        <i class="nav-icon fas fa-users"></i>
                        <span>Clients</span>
                        <span class="nav-badge">24</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="projects">
                        <i class="nav-icon fas fa-project-diagram"></i>
                        <span>Projects</span>
                        <span class="nav-badge">12</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="expenses">
                        <i class="nav-icon fas fa-receipt"></i>
                        <span>Expenses</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="team">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <span>Team Members</span>
                    </a>
                </div>
            </div>

            <!-- Communication -->
            <div class="nav-section">
                <div class="nav-section-title">Communication</div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="mails">
                        <i class="nav-icon fas fa-envelope"></i>
                        <span>Mails</span>
                        <span class="nav-badge">8</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="support">
                        <i class="nav-icon fas fa-headset"></i>
                        <span>Support</span>
                        <span class="nav-badge">3</span>
                    </a>
                </div>
            </div>

            <!-- Marketing -->
            <div class="nav-section">
                <div class="nav-section-title">Marketing</div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="promotion">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <span>Promotion</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" data-section="marketing">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <span>Marketing</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="header-content">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="header-title" id="pageTitle">Dashboard</h1>
                
                <div class="header-actions">
                    <div class="search-box">
                        <i class="search-icon fas fa-search"></i>
                        <input type="text" class="search-input" placeholder="Search...">
                    </div>
                    
                    <button class="notification-btn">
                        <i class="fas fa-bell"></i>
                        <span class="notification-badge">5</span>
                    </button>
                    
                    <div class="user-profile">
                        <div class="user-avatar">AD</div>
                        <div class="user-info">
                            <div class="user-name">Admin User</div>
                            <div class="user-role">Administrator</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content -->
        <main class="content">
            <!-- Dashboard Section -->
            <div id="dashboard" class="content-section active">
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon clients">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="stat-value">24</div>
                        <div class="stat-label">Total Clients</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+12% from last month</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon projects">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                        </div>
                        <div class="stat-value">12</div>
                        <div class="stat-label">Active Projects</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+3 new projects</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon expenses">
                                <i class="fas fa-receipt"></i>
                            </div>
                        </div>
                        <div class="stat-value">$45,280</div>
                        <div class="stat-label">Monthly Expenses</div>
                        <div class="stat-change negative">
                            <i class="fas fa-arrow-down"></i>
                            <span>-5% from last month</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div class="stat-icon revenue">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="stat-value">$125,500</div>
                        <div class="stat-label">Monthly Revenue</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+18% from last month</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <a href="#" class="quick-action" data-section="clients">
                        <i class="fas fa-user-plus"></i>
                        <span>Add New Client</span>
                    </a>
                    <a href="#" class="quick-action" data-section="projects">
                        <i class="fas fa-plus-circle"></i>
                        <span>Create Project</span>
                    </a>
                    <a href="#" class="quick-action" data-section="expenses">
                        <i class="fas fa-receipt"></i>
                        <span>Add Expense</span>
                    </a>
                    <a href="#" class="quick-action" data-section="team">
                        <i class="fas fa-user-friends"></i>
                        <span>Invite Team Member</span>
                    </a>
                </div>

                <!-- Recent Activity -->
                <div class="grid-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recent Projects</h3>
                            <a href="#" class="btn btn-outline-primary btn-sm">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>E-commerce Platform</td>
                                            <td>TechCorp Inc.</td>
                                            <td><span class="status-badge status-active">Active</span></td>
                                            <td>75%</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile App Design</td>
                                            <td>StartupXYZ</td>
                                            <td><span class="status-badge status-pending">Pending</span></td>
                                            <td>40%</td>
                                        </tr>
                                        <tr>
                                            <td>Website Redesign</td>
                                            <td>Local Business</td>
                                            <td><span class="status-badge status-completed">Completed</span></td>
                                            <td>100%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recent Messages</h3>
                            <a href="#" class="btn btn-outline-primary btn-sm">View All</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>From</th>
                                            <th>Subject</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>john@techcorp.com</td>
                                            <td>Project Update Required</td>
                                            <td>2 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>support@client.com</td>
                                            <td>Bug Report</td>
                                            <td>5 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>mary@startup.com</td>
                                            <td>Meeting Schedule</td>
                                            <td>1 day ago</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Clients Section -->
            <div id="clients" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Clients Management</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClientModal">
                        <i class="fas fa-plus me-2"></i>Add New Client
                    </button>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Projects</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-3">JD</div>
                                                <div>
                                                    <div class="fw-bold">John Doe</div>
                                                    <div class="text-muted small">+1 (555) 123-4567</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>john.doe@techcorp.com</td>
                                        <td>TechCorp Inc.</td>
                                        <td>3 active</td>
                                        <td><span class="status-badge status-active">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-3">MS</div>
                                                <div>
                                                    <div class="fw-bold">Mary Smith</div>
                                                    <div class="text-muted small">+1 (555) 987-6543</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>mary@startupxyz.com</td>
                                        <td>StartupXYZ</td>
                                        <td>1 active</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-3">RJ</div>
                                                <div>
                                                    <div class="fw-bold">Robert Johnson</div>
                                                    <div class="text-muted small">+1 (555) 456-7890</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>robert@localbiz.com</td>
                                        <td>Local Business</td>
                                        <td>2 completed</td>
                                        <td><span class="status-badge status-completed">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Projects Section -->
            <div id="projects" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Projects Management</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                        <i class="fas fa-plus me-2"></i>Create New Project
                    </button>
                </div>

                <div class="grid-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title">E-commerce Platform</h5>
                                <span class="status-badge status-active">In Progress</span>
                            </div>
                            <p class="text-muted mb-3">Full-featured e-commerce solution for TechCorp Inc.</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small">Progress</span>
                                    <span class="small">75%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small text-muted">Due: Dec 15, 2024</div>
                                <div class="small fw-bold">$25,000</div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title">Mobile App Design</h5>
                                <span class="status-badge status-pending">Planning</span>
                            </div>
                            <p class="text-muted mb-3">UI/UX design for mobile application</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small">Progress</span>
                                    <span class="small">40%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 40%"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small text-muted">Due: Jan 20, 2025</div>
                                <div class="small fw-bold">$15,000</div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title">Website Redesign</h5>
                                <span class="status-badge status-completed">Completed</span>
                            </div>
                            <p class="text-muted mb-3">Complete website overhaul and modernization</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="small">Progress</span>
                                    <span class="small">100%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-primary" style="width: 100%"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small text-muted">Completed: Nov 30, 2024</div>
                                <div class="small fw-bold">$12,000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expenses Section -->
            <div id="expenses" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Expense Management</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addExpenseModal">
                        <i class="fas fa-plus me-2"></i>Add Expense
                    </button>
                </div>

                <div class="grid-2 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Monthly Overview</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center">
                                        <div class="h3 text-danger">$45,280</div>
                                        <div class="text-muted">Total Expenses</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <div class="h3 text-success">$125,500</div>
                                        <div class="text-muted">Total Revenue</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Expense Categories</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Office Rent</span>
                                    <span class="fw-bold">$12,000</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-primary" style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Software & Tools</span>
                                    <span class="fw-bold">$8,500</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 40%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Marketing</span>
                                    <span class="fw-bold">$15,200</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dec 1, 2024</td>
                                        <td>Office Rent - December</td>
                                        <td>Office Expenses</td>
                                        <td class="text-danger fw-bold">-$12,000</td>
                                        <td><span class="status-badge status-completed">Paid</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nov 28, 2024</td>
                                        <td>Software Licenses</td>
                                        <td>Software & Tools</td>
                                        <td class="text-danger fw-bold">-$2,500</td>
                                        <td><span class="status-badge status-pending">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Members Section -->
            <div id="team" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Team Management</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTeamModal">
                        <i class="fas fa-plus me-2"></i>Add Team Member
                    </button>
                </div>

                <div class="grid-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="user-avatar mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">JD</div>
                            <h5>John Developer</h5>
                            <p class="text-muted">Senior Developer</p>
                            <div class="mb-3">
                                <span class="status-badge status-active">Active</span>
                            </div>
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="fw-bold">12</div>
                                    <div class="small text-muted">Projects</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">95%</div>
                                    <div class="small text-muted">Efficiency</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">4.8</div>
                                    <div class="small text-muted">Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <div class="user-avatar mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">SD</div>
                            <h5>Sarah Designer</h5>
                            <p class="text-muted">UI/UX Designer</p>
                            <div class="mb-3">
                                <span class="status-badge status-active">Active</span>
                            </div>
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="fw-bold">8</div>
                                    <div class="small text-muted">Projects</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">92%</div>
                                    <div class="small text-muted">Efficiency</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">4.9</div>
                                    <div class="small text-muted">Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body text-center">
                            <div class="user-avatar mx-auto mb-3" style="width: 80px; height: 80px; font-size: 2rem;">MP</div>
                            <h5>Mike PM</h5>
                            <p class="text-muted">Project Manager</p>
                            <div class="mb-3">
                                <span class="status-badge status-pending">On Leave</span>
                            </div>
                            <div class="row text-center">
                                <div class="col-4">
                                    <div class="fw-bold">15</div>
                                    <div class="small text-muted">Projects</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">88%</div>
                                    <div class="small text-muted">Efficiency</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">4.7</div>
                                    <div class="small text-muted">Rating</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mails Section -->
            <div id="mails" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Mail Management</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#composeModal">
                        <i class="fas fa-edit me-2"></i>Compose Mail
                    </button>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <i class="fas fa-inbox me-2"></i>Inbox <span class="badge bg-danger float-end">8</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fas fa-paper-plane me-2"></i>Sent
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fas fa-file-alt me-2"></i>Drafts <span class="badge bg-secondary float-end">3</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fas fa-trash me-2"></i>Trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="5%"><input type="checkbox"></th>
                                                <th>From</th>
                                                <th>Subject</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="fw-bold">
                                                <td><input type="checkbox"></td>
                                                <td>john@techcorp.com</td>
                                                <td>Project Update Required - Urgent</td>
                                                <td>2 hours ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>support@client.com</td>
                                                <td>Bug Report - Login Issues</td>
                                                <td>5 hours ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox"></td>
                                                <td>mary@startup.com</td>
                                                <td>Meeting Schedule for Next Week</td>
                                                <td>1 day ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-reply"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Support Section -->
            <div id="support" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Support Tickets</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTicketModal">
                        <i class="fas fa-plus me-2"></i>Create Ticket
                    </button>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-warning">12</h3>
                                <p class="text-muted mb-0">Open Tickets</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-success">45</h3>
                                <p class="text-muted mb-0">Resolved</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-danger">3</h3>
                                <p class="text-muted mb-0">High Priority</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-primary">2.3h</h3>
                                <p class="text-muted mb-0">Avg Response</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Client</th>
                                        <th>Subject</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#001</td>
                                        <td>TechCorp Inc.</td>
                                        <td>Login Issues</td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td><span class="status-badge status-pending">Open</span></td>
                                        <td>2 hours ago</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#002</td>
                                        <td>StartupXYZ</td>
                                        <td>Feature Request</td>
                                        <td><span class="badge bg-warning">Medium</span></td>
                                        <td><span class="status-badge status-active">In Progress</span></td>
                                        <td>1 day ago</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promotion Section -->
            <div id="promotion" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Promotion Campaigns</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCampaignModal">
                        <i class="fas fa-plus me-2"></i>Create Campaign
                    </button>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-primary">8</h3>
                                <p class="text-muted mb-0">Active Campaigns</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-success">15,420</h3>
                                <p class="text-muted mb-0">Total Reach</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-warning">3.2%</h3>
                                <p class="text-muted mb-0">Click Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-info">$2,540</h3>
                                <p class="text-muted mb-0">Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title">Black Friday Sale</h5>
                                <span class="status-badge status-active">Active</span>
                            </div>
                            <p class="text-muted mb-3">Special discount campaign for software services</p>
                            <div class="row text-center mb-3">
                                <div class="col-4">
                                    <div class="fw-bold">5,240</div>
                                    <div class="small text-muted">Impressions</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">168</div>
                                    <div class="small text-muted">Clicks</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">12</div>
                                    <div class="small text-muted">Conversions</div>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 75%"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">Campaign Progress</span>
                                <span class="small fw-bold">75%</span>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title">New Year Promo</h5>
                                <span class="status-badge status-pending">Scheduled</span>
                            </div>
                            <p class="text-muted mb-3">New year promotional campaign launch</p>
                            <div class="row text-center mb-3">
                                <div class="col-4">
                                    <div class="fw-bold">-</div>
                                    <div class="small text-muted">Impressions</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">-</div>
                                    <div class="small text-muted">Clicks</div>
                                </div>
                                <div class="col-4">
                                    <div class="fw-bold">-</div>
                                    <div class="small text-muted">Conversions</div>
                                </div>
                            </div>
                            <div class="progress mb-2" style="height: 6px;">
                                <div class="progress-bar bg-warning" style="width: 25%"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="small text-muted">Starts: Jan 1, 2025</span>
                                <span class="small fw-bold">$5,000 Budget</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Marketing Section -->
            <div id="marketing" class="content-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Marketing Analytics</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMarketingModal">
                        <i class="fas fa-plus me-2"></i>Create Marketing Plan
                    </button>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-primary">25,480</h3>
                                <p class="text-muted mb-0">Website Visitors</p>
                                <div class="stat-change positive mt-2">
                                    <i class="fas fa-arrow-up"></i>
                                    <span>+15% this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-success">4.2%</h3>
                                <p class="text-muted mb-0">Conversion Rate</p>
                                <div class="stat-change positive mt-2">
                                    <i class="fas fa-arrow-up"></i>
                                    <span>+0.8% improvement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-warning">1,280</h3>
                                <p class="text-muted mb-0">Leads Generated</p>
                                <div class="stat-change positive mt-2">
                                    <i class="fas fa-arrow-up"></i>
                                    <span>+22% this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <div class="card-body">
                                <h3 class="text-info">$8,450</h3>
                                <p class="text-muted mb-0">Marketing Spend</p>
                                <div class="stat-change negative mt-2">
                                    <i class="fas fa-arrow-down"></i>
                                    <span>-5% optimized</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-2 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Traffic Sources</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Organic Search</span>
                                    <span class="fw-bold">45%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-success" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Social Media</span>
                                    <span class="fw-bold">28%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-primary" style="width: 28%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Direct Traffic</span>
                                    <span class="fw-bold">18%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-warning" style="width: 18%"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Email Marketing</span>
                                    <span class="fw-bold">9%</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-info" style="width: 9%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Campaign Performance</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Campaign</th>
                                            <th>CTR</th>
                                            <th>Conversions</th>
                                            <th>ROI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Google Ads</td>
                                            <td>3.2%</td>
                                            <td>42</td>
                                            <td class="text-success">+285%</td>
                                        </tr>
                                        <tr>
                                            <td>Facebook Ads</td>
                                            <td>2.8%</td>
                                            <td>38</td>
                                            <td class="text-success">+220%</td>
                                        </tr>
                                        <tr>
                                            <td>LinkedIn Ads</td>
                                            <td>1.9%</td>
                                            <td>15</td>
                                            <td class="text-warning">+150%</td>
                                        </tr>
                                        <tr>
                                            <td>Email Campaign</td>
                                            <td>4.5%</td>
                                            <td>28</td>
                                            <td class="text-success">+340%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Marketing Activities</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Activity</th>
                                        <th>Platform</th>
                                        <th>Status</th>
                                        <th>Budget</th>
                                        <th>Spent</th>
                                        <th>Performance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Holiday Season Campaign</td>
                                        <td>Google Ads</td>
                                        <td><span class="status-badge status-active">Running</span></td>
                                        <td>$2,500</td>
                                        <td>$1,840</td>
                                        <td class="text-success">Excellent</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-chart-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-warning">
                                                <i class="fas fa-pause"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Social Media Boost</td>
                                        <td>Facebook</td>
                                        <td><span class="status-badge status-active">Running</span></td>
                                        <td>$1,200</td>
                                        <td>$980</td>
                                        <td class="text-warning">Good</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-chart-line"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-warning">
                                                <i class="fas fa-pause"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LinkedIn B2B Campaign</td>
                                        <td>LinkedIn</td>
                                        <td><span class="status-badge status-pending">Scheduled</span></td>
                                        <td>$3,000</td>
                                        <td>$0</td>
                                        <td class="text-muted">Pending</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success me-1">
                                                <i class="fas fa-play"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link[data-section]');
            const contentSections = document.querySelectorAll('.content-section');
            const pageTitle = document.getElementById('pageTitle');
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');
            const quickActions = document.querySelectorAll('.quick-action[data-section]');

            // Function to show section
            function showSection(sectionId) {
                // Hide all sections
                contentSections.forEach(section => {
                    section.classList.remove('active');
                });

                // Show target section
                const targetSection = document.getElementById(sectionId);
                if (targetSection) {
                    targetSection.classList.add('active');
                }

                // Update active nav link
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                const activeLink = document.querySelector(`[data-section="${sectionId}"]`);
                if (activeLink && activeLink.classList.contains('nav-link')) {
                    activeLink.classList.add('active');
                }

                // Update page title
                const titles = {
                    'dashboard': 'Dashboard',
                    'clients': 'Clients Management',
                    'projects': 'Projects Management',
                    'expenses': 'Expense Management',
                    'team': 'Team Management',
                    'mails': 'Mail Management',
                    'support': 'Support Tickets',
                    'promotion': 'Promotion Campaigns',
                    'marketing': 'Marketing Analytics'
                };
                pageTitle.textContent = titles[sectionId] || 'Dashboard';
            }

            // Nav link click handlers
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    showSection(sectionId);
                    
                    // Close sidebar on mobile
                    if (window.innerWidth <= 768) {
                        sidebar.classList.remove('show');
                    }
                });
            });

            // Quick action click handlers
            quickActions.forEach(action => {
                action.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('data-section');
                    showSection(sectionId);
                });
            });

            // Mobile menu toggle
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                });
            }

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
                        sidebar.classList.remove('show');
                    }
                }
            });

            // Search functionality
            const searchInput = document.querySelector('.search-input');
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    // Add search logic here
                    console.log('Searching for:', searchTerm);
                });
            }

            // Notification click handler
            const notificationBtn = document.querySelector('.notification-btn');
            if (notificationBtn) {
                notificationBtn.addEventListener('click', function() {
                    // Add notification logic here
                    console.log('Notifications clicked');
                });
            }

            // Table row actions
            document.addEventListener('click', function(e) {
                if (e.target.closest('.btn-outline-primary')) {
                    console.log('Edit action clicked');
                }
                if (e.target.closest('.btn-outline-danger')) {
                    console.log('Delete action clicked');
                }
                if (e.target.closest('.btn-outline-success')) {
                    console.log('Success action clicked');
                }
            });

            // Statistics animations
            function animateStats() {
                const statValues = document.querySelectorAll('.stat-value');
                statValues.forEach(stat => {
                    const finalValue = stat.textContent;
                    stat.style.opacity = '0';
                    setTimeout(() => {
                        stat.style.opacity = '1';
                        stat.style.transform = 'translateY(0)';
                    }, Math.random() * 500);
                });
            }

            // Initial animations
            setTimeout(animateStats, 100);

            // Progress bar animations
            const progressBars = document.querySelectorAll('.progress-bar');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0%';
                setTimeout(() => {
                    bar.style.width = width;
                    bar.style.transition = 'width 1s ease-in-out';
                }, 500);
            });

            // Form validations for modals (placeholder)
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    console.log('Form submitted:', form);
                    // Add form validation and submission logic here
                });
            });

            // Real-time clock update
            function updateClock() {
                const now = new Date();
                const timeString = now.toLocaleTimeString();
                // You can add a clock element if needed
                console.log('Current time:', timeString);
            }

            // Update clock every minute
            setInterval(updateClock, 60000);

            // Auto-refresh dashboard data (placeholder)
            function refreshDashboardData() {
                console.log('Refreshing dashboard data...');
                // Add API calls to refresh data here
            }

            // Refresh data every 5 minutes
            setInterval(refreshDashboardData, 300000);

            // Keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                if (e.ctrlKey || e.metaKey) {
                    switch(e.key) {
                        case '1':
                            e.preventDefault();
                            showSection('dashboard');
                            break;
                        case '2':
                            e.preventDefault();
                            showSection('clients');
                            break;
                        case '3':
                            e.preventDefault();
                            showSection('projects');
                            break;
                        case '/':
                            e.preventDefault();
                            searchInput?.focus();
                            break;
                    }
                }
            });

            // Tooltip initialization (if using Bootstrap tooltips)
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Initialize dashboard
            showSection('dashboard');
        });

        // Theme toggle functionality (placeholder for future enhancement)
        function toggleTheme() {
            document.body.classList.toggle('dark-theme');
            localStorage.setItem('theme', document.body.classList.contains('dark-theme') ? 'dark' : 'light');
        }

        // Load saved theme
        document.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-theme');
            }
        });

        // Export functionality (placeholder)
        function exportData(format) {
            console.log('Exporting data in format:', format);
            // Add export logic here
        }

        // Print functionality
        function printSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                const printWindow = window.open('', '_blank');
                printWindow.document.write(`
                    <html>
                        <head>
                            <title>ZORQENT - ${sectionId}</title>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                            <style>
                                body { font-family: Inter, sans-serif; }
                                .no-print { display: none !important; }
                            </style>
                        </head>
                        <body>
                            <div class="container">
                                <h1>ZORQENT Dashboard - ${sectionId}</h1>
                                ${section.innerHTML}
                            </div>
                        </body>
                    </html>
                `);
                printWindow.document.close();
                printWindow.print();
            }
        }
    </script>
</body>
</html>