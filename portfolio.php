<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arooba's Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      scroll-behavior: smooth;
    }

    .hero {
      background: url('https://images.unsplash.com/photo-1514790193030-c89d266d5a9d') no-repeat center center/cover;
      height: 100vh;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      padding: 2rem;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 600;
    }

    .section-title {
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .skills i {
      font-size: 2rem;
      color: #0d6efd;
    }

    .project-card {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
    }

    footer {
      background-color: #0d6efd;
      color: white;
      padding: 1rem 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero text-white" id="home">
    <h1>Hey, I'm Arooba 👋</h1>
    <p class="lead">Aspiring Web Developer | Data Science Student | Creative Mind</p>
    <a href="#contact" class="btn btn-light mt-3">Let's Connect</a>
  </section>

  <!-- About Section -->
  <section class="container py-5" id="about">
    <h2 class="section-title text-center">About Me</h2>
    <p class="text-center">I'm a 1st semester Data Science student, passionate about tech, PHP, and building creative websites. Currently exploring the amazing world of web dev with hands-on projects. I'm also super curious, always learning, and leveling up! 🚀</p>
  </section>

  <!-- Skills Section -->
  <section class="bg-light py-5" id="skills">
    <div class="container text-center">
      <h2 class="section-title">Skills</h2>
      <div class="row justify-content-center">
        <div class="col-6 col-md-3">
          <i class="bi bi-code-slash"></i>
          <p>HTML / CSS</p>
        </div>
        <div class="col-6 col-md-3">
          <i class="bi bi-filetype-php"></i>
          <p>PHP</p>
        </div>
        <div class="col-6 col-md-3">
          <i class="bi bi-bootstrap"></i>
          <p>Bootstrap</p>
        </div>
        <div class="col-6 col-md-3">
          <i class="bi bi-terminal-fill"></i>
          <p>Problem Solving</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="container py-5" id="projects">
    <h2 class="section-title text-center">Projects</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="p-3 bg-white project-card">
          <h5>School Website</h5>
          <p>Designed a responsive school website with login, attendance, and admin panel using PHP and Bootstrap.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-3 bg-white project-card">
          <h5>Portfolio</h5>
          <p>This portfolio you're seeing right now! 😄 Fully responsive, clean, and built with love & Bootstrap.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="p-3 bg-white project-card">
          <h5>Dashboard Design</h5>
          <p>Made a dashboard layout using HTML, CSS, and jQuery for tracking user data and skill progress.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-light py-5" id="contact">
    <div class="container text-center">
      <h2 class="section-title">Contact</h2>
      <p>Email: <strong>arooba@example.com</strong></p>
      <p>LinkedIn: <strong>linkedin.com/in/arooba-dev</strong></p>
      <p>GitHub: <strong>github.com/arooba-codes</strong></p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>Made with 💙 by Arooba &copy; 2025</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
