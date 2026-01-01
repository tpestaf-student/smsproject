<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arooba | Web Developer</title>

  <!-- Bootstrap + AOS + Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Outfit', sans-serif;
      background-color: #121212;
      color: #fff;
    }

    .hero {
      height: 100vh;
      background: linear-gradient(135deg, #0d0d0d, #1f1f1f);
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
    }

    h1, h2 {
      font-weight: 600;
    }

    .section {
      padding: 4rem 0;
    }

    .btn-outline-light:hover {
      background-color: #fff;
      color: #121212;
    }

    footer {
      background: #0d0d0d;
      text-align: center;
      padding: 1rem;
    }
  </style>
</head>
<body>

  <!-- Hero -->
  <section class="hero">
    <div>
      <h1 class="display-4">Hi, I'm Arooba 👩‍💻</h1>
      <p class="lead">Web Developer • Data Science Student • Code Enthusiast</p>
      <a href="#projects" class="btn btn-outline-light mt-3">Explore Projects</a>
    </div>
  </section>

  <!-- About -->
  <section class="section container" id="about" data-aos="fade-up">
    <h2 class="text-center mb-4">About Me</h2>
    <div class="glass-card">
      <p>
        I’m Arooba, a passionate beginner web developer and a BS Data Science student.
        I love turning ideas into beautiful websites using HTML, CSS, PHP, and Bootstrap.
        Currently learning new tools and working on real-world projects to grow my skills.
      </p>
    </div>
  </section>

  <!-- Skills -->
  <section class="section bg-dark" id="skills" data-aos="fade-right">
    <div class="container text-center">
      <h2 class="mb-4">Skills</h2>
      <div class="row justify-content-center">
        <div class="col-6 col-md-3 mb-3">
          <i class="bi bi-filetype-html fs-1 text-info"></i>
          <p>HTML / CSS</p>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <i class="bi bi-bootstrap fs-1 text-primary"></i>
          <p>Bootstrap</p>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <i class="bi bi-filetype-php fs-1 text-light"></i>
          <p>PHP</p>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <i class="bi bi-bar-chart-line fs-1 text-success"></i>
          <p>Data Science (Learning)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects -->
  <section class="section container" id="projects" data-aos="zoom-in-up">
    <h2 class="text-center mb-4">Projects</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="glass-card">
          <h5>🎓 School Management</h5>
          <p>Admin panel, login, attendance dashboard — built in PHP with Bootstrap!</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="glass-card">
          <h5>🌐 Personal Portfolio</h5>
          <p>This very site! Fully responsive, animated, and future-ready.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="glass-card">
          <h5>📊 Student Dashboard</h5>
          <p>Custom dashboard design with progress bars, tables, and filters.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="section bg-dark" id="contact" data-aos="fade-up">
    <div class="container text-center">
      <h2 class="mb-4">Contact</h2>
      <p><i class="bi bi-envelope"></i> arooba@example.com</p>
      <p><i class="bi bi-linkedin"></i> linkedin.com/in/arooba-dev</p>
      <p><i class="bi bi-github"></i> github.com/arooba-codes</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>💻 Built with ❤️ by Arooba © 2025</p>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
