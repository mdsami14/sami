<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sami | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">SAMI</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Hi, I'm <span class="highlight">Md. Samiuzzaman</span></h1>
                <h2 class="hero-subtitle">Full Stack Developer & UI/UX Designer</h2>
                <p class="hero-description">I create beautiful, functional websites and applications that provide exceptional user experiences.</p>
                <div class="hero-buttons">
                    <a href="#portfolio" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Contact Me</a>
                </div>
            </div>
            
        <div class="hero-image">
            <div class="image-container">
                <img src="images\sami.png" class="profile-image">
            </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>I'm a passionate developer with 5+ years of experience creating web applications. I specialize in front-end and back-end development, with a focus on responsive design and user experience.</p>
                    <p>My expertise includes HTML, CSS, JavaScript, PHP, and various frameworks like React and Laravel. I enjoy turning complex problems into simple, beautiful designs.</p>
                    <div class="about-info">
                        <div class="info-item">
                            <span class="info-label">Name:</span>
                            <span class="info-value">Md. Samiuzzaman</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Email:</span>
                            <span class="info-value">mmdsami014@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Location:</span>
                            <span class="info-value">Dhaka, Bangladesh</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Availability:</span>
                            <span class="info-value">Open to Opportunities</span>
                        </div>
                    </div>
                </div>
                <div class="about-stats">
                    <div class="stat">
                        <h3 class="stat-number">50+</h3>
                        <p class="stat-label">Projects Completed</p>
                    </div>
                    <div class="stat">
                        <h3 class="stat-number">35+</h3>
                        <p class="stat-label">Happy Clients</p>
                    </div>
                    <div class="stat">
                        <h3 class="stat-number">5+</h3>
                        <p class="stat-label">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title">My Portfolio</h2>
            <div class="portfolio-filter">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Design</button>
                <button class="filter-btn" data-filter="app">Web App</button>
                <button class="filter-btn" data-filter="mobile">Mobile</button>
            </div>
            <div class="portfolio-grid">
                <?php include 'portfolio-data.php'; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="skills-container">
                <div class="skill">
                    <div class="skill-info">
                        <span class="skill-name">HTML/CSS</span>
                        <span class="skill-percent">95%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 95%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-info">
                        <span class="skill-name">JavaScript</span>
                        <span class="skill-percent">90%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-info">
                        <span class="skill-name">PHP</span>
                        <span class="skill-percent">85%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 85%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-info">
                        <span class="skill-name">React</span>
                        <span class="skill-percent">80%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-info">
                        <span class="skill-name">UI/UX Design</span>
                        <span class="skill-percent">75%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>Email</h4>
                            <p>mmdsami014@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h4>Phone</h4>
                            <p>+800 1759639439</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Dhaka</h4>
                            <p>Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send Me a Message</h3>
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="social-links">
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-codepen"></i></a>
            </div>
            <p class="copyright">© <?php echo date("Y"); ?> Sami. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>