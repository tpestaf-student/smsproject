<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            scroll-behavior: smooth;
        }
        
        .navbar {
            background-color: var(--secondary-color);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand, .nav-link {
            color: white !important;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
            padding-bottom: 15px;
            color: var(--secondary-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .skill-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            height: 100%;
        }
        
        .skill-card:hover {
            transform: translateY(-10px);
        }
        
        .project-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
        }
        
        .project-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .contact-section {
            background-color: var(--light-color);
        }
        
        .social-icons a {
            color: var(--secondary-color);
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--primary-color);
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 20px 0;
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .progress {
            height: 10px;
            border-radius: 5px;
        }
        
        .progress-bar {
            background-color: var(--primary-color);
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MyPortfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="display-4 fw-bold mb-3">Hi, I'm <span class="text-warning">[Your Name]</span></h1>
                    <p class="lead mb-4">A passionate [Your Profession/Title] specializing in [Your Specialization]. I create amazing digital experiences.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact" class="btn btn-custom">Hire Me</a>
                        <a href="#projects" class="btn btn-outline-light">View My Work</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9e8e9f48-fa99-44ec-9523-73afa49150fb.png" alt="Professional portrait of a young woman in tech" class="hero-img rounded-circle img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">About Me</h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Who Am I?</h3>
                    <p>I'm a dedicated professional with [X] years of experience in the industry. My journey began when I discovered my passion for [field], and since then I've been constantly learning and improving my skills.</p>
                    <p>I believe in creating solutions that not only look good but also solve real problems and deliver value to users. My approach combines technical expertise with creative problem-solving.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Location:</strong> [Your Location]</li>
                                <li class="mb-2"><strong>Degree:</strong> [Your Degree]</li>
                                <li class="mb-2"><strong>Email:</strong> [Your Email]</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Freelance:</strong> Available</li>
                                <li class="mb-2"><strong>Phone:</strong> [Your Phone]</li>
                                <li class="mb-2"><strong>Experience:</strong> [X] Years</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-card">
                        <h4 class="text-center mb-4">My Skills Overview</h4>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Web Development</span>
                                <span>90%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>UI/UX Design</span>
                                <span>85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Mobile Development</span>
                                <span>75%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <span>Content Writing</span>
                                <span>80%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">My Skills</h2>
            <div class="row">
                <!-- Skill 1 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="skill-card text-center">
                        <i class="fas fa-code fa-3x mb-3" style="color: var(--primary-color)"></i>
                        <h4>Web Development</h4>
                        <p>HTML, CSS, JavaScript, React, Node.js, Express, MongoDB and more.</p>
                    </div>
                </div>
                <!-- Skill 2 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="skill-card text-center">
                        <i class="fas fa-paint-brush fa-3x mb-3" style="color: var(--accent-color)"></i>
                        <h4>UI/UX Design</h4>
                        <p>Wireframing, prototyping, user research, Figma, Adobe XD, and responsive design.</p>
                    </div>
                </div>
                <!-- Skill 3 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="skill-card text-center">
                        <i class="fas fa-mobile-alt fa-3x mb-3" style="color: var(--primary-color)"></i>
                        <h4>Mobile Development</h4>
                        <p>React Native, Flutter, iOS and Android app development.</p>
                    </div>
                </div>
                <!-- Skill 4 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="skill-card text-center">
                        <i class="fas fa-database fa-3x mb-3" style="color: var(--accent-color)"></i>
                        <h4>Database Design</h4>
                        <p>SQL, NoSQL, MongoDB, PostgreSQL, Firebase, and data modeling.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Featured Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c8aff2fc-cc06-404c-a2e7-3528ed956afe.png" alt="E-commerce website design mockup" class="project-img">
                        <div class="p-4">
                            <h4>E-Commerce Platform</h4>
                            <p>A full-featured online store with product catalog, shopping cart, and payment integration.</p>
                            <a href="#" class="btn btn-sm btn-custom">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9624e816-a284-4a40-9623-e194a6a7a8ed.png" alt="Mobile app interface design" class="project-img">
                        <div class="p-4">
                            <h4>Task Management App</h4>
                            <p>Cross-platform productivity app with cloud synchronization and team collaboration.</p>
                            <a href="#" class="btn btn-sm btn-custom">View Project</a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fd64c06a-e413-437b-a478-b92fc4eeef06.png" alt="Data visualization interface" class="project-img">
                        <div class="p-4">
                            <h4>Data Analytics Dashboard</h4>
                            <p>Interactive dashboard with real-time data visualization and reporting tools.</p>
                            <a href="#" class="btn btn-sm btn-custom">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 contact-section">
        <div class="container">
            <h2 class="text-center section-title">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-body p-5">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <input type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-custom">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <div class="social-icons mb-4">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
                <p class="mb-2">Feel free to reach out for collaborations or just a friendly hello!</p>
                <p>Email: <a href="mailto:your.email@example.com">your.email@example.com</a> | Phone: (123) 456-7890</p>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; 2023 My Portfolio. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
