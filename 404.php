﻿<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited ';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
?>

  <!-- Cursor Pointer -->
  <div class="pointer"></div>

<!-- Dark Mode toggle -->
<div class="toggle-button fixed right-10 bottom-10 z-[1000]">
  <button
    id="theme-toggle"
    type="button"
    class="text-secondary bg-black/90 dark:bg-white/90 rounded-[1px] backdrop-blur-xl dark:text-white focus:outline-none focus:ring-0 focus:ring-gray-200 w-[44px] h-[44px] flex justify-center items-center"
  >
    <svg
      data-testid="geist-icon"
      id="theme-toggle-dark-icon"
      class="hidden w-5 h-5"
      fill="#fff"
      stroke-linejoin="round"
      viewBox="0 0 16 16"
    >
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M10.5 0.25V1V1.5H11L11.75 1.5V3H11H10.5V3.5V4.25H9V3.5V3H8.5H7.75V1.5H8.5H9V1V0.25H10.5ZM3.25514 2.75496C2.33413 3.53491 1.75 4.69972 1.75 6C1.75 8.34721 3.65279 10.25 6 10.25C7.30029 10.25 8.4651 9.66587 9.24505 8.74485C9.16377 8.74827 9.08207 8.74999 9 8.74999C5.82436 8.74999 3.25 6.17563 3.25 2.99999C3.25 2.91792 3.25172 2.83623 3.25514 2.75496ZM0.25 6C0.25 3.51072 1.83142 1.39271 4.042 0.592193L5.00256 1.55275C4.83933 2.00347 4.75 2.49047 4.75 2.99999C4.75 5.3472 6.65279 7.24999 9 7.24999C9.50953 7.24999 9.99653 7.16065 10.4473 6.99743L11.4078 7.95798C10.6073 10.1686 8.48929 11.75 6 11.75C2.82436 11.75 0.25 9.17564 0.25 6Z"
        fill="#fff"
        transform="translate(2.25, 2.25)"
      ></path>
    </svg>
    <svg
      id="theme-toggle-light-icon"
      class="hidden w-5 h-5"
      fill="#000"
      viewBox="0 0 16 16"
      data-testid="geist-icon"
      stroke-linejoin="round"
    >
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M7.75 1V0.25H6.25V1V1.25V2H7.75V1.25V1ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9ZM7 10.5C8.933 10.5 10.5 8.933 10.5 7C10.5 5.067 8.933 3.5 7 3.5C5.067 3.5 3.5 5.067 3.5 7C3.5 8.933 5.067 10.5 7 10.5ZM7.75 12V12.75V13V13.75H6.25V13V12.75V12H7.75ZM12 6.25H12.75H13H13.75V7.75H13H12.75H12V6.25ZM1 6.25H0.25V7.75H1H1.25H2V6.25H1.25H1ZM10.0052 2.93414L10.5355 2.40381L10.7123 2.22703L11.2426 1.6967L12.3033 2.75736L11.773 3.28769L11.5962 3.46447L11.0659 3.9948L10.0052 2.93414ZM2.22703 10.7123L1.6967 11.2426L2.75736 12.3033L3.28769 11.773L3.46447 11.5962L3.9948 11.0659L2.93414 10.0052L2.40381 10.5355L2.22703 10.7123ZM2.93414 3.9948L2.40381 3.46447L2.22703 3.28769L1.6967 2.75736L2.75736 1.6967L3.28769 2.22703L3.46447 2.40381L3.9948 2.93414L2.93414 3.9948ZM10.7123 11.773L11.2426 12.3033L12.3033 11.2426L11.773 10.7123L11.5962 10.5355L11.0659 10.0052L10.0052 11.0659L10.5355 11.5962L10.7123 11.773Z"
        fill="#000"
        transform="translate(1.25, 1.25)"
      ></path>
    </svg>
  </button>
</div>


<main class="relative z-10 bg-backgroundBody dark:bg-dark">
<!--=========================
    404 Error Page Section
==========================-->
<section class="pt-36 md:pt-12 lg:pt-0 2xl:pt-12 h-screen relative overflow-hidden">
  <div class="container">
    <!-- Gradient Background Wrapper -->
    <div id="hero-gradient-wrapper" class="absolute w-[80%] lg:w-full h-[80%] lg:h-full top-[35%] left-1/2 -translate-y-[35%] -translate-x-1/2 -z-10 blur-[60px]">
      <img src="images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient" class="absolute left-1/2 top-0 -translate-x-1/2 -translate-y-0">
    </div>

    <!-- Main Content -->
    <div class="flex flex-col justify-center items-center reveal-me">
      <!-- 404 Title -->
      <h1 class="text-[180px] md:text-[490px] md:leading-[1.05] font-instrument">
        404
      </h1>

      <!-- Error Message -->
      <h2 class="mt-8 mb-8 md:mb-[50px] text-[36px] max-lg:leading-[1.33] lg:text-[87px] font-normal leading-[1.1] lg:tracking-[-2.83px]">
        Page not Found
      </h2>

      <!-- Back to Homepage Button -->
      <a href="index.htm" class="rv-button rv-button-primary">
        <div class="rv-button-top !text-center">
          <span>Back to Homepage</span>
        </div>
        <div class="rv-button-bottom !text-center">
          <span>Back to Homepage</span>
        </div>
      </a>
    </div>
  </div>
</section>

</main>

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
</body>

</html>