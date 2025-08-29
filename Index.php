<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reinavoixoff - Voix Off Professionnelle | Portfolio Audio</title>
    <meta name="description" content="Voix off professionnelle au Sénégal. Découvrez le talent vocal de Reinavoixoff pour vos projets publicitaires, documentaires, e-learning et narration.">
    <meta name="keywords" content="voix off Sénégal, voix off professionnelle, voix féminine captivante, narration, doublage, publicité">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
   
     <?php include 'css/style_principal.php'; ?>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">Reinavoixoff</a>
            <ul class="nav-links">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Témoignages</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        
        <!-- Menu mobile -->
        <div class="mobile-nav" id="mobileNav">
            <ul>
                <li><a href="#home" onclick="closeMenu()">Accueil</a></li>
                <li><a href="#about" onclick="closeMenu()">À propos</a></li>
                <li><a href="#portfolio" onclick="closeMenu()">Portfolio</a></li>
                <li><a href="#services" onclick="closeMenu()">Services</a></li>
                <li><a href="#testimonials" onclick="closeMenu()">Témoignages</a></li>
                <li><a href="#contact" onclick="closeMenu()">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 id="typing-text"></h1>
            <p class="tagline">La mienne le fera vibrer.</p>
            <p class="description">
                Une voix vraie, qui ressent et qui partage. Je m’adapte à chaque projet avec sérieux et sensibilité.
                Ce que je fais, je le fais avec cœur, précision et engagement.
            </p>
            <div class="cta-buttons">
                <a href="#portfolio" class="btn btn-primary">
                    <i class="fas fa-headphones"></i>
                    Écouter ma voix
                </a>
                <a href="#contact" class="btn btn-secondary">
                    <i class="fas fa-phone"></i>
                    Me contacter
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section reveal">
        <div class="container">
            <h2 class="section-title">À propos</h2>
            <p class="section-subtitle">La passion et l'art derrière chaque voix</p>
            
            <div class="about-content">
                <div class="about-text">
                    <h3>Je suis Reinavoixoff</h3>
                    <p>
                        Depuis toujours, je suis attirée par les nuances du langage parlé. le rythme, les silences, les intentions.
                        Chaque projet est pour moi une exploration sonore, où je cherche à transmettre une émotion juste et sincère.
                    </p>
                    <p>
                        Je me forme et m’exerce régulièrement à travers des projets personnels, des collaborations en ligne et des tests techniques 
                        pour affiner mon style et ma précision. J’aime comprendre l’univers d’un texte, capter ce qu’il veut dire au-delà des mots, 
                        et trouver la manière la plus naturelle de le faire entendre.
                        Qu’il s’agisse d’un ton posé, énergique ou intimiste, je m’adapte avec sensibilité pour que le message soit clair,vivant et fidèle à son intention.


                    </p>
                    <p>
                        Mon approche ? Comprendre l'émotion derrière chaque projet pour la transmettre avec justesse et impact. 
                        Que ce soit pour une campagne publicitaire énergique ou une narration contemplative, 
                        je m'adapte à l'univers de votre marque.
                    </p>
                </div>
                
                <div class="about-image">
                    <img src="Image/imgportfolio.jpg" 
                         alt="Reinavoixoff - Voix Off Professionnelle" 
                         class="profile-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Audio -->
      <?php include 'music.php'; ?>

    <!-- Services -->
    <section id="services" class="services section reveal">
        <div class="container">
            <h2 class="section-title">Mes Services</h2>
            <p class="section-subtitle">Une expertise complète au service de vos projets</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📺</div>
                    <h4>Voix-off Publicitaire</h4>
                    <p>Spots TV, radio et web qui marquent les esprits. Une voix qui vend et qui séduit, adaptée à votre cible et votre message.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">📖</div>
                    <h4>Narration</h4>
                    <p>Livres audio, contes et récits. Une voix qui raconte avec émotion et transporte l'auditeur dans votre univers narratif.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🎬</div>
                    <h4>Documentaires</h4>
                    <p>Narration immersive pour vos documentaires. Une voix qui respecte le sujet traité et guide l'audience avec intelligence.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🎓</div>
                    <h4>E-learning & Formation</h4>
                    <p>Modules pédagogiques clairs et engageants. Une voix qui facilite l'apprentissage et maintient l'attention de vos apprenants.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h4>Communication Corporate</h4>
                    <p>Messages institutionnels, présentations d'entreprise. Une voix qui incarne vos valeurs et renforce votre image de marque.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">🎵</div>
                    <h4>Doublage & Animation</h4>
                    <p>Personnages de dessins animés, doublage de films. Une voix qui donne vie et personnalité à tous vos projets créatifs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials section reveal">
        <div class="container">
            <h2 class="section-title">Témoignages</h2>
            <p class="section-subtitle">Ce que mes clients disent de mon travail</p>
            
            <div class="testimonial" id="currentTestimonial">
                <div class="testimonial-quote">
                    "Reinavoixoff a donné une âme à notre campagne publicitaire. Sa voix authentique et chaleureuse 
                    a parfaitement capturé l'essence de notre marque. Un professionnalisme remarquable !"
                </div>
                <div class="testimonial-author">Marie Diallo</div>
                <div class="testimonial-role">Directrice Marketing</div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact section reveal">
        <div class="container">
            <h2 class="section-title">Me Contacter</h2>
            <p class="section-subtitle">Prêt à donner une voix à votre projet ? Parlons-en !</p>
            
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Parlons de votre projet</h3>
                    <p>
                        Que puis-je faire pour vous? Chaque projet est unique et mérite une attention particulière. 
                        Contactez-moi pour discuter de vos besoins.
                    </p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto:reinavoixoff8@gmail.com">reinavoixoff8@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <strong>Téléphone</strong><br>
                            <a href="tel:+221765958718">+221 76 595 87 18</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <strong>Localisation</strong><br>
                            Dakar, Sénégal
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <strong>Disponibilité</strong><br>
                            Tous les jours : 9h - 18h
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                   <form action="https://formspree.io/f/xqadzjdk" method="POST">
                        <div class="form-group" >
                            <label for="name">Nom complet *</label><br>
                            <input type="text" id="name" name="nom" required><br><br>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label><br>
                            <input type="email" id="email" name="email" required><br><br>
                        </div>

                        <div class="form-group">
                            <label for="telephone">Téléphone</label><br>
                            <input type="tel" id="telephone" name="telephone"><br><br>
                        </div>

                       <div class="form-group">
                            <label for="project">Type de projet *</label>
                            <select id="project" name="project" required style="width: 100%; padding: 1rem; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 1rem;">
                                <option value="">Sélectionnez votre projet</option>
                                <option value="publicite">Publicité</option>
                                <option value="narration">Narration</option>
                                <option value="documentaire">Documentaire</option>
                                <option value="elearning">E-learning</option>
                                <option value="institutionnel">Institutionnel</option>
                                <option value="doublage">Doublage</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Décrivez votre projet</label>
                            <textarea id="description" name="description" required placeholder="Parlez-moi de votre projet, vos attentes, le ton souhaité..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i>
                            Envoyer le message
                        </button>
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
                    <h4>Reinavoixoff</h4>
                    <p>Voix off professionnelle au Sénégal. Donnons une voix authentique et puissante à vos projets.</p>
                </div>
                
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:reinavoixoff8@gmail.com">reinavoixoff8@gmail.com</a></p>
                    <p><i class="fas fa-phone"></i> <a href="tel:+221765958718">+221 76 595 87 18</a></p>
                    <p><i class="fas fa-map-marker-alt"></i> Dakar, Sénégal</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Reinavoixoff. Tous droits réservés. | Conçu avec passion pour l'art vocal.</p>
            </div>
        </div>
    </footer>

    <div id="notification" class="notification">
        <span id="notificationText">Message</span>
    </div>

    <script>
        // Typing animation
        document.addEventListener("DOMContentLoaded", function() {
            const text = "Votre message mérite une voix...";
            const target = document.getElementById("typing-text");
            let i = 0;

            function typeWriter() {
                if (i < text.length) {
                    target.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 80);
                }
            }
            typeWriter();

            // Animation des titres de sections avec déclenchement intelligent
            const titleObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const title = entry.target.querySelector('.section-title');
                        const subtitle = entry.target.querySelector('.section-subtitle');
                        
                        if (title && !title.classList.contains('animate')) {
                            title.classList.add('animate');
                        }
                        if (subtitle && !subtitle.classList.contains('animate')) {
                            subtitle.classList.add('animate');
                        }
                    }
                });
            }, { 
                threshold: 0.3,
                rootMargin: '0px 0px -10% 0px'
            });

            // Observer toutes les sections
            document.querySelectorAll('.section').forEach(section => {
                titleObserver.observe(section);
            });

            // Masquer le message de bienvenue après 4 secondes
            const welcomeMessage = document.getElementById('welcomeMessage');
            if (welcomeMessage) {
                setTimeout(() => {
                    welcomeMessage.style.animation = 'welcomeAnimation 4s ease-out forwards';
                    setTimeout(() => {
                        welcomeMessage.remove();
                    }, 4000);
                }, 100);
            }
        });

        // Reveal animations
        document.addEventListener("DOMContentLoaded", () => {
            const reveals = document.querySelectorAll(".reveal");
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    }
                });
            }, { threshold: 0.2 });

            reveals.forEach(el => observer.observe(el));
        });

        // Audio player functionality
        const players = document.querySelectorAll('.audio-player');
        players.forEach(player => {
            const button = player.querySelector('.play-btn');
            let isPlaying = false;

            button.addEventListener('click', () => {
                // Reset all other players
                players.forEach(p => {
                    const btn = p.querySelector('.play-btn');
                    if (btn !== button) {
                        btn.textContent = '▶';
                    }
                });

                // Toggle current player
                if (isPlaying) {
                    button.textContent = '▶';
                    isPlaying = false;
                } else {
                    button.textContent = '⏸';
                    isPlaying = true;
                    
                    // Simulate audio duration
                    const duration = parseInt(player.querySelector('.audio-duration').textContent.split(':')[1]) * 1000;
                    setTimeout(() => {
                        button.textContent = '▶';
                        isPlaying = false;
                    }, duration);
                }
            });
        });

        // Portfolio filtering
        function filterAudio(category) {
            const cards = document.querySelectorAll('.audio-card');
            const buttons = document.querySelectorAll('.category-btn');
            
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            cards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Testimonials rotation
        const testimonials = [
            {
                quote: "Reinavoixoff a donné une âme à notre campagne publicitaire. Sa voix authentique et chaleureuse a parfaitement capturé l'essence de notre marque. Un professionnalisme remarquable !",
                author: "Marie Diallo",
                role: "Directrice Marketing"
            },
            {
                quote: "Pour notre documentaire sur la culture sénégalaise, nous cherchions une voix qui saurait transmettre l'émotion et le respect du sujet. Reinavoixoff a dépassé nos attentes !",
                author: "Amadou Ba",
                role: "Réalisateur - Productions Teranga"
            },
            {
                quote: "Nos modules e-learning ont gagné en qualité grâce à la voix claire et pédagogique de Reinavoixoff. Nos apprenants sont plus engagés et les retours sont excellents.",
                author: "Fatou Seck",
                role: "Responsable Formation - Institut Digital"
            }
        ];

        let currentTestimonial = 0;

        function updateTestimonial() {
            const testimonialEl = document.getElementById('currentTestimonial');
            const current = testimonials[currentTestimonial];
            
            testimonialEl.innerHTML = `
                <div class="testimonial-quote">"${current.quote}"</div>
                <div class="testimonial-author">${current.author}</div>
                <div class="testimonial-role">${current.role}</div>
            `;
            
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        }

        // Mobile menu toggle
        function toggleMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileNav = document.getElementById('mobileNav');
            const spans = mobileMenu.querySelectorAll('span');
            
            mobileNav.style.display = mobileNav.style.display === 'block' ? 'none' : 'block';
            mobileNav.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            if (mobileNav.classList.contains('active')) {
                spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
            } else {
                spans.forEach(span => {
                    span.style.transform = 'none';
                    span.style.opacity = '1';
                });
            }
        }

        function closeMenu() {
            const mobileMenu = document.querySelector('.mobile-menu');
            const mobileNav = document.getElementById('mobileNav');
            const spans = mobileMenu.querySelectorAll('span');
            
            mobileNav.style.display = 'none';
            mobileNav.classList.remove('active');
            mobileMenu.classList.remove('active');
            
            spans.forEach(span => {
                span.style.transform = 'none';
                span.style.opacity = '1';
            });
        }

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(26, 35, 126, 0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                navbar.style.background = 'rgba(26, 35, 126, 0.95)';
                navbar.style.boxShadow = 'none';
            }
        });

        // Form submission
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Show success message
                    const btn = this.querySelector('button[type="submit"]');
                    const originalText = btn.innerHTML;
                    
                    btn.innerHTML = '<i class="fas fa-check"></i> Message envoyé !';
                    btn.style.background = '#4caf50';
                    
                    setTimeout(() => {
                        btn.innerHTML = originalText;
                        btn.style.background = '';
                        this.reset();
                    }, 3000);
                });
            }
        });

        // Initialize testimonials rotation
        setInterval(updateTestimonial, 6000);

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-card, .audio-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Gestion du formulaire de contact
        function handleContactForm() {
            const form = document.querySelector('form');

            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(form);
                const data = {};
                
                for (let [key, value] of formData.entries()) {
                    data[key] = value;
                }
                
                // Simulation d'envoi
                showNotification('Message envoyé avec succès ! Je vous recontacterai rapidement.');
                form.reset();
            });
        }

        // Navigation fluide
        function smoothScrolling() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        
                        // Fermer le menu mobile si ouvert
                        const mobileMenu = document.querySelector('.mobile-menu');
                        const mobileNav = document.getElementById('mobileNav');
                        mobileMenu.classList.remove('active');
                        mobileNav.classList.remove('active');
                    }
                });
            });
        }

        // Effet de scroll sur la navbar
        function handleNavbarScroll() {
            window.addEventListener('scroll', () => {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 100) {
                    navbar.style.background = 'rgba(26, 35, 126, 0.98)';
                    navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
                } else {
                    navbar.style.background = 'rgba(26, 35, 126, 0.95)';
                    navbar.style.boxShadow = 'none';
                }
            });
        }

        // Animation au scroll
        function handleScrollAnimations() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.service-card, .audio-card, .testimonial').forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease';
                observer.observe(el);
            });
        }
        
        function showNotification(message) {
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notificationText');
            
            notificationText.textContent = message;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        function showTestimonial(index) {
            testimonials.forEach((testimonial, i) => {
                if (i === index) {
                    testimonial.style.display = 'block';
                    testimonial.style.opacity = '1';
                } else {
                    testimonial.style.display = 'none';
                    testimonial.style.opacity = '0';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser tous les composants
            //handleContactForm();
            //smoothScrolling();
            //handleNavbarScroll();
            //handleScrollAnimations();
            
            // Démarrer le carrousel des témoignages
            //showTestimonial(0);
            //setInterval(nextTestimonial, 5000);
            
            // Message de bienvenue
            setTimeout(() => {
                showNotification('Bienvenue ! Découvrez mon univers vocal 🎤');
            }, 2000);
        });
    </script>
</body>
</html>