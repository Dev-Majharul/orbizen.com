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
<section class="pt-[137px] md:pt-[180px] lg:pt-[150px] pb-14 md:pb-[100px] lg:pb-[120px] relative overflow-hidden">
  <!-- Gradient Background Effect -->
  <div id="hero-gradient-wrapper" class="absolute w-full h-fw-full top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] scale-90">
    <img src="images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
  </div>

  <!-- Hero Content -->
  <div class="container reveal-me">
    <!-- Top Label -->
    <p class="flex justify-center lg:justify-start items-center gap-5 font-poppins text-sm font-normal leading-6 tracking-[3px] uppercase">
      <span>Design Agency</span>
      <span class="inline-block w-[150px] h-[1px] bg-dark dark:bg-[#ffffffb3]"></span>
      <span>Rivor</span>
    </p>

    <!-- Hero Heading -->
    <h1 class="mt-5 sm:mt-10">
      Transforming Ideas into Digital
      <i class="font-instrument">Masterpieces</i> that Drive
      <i class="font-instrument">Success</i>
    </h1>
  </div>
</section>


<!--=====================================
  Promo Video Section
======================================-->
<section class="video-section reveal-me relative overflow-hidden">
  <!-- Video Wrapper -->
  <div class="w-full h-fit video-wrapper scale-50 origin-top">
    <!-- Autoplay Muted Looping Promo Video -->
    <video class="w-full h-full" autoplay="" muted="" loop="">
      <source src="images/promo.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</section>


<!--=====================================
   Company Showcase Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[120px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <!-- Section Heading -->
    <h3 class="reveal-text-2 pb-10 sm:pb-20 reveal-me">
      We provide customized solutions for enhancing your existing site or
      building a brand-new digital platform from the ground up.
    </h3>

    <!-- Circular Logo Element -->
    <div class="relative w-[168px] h-[168px] bg-secondary dark:bg-white rounded-[50%] flex items-center justify-center mx-auto reveal-me">
      <figure>
        <img src="images/icons/text-circle-logo.png" alt="text-circle-logo" class="inline dark:hidden">
        <img src="images/icons/text-circle-dark-logo.png" alt="text-circle-logo" class="hidden dark:inline">
      </figure>
      <div class="text">
        <p>Building Brands,and Creating Impact</p>
      </div>
    </div>

    <!-- Counter and Companies Showcase -->
    <div class="pt-14 sm:pt-[70px] md:pt-[100px]">
      <!-- Marquee Companies Logo Slider -->
      <div class="w-full overflow-hidden relative reveal-me">
        <!-- Gradient Overlays -->
        <div class="absolute left-0 top-0 h-full w-20 bg-gradient-to-r from-white to-transparent dark:from-dark-gradient z-10"></div>
        <div class="absolute right-0 top-0 h-full w-20 bg-gradient-to-l from-white to-transparent dark:from-dark-gradient z-10"></div>

        <!-- Infinite Marquee Wrapper -->
        <div class="flex whitespace-nowrap">
          <!-- First Set of Logos -->
          <div class="flex animate-marquee items-center justify-center shrink-0 gap-24 px-12">
            <img src="images/icons/company/company-1.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-1.svg" alt="Company Logo" class="h-10 dark:inline hidden">
            <img src="images/icons/company/company-2.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-2.svg" alt="Company Logo" class="h-10 dark:inline hidden">
            <img src="images/icons/company/company-3.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-3.svg" alt="Company Logo" class="h-10 dark:inline hidden">
            <img src="images/icons/company/company-4.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-4.svg" alt="Company Logo" class="h-10 dark:inline hidden">
          </div>

          <!-- Duplicate Set for Infinite Scroll -->
          <div class="flex animate-marquee items-center justify-center shrink-0 gap-24 px-12">
            <img src="images/icons/company/company-1.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-1.svg" alt="Company Logo" class="h-10 dark:inline hidden">
            <img src="images/icons/company/company-2.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-2.svg" alt="Company Logo" class="h-10 dark:inline hidden">
            <img src="images/icons/company/company-3.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-3.svg" alt="Company Logo" class="h-10 dark:inline hidden">
            <img src="images/icons/company/company-4.svg" alt="Company Logo" class="h-10 inline dark:hidden">
            <img src="images/icons/company/company-dark-4.svg" alt="Company Logo" class="h-10 dark:inline hidden">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Projects Showcase Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <!-- Projects Grid Container -->
  <div class="container grid gap-10 max-md:gap-y-12 md:grid-cols-2">
    <!-- Project 1 - User Experience -->
    <div class="col-span-full reveal-me group">
      <a href="project-details-02.php" class="max-md:w-full">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect">
          <figure class="w-full md:w-[42%] overflow-hidden">
            <img src="images/services-2/services-1.png" alt="Epicurean Elegance" class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>

          <div class="flex-1 md:mt-14">
            <!-- Project Category -->
            <p class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]">
              User Experience
            </p>
            <!-- Project Title -->
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3 class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]">
                Project Nexus
              </h3>
            </div>
            <!-- Project Year -->
            <p class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]">
              /2024
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Project 2 - E-commerce (Reversed Layout) -->
    <div class="col-span-full md:justify-self-end reveal-me group">
      <a href="project-details-02.php" class="w-full">
        <div class="flex flex-col md:flex-row-reverse items-end md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect">
          <figure class="w-full overflow-hidden md:w-[31%]">
            <img src="images/services-2/services-2.png" alt="Artistry in Motion" class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>
          <div class="md:mt-9 text-right">
            <p class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]">
              E-commerce
            </p>
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3 class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]">
                E-Shop Revolution
              </h3>
            </div>
            <p class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]">
              /2023
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Project 3 - Identity Transformation -->

    <div class="col-span-full reveal-me group">
      <a href="project-details-02.php" class="max-md:w-full">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect">
          <figure class="w-full md:w-[42%] overflow-hidden">
            <img src="images/services-2/services-3.png" alt="Epicurean Elegance" class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>

          <div class="flex-1 md:mt-14">
            <!-- Project Category -->
            <p class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]">
              Identity Transformation
            </p>
            <!-- Project Title -->
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3 class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]">
                BrandPulse
              </h3>
            </div>
            <!-- Project Year -->
            <p class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]">
              /2022
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Project 4 - Mobile Solutions (Reversed Layout) -->

    <div class="col-span-full md:justify-self-end reveal-me group">
      <a href="project-details-02.php" class="w-full">
        <div class="flex flex-col md:flex-row-reverse items-end md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect">
          <figure class="w-full overflow-hidden md:w-[61%]">
            <img src="images/services-2/services-4.png" alt="Artistry in Motion" class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>
          <div class="md:mt-9 text-right">
            <p class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]">
              E-commerce
            </p>
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3 class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]">
                Mobile App
              </h3>
            </div>
            <p class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]">
              /2021
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- See All Projects Button -->

  <ul class="flex justify-center mt-[60px] reveal-me">
    <li class="block md:inline-block w-[90%] mx-auto md:w-auto">
      <a href="project.php" class="rv-button rv-button-primary2 block md:inline-block">
        <div class="rv-button-top !text-center">
          <span>See all projects</span>
        </div>
        <div class="rv-button-bottom !text-center">
          <span>See all projects</span>
        </div>
      </a>
    </li>
  </ul>
</section>


<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Clients Logo Marquee -->
  <div class="marquee-container reveal-me">
    <div class="flex items-center justify-between py-2.5 pb-5">
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Creative Development
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Visual Design
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Creative Development
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Visual Design
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Creative Development
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Visual Design
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
    </div>
  </div>

  <!-- Reverse -->
  <div class="marquee-reverse-container reveal-me border-t dark:border-dark">
    <div class="flex items-center justify-between py-2.5">
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Since 1993
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Based in New York
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Award-Winning Agency
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Since 1993
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
          Based in New York
        </span>
        <span class="mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewbox="0 0 40 40" fill="none">
            <path d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z" class="fill-black dark:fill-white"></path>
          </svg>
        </span>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Blog Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row gap-x-10 gap-4 justify-center lg:justify-start items-start sm:items-center md:items-start mb-16 lg:mb-24">
      <!-- Title -->
      <div class="flex-1 md:self-start">
        <h2 class="text-appear lg:text-[70px]">
          <span class="font-instrument italic"> Knowledge</span>
          <br class="hidden md:block">
          We impart
        </h2>
      </div>
      <!-- Description -->
      <div class="flex-1 md:self-end">
        <p class="text-appear dark:text-colorText max-w-lg">
          We champion athletes, storytellers, and brands that shape culture and
          inspire the world with their unique perspectives.
        </p>
      </div>
    </div>

    <!-- Blog Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-10 gap-6 justify-items-center items-stretch reveal-me">
      <!-- Blog Card - Embodiment -->
      <div class="flex flex-col w-full max-w-[370px] mx-auto group">
        <a href="blog-details.php" class="flex flex-col">
          <!-- Blog Image with Hover Effect -->
          <figure class="aspect-[370/399] overflow-hidden mb-6">
            <img src="images/blog-img/blog-img-8.png" alt="Blog Images" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>

          <!-- Blog Content -->
          <div>
            <div class="blog-title">
              <h3 class="text-[27px] md:text-3xl lg:text-4xl leading-tight tracking-tight">
                Embodiment
              </h3>
            </div>

            <p class="text-lg leading-[1.4] tracking-[0.4px] font-poppins font-normal mt-3 md:mt-5 mb-5 md:mb-10">
              Could you clarify what you'd like to know or discuss regarding It
              can refer to various concepts like representation.
            </p>

            <!-- Read More Button -->
            <a href="blog-details.php" class="rv-button rv-button-primary2">
              <div class="rv-button-top !text-center">
                <span class="mr-1">3 minute read</span>
                <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
                <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
              </div>
              <div class="rv-button-bottom !text-center">
                <span class="mr-1">3 minute read</span>
                <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              </div>
            </a>
          </div>
        </a>
      </div>

      <!-- Blog Card - Solutions & Skills -->
      <div class="flex flex-col w-full max-w-[370px] mx-auto group">
        <a href="blog-details.php" class="flex flex-col">
          <!-- Blog Image with Hover Effect -->
          <figure class="aspect-[370/399] overflow-hidden mb-6">
            <img src="images/blog-img/blog-img-9.png" alt="Blog Images" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>

          <!-- Blog Content -->
          <div>
            <div class="blog-title">
              <h3 class="text-[27px] md:text-3xl lg:text-4xl leading-tight tracking-tight">
                Solutions & Skills
              </h3>
            </div>

            <p class="text-lg leading-[1.4] tracking-[0.4px] font-poppins font-normal mt-3 md:mt-5 mb-5 md:mb-10">
              Could you clarify what you'd like to know or discuss regarding It
              can refer to various concepts like representation.
            </p>

            <!-- Read More Button -->
            <a href="blog-details.php" class="rv-button rv-button-primary2">
              <div class="rv-button-top !text-center">
                <span class="mr-1">3 minute read</span>
                <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
                <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
              </div>
              <div class="rv-button-bottom !text-center">
                <span class="mr-1">3 minute read</span>
                <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              </div>
            </a>
          </div>
        </a>
      </div>

      <!-- Blog Card - Our Expertise -->
      <div class="flex flex-col w-full max-w-[370px] mx-auto group">
        <a href="blog-details.php" class="flex flex-col">
          <!-- Blog Image with Hover Effect -->
          <figure class="aspect-[370/399] overflow-hidden mb-6">
            <img src="images/blog-img/blog-img-10.png" alt="Blog Images" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-125 group-hover:rotate-3">
          </figure>

          <!-- Blog Content -->
          <div>
            <div class="blog-title">
              <h3 class="text-[27px] md:text-3xl lg:text-4xl leading-tight tracking-tight">
                Our Expertise
              </h3>
            </div>

            <p class="text-lg leading-[1.4] tracking-[0.4px] font-poppins font-normal mt-3 md:mt-5 mb-5 md:mb-10">
              Could you clarify what you'd like to know or discuss regarding It
              can refer to various concepts like representation.
            </p>

            <!-- Read More Button -->
            <a href="blog-details.php" class="rv-button rv-button-primary2">
              <div class="rv-button-top !text-center">
                <span class="mr-1">3 minute read</span>
                <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
                <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
              </div>
              <div class="rv-button-bottom !text-center">
                <span class="mr-1">3 minute read</span>
                <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              </div>
            </a>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Services Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="absolute max-lg:scale-y-[2.8] -z-30 scale-x-[2.2] left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2">
    <img src="images/gradient-bg.png" alt="gradient-bg">
  </div>
  <div class="container">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row gap-x-10 gap-y-4 justify-center lg:justify-between items-start mb-16 lg:mb-24">
      <!-- Title Area -->
      <div class="flex-1 md:self-start">
        <h2 class="text-appear">
          <span class="font-instrument italic font-medium"> Services — </span>
          <br class="hidden md:block">
          We build
        </h2>
      </div>

      <!-- Description -->
      <div class="flex-1 md:self-end">
        <p class="text-appear dark:text-colorText max-w-lg">
          We partner with athletes, storytellers, and brands whose vision and
          voices shape culture and transform the world.
        </p>
      </div>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-12 justify-center items-center gap-[1px] reveal-me">
      <!-- Discovery Service Card -->
      <div class="col-span-full max-sm:border-x max-sm:border-t max-sm:border-dark/5 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-7 md:px-10 pt-7 md:pt-10 pb-4 md:pb-16 bg-white/80 backdrop-blur dark:bg-dark hover:bg-primary dark:hover:bg-primary group transition-all duration-300 ease-in-out min-h-[230px] sm:min-h-[400px]">
        <h4 class="md:text-[37px] dark:group-hover:text-secondary transition-colors duration-300 leading-[1.2] pb-3 md:mb-4">
          Discovery
        </h4>
        <p class="text-[17px] leading-[25.5px] text-[#000000b3] dark:text-dark-100 dark:group-hover:text-dark-200 transition-colors duration-300 font-medium italic">
          We start every new client interaction with an in-depth discovery call
          where we get to know each other, discuss your current and future
          objectives, and recommend the best course of action.
        </p>
      </div>

      <!-- Strategy Service Card -->
      <div class="col-span-full max-sm:border-x max-sm:border-t max-sm:border-dark/5 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-7 md:px-10 pt-7 md:pt-10 pb-4 md:pb-16 bg-white/80 dark:bg-dark hover:bg-primary dark:hover:bg-primary group transition-all duration-300 ease-in-out min-h-[230px] sm:min-h-[400px]">
        <h4 class="md:text-[37px] dark:group-hover:text-secondary transition-colors duration-300 leading-[1.2] pb-3 md:mb-4">
          Strategy
        </h4>
        <p class="text-[17px] leading-[25.5px] text-[#000000b3] dark:text-dark-100 dark:group-hover:text-dark-200 transition-colors duration-300 font-medium italic">
          Every end-to-end project of ours begins with a bespoke pre-build
          strategy. From brand ID consultation to in-depth code reviews we're
          here to set the stage for success.
        </p>
      </div>

      <!-- Build Service Card -->
      <div class="col-span-full max-sm:border-x max-sm:border-t max-sm:border-dark/5 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-7 md:px-10 pt-7 md:pt-10 pb-4 md:pb-16 bg-white/80 dark:bg-dark hover:bg-primary dark:hover:bg-primary group transition-all duration-300 ease-in-out min-h-[230px] sm:min-h-[400px]">
        <h4 class="md:text-[37px] dark:group-hover:text-secondary transition-colors duration-300 leading-[1.2] pb-3 md:mb-4">
          Build
        </h4>
        <p class="text-[17px] leading-[25.5px] text-[#000000b3] dark:text-dark-100 dark:group-hover:text-dark-200 transition-colors duration-300 font-medium italic">
          Whether we've just finished designing your new site or you're handing
          off finished designs for us to develop in Webflow, we're here to apply
          our trusted development process to your project.
        </p>
      </div>

      <!-- Design Service Card -->
      <div class="col-span-full max-sm:border-x max-sm:border-t max-sm:border-b max-sm:border-dark/5 sm:col-span-6 lg:col-span-4 xl:col-span-3 px-10 pt-10 pb-16 bg-white/80 dark:bg-dark hover:bg-primary dark:hover:bg-primary group transition-all duration-300 ease-in-out min-h-[230px] sm:min-h-[400px]">
        <h4 class="md:text-[37px] dark:group-hover:text-secondary transition-colors duration-300 leading-[1.2] pb-3 md:mb-4">
          Design
        </h4>
        <p class="text-[17px] leading-[25.5px] text-[#000000b3] dark:text-dark-100 dark:group-hover:text-dark-200 transition-colors duration-300 font-medium italic">
          What kind of design are you interested in? It could be anything from
          graphic design to interior design or even designing a new product. Let
          me know what you have in mind!
        </p>
      </div>
    </div>

    <!-- CTA Button -->
    <ul class="flex justify-center mt-[60px]">
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
            <img src="images/agent/01.jpg" alt="Slide 1">
          </div>
          <div class="slide">
            <img src="images/agent/02.jpg" alt="Slide 2">
          </div>
          <div class="slide">
            <img src="images/agent/03.jpg" alt="Slide 3">
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
