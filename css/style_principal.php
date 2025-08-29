    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #1a237e;
            --accent-orange: #ff6f00;
            --gold: #ffd700;
            --deep-blue: #0d1757;
            --warm-orange: #ff8f00;
            --text-light: #ffffff;
            --text-dark: #333333;
            --bg-gradient: linear-gradient(135deg, var(--deep-blue) 0%, var(--primary-blue) 50%, var(--accent-orange) 100%);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --shadow-light: 0 8px 32px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 12px 40px rgba(0, 0, 0, 0.15);
            --shadow-heavy: 0 16px 50px rgba(0, 0, 0, 0.2);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

       






        /* Animation au fondu pour les sous-titres */
        @keyframes subtitleFadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-subtitle.animate {
            animation: subtitleFadeIn 0.8s ease-out 0.3s forwards;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(26, 35, 126, 0.95);
            backdrop-filter: blur(15px);
            z-index: 1000;
            padding: 0.8rem 0;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-light);
            text-decoration: none;
            background: linear-gradient(45deg, var(--accent-orange), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a:hover {
            color: var(--accent-orange);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: var(--accent-orange);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .mobile-menu span {
            width: 25px;
            height: 3px;
            background: var(--text-light);
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .mobile-nav {
            display: none;
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            background: rgba(26, 35, 126, 0.98);
            backdrop-filter: blur(15px);
            z-index: 999;
            padding: 1rem 0;
            transform: translateY(-100%);
            transition: transform 0.3s ease;
        }

        .mobile-nav.active {
            transform: translateY(0);
        }

        .mobile-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .mobile-nav a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.5rem 2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .mobile-nav a:hover {
            background: var(--accent-orange);
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: var(--bg-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 2rem 1rem;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(255, 111, 0, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 60%, rgba(255, 215, 0, 0.08) 0%, transparent 50%);
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 1rem;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            color: var(--text-light);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero .tagline {
            font-size: clamp(1rem, 2.5vw, 1.5rem);
            color: var(--gold);
            margin-bottom: 1.5rem;
            font-weight: 300;
            font-style: italic;
        }

        .hero .description {
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.9rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            white-space: nowrap;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--accent-orange), var(--warm-orange));
            color: white;
            box-shadow: var(--shadow-medium);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-heavy);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-light);
            border: 2px solid var(--gold);
        }

        .btn-secondary:hover {
            background: var(--gold);
            color: var(--deep-blue);
            transform: translateY(-3px);
        }

        /* Sections */
        .section {
            padding: 4rem 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .section-title {
            text-align: center;
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, var(--primary-blue), var(--accent-orange));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            transform: translateY(60px) scale(0.7);
        }

        .section-title.animate {
            animation: titleSlideIn 1s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        .section-subtitle {
            text-align: center;
            font-size: clamp(1rem, 2vw, 1.1rem);
            color: #666;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            transform: translateY(40px);
        }

        .section-subtitle.animate {
            animation: subtitleFadeIn 0.8s ease-out 0.3s forwards;
        }

        /* Animation de rebond élégante pour les titres */
        @keyframes titleSlideIn {
            0% {
                opacity: 0;
                transform: translateY(60px) scale(0.7);
            }
            50% {
                opacity: 0.8;
                transform: translateY(-15px) scale(1.1);
            }
            70% {
                opacity: 1;
                transform: translateY(8px) scale(0.95);
            }
            85% {
                transform: translateY(-3px) scale(1.02);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Animation au fondu pour les sous-titres */
        @keyframes subtitleFadeIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* About Section */
        .about {
            background: linear-gradient(135deg, #f8f9ff 0%, #fff5f0 100%);
        }

        .about-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h3 {
            font-size: clamp(1.5rem, 3vw, 1.8rem);
            color: var(--primary-blue);
            margin-bottom: 1rem;
        }

        .about-text p {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1rem;
        }

        .about-image {
            text-align: center;
            position: relative;
        }

        .profile-image {
            width: 100%;
            max-width: 280px;
            height: auto;
            border-radius: 20px;
            box-shadow: var(--shadow-medium);
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.05);
        }

        /* Portfolio Section */
        .portfolio {
            background: var(--deep-blue);
            color: var(--text-light);
        }

        .portfolio .section-title {
            color: var(--text-light);
            background: linear-gradient(45deg, var(--accent-orange), var(--gold));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .portfolio .section-subtitle {
            color: rgba(255, 255, 255, 0.8);
        }

        .audio-categories {
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }

        .category-btn {
            padding: 0.6rem 1.2rem;
            background: transparent;
            border: 2px solid var(--accent-orange);
            color: var(--accent-orange);
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .category-btn.active,
        .category-btn:hover {
            background: var(--accent-orange);
            color: white;
            transform: translateY(-2px);
        }

        .audio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .audio-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .audio-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .audio-card h4 {
            color: var(--gold);
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .audio-card p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .audio-player {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .play-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--accent-orange), var(--warm-orange));
            border: none;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .play-btn:hover {
            transform: scale(1.1);
        }

        .audio-info {
            flex: 1;
        }

        .audio-title {
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 0.2rem;
            font-size: 0.9rem;
        }

        .audio-duration {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.8rem;
        }

        /* Services */
        .services {
            background: #f8f9ff;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .service-card {
            background: white;
            border-radius: 15px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
            border-top: 4px solid var(--accent-orange);
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-medium);
        }

        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        .service-card h4 {
            font-size: 1.2rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
        }

        .service-card p {
            color: #666;
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Testimonials */
        .testimonials {
            background: var(--bg-gradient);
            color: var(--text-light);
        }

        .testimonials .section-title {
            color: var(--text-light);
        }

        .testimonials .section-subtitle {
            color: rgba(255, 255, 255, 0.8);
        }

        .testimonial {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 2rem;
            margin: 0 auto;
            max-width: 700px;
            text-align: center;
        }

        .testimonial-quote {
            font-size: clamp(1rem, 2vw, 1.2rem);
            font-style: italic;
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .testimonial-author {
            color: var(--gold);
            font-weight: 600;
            font-size: 1rem;
        }

        .testimonial-role {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Contact */
        .contact {
            background: #f8f9ff;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .contact-info h3 {
            color: var(--primary-blue);
            font-size: clamp(1.5rem, 3vw, 1.8rem);
            margin-bottom: 1rem;
        }

        .contact-info p {
            color: #666;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            line-height: 1.6;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            padding: 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow-light);
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-2px);
        }

        .contact-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(45deg, var(--accent-orange), var(--warm-orange));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 1rem;
            font-size: 1.1rem;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: var(--shadow-light);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary-blue);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 0.9rem;
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--accent-orange);
            box-shadow: 0 0 0 3px rgba(255, 111, 0, 0.1);
        }

        .form-group textarea {
            height: 100px;
            resize: vertical;
        }

        /* Footer */
        .footer {
            background: var(--deep-blue);
            color: var(--text-light);
            padding: 2.5rem 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            text-decoration: underline;
            text-decoration-color: var(--accent-orange);
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--accent-orange);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 1.5rem;
            text-align: center;
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Focus styles for accessibility */
        .btn:focus,
        .category-btn:focus,
        .play-btn:focus {
            outline: 2px solid var(--accent-orange);
            outline-offset: 2px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .container {
                padding: 0 1.2rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }
            
            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: flex;
            }

            .navbar {
                padding: 0.6rem 0;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .hero {
                padding: 1rem;
                min-height: 90vh;
            }

            .section {
                padding: 3rem 0;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }

            .audio-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }

            .audio-categories {
                gap: 0.5rem;
            }

            .category-btn {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 1.5rem;
            }

            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }

            .contact-icon {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }

            .welcome-message {
                padding: 2rem 2.5rem;
                border-radius: 20px;
            }
        }

        @media (max-width: 480px) {
            .hero {
                padding: 0.5rem;
            }

            .container {
                padding: 0 1rem;
            }

            .contact-form,
            .service-card {
                padding: 1.5rem 1rem;
            }

            .testimonial,
            .audio-card {
                padding: 1.2rem;
            }

            .audio-player {
                padding: 0.8rem;
                gap: 0.8rem;
            }

            .play-btn {
                width: 40px;
                height: 40px;
            }

            .welcome-message {
                padding: 1.5rem 2rem;
                border-radius: 15px;
            }
        }

        /* Performance optimizations */
        .hero::before,
        .audio-card,
        .service-card {
            will-change: transform;
        }

        /* Smooth transitions */
        * {
            -webkit-tap-highlight-color: transparent;
        }

        .notification {
            position: fixed;
            top: 100px;
            right: 20px;
            background: linear-gradient(45deg, var(--accent-orange), var(--warm-orange));
            color: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(255, 111, 0, 0.3);
            transform: translateX(400px);
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .notification.show {
            transform: translateX(0);
        }
    </style>