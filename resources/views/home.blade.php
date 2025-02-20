Conference Room Booking Home Page
Preview
Code

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conference Room Booking - Home</title>
  <style>
    :root {
      --primary-color: #4361ee;
      --primary-hover: #3a56d4;
      --secondary-color: #7209b7;
      --background: #f8f9fd;
      --card-bg: #ffffff;
      --text-primary: #2b2d42;
      --text-secondary: #6c757d;
      --error: #e63946;
      --success: #2a9d8f;
      --input-border: #e0e0e0;
      --box-shadow: 0 10px 30px rgba(67, 97, 238, 0.1);
      --gradient: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', 'Segoe UI', sans-serif;
    }

    body {
      background-color: var(--background);
      color: var(--text-primary);
      line-height: 1.6;
    }

    /* Header Styles */
    header {
      background: var(--gradient);
      padding: 1rem 2rem;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .logo {
      font-size: 24px;
      font-weight: 700;
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo-icon::before {
      content: "🏢";
      font-size: 28px;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
      list-style: none;
    }

    .nav-links a {
      color: rgba(255, 255, 255, 0.9);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
      font-size: 15px;
    }

    .nav-links a:hover {
      color: white;
    }

    .nav-buttons {
      display: flex;
      gap: 1rem;
    }

    .btn {
      padding: 0.5rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: 15px;
      cursor: pointer;
      transition: all 0.3s;
      text-decoration: none;
      text-align: center;
    }

    .btn-login {
      background-color: rgba(255, 255, 255, 0.15);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .btn-login:hover {
      background-color: rgba(255, 255, 255, 0.25);
    }

    .btn-signup {
      background-color: white;
      color: var(--primary-color);
    }

    .btn-signup:hover {
      background-color: rgba(255, 255, 255, 0.9);
      transform: translateY(-2px);
    }

    /* Hero Section */
    .hero {
      background-image: linear-gradient(135deg, rgba(67, 97, 238, 0.8), rgba(114, 9, 183, 0.8)), url('/api/placeholder/1600/900');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 6rem 2rem;
      text-align: center;
    }

    .hero-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      line-height: 1.2;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2.5rem;
      opacity: 0.9;
    }

    .hero-buttons {
      display: flex;
      gap: 1.5rem;
      justify-content: center;
    }

    .btn-primary {
      background-color: white;
      color: var(--primary-color);
      padding: 0.8rem 2rem;
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
    }

    .btn-secondary {
      background-color: transparent;
      color: white;
      border: 2px solid white;
      padding: 0.8rem 2rem;
    }

    .btn-secondary:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    /* Features Section */
    .features {
      padding: 5rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .section-header {
      text-align: center;
      margin-bottom: 4rem;
    }

    .section-header h2 {
      font-size: 2.2rem;
      background: var(--gradient);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
      margin-bottom: 1rem;
    }

    .section-header p {
      color: var(--text-secondary);
      max-width: 600px;
      margin: 0 auto;
      font-size: 1.1rem;
    }

    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2.5rem;
    }

    .feature-card {
      background-color: var(--card-bg);
      border-radius: 16px;
      padding: 2rem;
      box-shadow: var(--box-shadow);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(67, 97, 238, 0.15);
    }

    .feature-icon {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      display: inline-block;
      padding: 1rem;
      background-color: rgba(67, 97, 238, 0.1);
      border-radius: 12px;
      color: var(--primary-color);
    }

    .feature-card h3 {
      font-size: 1.4rem;
      margin-bottom: 1rem;
      color: var(--text-primary);
    }

    .feature-card p {
      color: var(--text-secondary);
    }

    /* Rooms Section */
    .rooms {
      padding: 5rem 2rem;
      background-color: #f0f3fa;
    }

    .rooms-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .rooms-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin-top: 3rem;
    }

    .room-card {
      background-color: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s;
    }

    .room-card:hover {
      transform: translateY(-5px);
    }

    .room-image {
      height: 200px;
      background-color: #e0e5f0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary-color);
      font-size: 1.2rem;
    }

    .room-info {
      padding: 1.5rem;
    }

    .room-info h3 {
      margin-bottom: 0.5rem;
    }

    .room-features {
      display: flex;
      gap: 1rem;
      margin: 1rem 0;
    }

    .room-feature {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 0.9rem;
      color: var(--text-secondary);
    }

    .room-price {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1.5rem;
    }

    .price {
      font-weight: 700;
      font-size: 1.2rem;
      color: var(--primary-color);
    }

    .btn-book {
      background: var(--gradient);
      color: white;
      padding: 0.5rem 1.2rem;
    }

    .btn-book:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(67, 97, 238, 0.2);
    }

    /* Testimonials Section */
    .testimonials {
      padding: 5rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .testimonials-slider {
      display: flex;
      gap: 2rem;
      margin-top: 3rem;
      overflow-x: auto;
      padding: 1rem 0.5rem;
      scrollbar-width: none;
    }

    .testimonials-slider::-webkit-scrollbar {
      display: none;
    }

    .testimonial-card {
      background-color: var(--card-bg);
      border-radius: 16px;
      padding: 2rem;
      min-width: 300px;
      flex: 1;
      box-shadow: var(--box-shadow);
      display: flex;
      flex-direction: column;
    }

    .testimonial-text {
      font-style: italic;
      margin-bottom: 1.5rem;
      flex-grow: 1;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .author-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #e0e5f0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: var(--primary-color);
    }

    .author-info h4 {
      margin-bottom: 0.2rem;
    }

    .author-info p {
      color: var(--text-secondary);
      font-size: 0.9rem;
    }

    /* Call to Action */
    .cta {
      background: var(--gradient);
      padding: 5rem 2rem;
      color: white;
      text-align: center;
    }

    .cta-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .cta h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }

    .cta p {
      margin-bottom: 2.5rem;
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* Footer */
    footer {
      background-color: #2b2d42;
      color: white;
      padding: 4rem 2rem 2rem;
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 3rem;
    }

    .footer-col h3 {
      margin-bottom: 1.5rem;
      font-size: 1.2rem;
      position: relative;
    }

    .footer-col h3::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -10px;
      height: 3px;
      width: 40px;
      background: var(--gradient);
      border-radius: 2px;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.8rem;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: white;
    }

    .footer-bottom {
      margin-top: 3rem;
      padding-top: 1.5rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      text-align: center;
      color: rgba(255, 255, 255, 0.5);
      font-size: 0.9rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }

      .hero h1 {
        font-size: 2.2rem;
      }

      .hero-buttons {
        flex-direction: column;
        gap: 1rem;
      }

      .btn-primary, .btn-secondary {
        width: 100%;
      }

      .features-grid, .rooms-grid {
        grid-template-columns: 1fr;
      }

      .testimonials-slider {
        flex-direction: column;
      }

      .testimonial-card {
        min-width: unset;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <nav class="navbar">
      <a href="/" class="logo">
        <span class="logo-icon"></span>
        ConferenceHub
      </a>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Rooms</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="nav-buttons">
        <a href="/login" class="btn btn-login">Log In</a>
        <a href="/register" class="btn btn-signup">Sign Up</a>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Book Your Perfect Conference Room</h1>
      <p>Streamline your meetings with our professional conference rooms designed for productivity and collaboration.</p>
      <div class="hero-buttons">
        <a href="/rooms" class="btn btn-primary">Browse Rooms</a>
        <a href="/how-it-works" class="btn btn-secondary">How It Works</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features">
    <div class="section-header">
      <h2>Why Choose ConferenceHub</h2>
      <p>Our platform offers everything you need for successful meetings and events.</p>
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">🔍</div>
        <h3>Easy Booking</h3>
        <p>Search, filter, and book rooms in just a few clicks with our intuitive interface.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">💯</div>
        <h3>Premium Equipment</h3>
        <p>All rooms feature high-quality AV equipment, reliable Wi-Fi, and modern amenities.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">📅</div>
        <h3>Flexible Scheduling</h3>
        <p>Book by the hour, half-day, or full day with easy rescheduling options.</p>
      </div>
    </div>
  </section>

  <!-- Popular Rooms Section -->
  <section class="rooms">
    <div class="rooms-container">
      <div class="section-header">
        <h2>Popular Conference Rooms</h2>
        <p>Discover our most booked spaces for your next meeting or event.</p>
      </div>
      <div class="rooms-grid">
        <div class="room-card">
          <div class="room-image">Executive Room Image</div>
          <div class="room-info">
            <h3>Executive Boardroom</h3>
            <p>Professional meeting space for up to 12 people</p>
            <div class="room-features">
              <span class="room-feature">👥 12 Capacity</span>
              <span class="room-feature">🖥️ Projector</span>
              <span class="room-feature">☕ Catering</span>
            </div>
            <div class="room-price">
              <span class="price">$75/hour</span>
              <a href="/book" class="btn btn-book">Book Now</a>
            </div>
          </div>
        </div>
        <div class="room-card">
          <div class="room-image">Training Room Image</div>
          <div class="room-info">
            <h3>Training Center</h3>
            <p>Flexible space for workshops and training sessions</p>
            <div class="room-features">
              <span class="room-feature">👥 24 Capacity</span>
              <span class="room-feature">💻 Computers</span>
              <span class="room-feature">🎓 Whiteboard</span>
            </div>
            <div class="room-price">
              <span class="price">$95/hour</span>
              <a href="/book" class="btn btn-book">Book Now</a>
            </div>
          </div>
        </div>
        <div class="room-card">
          <div class="room-image">Meeting Room Image</div>
          <div class="room-info">
            <h3>Collaboration Suite</h3>
            <p>Modern space designed for creative collaboration</p>
            <div class="room-features">
              <span class="room-feature">👥 8 Capacity</span>
              <span class="room-feature">📋 Smart Board</span>
              <span class="room-feature">🎮 Break Area</span>
            </div>
            <div class="room-price">
              <span class="price">$60/hour</span>
              <a href="/book" class="btn btn-book">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials">
    <div class="section-header">
      <h2>What Our Clients Say</h2>
      <p>Hear from businesses and professionals who use our platform regularly.</p>
    </div>
    <div class="testimonials-slider">
      <div class="testimonial-card">
        <div class="testimonial-text">
          "ConferenceHub made organizing our quarterly board meetings so much easier. The rooms are always well-prepared and the booking process is seamless."
        </div>
        <div class="testimonial-author">
          <div class="author-avatar">SJ</div>
          <div class="author-info">
            <h4>Sarah Johnson</h4>
            <p>Executive Assistant, Tech Innovations Inc.</p>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-text">
          "We've been using ConferenceHub for all our client meetings for over a year now. The professional environment always makes a great impression."
        </div>
        <div class="testimonial-author">
          <div class="author-avatar">ML</div>
          <div class="author-info">
            <h4>Mark Lewis</h4>
            <p>Sales Director, Global Solutions</p>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-text">
          "As a small business owner, having access to professional meeting spaces without the overhead costs has been invaluable for growing my business."
        </div>
        <div class="testimonial-author">
          <div class="author-avatar">AT</div>
          <div class="author-info">
            <h4>Aisha Thomas</h4>
            <p>Founder, Creative Consulting</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta">
    <div class="cta-container">
      <h2>Ready to Book Your Next Meeting?</h2>
      <p>Join thousands of professionals who trust ConferenceHub for their meeting space needs.</p>
      <a href="/register" class="btn btn-primary">Create an Account</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-col">
        <h3>ConferenceHub</h3>
        <p>Professional meeting spaces for modern businesses. Book your perfect conference room today.</p>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Browse Rooms</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Support</h3>
        <ul class="footer-links">
          <li><a href="#">Help Center</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Cancellation Policy</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Contact Us</h3>
        <ul class="footer-links">
          <li>123 Business Avenue</li>
          <li>New York, NY 10001</li>
          <li>+1 (555) 123-4567</li>
          <li>info@conferencehub.com</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 ConferenceHub. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
