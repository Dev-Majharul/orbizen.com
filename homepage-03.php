<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited ';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Hero Section
======================================-->
<section class="pt-36 md:pt-[180px] lg:pt-[240px] relative pb-[850px] overflow-hidden z-10">
  <!-- Hero Image Container -->
  <div class="relative max-w-xs sm:max-w-[400px] md:max-w-[570px] h-[330px] mx-auto">
    <img src="images/homeV3-hero.webp" class="absolute left-0 top-0 w-full h-full object-cover zoom-image" alt="Hero image">
  </div>

  <!-- Overlapping Text Elements -->
  <h1 class="absolute top-56 md:top-60 lg:top-72 xl:top-96 right-4 lg:right-36 xl:right-60 text-5xl sm:text-7xl md:text-8xl lg:text-9xl xl:text-[156px] leading-[1.1] font-instrument font-normal italic">
    Agency
  </h1>
  <h2 class="absolute left-[20%] text-6xl sm:text-8xl md:text-[100px] lg:text-[140px] xl:text-[238px] leading-[1.1] mt-8">
    Rivor
  </h2>
</section>


<!--=====================================
   About Section with Gallery
======================================-->
<section class="pt-0 lg:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden -z-10 bg-backgroundBody dark:bg-dark">
  <div class="container">
    <!-- About Content and Subscription -->
    <div>
      <!-- About Text -->
      <h3 class="reveal-text-2 lg:text-5xl lg:leading-[1.5] text-secondary dark:text-backgroundBody">
        Orbizen Limited: Shaping the Future of Digital Innovation. We are dedicated
        to empowering blockchain pioneers and transforming the realm of digital
        ownership for today and beyond.
      </h3>

      <!-- Email Subscription Form -->

      <form class="max-md:max-w-sm max-w-[588px] mt-8 md:mt-10 flex bg-secondary border dark:border-dark text-white w-full relative reveal-me">
        <input type="email" placeholder="Your email here" class="border-none focus:outline-none bg-transparent placeholder:text-white dark:placeholder:text-colorText text-base block w-full p-5 md:p-[30px]">
        <button type="submit" class="inline-block max-md:text-xs bg-primary p-3 md:p-[26px] uppercase text-secondary font-poppins leading-[15.4px] tracking-[1.12px] absolute top-3 md:top-2 cursor-pointer right-2">
          Send
        </button>
      </form>
    </div>
  </div>
</section>


<!--=====================================
   Case Studies Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row gap-x-10 gap-y-4 justify-center lg:justify-between items-start md:items-end mb-10 md:mb-20">
      <!-- Title -->
      <h2 class="text-appear flex-1">
        <span class="font-instrument lg:text-[70px] italic">Recent</span>
        <br class="hidden md:block">
        Case Studies
      </h2>

      <!-- Description -->
      <div class="md:self-end flex-1">
        <p class="text-appear max-w-lg">
          When sharing recent case studies, focus on key aspects that highlight
          your agency's work and impact. Here's a simple structure to follow.
        </p>
      </div>
    </div>

    <!-- Case Studies Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-9">
      <!-- Case Study 1 - Staticmania -->
      <div class="reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/home-3/services-1.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Services Img">
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">Staticmania</h3>
          </div>
        </a>
      </div>

      <!-- Case Study 2 - Creative Studio -->
      <div class="md:mt-20 reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/home-3/services-2.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Services Img">
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">creative studio</h3>
          </div>
          <h3 class="mt-[30px] capitalize text-center"></h3>
        </a>
      </div>

      <!-- Case Study 3 - HealthTech -->
      <div class="reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/home-3/services-3.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Services Img">
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">HealthTech</h3>
          </div>
        </a>
      </div>

      <!-- Case Study 4 - BeautyForge -->
      <div class="md:mt-20 reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/home-3/services-4.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Services Img">
          </figure>
          <div class="blog-title mt-[30px] mb-2 text-center">
            <h3 class="capitalize text-center">BeautyForge</h3>
          </div>
        </a>
      </div>
    </div>

    <!-- Call-to-Action Button -->
    <ul class="flex justify-center mt-[60px] reveal-me">
      <li class="block md:inline-block w-[90%] mx-auto md:w-auto">
        <a href="project.php" class="rv-button rv-button-secondary block md:inline-block">
          <div class="rv-button-top !text-center">
            <span>See all projects</span>
          </div>
          <div class="rv-button-bottom !text-center">
            <span>See all projects</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>


<!--=====================================
   Services Accordion Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="absolute scale-y-[3.8] sm:scale-y-[3.3] md:scale-y-[3.2] lg:scale-y-[2.4] xl:scale-y-[1.2] scale-x-[2.7] xl:scale-x-[2.4] left-1/2 top-[47%] lg:top-[45%] -translate-y-[45%] -translate-x-1/2">
    <img src="images/services-gradient-bg-2.webp" alt="gradient-bg">
  </div>
  <div class="container">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row gap-y-2 gap-x-10 justify-center lg:justify-between items-start mb-10 md:mb-20 container">
      <div class="flex-1">
        <h2 class="text-appear max-lg:leading-[1.33]">
          <span class="font-instrument lg:text-[65px] italic">Cool</span>

          services
        </h2>
      </div>
      <div class="md:self-end flex-1">
        <p class="text-appear max-w-lg">
          For a comprehensive services section, outline your offerings in a
          clear and organized manner. Here’s a general template you can use.
        </p>
      </div>
    </div>

    <!-- Accordion Container -->
    <div class="max-w-[1170px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me">
      <div class="accordion-item overflow-hidden bg-dark border border-dark duration-300">
        <div class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group">
          <h3 class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl md:font-medium font-normal leading-[25.2px] md:leading-[1.2] text-white">
            <span class="text-inherit"> UX & Research </span>
            <span class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]">
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300">
                <path d="M5 16H27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
        </div>
        <div class="accordion-body px-10 duration-300 h-0 flex justify-start gap-14 md:ml-5">
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
      <div class="accordion-item overflow-hidden bg-dark border border-dark duration-300">
        <div class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group">
          <h3 class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl md:font-medium font-normal leading-[25.2px] md:leading-[1.2] text-white">
            <span class="text-inherit"> Web Development </span>
            <span class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]">
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300">
                <path d="M5 16H27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
        </div>
        <div class="accordion-body px-10 duration-300 h-0 flex justify-start gap-14 md:ml-5">
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
      <div class="accordion-item overflow-hidden bg-dark border border-dark duration-300">
        <div class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group">
          <h3 class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl md:font-medium font-normal leading-[25.2px] md:leading-[1.2] text-white">
            <span class="text-inherit"> Web Design </span>
            <span class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]">
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300">
                <path d="M5 16H27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
        </div>
        <div class="accordion-body px-10 duration-300 h-0 flex justify-start gap-14 md:ml-5">
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
      <div class="accordion-item overflow-hidden bg-dark border border-dark duration-300">
        <div class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group">
          <h3 class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl lg:font-medium font-normal leading-[25.2px] lg:leading-[1.2] text-white">
            <span class="text-inherit"> Wordpress </span>
            <span class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]">
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300">
                <path d="M5 16H27" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
        </div>
        <div class="accordion-body px-10 duration-300 faq-body-transition h-0 flex justify-start gap-14 md:ml-5">
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              User Research & Market Analysis
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Prototyping
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Concept Ideation
            </li>
            <li class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]">
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Featured Insights Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] z-20">
  <div class="container">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row gap-y-4 gap-x-10 justify-center lg:justify-between items-start sm:items-center md:items-end mb-10 md:mb-20">
      <h2 class="text-appear flex-1">
        <span class="font-instrument lg:text-[70px] italic">Insights</span>
        <br class="hidden md:block">
        & Stories
      </h2>

      <div class="lg:self-end flex-1">
        <p class="text-appear max-w-lg">
          Deep dives into emerging technologies, design trends, and digital
          transformation strategies.
        </p>
      </div>
    </div>

    <!-- Blog Posts Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center items-center lg:items-start gap-6 max-lg:gap-y-10">
      <!-- Blog Post 1 -->
      <div class="reveal-me md:max-w-[355px] group">
        <a href="blog-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img src="images/blog-img/homeV3-img-1.webp" alt="AI in Design" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>
          <div class="rv-badge mt-7">
            <span class="rv-badge-text">Artificial Intelligence</span>
          </div>
          <div class="blog-title mt-5 mb-[30px]">
            <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
              The Rise of AI-Powered Design Tools...
            </h3>
          </div>

          <a href="blog-details.php" class="rv-button rv-button-primary2">
            <div class="rv-button-top !text-center flex items-center">
              <span class="pr-1">5 minute read</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center flex items-center">
              <span class="pr-1">5 minute read</span>
              <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
            </div>
          </a>
        
      </div>

      <!-- Blog Post 2 -->
      <div class="reveal-me md:max-w-[355px] group">
        <a href="blog-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img src="images/blog-img/homeV3-img-2.webp" alt="Web Development" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>
          <div class="rv-badge mt-7">
            <span class="rv-badge-text">Web Development</span>
          </div>
          <div class="blog-title mt-5 mb-[30px]">
            <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
              Next-Gen Frontend Technologies...
            </h3>
          </div>

          <a href="blog-details.php" class="rv-button rv-button-primary2">
            <div class="rv-button-top !text-center flex items-center">
              <span class="pr-1">4 minute read</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center flex items-center">
              <span class="pr-1">4 minute read</span>
              <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
            </div>
          </a>
        
      </div>

      <!-- Blog Post 3 -->
      <div class="reveal-me md:max-w-[355px] group">
        <a href="blog-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img src="images/blog-img/homeV3-img-3.webp" alt="Digital Experience" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>
          <div class="rv-badge mt-7">
            <span class="rv-badge-text">Digital Experience</span>
          </div>
          <div class="blog-title mt-5 mb-[30px]">
            <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
              Creating Immersive Digital Experiences...
            </h3>
          </div>

          <a href="blog-details.php" class="rv-button rv-button-primary2">
            <div class="rv-button-top !text-center flex items-center">
              <span class="pr-1">6 minute read</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center flex items-center">
              <span class="pr-1">6 minute read</span>
              <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
            </div>
          </a>
        
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Clients Section
======================================-->
<section class="bg-dark py-20 lg:py-[120px] dark:py-0 dark:lg:py-0 mt-14 md:mt-16 lg:mt-[88px] xl:mt-[100px] mb-14 md:mb-16 lg:mb-[88px] xl:mb-[100px] relative overflow-hidden">
  <div class="container">
    <div class="flex flex-col md:flex-row gap-x-10 gap-y-3 justify-center md:justify-between items-start md:items-end mb-10 md:mb-20">
      <h2 class="text-appear text-backgroundBody block md:hidden flex-1">
        <span class="font-instrument italic">Have</span>

        Trust in us
      </h2>
      <h2 class="text-appear text-backgroundBody hidden md:block flex-1">
        <span class="font-instrument lg:text-[70px] italic">Have</span>
        <br>
        Trust in us
      </h2>

      <div class="md:self-end flex-1">
        <p class="text-appear max-w-lg">
          Our agency is your gateway to discovering extraordinary artworks that
          resonate with your aesthetic sensibilities.
        </p>
      </div>
    </div>
  </div>
  <!-- Clients Logo Marquee -->
  <div class="marquee-container reveal-me">
    <div class="flex items-center gap-32 justify-between py-8">
      <div class="min-w-[190px] flex justify-center ml-32">
        <img src="images/icons/company/client-1.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-4.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-5.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-1.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo">
      </div>
    </div>
  </div>

  <!-- Reverse -->
  <div class="marquee-reverse-container reveal-me">
    <div class="flex items-center gap-32 justify-between py-8">
      <div class="min-w-[190px] flex justify-center ml-32">
        <img src="images/icons/company/client-1.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-4.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-5.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-1.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo">
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo">
      </div>
    </div>
  </div>

  <div class="container pt-16 lg:pt-20 pb-6 lg:pb-10 reveal-me">
    <div class="user-swiper swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="bg-dark border border-dark p-10 flex gap-3">
            <div class="hidden md:block flex-grow-0">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8286 6V16.9714C21.3264 16.9714 16.9186 17.1793 16.9184 27.1958V32.4H27.6V54H6V32.4V27.1958C6 19.3208 8.03795 13.4729 12.4905 9.81413C15.5705 7.28323 19.2195 6 23.8286 6ZM50.229 6V16.9714C47.7268 16.9714 43.319 17.1793 43.3187 27.1958V32.4H54.0004V54H32.4004V32.4V27.1958C32.4004 19.3208 34.4383 13.4729 38.8909 9.81413C41.9709 7.28323 45.6199 6 50.229 6Z" fill="white" fill-opacity="0.1"></path>
                </svg>
              </span>
            </div>
            <div class="flex-1">
              <p class="text-base md:text-xl italic md:leading-[1.5] mb-[30px] text-backgroundBody/70">
                The skeleton plan of a website can be broken down into three
                components
              </p>
              <h3 class="text-xl md:text-[30px] md:leading-9 mb-10 text-backgroundBody">
                Exceptional materials. The most durable glass ever in a <br>
                smartphone. A beautiful new gold finish, achieved with an
                atomic-level.
              </h3>
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                  <img src="images/avatar/review-5.webp" alt="Avatar Img">
                  <div>
                    <h4 class="text-lg md:text-2xl md:leading-[1.2] text-backgroundBody">
                      Kathryn Murphy
                    </h4>
                    <p class="text-sm font-poppins leading-5 font-light text-backgroundBody/70">
                      CEO at Vercel
                    </p>
                  </div>
                </div>
                <div class="self-end max-xs:hidden">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M36.1714 54L36.1714 43.0286C38.6736 43.0286 43.0814 42.8207 43.0816 32.8042L43.0816 27.6L32.4 27.6L32.4 6L54 6L54 27.6L54 32.8042C54 40.6792 51.9621 46.5271 47.5095 50.1859C44.4295 52.7168 40.7805 54 36.1714 54ZM9.77104 54L9.77104 43.0286C12.2732 43.0286 16.681 42.8207 16.6812 32.8042L16.6812 27.6L5.99961 27.6L5.99961 6L27.5996 6L27.5996 27.6L27.5996 32.8042C27.5996 40.6792 25.5617 46.5271 21.1091 50.1859C18.0291 52.7168 14.3801 54 9.77104 54Z" fill="white" fill-opacity="0.1"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-dark border border-dark p-10 flex gap-3">
            <div class="hidden md:block flex-grow-0">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8286 6V16.9714C21.3264 16.9714 16.9186 17.1793 16.9184 27.1958V32.4H27.6V54H6V32.4V27.1958C6 19.3208 8.03795 13.4729 12.4905 9.81413C15.5705 7.28323 19.2195 6 23.8286 6ZM50.229 6V16.9714C47.7268 16.9714 43.319 17.1793 43.3187 27.1958V32.4H54.0004V54H32.4004V32.4V27.1958C32.4004 19.3208 34.4383 13.4729 38.8909 9.81413C41.9709 7.28323 45.6199 6 50.229 6Z" fill="white" fill-opacity="0.1"></path>
                </svg>
              </span>
            </div>
            <div class="flex-1">
              <p class="text-base md:text-xl italic md:leading-[1.5] mb-[30px] text-backgroundBody/70">
                The skeleton plan of a website can be broken down into three
                components
              </p>
              <h3 class="text-xl md:text-[30px] md:leading-9 mb-10 text-backgroundBody">
                Exceptional materials. The most durable glass ever in a <br>
                smartphone. A beautiful new gold finish, achieved with an
                atomic-level.
              </h3>
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                  <img src="images/avatar/review-2.webp" alt="Avatar Img">
                  <div>
                    <h4 class="text-lg md:text-2xl md:leading-[1.2] text-backgroundBody">
                      John Deo
                    </h4>
                    <p class="text-sm font-poppins leading-5 font-light text-backgroundBody/70">
                      CEO at W3School
                    </p>
                  </div>
                </div>
                <div class="self-end max-xs:hidden">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M36.1714 54L36.1714 43.0286C38.6736 43.0286 43.0814 42.8207 43.0816 32.8042L43.0816 27.6L32.4 27.6L32.4 6L54 6L54 27.6L54 32.8042C54 40.6792 51.9621 46.5271 47.5095 50.1859C44.4295 52.7168 40.7805 54 36.1714 54ZM9.77104 54L9.77104 43.0286C12.2732 43.0286 16.681 42.8207 16.6812 32.8042L16.6812 27.6L5.99961 27.6L5.99961 6L27.5996 6L27.5996 27.6L27.5996 32.8042C27.5996 40.6792 25.5617 46.5271 21.1091 50.1859C18.0291 52.7168 14.3801 54 9.77104 54Z" fill="white" fill-opacity="0.1"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="bg-dark border border-dark p-10 flex gap-3">
            <div class="hidden md:block flex-grow-0">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M23.8286 6V16.9714C21.3264 16.9714 16.9186 17.1793 16.9184 27.1958V32.4H27.6V54H6V32.4V27.1958C6 19.3208 8.03795 13.4729 12.4905 9.81413C15.5705 7.28323 19.2195 6 23.8286 6ZM50.229 6V16.9714C47.7268 16.9714 43.319 17.1793 43.3187 27.1958V32.4H54.0004V54H32.4004V32.4V27.1958C32.4004 19.3208 34.4383 13.4729 38.8909 9.81413C41.9709 7.28323 45.6199 6 50.229 6Z" fill="white" fill-opacity="0.1"></path>
                </svg>
              </span>
            </div>
            <div class="flex-1">
              <p class="text-base md:text-xl italic md:leading-[1.5] mb-[30px] text-backgroundBody/70">
                The skeleton plan of a website can be broken down into three
                components
              </p>
              <h3 class="text-xl md:text-[30px] md:leading-9 mb-10 text-backgroundBody">
                Exceptional materials. The most durable glass ever in a <br>
                smartphone. A beautiful new gold finish, achieved with an
                atomic-level.
              </h3>
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                  <img src="images/avatar/review-8.webp" alt="Avatar Img">
                  <div>
                    <h4 class="text-lg md:text-2xl md:leading-[1.2] text-backgroundBody">
                      Zaks Addison
                    </h4>
                    <p class="text-sm font-poppins leading-5 font-light text-backgroundBody/70">
                      Manager, Operations at Wacomm
                    </p>
                  </div>
                </div>
                <div class="self-end max-xs:hidden">
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewbox="0 0 60 60" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M36.1714 54L36.1714 43.0286C38.6736 43.0286 43.0814 42.8207 43.0816 32.8042L43.0816 27.6L32.4 27.6L32.4 6L54 6L54 27.6L54 32.8042C54 40.6792 51.9621 46.5271 47.5095 50.1859C44.4295 52.7168 40.7805 54 36.1714 54ZM9.77104 54L9.77104 43.0286C12.2732 43.0286 16.681 42.8207 16.6812 32.8042L16.6812 27.6L5.99961 27.6L5.99961 6L27.5996 6L27.5996 27.6L27.5996 32.8042C27.5996 40.6792 25.5617 46.5271 21.1091 50.1859C18.0291 52.7168 14.3801 54 9.77104 54Z" fill="white" fill-opacity="0.1"></path>
                    </svg>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   FAQ Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <!-- Section Heading and Description -->
    <div class="flex flex-col md:flex-row gap-x-10 gap-y-5 justify-center lg:justify-between max-md:items-start md:items-end mb-10 lg:mb-20">
      <!-- Section Heading -->
      <div class="flex-1">
        <h2 class="text-appear block md:hidden">
          <span class="font-instrument italic">People</span>
          Asked Us
        </h2>
        <h2 class="text-appear md:block hidden">
          <span class="font-instrument lg:text-[70px] italic">People</span>
          <br>
          Asked Us
        </h2>
      </div>
      <!-- Section Description -->
      <div class="md:self-end flex-1">
        <p class="text-appear max-w-lg">
          When detailing testimonials, include key elements that provide context
          and authenticity.
        </p>
      </div>
    </div>

    <!-- FAQ Accordion Items -->
    <div class="w-full mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] items-start">
      <div class="space-y-[30px]">
        <!-- FAQ Item 1 -->
        <div class="reveal-me">
          <div class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6">
            <div class="accordion-headerV4 cursor-pointer">
              <h3 class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]">
                What does it cost to work with you?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
        <!-- FAQ Item 2 -->
        <div class="reveal-me">
          <div class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6">
            <div class="accordion-headerV4 cursor-pointer">
              <h3 class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]">
                Whats your return policy?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
      </div>

      <div class="space-y-[30px]">
        <!-- FAQ Item 3 -->
        <div class="reveal-me">
          <div class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6">
            <div class="accordion-headerV4 cursor-pointer">
              <h3 class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]">
                How do I make a warranty claim?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
        <!-- FAQ Item 4 -->
        <div class="reveal-me">
          <div class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6">
            <div class="accordion-headerV4 cursor-pointer">
              <h3 class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]">
                Do I have to pay customs fees or duty on my package?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
      </div>

      <div class="space-y-[30px]">
        <!-- FAQ Item 5 -->
        <div class="reveal-me">
          <div class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6">
            <div class="accordion-headerV4 cursor-pointer">
              <h3 class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]">
                Where can I change or cancel my order?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
        <!-- FAQ Item 6 -->
        <div class="reveal-me">
          <div class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6">
            <div class="accordion-headerV4 cursor-pointer">
              <h3 class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]">
                How do I make a warranty claim?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   CTA Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-[70px] lg:pb-[140px] relative">
  <div class="container">
    <!-- CTA Heading -->
    <h2 class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">
      Let's chat!
      <div class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-5 translate-y-2 sm:translate-y-[20px] max-sm:mt-2.5">
        <div class="cta-inline-slider">
          <div class="slide">
            <img src="images/agent/01.webp" alt="Slide 1">
          </div>
          <div class="slide">
            <img src="images/agent/02.webp" alt="Slide 2">
          </div>
          <div class="slide">
            <img src="images/agent/03.webp" alt="Slide 3">
          </div>
        </div>
      </div>
      with us.

      <span class="font-instrument sm:mt-10 italic block max-md:inline-block">A virtual coffee?</span>
    </h2>

    <!-- Email Subscription Form -->
    <form class="max-md:max-w-sm max-w-[570px] mt-8 md:mt-10 flex bg-secondary text-white mx-auto w-full relative">
      <input type="email" placeholder="hello@email.com" class="border-none focus:outline-none bg-transparent text-base block w-full p-5 md:p-7">
      <button type="submit" class="inline-block bg-primary p-3 md:p-6 uppercase text-secondary max-md:text-xs md:leading-[15.4px] md:tracking-[1.12px] absolute top-3 md:top-2 cursor-pointer right-3 md:right-2">
        Subscribe
      </button>
    </form>
  </div>
</section>

</main>

<?php
  get_template('footer');
  ?>
