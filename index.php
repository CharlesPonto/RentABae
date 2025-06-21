<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="RentABae offers a safe and fun way to rent a charming boyfriend for events, dates, and companionship.">
  <meta name="keywords" content="boyfriend rental, event partner, safe dating">
  <title>RentABae - Modern Boyfriend Rental Service</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-pink-50 via-purple-50 to-blue-50 text-gray-900">
  <!-- Header/Navbar -->
  <header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">
      <a href="#" class="flex items-center space-x-2">
        <span class="font-extrabold text-2xl text-pink-600">RentABae</span>
      </a>

      <!-- Desktop Nav -->
      <nav class="hidden md:flex space-x-8">
        <a href="#" class="hover:text-pink-600 font-medium">Home</a>
        <a href="#why" class="hover:text-pink-600 font-medium">About</a>
        <a href="#testimonials" class="hover:text-pink-600 font-medium">Testimonials</a>
        <a href="#book" class="hover:text-pink-600 font-medium">Contact</a>
      </nav>
      <a href="#book"
        class="ml-4 px-5 py-2 bg-pink-600 text-white rounded-full font-semibold shadow hover:bg-pink-700 transition hidden md:inline-block">Get
        Started</a>
      <!-- Hamburger (Mobile) -->
      <button id="nav-toggle" class="md:hidden ml-2 p-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
        aria-label="Open menu">
        <svg class="w-7 h-7 text-pink-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <!-- Mobile Nav -->
    <div id="mobile-nav"
      class="md:hidden fixed inset-0 bg-white bg-opacity-95 z-50 flex flex-col items-center justify-center space-y-8 text-xl font-semibold text-pink-700 hidden">
      <button id="nav-close"
        class="absolute top-6 right-6 p-2 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
        aria-label="Close menu">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      <nav aria-label="Mobile navigation">
        <ul class="flex flex-col items-center space-y-6">
          <li><a href="#" class="hover:text-blue-600" onclick="closeMobileNav()">Home</a></li>
          <li><a href="#why" class="hover:text-blue-600" onclick="closeMobileNav()">About</a></li>
          <li><a href="#testimonials" class="hover:text-blue-600" onclick="closeMobileNav()">Testimonials</a>
          </li>
          <li><a href="#book" class="hover:text-blue-600" onclick="closeMobileNav()">Contact</a></li>
          <li><a href="#book"
              class="px-6 py-2 bg-pink-600 text-white rounded-full shadow hover:bg-pink-700 transition">Get
              Started</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main-content">
    <!-- Hero Section -->
    <section
      class="relative bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100 min-h-[70vh] flex flex-col items-center justify-center overflow-hidden">
      <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
        <div class="w-96 h-96 bg-pink-200 rounded-full opacity-20 blur-3xl absolute -top-24 -left-24"></div>
        <div class="w-80 h-80 bg-purple-200 rounded-full opacity-20 blur-3xl absolute -bottom-24 -right-24">
        </div>
      </div>
      <div class="relative z-10 text-center max-w-2xl mx-auto p-8">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-pink-700">Find Your Perfect Companion for Any
          Occasion
        </h1>
        <p class="text-lg md:text-xl mb-8 text-gray-800">Rent a charming, respectful, and friendly
          boyfriend—perfect for
          parties, events, or just a relaxing day out. Your trusted boyfriend rental service.</p>
        <div class="flex flex-col md:flex-row justify-center gap-4 mb-8">
          <a href="#book"
            class="inline-block px-8 py-3 bg-pink-600 text-white rounded-full font-semibold shadow hover:bg-pink-700 transition">Get
            Started Now</a>
          <a href="#boyfriends"
            class="inline-block px-8 py-3 bg-white text-pink-600 border border-pink-400 rounded-full font-semibold shadow hover:bg-pink-50 transition">Browse
            Boyfriends</a>
        </div>
        <!-- Collage of boyfriend images -->
        <div class="flex justify-center gap-4 mt-6">
          <img src="assets/boyfriend_profiles/nyco.png" alt="Profile picture of Nyco"
            class="w-20 h-20 rounded-full object-cover border-4 border-pink-200 shadow-lg">
          <img src="assets/boyfriend_profiles/adam.png" alt="Profile picture of Adam"
            class="w-20 h-20 rounded-full object-cover border-4 border-purple-200 shadow-lg">
          <img src="assets/boyfriend_profiles/noe.png" alt="Profile picture of Noe"
            class="w-20 h-20 rounded-full object-cover border-4 border-blue-200 shadow-lg">
          <img src="assets/boyfriend_profiles/charles.jpg" alt="Profile picture of Charles"
            class="w-20 h-20 rounded-full object-cover border-4 border-pink-200 shadow-lg">
        </div>
      </div>
    </section>

    <!-- Why RentABae Section -->
    <section class="py-16 bg-white" id="why">
      <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-pink-700 mb-4">Why RentABae?</h2>
          <p class="text-gray-600 max-w-xl mx-auto">We know what girls want! Our service is designed for your
            comfort,
            fun, and safety. Here's why you'll love us:</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-pink-50 rounded-2xl p-8 shadow text-center">
            <span class="inline-block bg-pink-200 p-3 rounded-full mb-4"><svg class="w-8 h-8 text-pink-500" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                  d="M4.318 6.318a4.5 4.5 0 0 1 6.364 0L12 7.636l1.318-1.318a4.5 4.5 0 1 1 6.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 0 1 0-6.364z" />
              </svg></span>
            <h3 class="font-semibold text-xl mb-2">Companionship On-Demand</h3>
            <p>Choose a boyfriend that fits your vibe—available for calls, dates, or events.</p>
          </div>
          <div class="bg-purple-50 rounded-2xl p-8 shadow text-center">
            <span class="inline-block bg-purple-200 p-3 rounded-full mb-4"><svg class="w-8 h-8 text-purple-500"
                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                  d="M12 11c0-1.1.9-2 2-2s2 .9 2 2-.9 2-2 2-2-.9-2-2zm0 0V7m0 4v4m0 0c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z" />
              </svg></span>
            <h3 class="font-semibold text-xl mb-2">Safe & Secure</h3>
            <p>Background-verified baes. Your comfort and safety come first.</p>
          </div>
          <div class="bg-blue-50 rounded-2xl p-8 shadow text-center">
            <span class="inline-block bg-blue-200 p-3 rounded-full mb-4"><svg class="w-8 h-8 text-blue-500" fill="none"
                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path
                  d="M12 8c-1.657 0-3 1.343-3 3 0 1.657 1.343 3 3 3s3-1.343 3-3c0-1.657-1.343-3-3-3zm0 0V4m0 7v7m0 0c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z" />
              </svg></span>
            <h3 class="font-semibold text-xl mb-2">Custom Experiences</h3>
            <p>Request specific activities—from dinner dates to Netflix marathons.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Meet Our Boyfriends Section -->
    <section class="py-16 bg-gradient-to-br from-blue-50 via-pink-50 to-purple-50" id="boyfriends"
      aria-label="Meet Our Boyfriends">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
          <span class="uppercase text-pink-600 tracking-widest font-semibold text-sm">Boyfriends</span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-blue-900">Meet Our Boyfriends</h2>
        </div>

        <div class="relative flex items-center justify-center">
          <!-- Left Arrow -->
          <button id="boyfriend-prev"
            class="absolute left-0 z-10 bg-blue-500 hover:bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg focus:outline-none"
            aria-label="Previous">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M15 19l-7-7 7-7" />
            </svg>
          </button>

          <div class="overflow-hidden w-full">
            <div id="boyfriend-carousel" class="flex transition-transform duration-500 ease-in-out">
              <!-- Slide Items -->
              <div class="min-w-full sm:min-w-1/2 lg:min-w-1/3 px-4">
                <div class="bg-blue-50 rounded-2xl shadow-lg p-6 flex flex-col items-center">
                  <img src="assets/boyfriend_profiles/charles.jpg" alt="Image of Charles, Fullstack Developer"
                    class="w-48 h-48 rounded-xl object-cover mb-4">
                  <h3 class="font-bold text-2xl text-blue-900 mb-1">Charles</h3>
                  <div class="text-pink-600 font-semibold mb-1">Fullstack Developer</div>
                  <p class="text-gray-600 mb-3 text-center">Can build you a website and your dreams.
                  </p>
                </div>
              </div>

              <div class="min-w-full sm:min-w-1/2 lg:min-w-1/3 px-4">
                <div class="bg-pink-50 rounded-2xl shadow-lg p-6 flex flex-col items-center">
                  <img src="assets/boyfriend_profiles/nyco.png" alt="Image of Nyco, Technician"
                    class="w-48 h-48 rounded-xl object-cover mb-4">
                  <h3 class="font-bold text-2xl text-blue-900 mb-1">Nyco</h3>
                  <div class="text-blue-600 font-semibold mb-1">Technician</div>
                  <p class="text-gray-600 mb-3 text-center">Fixes more than just your heart.</p>
                </div>
              </div>

              <div class="min-w-full sm:min-w-1/2 lg:min-w-1/3 px-4">
                <div class="bg-purple-50 rounded-2xl shadow-lg p-6 flex flex-col items-center">
                  <img src="assets/boyfriend_profiles/adam.png" alt="Adam, Data Analyst"
                    class="w-48 h-48 rounded-xl object-cover mb-4">
                  <h3 class="font-bold text-2xl text-blue-900 mb-1">Adam</h3>
                  <div class="text-purple-600 font-semibold mb-1">Data Analyst</div>
                  <p class="text-gray-600 mb-3 text-center">Will analyze your love language.</p>
                </div>
              </div>

              <div class="min-w-full sm:min-w-1/2 lg:min-w-1/3 px-4">
                <div class="bg-blue-50 rounded-2xl shadow-lg p-6 flex flex-col items-center">
                  <img src="assets/boyfriend_profiles/noe.png" alt="Image of Noe, Frontend Developer"
                    class="w-48 h-48 rounded-xl object-cover mb-4">
                  <h3 class="font-bold text-2xl text-blue-900 mb-1">Noe</h3>
                  <div class="text-pink-600 font-semibold mb-1">Frontend Developer</div>
                  <p class="text-gray-600 mb-3 text-center">Makes every date look beautiful.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Arrow -->
          <button id="boyfriend-next"
            class="absolute right-0 z-10 bg-blue-500 hover:bg-blue-600 text-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg focus:outline-none"
            aria-label="Next">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>

        <!-- Dot Indicators -->
        <div id="carousel-dots" class="flex justify-center mt-6 space-x-2">
          <!-- Dots will be added by JS -->
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white" id="testimonials" aria-label="Testimonials">
      <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-pink-700 mb-4">What Our Clients Say</h2>
          <p class="text-gray-600">Real stories from happy girls who found their perfect companion.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
          <div class="bg-pink-50 rounded-2xl p-6 shadow flex items-center gap-4">
            <img src="assets/testimonial_profiles/julia-baretto.jpg"
              alt="Image of Julia Baretto, happy client, pop star"
              class="w-16 h-16 rounded-full object-cover border-4 border-pink-200">
            <div>
              <p class="text-lg italic mb-2">“Charles debugged my life and deployed happiness. 10/10 would
                let him code
                my heart again!”</p>
              <footer class="font-semibold text-pink-700">– Julia Baretto</footer>
            </div>
          </div>
          <div class="bg-blue-50 rounded-2xl p-6 shadow flex items-center gap-4">
            <img src="assets/testimonial_profiles/liza-soberano.jpg"
              alt="Image of Liza Soberano, happy client, singer-songwriter"
              class="w-16 h-16 rounded-full object-cover border-4 border-blue-200">
            <div>
              <p class="text-lg italic mb-2">“Nyco fixed my WiFi and my mood. He's the only technician I
                want on speed
                dial!”</p>
              <footer class="font-semibold text-blue-700">– Liza Soberano</footer>
            </div>
          </div>
          <div class="bg-purple-50 rounded-2xl p-6 shadow flex items-center gap-4">
            <img src="assets/testimonial_profiles/kathryn-bernando.jpg"
              alt="Image of Kathryn Bernardo, happy client, actress"
              class="w-16 h-16 rounded-full object-cover border-4 border-purple-200">
            <div>
              <p class="text-lg italic mb-2">“Adam analyzed my love life and gave me a pie chart of
                happiness. Data
                never looked this good!”</p>
              <footer class="font-semibold text-purple-700">– Kathryn Bernardo</footer>
            </div>
          </div>
          <div class="bg-pink-50 rounded-2xl p-6 shadow flex items-center gap-4">
            <img src="assets/testimonial_profiles/main-mendoza.jpg"
              alt="Image of Maine Mendoza, happy client, TV personality"
              class="w-16 h-16 rounded-full object-cover border-4 border-pink-200">
            <div>
              <p class="text-lg italic mb-2">“Noe designed the perfect date and made my heart responsive.
                5 stars for
                his front-end charm!”</p>
              <footer class="font-semibold text-pink-700">– Maine Mendoza</footer>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Book a Bae Section -->
    <section class="py-16 bg-gradient-to-br from-blue-50 via-pink-50 to-purple-50" id="book">
      <div class="max-w-lg mx-auto px-4">
        <div class="text-center mb-8">
          <?php if (isset($_GET['success'])): ?>
          <script>
            alert("Thank you for booking a bae! We will contact you soon.");
          </script>
          <?php endif; ?>
          <h2 class="text-3xl font-bold text-blue-700 mb-4">Book a Bae Now</h2>
          <p class="text-gray-600">Fill out the form and we'll match you with your perfect companion. <span
              class="block text-xs text-pink-500 mt-1">Your info is safe with us! 💖</span></p>
        </div>
        <form action="handleBooking.php" method="POST" class="bg-white rounded-2xl shadow p-8 space-y-6"
          autocomplete="off">
          <div>
            <label for="fullname" class="block text-sm font-medium mb-1">Full Name</label>
            <input type="text" id="fullname" name="fullname" required
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"
              tabindex="1">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
            <input type="email" id="email" name="email" required
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"
              tabindex="2">
          </div>
          <div>
            <label for="boyfriend" class="block text-sm font-medium mb-1">Preferred Boyfriend</label>
            <select id="boyfriend" name="boyfriend" required
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"
              tabindex="3">
              <option value="">Select...</option>
              <option value="Charles">Charles</option>
              <option value="Darwin">Nyco</option>
              <option value="Ponto">Adam</option>
              <option value="Noe">Noe</option>
            </select>
          </div>
          <div>
            <label for="reason" class="block text-sm font-medium mb-1">Why are you booking?</label>
            <select id="reason" name="reason" required
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-purple-400"
              tabindex="4">
              <option value="">Select...</option>
              <option value="Event">Event</option>
              <option value="Movie Night">Movie Night</option>
              <option value="Just for Fun">Just for Fun</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div>
            <label for="message" class="block text-sm font-medium mb-1">Date/Message</label>
            <textarea id="message" name="message" rows="3" required
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400"
              tabindex="5"></textarea>
          </div>
          <button type="submit"
            class="w-full py-3 bg-pink-600 text-white rounded-full font-semibold shadow hover:bg-pink-700 transition"
            tabindex="6">Book Now</button>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t py-8 mt-12" id="footer">
      <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4">
        <nav class="mb-4 md:mb-0 space-x-6">
          <a href="#why" class="text-gray-600 hover:text-pink-600">About</a>
          <a href="#" class="text-gray-600 hover:text-pink-600">Privacy Policy</a>
          <a href="#book" class="text-gray-600 hover:text-pink-600">Contact</a>
        </nav>
        <div class="text-center md:text-right">
          <p class="text-gray-500 text-sm">© 2025 RentABae. All rights reserved.</p>
          <p class="text-xs text-pink-500 mt-1">Your trusted boyfriend rental service.</p>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>