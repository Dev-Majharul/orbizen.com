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
    
<section class="pt-[118px] md:pt-[143px] lg:pt-[110px] pb-16 md:pb-20 lg:pb-[95px] xl:pb-[120px]">
  <div class="relative w-full reveal-me">
    <figure class="hero-img-container">
      <img src="images/hero-img/hero-v10.webp" alt="hero-img" class="w-[98%] mx-auto min-h-fit scale-hero-img">
    </figure>
    <div class="container">
      <h1 class="text-center text-backgroundBody font-medium md:font-semibold absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 max-sm:py-4">
        Transforming vision <br>
        into reality
      </h1>
    </div>
  </div>
</section>


<section class="about pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <!-- Content Wrapper -->
    <div class="flex flex-col items-center lg:items-stretch justify-center lg:justify-normal reveal-me">
      <!-- Logo Circle -->
      <div class="relative w-[168px] h-[168px] bg-secondary dark:bg-white rounded-[50%] flex items-center justify-center mx-auto">
        <figure>
          <img src="images/icons/text-circle-logo.webp" alt="text-circle-logo" class="inline dark:hidden">
          <img src="images/icons/text-circle-dark-logo.webp" alt="text-circle-logo" class="hidden dark:inline">
        </figure>
        <div class="text">
          <p>Building Brands,and Creating Impact</p>
        </div>
      </div>

      <!-- About Description -->
      <h4 class="mt-8 md:mt-[60px] mb-6 md:mb-10 mx-auto reveal-text">
        With years of industry expertise, our team of visionaries, storytellers,
        and design virtuosos come together to weave magic that captivates hearts
        and minds.
      </h4>
      <p class="max-w-3xl mx-auto text-center reveal-me">
        With years of experience and a diverse portfolio, we have established
        ourselves as a leading force in the world of video production. At our
        core, we believe in the transformative power of visual storytelling. Our
        mission is to bring your ideas to life, creating content that not only
        meets but exceeds your expectations.
      </p>
    </div>

    <!-- ----------------------- -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center mt-20">
      <!-- 1 -->
      <div class="border-t dark:border-dark py-7 flex flex-col sm:flex-row justify-center sm:justify-between items-center sm:items-start min-w-[355px] lg:min-w-[300px] xl:min-w-[355px] reveal-me" id="counter">
        <h2 class="sm:min-w-[170px]">
          <span class="counter" data-value="14"></span>
        </h2>
        <p class="text-lg">Years of experience</p>
      </div>
      <!-- 2 -->
      <div class="border-t dark:border-dark py-7 flex flex-col sm:flex-row justify-center sm:justify-between items-center sm:items-start min-w-[355px] lg:min-w-[300px] xl:min-w-[355px] reveal-me" id="counter">
        <h2 class="sm:min-w-[170px]">
          <span class="counter" data-value="80"></span>+
        </h2>
        <p class="text-lg">Projects done</p>
      </div>
      <!-- 3 -->
      <div class="border-t dark:border-dark py-7 flex flex-col sm:flex-row justify-center sm:justify-between items-center sm:items-start min-w-[355px] lg:min-w-[300px] xl:min-w-[355px] reveal-me" id="counter">
        <h2 class="sm:min-w-[170px]">
          <span class="counter" data-value="280"></span>
          +
        </h2>
        <p class="text-lg">Satisfied clients</p>
      </div>
      <!-- 4 -->
      <div class="border-t dark:border-dark py-7 flex flex-col sm:flex-row justify-center sm:justify-between items-center sm:items-start min-w-[355px] lg:min-w-[300px] xl:min-w-[355px] reveal-me" id="counter">
        <h2 class="sm:min-w-[170px]">
          <span class="counter" data-value="9"></span>
        </h2>
        <p class="text-lg">Trusted partners</p>
      </div>
      <!-- 5 -->
      <div class="border-t dark:border-dark py-7 flex flex-col sm:flex-row justify-center sm:justify-between items-center sm:items-start min-w-[355px] lg:min-w-[300px] xl:min-w-[355px] reveal-me" id="counter">
        <h2 class="sm:min-w-[170px]">
          <span class="counter" data-value="19"></span>
        </h2>
        <p class="text-lg">Awards</p>
      </div>
      <!-- 5 -->
      <div class="border-t dark:border-dark py-7 flex flex-col sm:flex-row justify-center sm:justify-between items-center sm:items-start min-w-[355px] lg:min-w-[300px] xl:min-w-[355px] reveal-me" id="counter">
        <h2 class="sm:min-w-[170px]">
          <span class="counter" data-value="39"></span>
        </h2>
        <p class="text-lg">Professional members</p>
      </div>
    </div>
  </div>
</section>


<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative">
  <div class="container">
    <div class="flex flex-col md:flex-row gap-y-3 gap-x-10 justify-center lg:justify-start items-start md:items-center mb-10 md:mb-20">
      <div class="flex-1">
        <h2 class="text-appear">
          <span class="italic font-instrument">Our latest</span>
          <br class="hidden md:block">
          projects
        </h2>
      </div>
      <div class="flex-1 max-w-md">
        <p class="text-appear max-md:text-justify dark:text-colorText">
          Each project reflects our dedication to excellence, creativity, and
          innovation.
        </p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center items-center md:items-start gap-[30px] gap-y-10 mb-[60px]">
      <div class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-13.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Blog Images">
          </figure>
        </a>
        <div class="mt-[26px] mb-2.5 flex justify-between items-center">
          <p class="text-[13px] leading-[14.4px] tracking-[0.96px] uppercase font-normal text-secondary dark:text-white">
            may 10, 2020
          </p>
          <p class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white">
            2020
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3 class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]">
              TheMotto
            </h3>
          </div>
        </a>
      </div>
      <div class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-14.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Blog Images">
          </figure>
        </a>
        <div class="mt-[26px] mb-2.5 flex justify-between items-center">
          <p class="text-[13px] leading-[14.4px] tracking-[0.96px] uppercase font-normal text-secondary dark:text-white">
            June 25, 2021
          </p>
          <p class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white">
            2021
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3 class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]">
              Lovelace Studio
            </h3>
          </div>
        </a>
      </div>
      <div class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-15.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Blog Images">
          </figure>
        </a>
        <div class="mt-[26px] mb-2.5 flex justify-between items-center">
          <p class="text-[13px] leading-[14.4px] tracking-[0.96px] uppercase font-normal text-secondary dark:text-white">
            June 25, 2022
          </p>
          <p class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white">
            2022
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3 class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]">
              Miami Adventure
            </h3>
          </div>
        </a>
      </div>
      <div class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-16.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Blog Images">
          </figure>
        </a>
        <div class="mt-[26px] mb-2.5 flex justify-between items-center">
          <p class="text-[13px] leading-[14.4px] tracking-[0.96px] uppercase font-normal text-secondary dark:text-white">
            June 10, 2023
          </p>
          <p class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white">
            2023
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3 class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]">
              FightClub
            </h3>
          </div>
        </a>
      </div>
    </div>
    <ul class="flex justify-center reveal-me">
      <li class="block md:inline-block max-md:w-[90%] mx-auto md:ml-auto md:w-auto">
        <a href="project.php" class="rv-button rv-button-secondary block md:inline-block text-center">
          <div class="rv-button-top">
            <span>See Project</span>
          </div>
          <div class="rv-button-bottom">
            <span>See Project</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
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


<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden @@Spacing">
  <div class="container">
    <div class="flex flex-col md:flex-row gap-y-3 gap-x-10 justify-center lg:justify-start items-start sm:items-center mb-16 md:mb-20">
      <div class="flex-1">
        <h2 class="text-appear-2">
          Elevating Your <br>
          <span class="font-instrument italic">Digital</span> Presence
        </h2>
      </div>
      <div class="flex-1 max-w-lg">
        <p class="text-appear max-md:text-justify dark:text-colorText text-appear-2">
          We offer expert digital solutions to boost your brand and online
          presence. Our services drive growth, engagement, and success in the
          digital world.
        </p>
      </div>
    </div>
  </div>

  <div class="flex max-xl:flex-wrap max-xl:gap-5 justify-center [&>*:not(:last-child)]:border-l dark:[&>*:not(:last-child)]:border-l-dark [&>*:last-child]:border-l dark:[&>*:last-child]:border-l-dark [&>*:last-child]:border-r dark:[&>*:last-child]:border-r-dark [&>*]:border-y dark:[&>*]:border-y-dark max-xl:[&>*:first-child]:border-r dark:max-xl:[&>*:first-child]:border-dark max-xl:[&>*:nth-child(2)]:border-r dark:max-xl:[&>*:nth-child(2)]:border-dark max-2xl:[&>*:nth-child(3)]:border-r dark:max-2xl:[&>*:nth-child(3)]:border-dark xl:px-5">
    <!-- Research Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
        <h5 class="max-sm:text-3xl">Research</h5>
      </div>

      <div class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5 class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
              Research
            </h5>
            <span class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
          <p class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
            What specific research are you interested in? Research can range
            across a variety of fields such as:
          </p>
          <ul class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              Scientific research (e.g., medical, environmental, technological
              studies)
            </li>
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              Market research (consumer trends, competitor analysis)
            </li>
          </ul>
        </a>
      </div>
    </div>

    <!-- Alchemy Studio Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
        <h5 class="max-sm:text-3xl">Studio</h5>
      </div>

      <div class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5 class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
              Studio
            </h5>
            <span class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0">
              <svg class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
          <p class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
            What specific design elements are you focusing on? Design can span
            across:
          </p>
          <ul class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              Visual design (e.g., branding, marketing assets)
            </li>
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              Digital design (e.g., app interfaces, website layouts)
            </li>
          </ul>
        </a>
      </div>
    </div>
    <!-- Rhythms Media Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
        <h5 class="max-sm:text-3xl">Media</h5>
      </div>

      <div class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5 class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
              Media
            </h5>
            <span>
              <svg class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
          <p class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
            What specific design elements are you focusing on? Design can span
            across:
          </p>
          <ul class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              Visual design (e.g., branding, marketing assets)
            </li>
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              Digital design (e.g., app interfaces, website layouts)
            </li>
          </ul>
        </a>
      </div>
    </div>

    <!-- Sound Studios  Card -->

    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me justify-self-center">
      <div class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
        <h5 class="max-sm:text-3xl">Development</h5>
      </div>

      <div class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5 class="max-sm:text-3xl text-white t dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
              Development
            </h5>
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none" class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0">
                <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </div>
          <p class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
            Which aspects of UI/UX design are you targeting? Consider:
          </p>
          <ul class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              User interface design (e.g., layouts, colors, typography)
            </li>
            <li class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed">
              User experience design (e.g., interactions, user flows)
            </li>
          </ul>
        </a>
      </div>
    </div>
  </div>
</section>


<!--=====================================
    Awards & Recognition Area
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Section Header -->
  <div class="container flex flex-col md:flex-row justify-center md:justify-between max-md:items-start gap-x-8 gap-y-3 mb-9 md:mb-20">
    <!-- Section Title -->
    <div class="flex-1">
      <h2 class="text-appear mt-4 lg:mt-9 sm:text-nowrap">
        <i class="font-instrument"> Awards we </i>
        <br class="hidden md:block">
        received
      </h2>
    </div>
    <!-- Section Description -->
    <p class="max-w-md text-appear md:self-end flex-1">
      Our user-centered design encourages productivity and boosts revenue.
    </p>
  </div>

  <!-- Awards List Container -->
  <div class="divide-y-[1px] dark:divide-dark [&>*:first-child]:border-t max-md:last:border-b dark:last:border-dark dark:[&>*:first-child]:border-dark sm:px-10 reveal-me">
    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/90 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-2 group-hover:text-white transition-colors duration-300 justify-self-center col-span-2 italic text-[19px] font-normal leading-[1.4] relative z-20">2020</span>
      <h3 class="text-xl sm:text-2xl md:text-[28px] lg:text-4xl xl:text-5xl xl:leading-[1.2] max-md:col-span-10 col-span-8 group-hover:text-white transition-colors duration-300 relative z-20">
        Innovation in Corporate Video
      </h3>

      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-2 col-span-2 relative z-20">
        Work Shop
      </p>
    </div>
    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/90 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-2 group-hover:text-white transition-colors duration-300 justify-self-center col-span-2 italic text-[19px] font-normal leading-[1.4] relative z-20">2021</span>
      <h3 class="text-xl sm:text-2xl md:text-[28px] lg:text-4xl xl:text-5xl xl:leading-[1.2] max-md:col-span-10 col-span-8 group-hover:text-white transition-colors duration-300 relative z-20">
        Best Documentary Feature, Paris Film Festival
      </h3>

      <p class="text-[21px] leading-[1.4] text-secondary group-hover:text-white transition-colors duration-300 dark:text-backgroundBody max-md:col-span-2 col-span-2 relative z-20">
        fury member
      </p>
    </div>
    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/90 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-2 group-hover:text-white transition-colors duration-300 justify-self-center col-span-2 italic text-[19px] font-normal leading-[1.4] relative z-20">2022</span>
      <h3 class="text-xl sm:text-2xl md:text-[28px] lg:text-4xl xl:text-5xl xl:leading-[1.2] max-md:col-span-10 col-span-8 group-hover:text-white transition-colors duration-300 relative z-20 mr-1">
        Best Music Video, European Music Awards
      </h3>

      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-2 col-span-2 relative z-20">
        Taken team
      </p>
    </div>
    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/90 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-2 group-hover:text-white transition-colors duration-300 justify-self-center col-span-2 italic text-[19px] font-normal leading-[1.4] relative z-20">2023</span>
      <h3 class="text-xl sm:text-2xl md:text-[28px] lg:text-4xl xl:text-5xl xl:leading-[1.2] max-md:col-span-10 col-span-8 group-hover:text-white transition-colors duration-300 relative z-20">
        Best Culinary Series, Taste Awards
      </h3>

      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-2 col-span-2 relative z-20">
        Hono mention
      </p>
    </div>
  </div>
</section>


<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <div class="flex flex-col md:flex-row gap-y-4 gap-x-10 justify-center lg:justify-between items-start md:items-center mb-10 md:mb-20 max-md:px-10">
      <div>
        <h2 class="text-appear">
          <span class="italic font-instrument"> Latest</span> <br>

          blog & news
        </h2>
      </div>
      <ul class="reveal-me">
        <li class="block md:inline-block w-[90%] mx-auto md:w-auto">
          <a href="blog.php" class="rv-button rv-button-white block md:inline-block text-center">
            <div class="rv-button-top">
              <span>View Blog</span>
            </div>
            <div class="rv-button-bottom">
              <span>View Blog</span>
            </div>
          </a>
        </li>
      </ul>
    </div>

    <article class="mt-20 [&>*:not(last-child)]:mb-10">
      <div class="border-b dark:border-dark pb-10 flex flex-col-reverse gap-y-7 lg:flex-row justify-center md:justify-normal items-center reveal-me underline-hover-effect group">
        <div class="max-lg:self-center lg:self-center max-lg:max-w-96">
          <div class="rv-badge mb-5">
            <span class="rv-badge-text">June 7, 2020</span>
          </div>
          <a href="blog-details.php">
            <div class="blog-title mb-6 lg:mb-10">
              <h3 class="text-[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                Unlocking the Secrets of Cinematic Storytelling <br>
                Tips from Parisian Filmmakers
              </h3>
            </div>
          </a>

          <a href="blog-details.php" class="rv-button rv-button-primary2">
            <div class="rv-button-top !text-center flex items-center">
              <span class="pr-1">READ MORE</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center flex items-center">
              <span class="pr-1">READ MORE</span>
              <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
            </div>
          </a>
        </div>

        <figure class="overflow-hidden max-w-[370px]">
          <a href="blog-details.php">
            <img src="images/blog-img/blogV3-img-4.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Blog Images">
          </a>
        </figure>
      </div>
      <div class="border-b dark:border-dark pb-10 flex flex-col-reverse gap-y-7 lg:flex-row justify-center md:justify-normal items-center reveal-me underline-hover-effect group">
        <div class="max-lg:self-center lg:self-center max-lg:max-w-96">
          <div class="rv-badge mb-5">
            <span class="rv-badge-text">May 7, 2022</span>
          </div>
          <a href="blog-details.php">
            <div class="blog-title mb-6 lg:mb-10">
              <h3 class="text-[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                Behind the Scenes Crafting a Music Video that Resonates
              </h3>
            </div>
          </a>

          <a href="blog-details.php" class="rv-button rv-button-primary2">
            <div class="rv-button-top !text-center flex items-center">
              <span class="pr-1">READ MORE</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center flex items-center">
              <span class="pr-1">READ MORE</span>
              <img class="inline" src="images/icons/top-arrow.svg" alt="Arrow Icon">
            </div>
          </a>
        </div>

        <figure class="overflow-hidden max-w-[370px]">
          <a href="blog-details.php">
            <img src="images/blog-img/blogV3-img-5.webp" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Blog Images">
          </a>
        </figure>
      </div>
    </article>
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
