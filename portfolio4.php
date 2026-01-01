<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>🍔 Arooba's Food Menu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .hero {
      background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092') center/cover no-repeat;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 1px 1px 3px #000;
      text-align: center;
    }
    .hero h1 {
      font-family: 'Pacifico', cursive;
      font-size: 4rem;
    }
    .menu-section {
      padding: 60px 0;
    }
    .menu-section h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }
    .contact {
      background: #222;
      color: white;
      padding: 40px 0;
    }
    .contact input, .contact textarea {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <!-- 🍽️ Hero Section -->
  <div class="hero">
    <div>
      <h1>Arooba's Bites</h1>
      <p class="lead">Fresh. Tasty. Delivered.</p>
    </div>
  </div>

  <!-- 🍔 Menu Section -->
  <div class="container menu-section">
    <h2>🍳 Breakfast</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x300/?pancakes" class="card-img-top" alt="Pancakes">
          <div class="card-body">
            <h5 class="card-title">Fluffy Pancakes</h5>
            <p class="card-text">Served with maple syrup & berries.</p>
            <p class="text-primary">Rs. 350</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x300/?omelette" class="card-img-top" alt="Omelette">
          <div class="card-body">
            <h5 class="card-title">Cheese Omelette</h5>
            <p class="card-text">Loaded with cheese & veggies.</p>
            <p class="text-primary">Rs. 250</p>
          </div>
        </div>
      </div>
    </div>

    <h2>🍕 Lunch & Dinner</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x300/?burger" class="card-img-top" alt="Burger">
          <div class="card-body">
            <h5 class="card-title">Beef Burger</h5>
            <p class="card-text">Juicy grilled patty with cheese & fries.</p>
            <p class="text-primary">Rs. 500</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x300/?pizza" class="card-img-top" alt="Pizza">
          <div class="card-body">
            <h5 class="card-title">Pepperoni Pizza</h5>
            <p class="card-text">12” loaded with cheese & toppings.</p>
            <p class="text-primary">Rs. 850</p>
          </div>
        </div>
      </div>
    </div>

    <h2>🥤 Drinks</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x300/?coffee" class="card-img-top" alt="Coffee">
          <div class="card-body">
            <h5 class="card-title">Iced Coffee</h5>
            <p class="card-text">Cool, creamy & energizing.</p>
            <p class="text-primary">Rs. 200</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x300/?juice" class="card-img-top" alt="Juice">
          <div class="card-body">
            <h5 class="card-title">Fresh Orange Juice</h5>
            <p class="card-text">100% pure with no added sugar.</p>
            <p class="text-primary">Rs. 180</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 📞 Contact Section -->
  <div class="contact">
    <div class="container">
      <h2 class="text-center mb-4">📞 Contact Us</h2>
      <form>
        <div class="row">
          <div class="col-md-6"><input type="text" class="form-control" placeholder="Your Name" required></div>
          <div class="col-md-6"><input type="email" class="form-control" placeholder="Your Email" required></div>
        </div>
        <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
        <button class="btn btn-primary mt-3" type="submit">Send Message</button>
      </form>
      <p class="mt-4 text-center">📍 Gulshan-e-Iqbal, Karachi | 📞 0300-1234567</p>
    </div>
  </div>

</body>
</html>
