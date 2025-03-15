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
    
<section
  class="pt-[110px] md:pt-[150px] xl:pt-[180px] pb-20 md:pb-24 lg:pb-32 xl:pb-[180px] relative overflow-hidden reveal-me"
>
  <!-- Gradient Background Wrapper -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] sm:scale-75 md:scale-100"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>
  <div class="container">
    <h1
      class="text-[80px] sm:text-[100px] uppercase md:text-[240px] lg:text-[340px] xl:text-[420px] xl:leading-[404px] xl:tracking-[-12.12px] text-center"
    >
      Rivor
    </h1>
  </div>
</section>


 <section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <div
      class="flex flex-col md:flex-row gap-x-16 gap-y-6 justify-center md:justify-between max-md:items-center border-y dark:border-dark py-6 md:py-10 mb-10 md:mb-[70px]"
    >
      <h3 class="max-md:text-3xl md:flex-1 text-center">
        Join  in the journey
      </h3>
      <div
        class="flex max-md:flex-wrap max-md:justify-center gap-9 md:gap-[60px]"
      >
        <div>
          <h4
            class="md:text-[47px] lg:text-[54px] xl:text-[64px] font-normal leading-[1.1] lg:leading-[1.2] mb-2 lg:mb-5 text-center"
          >
            $2B
          </h4>
          <p>Total Revenue</p>
        </div>
        <div id="counter">
          <h4
            class="md:text-[47px] lg:text-[54px] xl:text-[64px] font-normal leading-[1.1] lg:leading-[1.2] mb-2 lg:mb-5 text-center"
          >
            <span class="counter" data-value="15"> </span>
            +
          </h4>
          <p>Projects Successfully</p>
        </div>
        <div id="counter">
          <h4
            class="md:text-[47px] lg:text-[54px] xl:text-[64px] font-normal leading-[1.1] lg:leading-[1.2] mb-2 lg:mb-5 text-center"
          >
            <span class="counter" data-value="15"> </span>
          </h4>
          <p>Awwwwards</p>
        </div>
      </div>
    </div>

    <!-- about section -->
    <div>
      <h3
        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] mb-8 lg:mb-[52px] font-medium max-md:text-center text-appear"
      >
        A few words about me
      </h3>
      <div class="flex flex-col lg:flex-row gap-y-16 gap-x-16 reveal-me">
        <img src="images/portfolio/about-banner.png" alt="About me" />
        <div>
          <p class="max-w-2xl mb-8">
            Behind the Lens: With an unwavering love for the art form, I embark
            on a perpetual quest to freeze time and encapsulate the essence of
            emotions, beauty, and storytelling through my lens. Drawing
            inspiration from the world around me, I strive to create captivating
            visuals that transcend the ordinary, unveiling the hidden magic in
            everyday encounters.
          </p>
          <div
            class="flex flex-col-reverse xl:flex-row gap-y-12 sm:gap-y-16 lg:gap-y-6 justify-between"
          >
            <ul class="self-start xl:self-end">
              <li class="">
                <a
                  href="about.php"
                  class="rv-button rv-button-secondary block md:inline-block text-center"
                >
                  <div class="rv-button-top">
                    <span>LEarn more</span>
                  </div>
                  <div class="rv-button-bottom">
                    <span>LEarn more</span>
                  </div>
                </a>
              </li>
            </ul>
            <p class="lg:max-w-[340px]">
              Whether capturing the unspoken love between two souls, the vibrant
              energy of bustling city streets, or the tender innocence of a
              child's gaze, each frame becomes a testament to my relentless
              pursuit of visual excellence.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div class="mb-10 md:mb-20 text-center">
      <h2 class="text-appear">Selected work</h2>
    </div>

    <div
      class="grid grid-cols-1 md:grid-cols-2 justify-items-center items-center md:items-start gap-[30px] gap-y-10"
    >
      <div
        class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group"
      >
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-17.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[26px] mb-2 lg:mb-3 flex items-center justify-between">
          <div class="rv-badge">
            <span class="rv-badge-text">Wedding</span>
          </div>
          <p
            class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2022
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3
              class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]"
            >
              wedding Harmony
            </h3>
          </div>
        </a>
      </div>

      <div
        class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group"
      >
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-18.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[26px] mb-2 lg:mb-3 flex items-center justify-between">
          <div class="rv-badge">
            <span class="rv-badge-text">Urban</span>
          </div>
          <p
            class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2023
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3
              class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]"
            >
              Urban Landscape
            </h3>
          </div>
        </a>
      </div>

      <div
        class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group"
      >
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-19.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[26px] mb-2 lg:mb-3 flex items-center justify-between">
          <div class="rv-badge">
            <span class="rv-badge-text">Portraits</span>
          </div>
          <p
            class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2021
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3
              class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]"
            >
              Inner Beauty
            </h3>
          </div>
        </a>
      </div>

      <div
        class="reveal-me border dark:border-dark px-5 pt-5 pb-7 underline-hover-effect group"
      >
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-20.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[26px] mb-2 lg:mb-3 flex items-center justify-between">
          <div class="rv-badge">
            <span class="rv-badge-text">Urban</span>
          </div>
          <p
            class="text-base md:text-[22px] leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2024
          </p>
        </div>
        <a href="project-details.php">
          <div class="blog-title">
            <h3
              class="text-3xl lg:text-[42px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]"
            >
              Urban Artistry
            </h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <!-- Clients Logo Marquee -->
  <div class="marquee-container reveal-me">
    <div class="flex items-center justify-between py-2.5 pb-5">
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Creative Development
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Visual Design
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Creative Development
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Visual Design
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Creative Development
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Visual Design
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
    </div>
  </div>

  <!-- Reverse -->
  <div class="marquee-reverse-container reveal-me border-t dark:border-dark">
    <div class="flex items-center justify-between py-2.5">
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Since 1993
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Based in New York
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Award-Winning Agency
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Since 1993
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
      <div class="flex items-center gap-6 mr-5">
        <span
          class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap"
        >
          Based in New York
        </span>
        <span class="mt-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 40 40"
            fill="none"
          >
            <path
              d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
              class="fill-black dark:fill-white"
            />
          </svg>
        </span>
      </div>
    </div>
  </div>
</section>


 <!--=====================================
   Services Accordion Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div class="text-center mb-10 md:mb-20">
      <h2 class="text-appear">My Services</h2>
    </div>

    <!-- Services Container -->
    <div
      class="max-w-[1170px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me"
    >
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 group relative overflow-hidden"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between items-center"
          >
            <h3
              class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span class="font-medium">Portrait Shoots</span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>

          <div class="overflow-hidden">
            <figure
              class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0"
            >
              <img
                src="images/services/photography-services.png"
                alt="Hover on Photography Services"
                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover"
              />
            </figure>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 group relative overflow-hidden"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between items-center"
          >
            <h3
              class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span class="font-medium">Location shoots</span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>

          <div class="overflow-hidden">
            <figure
              class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0"
            >
              <img
                src="images/services/photography-services-02.png"
                alt="Hover on Photography Services"
                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover"
              />
            </figure>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 group relative overflow-hidden"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between items-center"
          >
            <h3
              class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span class="font-medium">Product Shoots</span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>

          <div class="overflow-hidden">
            <figure
              class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0"
            >
              <img
                src="images/services/photography-services-03.png"
                alt="Hover on Photography Services"
                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover"
              />
            </figure>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 group relative overflow-hidden"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between items-center"
          >
            <h3
              class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span class="font-medium">VideoGraphy</span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>

          <div class="overflow-hidden">
            <figure
              class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0"
            >
              <img
                src="images/services/photography-services-04.png"
                alt="Hover on Photography Services"
                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover"
              />
            </figure>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>


 <!--=====================================
   Clients Section
======================================-->
<section
  class="bg-dark py-20 lg:py-[120px] dark:py-0 dark:lg:py-0 mt-14 md:mt-16 lg:mt-[88px] xl:mt-[100px] mb-14 md:mb-16 lg:mb-[88px] xl:mb-[100px] relative overflow-hidden"
>
  <div class="container">
    <div
      class="flex flex-col md:flex-row gap-x-10 gap-y-3 justify-center md:justify-between items-start md:items-end mb-10 md:mb-20"
    >
      <h2 class="text-appear text-backgroundBody block md:hidden flex-1">
        <span class="font-instrument italic">Have</span>

        Trust in us
      </h2>
      <h2 class="text-appear text-backgroundBody hidden md:block flex-1">
        <span class="font-instrument lg:text-[70px] italic">Have</span>
        <br />
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
        <img src="images/icons/company/client-1.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-4.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-5.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-1.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo" />
      </div>
    </div>
  </div>

  <!-- Reverse -->
  <div class="marquee-reverse-container reveal-me">
    <div class="flex items-center gap-32 justify-between py-8">
      <div class="min-w-[190px] flex justify-center ml-32">
        <img src="images/icons/company/client-1.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-4.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-5.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-1.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-2.svg" alt="client Logo" />
      </div>
      <div class="min-w-[190px] flex justify-center">
        <img src="images/icons/company/client-3.svg" alt="client Logo" />
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
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="60"
                  height="60"
                  viewBox="0 0 60 60"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M23.8286 6V16.9714C21.3264 16.9714 16.9186 17.1793 16.9184 27.1958V32.4H27.6V54H6V32.4V27.1958C6 19.3208 8.03795 13.4729 12.4905 9.81413C15.5705 7.28323 19.2195 6 23.8286 6ZM50.229 6V16.9714C47.7268 16.9714 43.319 17.1793 43.3187 27.1958V32.4H54.0004V54H32.4004V32.4V27.1958C32.4004 19.3208 34.4383 13.4729 38.8909 9.81413C41.9709 7.28323 45.6199 6 50.229 6Z"
                    fill="white"
                    fill-opacity="0.1"
                  />
                </svg>
              </span>
            </div>
            <div class="flex-1">
              <p
                class="text-base md:text-xl italic md:leading-[1.5] mb-[30px] text-backgroundBody/70"
              >
                The skeleton plan of a website can be broken down into three
                components
              </p>
              <h3
                class="text-xl md:text-[30px] md:leading-9 mb-10 text-backgroundBody"
              >
                Exceptional materials. The most durable glass ever in a <br />
                smartphone. A beautiful new gold finish, achieved with an
                atomic-level.
              </h3>
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                  <img src="images/avatar/review-5.png" alt="Avatar Img" />
                  <div>
                    <h4
                      class="text-lg md:text-2xl md:leading-[1.2] text-backgroundBody"
                    >
                      Kathryn Murphy
                    </h4>
                    <p
                      class="text-sm font-poppins leading-5 font-light text-backgroundBody/70"
                    >
                      CEO at Vercel
                    </p>
                  </div>
                </div>
                <div class="self-end max-xs:hidden">
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="60"
                      height="60"
                      viewBox="0 0 60 60"
                      fill="none"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M36.1714 54L36.1714 43.0286C38.6736 43.0286 43.0814 42.8207 43.0816 32.8042L43.0816 27.6L32.4 27.6L32.4 6L54 6L54 27.6L54 32.8042C54 40.6792 51.9621 46.5271 47.5095 50.1859C44.4295 52.7168 40.7805 54 36.1714 54ZM9.77104 54L9.77104 43.0286C12.2732 43.0286 16.681 42.8207 16.6812 32.8042L16.6812 27.6L5.99961 27.6L5.99961 6L27.5996 6L27.5996 27.6L27.5996 32.8042C27.5996 40.6792 25.5617 46.5271 21.1091 50.1859C18.0291 52.7168 14.3801 54 9.77104 54Z"
                        fill="white"
                        fill-opacity="0.1"
                      />
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
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="60"
                  height="60"
                  viewBox="0 0 60 60"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M23.8286 6V16.9714C21.3264 16.9714 16.9186 17.1793 16.9184 27.1958V32.4H27.6V54H6V32.4V27.1958C6 19.3208 8.03795 13.4729 12.4905 9.81413C15.5705 7.28323 19.2195 6 23.8286 6ZM50.229 6V16.9714C47.7268 16.9714 43.319 17.1793 43.3187 27.1958V32.4H54.0004V54H32.4004V32.4V27.1958C32.4004 19.3208 34.4383 13.4729 38.8909 9.81413C41.9709 7.28323 45.6199 6 50.229 6Z"
                    fill="white"
                    fill-opacity="0.1"
                  />
                </svg>
              </span>
            </div>
            <div class="flex-1">
              <p
                class="text-base md:text-xl italic md:leading-[1.5] mb-[30px] text-backgroundBody/70"
              >
                The skeleton plan of a website can be broken down into three
                components
              </p>
              <h3
                class="text-xl md:text-[30px] md:leading-9 mb-10 text-backgroundBody"
              >
                Exceptional materials. The most durable glass ever in a <br />
                smartphone. A beautiful new gold finish, achieved with an
                atomic-level.
              </h3>
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                  <img src="images/avatar/review-2.png" alt="Avatar Img" />
                  <div>
                    <h4
                      class="text-lg md:text-2xl md:leading-[1.2] text-backgroundBody"
                    >
                      John Deo
                    </h4>
                    <p
                      class="text-sm font-poppins leading-5 font-light text-backgroundBody/70"
                    >
                      CEO at W3School
                    </p>
                  </div>
                </div>
                <div class="self-end max-xs:hidden">
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="60"
                      height="60"
                      viewBox="0 0 60 60"
                      fill="none"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M36.1714 54L36.1714 43.0286C38.6736 43.0286 43.0814 42.8207 43.0816 32.8042L43.0816 27.6L32.4 27.6L32.4 6L54 6L54 27.6L54 32.8042C54 40.6792 51.9621 46.5271 47.5095 50.1859C44.4295 52.7168 40.7805 54 36.1714 54ZM9.77104 54L9.77104 43.0286C12.2732 43.0286 16.681 42.8207 16.6812 32.8042L16.6812 27.6L5.99961 27.6L5.99961 6L27.5996 6L27.5996 27.6L27.5996 32.8042C27.5996 40.6792 25.5617 46.5271 21.1091 50.1859C18.0291 52.7168 14.3801 54 9.77104 54Z"
                        fill="white"
                        fill-opacity="0.1"
                      />
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
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="60"
                  height="60"
                  viewBox="0 0 60 60"
                  fill="none"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M23.8286 6V16.9714C21.3264 16.9714 16.9186 17.1793 16.9184 27.1958V32.4H27.6V54H6V32.4V27.1958C6 19.3208 8.03795 13.4729 12.4905 9.81413C15.5705 7.28323 19.2195 6 23.8286 6ZM50.229 6V16.9714C47.7268 16.9714 43.319 17.1793 43.3187 27.1958V32.4H54.0004V54H32.4004V32.4V27.1958C32.4004 19.3208 34.4383 13.4729 38.8909 9.81413C41.9709 7.28323 45.6199 6 50.229 6Z"
                    fill="white"
                    fill-opacity="0.1"
                  />
                </svg>
              </span>
            </div>
            <div class="flex-1">
              <p
                class="text-base md:text-xl italic md:leading-[1.5] mb-[30px] text-backgroundBody/70"
              >
                The skeleton plan of a website can be broken down into three
                components
              </p>
              <h3
                class="text-xl md:text-[30px] md:leading-9 mb-10 text-backgroundBody"
              >
                Exceptional materials. The most durable glass ever in a <br />
                smartphone. A beautiful new gold finish, achieved with an
                atomic-level.
              </h3>
              <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                  <img src="images/avatar/review-8.png" alt="Avatar Img" />
                  <div>
                    <h4
                      class="text-lg md:text-2xl md:leading-[1.2] text-backgroundBody"
                    >
                      Zaks Addison
                    </h4>
                    <p
                      class="text-sm font-poppins leading-5 font-light text-backgroundBody/70"
                    >
                      Manager, Operations at Wacomm
                    </p>
                  </div>
                </div>
                <div class="self-end max-xs:hidden">
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="60"
                      height="60"
                      viewBox="0 0 60 60"
                      fill="none"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M36.1714 54L36.1714 43.0286C38.6736 43.0286 43.0814 42.8207 43.0816 32.8042L43.0816 27.6L32.4 27.6L32.4 6L54 6L54 27.6L54 32.8042C54 40.6792 51.9621 46.5271 47.5095 50.1859C44.4295 52.7168 40.7805 54 36.1714 54ZM9.77104 54L9.77104 43.0286C12.2732 43.0286 16.681 42.8207 16.6812 32.8042L16.6812 27.6L5.99961 27.6L5.99961 6L27.5996 6L27.5996 27.6L27.5996 32.8042C27.5996 40.6792 25.5617 46.5271 21.1091 50.1859C18.0291 52.7168 14.3801 54 9.77104 54Z"
                        fill="white"
                        fill-opacity="0.1"
                      />
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
   CTA Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-[70px] lg:pb-[140px] relative"
>
  <div class="container">
    <!-- CTA Heading -->
    <h2
      class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]"
    >
      Let's chat!
      <div
        class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-5 translate-y-2 sm:translate-y-[20px] max-sm:mt-2.5"
      >
        <div class="cta-inline-slider">
          <div class="slide">
            <img src="images/agent/01.jpg" alt="Slide 1" />
          </div>
          <div class="slide">
            <img src="images/agent/02.jpg" alt="Slide 2" />
          </div>
          <div class="slide">
            <img src="images/agent/03.jpg" alt="Slide 3" />
          </div>
        </div>
      </div>
      with us.

      <span class="font-instrument sm:mt-10 italic block max-md:inline-block"
        >A virtual coffee?</span
      >
    </h2>

    <!-- Email Subscription Form -->
    <form
      class="max-md:max-w-sm max-w-[570px] mt-8 md:mt-10 flex bg-secondary text-white mx-auto w-full relative"
    >
      <input
        type="email"
        placeholder="hello@email.com"
        class="border-none focus:outline-none bg-transparent text-base block w-full p-5 md:p-7"
      />
      <button
        type="submit"
        class="inline-block bg-primary p-3 md:p-6 uppercase text-secondary max-md:text-xs md:leading-[15.4px] md:tracking-[1.12px] absolute top-3 md:top-2 cursor-pointer right-3 md:right-2"
      >
        Subscribe
      </button>
    </form>
  </div>
</section>


 
</main>

<?php
  get_template('footer');
  ?>
