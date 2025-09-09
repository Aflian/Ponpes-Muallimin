<style>
    /* CSS Custom Properties */
    :root {
        --primary-green: #1b4332;
        --secondary-green: #2d5016;
        --light-green: #52b788;
        --accent-green: #74c69d;
        --soft-green: #95d5b2;
        --text-dark: #2c3e50;
        --text-muted: #6c757d;
        --border-color: #e9ecef;
        --shadow-light: 0 2px 10px rgba(0,0,0,0.08);
        --shadow-medium: 0 5px 20px rgba(0,0,0,0.12);
        --shadow-heavy: 0 10px 30px rgba(0,0,0,0.15);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        --border-radius: 16px;
        --border-radius-sm: 8px;
    }

    /* Global Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
        color: var(--text-dark);
        overflow-x: hidden;
    }

    /* Utility Classes */
    .text-gradient {
        background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Navigation Styles */
    .navbar {
        padding: 1rem 0;
        transition: var(--transition);
        box-shadow: none;
        background: #ffff;
    }

    .navbar.scrolled {
        padding: 0.5rem 0;
        background: #ffff;
        box-shadow: var(--shadow-light);
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.4rem;
        color: var(--primary-green) !important;
        transition: var(--transition);
    }

    .navbar-brand:hover {
        transform: scale(1.05);
    }

    .nav-link {
        font-weight: 500;
        color: var(--text-dark) !important;
        position: relative;
        transition: var(--transition);
        padding: 0.5rem 1rem !important;
    }

    .nav-link:hover {
        color: var(--primary-green) !important;
        transform: translateY(-2px);
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--primary-green);
        transition: var(--transition);
        transform: translateX(-50%);
    }

    .nav-link:hover::after {
        width: 80%;
    }

    /* Hero Section */
    .hero-section {
        background: url({{asset('image.png')}}) ;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.06)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        animation: float 20s ease-in-out infinite;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 800px;
        height: 800px;
        background: radial-gradient(circle, rgba(116,198,157,0.2) 0%, transparent 70%);
        border-radius: 50%;
        animation: pulse 4s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(2deg); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.7; }
        50% { transform: scale(1.1); opacity: 0.4; }
    }

    .hero-content {
        position: relative;
        z-index: 2;
        animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .hero-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 2rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .hero-description {
        font-size: 1.25rem;
        margin-bottom: 2.5rem;
        opacity: 0.95;
        max-width: 600px;
    }

    /* Buttons */
    .btn-custom {
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1rem;
        border: none;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, var(--accent-green), var(--light-green));
        color: var(--primary-green);
        box-shadow: var(--shadow-medium);
    }

    .btn-primary-custom:hover {
        background: white;
        color: var(--primary-green);
        transform: translateY(-3px);
        box-shadow: var(--shadow-heavy);
    }

    .btn-outline-custom {
        background: transparent;
        border: 2px solid white;
        color: white;
    }

    .btn-outline-custom:hover {
        background: white;
        color: var(--primary-green);
        transform: translateY(-3px);
    }

    /* Section Styles */
    .section-padding {
        padding: 6rem 0;
    }

    .section-title {
        font-size: 2.8rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(135deg, var(--primary-green), var(--accent-green));
        border-radius: 2px;
    }

    .section-subtitle {
        font-size: 1.2rem;
        color: var(--text-muted);
        text-align: center;
        margin-bottom: 4rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Card Styles */
    .card-modern {
        border: none;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-light);
        transition: var(--transition);
        overflow: hidden;
        background: white;
    }

    .card-modern:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-heavy);
    }

    .card-header-modern {
        background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
        color: white;
        font-weight: 600;
        border: none;
        padding: 1.5rem;
    }

    /* Statistics Cards */
    .stat-card {
        background: linear-gradient(135deg, var(--soft-green), var(--accent-green));
        border-radius: var(--border-radius);
        padding: 2.5rem;
        text-align: center;
        color: var(--primary-green);
        margin-bottom: 2rem;
        transition: var(--transition);
        border: 3px solid transparent;
    }

    .stat-card:hover {
        transform: translateY(-5px) scale(1.02);
        border-color: var(--primary-green);
        background: linear-gradient(135deg, var(--accent-green), var(--light-green));
    }

    .stat-number {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 0.5rem;
        display: block;
    }

    .stat-label {
        font-size: 1.1rem;
        font-weight: 600;
        opacity: 0.9;
    }

    /* Organization Cards */
    .organization-card {
        background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
        color: white;
        padding: 2rem;
        border-radius: var(--border-radius);
        text-align: center;
        margin-bottom: 1.5rem;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .organization-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: var(--transition);
    }

    .organization-card:hover::before {
        left: 100%;
    }

    .organization-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-heavy);
    }

    /* News Cards */
    .news-card {
        transition: var(--transition);
        border-radius: var(--border-radius);
        overflow: hidden;
        background: white;
        box-shadow: var(--shadow-light);
        height: 100%;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-medium);
    }

    .badge-modern {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
    }

    /* Carousel Enhancements */
    .carousel-item img {
        height: 500px;
        object-fit: cover;
        border-radius: var(--border-radius);
        transition: var(--transition);
    }

    .carousel-caption {
        background: rgba(0,0,0,0.7);
        border-radius: var(--border-radius-sm);
        padding: 1rem 2rem;
        backdrop-filter: blur(10px);
    }

    .carousel-indicators button {
        background-color: var(--primary-green);
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 5px;
    }

    /* Footer */
    .footer {
        background: linear-gradient(135deg, var(--primary-green), #0d2818);
        color: white;
        position: relative;
    }

    .footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--accent-green), transparent);
    }

    .footer h5, .footer h6 {
        color: var(--accent-green);
        font-weight: 600;
    }

    .footer a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: var(--transition);
    }

    .footer a:hover {
        color: var(--accent-green);
        transform: translateX(5px);
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        margin: 0 10px 10px 0;
        transition: var(--transition);
    }

    .social-links a:hover {
        background: var(--accent-green);
        transform: translateY(-3px) scale(1.1);
    }

    /* Back to Top Button */
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 1.2rem;
        cursor: pointer;
        transition: var(--transition);
        z-index: 1000;
        box-shadow: var(--shadow-medium);
        display: none;
    }

    .back-to-top:hover {
        transform: translateY(-5px) scale(1.1);
        background: linear-gradient(135deg, var(--secondary-green), var(--primary-green));
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .section-padding {
            padding: 4rem 0;
        }

        .hero-section {
            min-height: 80vh;
            text-align: center;
            padding: 2rem 0;
        }

        .stat-number {
            font-size: 2.5rem;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-description {
            font-size: 1.1rem;
        }

        .btn-custom {
            padding: 12px 24px;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: 2.2rem;
        }
    }

    /* Loading Animation */
    .fade-in-up {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }

    .fade-in-up.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Improve accessibility */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    /* Focus styles for better accessibility */
    .btn-custom:focus,
    .nav-link:focus,
    .back-to-top:focus {
        outline: 3px solid var(--accent-green);
        outline-offset: 2px;
    }
</style>