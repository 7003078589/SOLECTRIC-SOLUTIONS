<?php
// Solectric Solutions - Main Entry Point
// This file serves as the main entry point for Hostinger hosting

// Enable error reporting for debugging (remove in production)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Set timezone
date_default_timezone_set('Asia/Kolkata');

// Include any PHP configurations or functions here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Solectric Solutions | Leading Solar Panel Installation Services in Bengaluru</title>
    <meta name="description" content="Solectric Solutions - Premium Solar Panel Installation, Maintenance, and Consultation in Bengaluru. Transform your energy with sustainable solar solutions.">
    <link rel="stylesheet" href="styles.css?v=1.1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- PHP Backend Email System - No EmailJS needed -->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="Images/Logo/logo1.PNG" alt="Solectric Solutions" class="logo-img">
                <span class="logo-text">Solectric Solutions</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#why-choose" class="nav-link">Why Choose Us</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="title-line">Solar Panel</span>
                    <span class="title-line">Installation Services</span>
                </h1>
                <p class="hero-subtitle">One-stop solution for all your solar power needs.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">
                        <i class="fas fa-solar-panel"></i>
                        Get Free Quote
                    </a>
                    <a href="#projects" class="btn btn-secondary">
                        <i class="fas fa-play"></i>
                        View Projects
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="floating-card">
                    <div class="card-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="card-content">
                        <h3>Eco-Friendly</h3>
                        <p>100% Renewable Energy</p>
                    </div>
                </div>
                <div class="free-survey-badge">
                    <div class="badge-content">
                        <span class="free-text">FREE</span>
                        <span class="survey-text">SITE SURVEY</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-target="150">
                    <div class="stat-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="stat-number">0</div>
                    <div class="stat-label">Homes Powered</div>
                </div>
                <div class="stat-item" data-target="1000">
                    <div class="stat-icon">
                        <i class="fas fa-solar-panel"></i>
                    </div>
                    <div class="stat-number">0</div>
                    <div class="stat-label">Panels Installed</div>
                </div>
                <div class="stat-item" data-target="500">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-number">0</div>
                    <div class="stat-label">Happy Customers</div>
                </div>
                <div class="stat-item" data-target="5">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">About Solectric Solutions</h2>
                <p class="section-subtitle">Leading the solar revolution in Bengaluru with innovative and sustainable energy solutions</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <div class="about-card">
                        <div class="card-header">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Our Mission</h3>
                        </div>
                        <p>We are one of the most trusted solar solutions companies driven by innovation and loyalty to help clients overcome problems faced due to traditional electricity hurdles. We are here to bridge the gap between your problems to the right solution.</p>
                    </div>
                    <div class="about-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Expert Installation Team</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Premium Quality Products</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>24/7 Support</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Warranty Coverage</span>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="image-container">
                        <img src="Images/Projects/image1.jpeg" alt="Solar Installation" class="about-img">
                        <div class="experience-badge">
                            <span class="years">5+</span>
                            <span class="text">Years of Excellence</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">OUR SERVICES</h2>
                <p class="section-subtitle">Comprehensive solar solutions for residential and commercial needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>End-to-end solar panel installation</h3>
                    <p>Complete solar panel installation for homes with customized solutions to maximize energy savings.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Custom Design</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Professional Installation</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Warranty Coverage</span>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Solar system maintenance and repair</h3>
                    <p>Regular maintenance, cleaning, and repair services to ensure optimal system performance.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Annual Maintenance</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Emergency Repairs</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Performance Monitoring</span>
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Solar energy consultation and planning</h3>
                    <p>Expert consultation for solar feasibility, system design, and energy optimization strategies.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Site Assessment</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Energy Analysis</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check"></i>
                            <span>Financial Planning</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="satisfaction-badge-container">
                <div class="satisfaction-badge">
                    <div class="badge-circle">
                        <div class="badge-content">
                            <span class="badge-percentage">100%</span>
                            <span class="badge-text">SATISFACTION</span>
                            <span class="badge-guarantee">Guaranteed</span>
                        </div>
                        <div class="badge-ribbons">
                            <div class="ribbon ribbon-left"></div>
                            <div class="ribbon ribbon-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="why-choose-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">4 ESSENTIAL REASONS TO CHOOSE SOLECTRIC SOLUTIONS</h2>
                <p class="section-subtitle">WHY CHOOSE US?</p>
            </div>
            <div class="why-choose-content">
                <div class="why-choose-text">
                    <p class="why-choose-description">Solectric Solutions specializes in delivering top-notch solar installation and comprehensive energy solutions tailored to illuminate your path to sustainable living.</p>
                </div>
                <div class="reasons-grid">
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>Expert Team</h3>
                        <p>Highly skilled and certified professionals with years of experience in solar installations</p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Quality Assurance</h3>
                        <p>Premium quality products and materials with comprehensive warranty coverage</p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Round-the-clock customer support and emergency service availability</p>
                    </div>
                    <div class="reason-card">
                        <div class="reason-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Trusted Partner</h3>
                        <p>Reliable and transparent service with proven track record of customer satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Power Generation Section -->
    <section class="power-generation">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Solar Energy System</h2>
                <p class="section-subtitle">Power Generation Summary</p>
            </div>
            <div class="power-grid">
                <div class="power-card" data-kw="1">
                    <div class="power-header">
                        <h3>1 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">3 to 4 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">90 to 120 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="2">
                    <div class="power-header">
                        <h3>2 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">6 to 8 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">180 to 240 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="3">
                    <div class="power-header">
                        <h3>3 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">9 to 12 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">270 to 360 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="4">
                    <div class="power-header">
                        <h3>4 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">12 to 16 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">360 to 480 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card featured" data-kw="5">
                    <div class="power-header">
                        <h3>5 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="popular-badge">Most Popular</div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">15 to 20 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">450 to 600 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="6">
                    <div class="power-header">
                        <h3>6 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">18 to 24 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">540 to 720 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="7">
                    <div class="power-header">
                        <h3>7 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">21 to 28 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">630 to 840 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="8">
                    <div class="power-header">
                        <h3>8 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">24 to 32 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">720 to 960 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="9">
                    <div class="power-header">
                        <h3>9 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">27 to 36 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">810 to 1080 units per month</span>
                        </div>
                    </div>
                </div>
                <div class="power-card" data-kw="10">
                    <div class="power-header">
                        <h3>10 KW Solar Generates:</h3>
                        <div class="power-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="power-details">
                        <div class="power-item">
                            <span class="label">Daily:</span>
                            <span class="value">30 to 40 units per Day</span>
                        </div>
                        <div class="power-item">
                            <span class="label">Monthly:</span>
                            <span class="value">900 to 1200 units per month</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Trusted Brands</h2>
                <p class="section-subtitle">We partner with world-leading manufacturers to ensure quality and reliability</p>
            </div>
            <div class="brands-container">
                <div class="brands-track">
                    <div class="brand-item">
                        <img src="Images/Brands/loom_solar_logo.jpg" alt="Loom Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Luminous logo.png" alt="Luminous">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Panasonic_logo.png" alt="Panasonic">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Havells_logo.png" alt="Havells">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/goldi_solar_logo.jpg" alt="Goldi Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/ja-solar-logo.png" alt="JA Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/orb_logo.png" alt="ORB Energy">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/trinasolar_logo.png" alt="Trina Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/goodwe_logo.png" alt="Goodwee">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Growatt-new-logo.jpg" alt="Growatt">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/UTL_logo.webp" alt="UTL Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/eastman_logo.jpg" alt="Eastman Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/kirloskarsolar_logo.jpg" alt="Kirloskar Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/tata-power-logo.png" alt="Tata Power">
                    </div>
                    <!-- Duplicate brands for seamless loop -->
                    <div class="brand-item">
                        <img src="Images/Brands/loom_solar_logo.jpg" alt="Loom Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Luminous logo.png" alt="Luminous">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Panasonic_logo.png" alt="Panasonic">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Havells_logo.png" alt="Havells">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/goldi_solar_logo.jpg" alt="Goldi Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/ja-solar-logo.png" alt="JA Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/orb_logo.png" alt="ORB Energy">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/trinasolar_logo.png" alt="Trina Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/goodwe_logo.png" alt="Goodwee">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/Growatt-new-logo.jpg" alt="Growatt">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/UTL_logo.webp" alt="UTL Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/eastman_logo.jpg" alt="Eastman Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/kirloskarsolar_logo.jpg" alt="Kirloskar Solar">
                    </div>
                    <div class="brand-item">
                        <img src="Images/Brands/tata-power-logo.png" alt="Tata Power">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Recent Projects</h2>
                <p class="section-subtitle">Showcasing our successful solar installations across Bengaluru</p>
            </div>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image1.jpeg" alt="Solar Panel Installation Project 1">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Residential Installation</h4>
                                <p>5 KW System • Jayanagar</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_2.jpeg" alt="Solar Panel Installation Project 2">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Commercial Installation</h4>
                                <p>20 KW System • BTM Layout</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_3.jpeg" alt="Solar Panel Installation Project 3">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Industrial Installation</h4>
                                <p>50 KW System • Electronic City</p>
                                <span class="project-tag">In Progress</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 4 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_4.jpeg" alt="Solar Panel Installation Project 4">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Apartment Complex</h4>
                                <p>100 KW System • Whitefield</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 5 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_5.jpeg" alt="Solar Panel Installation Project 5">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Residential Installation</h4>
                                <p>3 KW System • Koramangala</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 6 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_6.jpeg" alt="Solar Panel Installation Project 6">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Commercial Installation</h4>
                                <p>15 KW System • Indiranagar</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 7 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_7.jpeg" alt="Solar Panel Installation Project 7">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Industrial Installation</h4>
                                <p>75 KW System • Peenya</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 8 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_8.jpeg" alt="Solar Panel Installation Project 8">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Apartment Complex</h4>
                                <p>150 KW System • Sarjapur</p>
                                <span class="project-tag">In Progress</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 9 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_9.jpeg" alt="Solar Panel Installation Project 9">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Large Scale Installation</h4>
                                <p>200 KW System • Marathahalli</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 10 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_10.jpeg" alt="Solar Panel Installation Project 10">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Residential Complex</h4>
                                <p>80 KW System • HSR Layout</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 11 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_11.jpeg" alt="Solar Panel Installation Project 11">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Commercial Building</h4>
                                <p>120 KW System • Koramangala</p>
                                <span class="project-tag">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project 12 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="Images/Projects/image_12.jpeg" alt="Solar Panel Installation Project 12">
                        <div class="project-overlay">
                            <div class="project-details">
                                <h4>Industrial Facility</h4>
                                <p>300 KW System • Peenya Industrial Area</p>
                                <span class="project-tag">In Progress</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">Real feedback from satisfied customers</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Excellent service from Solectric Solutions. They installed our 5KW system in just 2 days and we're already seeing significant savings on our electricity bills."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Rahul Sharma</h4>
                            <span>Jayanagar, Bengaluru</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"Professional team, quality products, and outstanding after-sales support. Highly recommended for anyone considering solar installation."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Priya Patel</h4>
                            <span>BTM Layout, Bengaluru</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>"The consultation process was thorough and they helped us choose the perfect system for our needs. Installation was smooth and professional."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Vikram Singh</h4>
                            <span>Whitefield, Bengaluru</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Ready to go solar? Contact us for a free consultation and quote</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Our Location</h4>
                            <p>No. 89, 1st flr, (JP), 3rd Cross, LIC COLONY, Opp - Park, 3rd Block East Jayanagar, Bengaluru - 11</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Call Us</h4>
                            <p><a href="tel:+919538921012">+91 95389 21012</a></p>
                            <p>Mon - Sat: 9:00 AM - 7:00 PM</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Us</h4>
                            <p><a href="mailto:solectricbengaluru@gmail.com">solectricbengaluru@gmail.com</a></p>
                            <p>We'll respond within 24 hours</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://wa.me/919538921012" class="social-link whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="contact-form-container">
                    <form id="contactForm" class="contact-form">
                        <div class="form-group">
                            <input type="text" name="user_name" placeholder="Your Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="user_email" placeholder="Your Email Address" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="user_phone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <select name="service_type" required>
                                <option value="">Select Service</option>
                                <option value="residential">Residential Installation</option>
                                <option value="commercial">Commercial Installation</option>
                                <option value="maintenance">Maintenance & Repair</option>
                                <option value="consultation">Consultation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Tell us about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                        <div id="formStatus" class="form-status"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <img src="Images/Logo/logo1.PNG" alt="Solectric Solutions">
                        <span>Solectric Solutions</span>
                    </div>
                    <p>Leading solar energy solutions provider in Bengaluru, committed to sustainable energy and customer satisfaction.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#projects">Projects</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li>Residential Installation</li>
                        <li>Commercial Solutions</li>
                        <li>Maintenance & Repair</li>
                        <li>Consultation</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p><i class="fas fa-phone"></i> +91 95389 21012</p>
                    <p><i class="fas fa-envelope"></i> solectricbengaluru@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Jayanagar, Bengaluru</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <span id="currentYear"></span> Solectric Solutions. All rights reserved.</p>
                <p>Website: <a href="https://solectricsolutions.in" target="_blank">www.solectricsolutions.in</a></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="script.js"></script>
</body>
</html>
