<?php

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

<!--=====================================
   Footer Section
======================================-->
<footer
    class="relative lg:fixed lg:-z-10 bg-black bottom-0 w-full pt-20 sm:pt-24 md:pt-36 pb-24 lg:pb-48 overflow-hidden">
    <div class="container">
      <!-- Footer Content Grid -->
      <div
        class="flex flex-col sm:flex-row flex-wrap gap-y-10 sm:gap-y-16 justify-center sm:justify-between relative z-10">
        <!-- Reach Us Section -->
        <div class="pr-8 max-lg:basis-full">
          <h5 class="uppercase text-sm font-satoshi text-white tracking-[3px] mb-4 sm:mb-8 font-bold">
            Reach Us
          </h5>
          <p class="text-white text-sm max-md:font-semibold mb-5">
            Book a quick 15 min meeting where we discuss if our offer <br>
            would work for your case
          </p>
          <!-- Meeting Scheduler Card -->
          <div
            class="flex p-4 group bg-primary bg-opacity-30 gap-4 justify-between items-center backdrop-blur-2xl max-w-[360px]">
            <img class="h-[55px] w-auto" src="images/logo.svg" alt="logo">
            <div>
              <h6 class="text-sm font-satoshi text-white font-bold">
                Schedule a Free Meeting
              </h6>
              <p class="text-sm text-white">1 spot left this month</p>
            </div>
            <a href="contact.php">
              <figure class="bg-primary w-[55px] h-[55px] cursor-pointer relative overflow-hidden">
                <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                  class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
                <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                  class="absolute translate-y-12 -translate-x-4 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-x-[19px] group-hover:translate-y-5">
              </figure>
            </a>
          </div>
        </div>

        <!-- Resources Links -->
        <div>
          <h5 class="uppercase text-sm font-satoshi text-white tracking-[3px] mb-4 sm:mb-8 font-bold">
            Resources
          </h5>
          <ul>
            <li class="mb-4">
              <a href="blog.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Blog</a>
            </li>
            <li class="mb-4">
              <a href="blog-02.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Blog 02</a>
            </li>
            <li class="mb-4">
              <a href="project.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Projects</a>
            </li>
            <li class="mb-4">
              <a href="project-02.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Projects 02</a>
            </li>
            <li class="mb-4">
              <a href="project-03.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Projects 03</a>
            </li>
            <li class="mb-4">
              <a href="pricing.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Pricing</a>
            </li>
          </ul>
        </div>

        <!-- Company Links -->
        <div>
          <h5 class="uppercase text-sm font-satoshi text-white tracking-[3px] mb-4 sm:mb-8 font-bold">
            Company
          </h5>
          <ul>
            <li class="mb-4">
              <a href="about.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">About</a>
            </li>
            <li class="mb-4">
              <a href="about-02.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">About 02</a>
            </li>
            <li class="mb-4">
              <a href="faq.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">FAQ</a>
            </li>
            <li class="mb-4">
              <a href="contact.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Contact</a>
            </li>
            <li class="mb-4">
              <a href="terms.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Terms of
                Service</a>
            </li>
            <li class="mb-4">
              <a href="privacy-policy.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Privacy
                Policy</a>
            </li>
            <li class="mb-4">
              <a href="career.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Career</a>
            </li>
          </ul>
        </div>

        <!-- Important Links -->
        <div>
          <h5 class="uppercase text-sm font-satoshi text-white tracking-[3px] mb-4 sm:mb-8 font-bold">
            Important Link
          </h5>
          <ul>
            <li class="mb-4">
              <a href="career-02.php"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Career 02</a>
            </li>
            <li class="mb-4">
              <a href="<?php echo get_url('career-details'); ?>"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Career
                Details</a>
            </li>
            <li class="mb-4">
              <a href="<?php echo get_url('team'); ?>"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Team</a>
            </li>
            <li class="mb-4">
              <a href="<?php echo get_url('team-details'); ?>"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Team
                Details</a>
            </li>
            <li class="mb-4">
              <a href="<?php echo get_url('changelog'); ?>"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Changelog</a>
            </li>
            <li class="mb-4">
              <a href="<?php echo get_url('password-protected'); ?>"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">Password
                Protected</a>
            </li>
            <li class="mb-4">
              <a href="<?php echo get_url('404'); ?>"
                class="block text-white transition-colors duration-300 font-semibold hover:text-primary">404</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer Background Text -->
    <div class="absolute w-full bottom-0">
      <h5
        class="w-full bottom-0 absolute footer-text text-center font-satoshi font-extrabold text-4xl xs:text-5xl sm:text-6xl md:text-[88px] lg:text-[120px] xl:text-[150px] 2xl:text-[170px] tracking-widest text-nowrap translate-y-[30%] left-1/2 -translate-x-1/2">
        Orbizen Limited
      </h5>
    </div>
  </footer>


  <!-- Mark up for Script Section-->
  <script src="js/lib/imagesloaded.pkgd.min.js"></script>
  <script src="js/lib/gsap.min.js"></script>
  <script src="js/lib/ScrollTrigger.min.js"></script>
  <script src="js/lib/lenis.min.js"></script>
  <script src="js/lib/split-types.min.js"></script>
  <script src="js/lib/matter.min.js"></script>
  <script src="js/career-tabs.js"></script>
  <script src="js/lib/swiper.min.js"></script>
  <script src="js/lib/headroom.min.js"></script>
  <script src="js/lib/vanila-marquee.min.js"></script>
  <script src="js/script.js"></script>

  <!-- Footer scripts -->
  <script src="js/main.js"></script>
  
  <?php
  // Start session if not already started
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  
  // Handle exit preview request
  if (isset($_GET['exit_preview']) && $_GET['exit_preview'] == '1') {
    unset($_SESSION['og_preview_access']);
    // Redirect to the same page without query parameters
    $redirect_url = strtok($_SERVER['REQUEST_URI'], '?');
    header("Location: $redirect_url");
    exit;
  }
  
  // OG Preview tool access control
  // Show OG Preview tool only when the secret token is provided in URL
  $og_preview_token = 'samir212004'; // Change this to your own secret token
  $user_token = isset($_GET['preview_token']) ? $_GET['preview_token'] : '';
  
  if ($user_token === $og_preview_token) {
    $_SESSION['og_preview_access'] = true;
  }
  
  // Show preview if token is valid or session exists
  if ($user_token === $og_preview_token || (isset($_SESSION['og_preview_access']) && $_SESSION['og_preview_access'] === true)) {
    include ABSPATH . '/core/og-preview.php';
  }
  ?>
</body>

</html>