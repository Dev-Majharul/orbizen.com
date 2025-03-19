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
    
<section class="relative overflow-hidden">
  <div
    class="relative overflow-hidden pt-28 md:pt-36 lg:pt-[220px] pb-12 sm:pb-28 lg:pb-[120px]"
  >
    <!-- Gradient Background Wrapper -->
    <div
      id="hero-gradient-wrapper"
      class="absolute w-full h-full top-[37%] left-0 -z-10 blur-[35px] md:blur-[60px] sm:scale-50 md:scale-75 lg:scale-90"
    >
      <img
        src="images/hero-gradient-background.webp"
        alt="hero-gradient-background"
        id="hero-gradient"
        class="absolute left-1/2 top-[1/2] -translate-x-1/2 -translate-y-1/2"
      />
    </div>
    <div class="container reveal-me">
      <h1 class="font-semibold text-center block md:hidden">
        <span class="font-instrument italic block font-normal">Rivor</span>
        Your Portal to Infinite Design Possibilities
      </h1>
      <h1 class="font-semibold text-center hidden md:block">
        <span class="font-instrument italic block font-normal">Rivor</span>
        Your Portal to Infinite <br />
        Design Possibilities
      </h1>
    </div>
  </div>
  <figure class="w-full reveal-me scale-small-img">
    <img
      src="images/hero-banner.webp"
      alt="Hero Banner Big Image"
      class="w-full"
    />
  </figure>
</section>


 <!--==================================
   About Description Section Area
===================================-->
<section
  class="pt-6 lg:pt-12 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <div class="container">
    <!-- About Description Text -->
    <h3
      class="reveal-text-2 text-xl lg:text-[40px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]"
    >
      At Orbizen Limited, we blend creativity with functionality to craft designs
      that resonate with your's brand essence. Let's create something beautiful
      together. we blend creativity with functionality to craft designs that
      resonate with your's brand essence. Let's create something beautiful
      together.
    </h3>
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


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div
      class="flex flex-col md:flex-row gap-y-5 gap-x-10 justify-center lg:justify-start items-start md:items-center mb-10 md:mb-20"
    >
      <div class="flex-1">
        <h2 class="text-appear">
          Featured <span class="font-instrument italic">projects</span>
        </h2>
      </div>
      <div class="flex-1 max-w-md">
        <p class="text-appear max-md:text-justify dark:text-colorText">
          Our user-centered design encourages productivity and boosts revenue.
        </p>
      </div>
    </div>

    <div
      class="grid grid-cols-1 md:grid-cols-2 justify-items-center items-center md:items-start gap-8 gap-y-12"
    >
      <div class="reveal-me underline-hover-effect group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-13.webp"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
          <p
            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-white"
          >
            Case study
          </p>
          <p
            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2020
          </p>
        </div>
        <a href="blog-details.php">
          <div class="blog-title">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Epicurean Elegance
            </h3>
          </div>
        </a>
        <div class="border-b dark:border-dark mt-6"></div>
      </div>
      <div class="reveal-me underline-hover-effect group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-14.webp"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
          <p
            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-white"
          >
            Projects
          </p>
          <p
            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2021
          </p>
        </div>
        <a href="blog-details.php">
          <div class="blog-title">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Artistry in Motion
            </h3>
          </div>
        </a>
        <div class="border-b dark:border-dark mt-6"></div>
      </div>
      <div class="reveal-me underline-hover-effect group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-15.webp"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
          <p
            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-white"
          >
            Case study
          </p>
          <p
            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2020
          </p>
        </div>
        <a href="blog-details.php">
          <div class="blog-title">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Digital Canvas
            </h3>
          </div>
        </a>
        <div class="border-b dark:border-dark mt-6"></div>
      </div>
      <div class="reveal-me underline-hover-effect group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/blog-img/blog-img-16.webp"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Blog Images"
            />
          </figure>
        </a>
        <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
          <p
            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-white"
          >
            Case study
          </p>
          <p
            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-white"
          >
            2020
          </p>
        </div>
        <a href="blog-details.php">
          <div class="blog-title">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Fashion Forward
            </h3>
          </div>
        </a>
        <div class="border-b dark:border-dark mt-6"></div>
      </div>
    </div>
  </div>
</section>


<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div
      class="max-w-4xl mx-auto grid max-md:grid-cols-2 md:grid-cols-4 reveal-me border-t border-x [&>*]:border-r max-md:[&>*:nth-child(2)]:border-r-0 max-md:[&>*:nth-child(6)]:border-r-0 [&>*:nth-child(4)]:border-r-0 [&>*:nth-child(8)]:border-r-0 [&>*]:border-b dark:[&>*]:border-dark dark:border-dark"
    >
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/invert.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/invert-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/greenish.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/greenish-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/invert.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/invert-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/greenish.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/greenish-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>

      <!-- Reverse Marquee -->
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/invert.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/invert-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/greenish.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/greenish-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/invert.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/invert-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
      <figure class="px-12 py-8">
        <img
          src="images/marquee-img/greenish.svg"
          alt="Invert Logo"
          class="inline dark:hidden"
        />
        <img
          src="images/marquee-img/greenish-dark.svg"
          alt="Invert Logo"
          class="hidden dark:inline"
        />
      </figure>
    </div>
  </div>
</section>


<!--=====================================
   CTA Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-[70px] lg:pb-[120px]"
>
  <div class="container">
    <!-- CTA Heading -->
    <div class="reveal-me">
      <h2
        class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]"
      >
        Let's chat!
        <div
          class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-7 translate-y-2 sm:translate-y-[20px]"
        >
          <div class="cta-inline-slider">
            <div class="slide">
              <img src="images/agent/01.webp" alt="Slide 1" />
            </div>
            <div class="slide">
              <img src="images/agent/02.webp" alt="Slide 2" />
            </div>
            <div class="slide">
              <img src="images/agent/03.webp" alt="Slide 3" />
            </div>
          </div>
        </div>
        with us.

        <span class="font-instrument sm:mt-10 italic block max-md:inline-block"
          >A virtual coffee?</span
        >
      </h2>
    </div>

    <!-- Contact Form -->
    <form
      class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mt-20 mx-auto reveal-me"
    >
      <!-- Your Data Field -->
      <div class="md:col-span-full">
        <label
          for="name"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Your Data
        </label>
        <input
          type="text"
          name="name"
          placeholder="Name*"
          class="py-4 pl-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"
        />
      </div>

      <div class="md:col-span-full">
        <label
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          You are interested in
        </label>

        <div class="flex flex-wrap gap-6 mt-3">
          <div class="checkbox-wrapper">
            <input
              type="checkbox"
              id="uiux"
              name="interest"
              value="UI/UX Design"
              class="hidden"
            />
            <label for="uiux" class="interest-btn">UI/UX Design</label>
          </div>
          <div class="checkbox-wrapper">
            <input
              type="checkbox"
              id="webdesign"
              name="interest"
              value="Web Design"
              class="hidden"
            />
            <label for="webdesign" class="interest-btn">Web Design</label>
          </div>
          <div class="checkbox-wrapper">
            <input
              type="checkbox"
              id="webdev"
              name="interest"
              value="Web Development"
              class="hidden"
            />
            <label for="webdev" class="interest-btn">Web Development</label>
          </div>
          <div class="checkbox-wrapper">
            <input
              type="checkbox"
              id="website"
              name="interest"
              value="Website Creation"
              class="hidden"
            />
            <label for="website" class="interest-btn">Website Creation</label>
          </div>
          <div class="checkbox-wrapper">
            <input
              type="checkbox"
              id="animation"
              name="interest"
              value="Animation"
              class="hidden"
            />
            <label for="animation" class="interest-btn">Animation</label>
          </div>
          <div class="checkbox-wrapper">
            <input
              type="checkbox"
              id="others"
              name="interest"
              value="Others"
              class="hidden"
            />
            <label for="others" class="interest-btn">Others</label>
          </div>
        </div>
      </div>

      <div class="md:col-span-full">
        <label
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Budget in USD:
        </label>

        <div class="flex flex-wrap gap-6 mt-3">
          <div class="radio-wrapper">
            <input
              type="radio"
              id="budget1"
              name="budget"
              value="$2k-4k"
              class="hidden"
            />
            <label for="budget1" class="interest-btn">$2k-4k</label>
          </div>
          <div class="radio-wrapper">
            <input
              type="radio"
              id="budget2"
              name="budget"
              value="$4k-6k"
              class="hidden"
            />
            <label for="budget2" class="interest-btn">$4k-6k</label>
          </div>
          <div class="radio-wrapper">
            <input
              type="radio"
              id="budget3"
              name="budget"
              value="$6k-8k"
              class="hidden"
            />
            <label for="budget3" class="interest-btn">$6k-8k</label>
          </div>
        </div>
      </div>

      <div class="md:col-span-full">
        <label
          for="Message"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Project Details
        </label>
        <textarea
          name="Message"
          placeholder="Tell us about your project goals and timeline"
          class="py-4 pl-5 min-h-44 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"
        ></textarea>
      </div>

      <!-- Submit Button -->

      <a
        href="#"
        class="rv-button rv-button-secondary !w-full col-span-full"
        type="submit"
      >
        <div class="rv-button-top !w-full !text-center">
          <span class="!font-normal"> Submit Message</span>
        </div>
        <div class="rv-button-bottom !w-full !text-center">
          <span class="!font-normal"> Submit Message</span>
        </div>
      </a>
    </form>
  </div>
</section>
 
</main>

<?php
  get_template('footer');
  ?>
