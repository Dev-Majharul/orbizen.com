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
  class="relative z-20 w-full max-sm:pt-32 max-2xl:pt-40 2xl:min-h-screen flex items-center justify-center overflow-hidden"
>
  <!-- Background Images -->
  <div class="absolute top-0 left-0 hidden 2xl:block">
    <img
      src="images/home-3/hero-v8-img-1.png"
      alt="Abstract Top Left"
      class="w-full h-full object-cover"
    />
  </div>
  <div class="absolute top-0 right-0 hidden 2xl:block">
    <img
      src="images/home-3/hero-v8-img-2.png"
      alt="Abstract Top Right"
      class="w-full h-full object-cover"
    />
  </div>
  <div class="absolute bottom-0 left-0 hidden 2xl:block">
    <img
      src="images/home-3/hero-v8-img-3.png"
      alt="Abstract Bottom Left"
      class="w-full h-full object-cover"
    />
  </div>
  <div class="absolute bottom-0 right-0 hidden 2xl:block">
    <img
      src="images/home-3/hero-v8-img-4.png"
      alt="Abstract Bottom Right"
      class="w-full h-full object-cover"
    />
  </div>

  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] block 2xl:hidden scale-90"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 max-md:-translate-y-1/2 md:-translate-y-1/2"
    />
  </div>

  <!-- Content -->
  <div class="relative text-center z-10 px-4">
    <h1
      class="text-7xl sm:text-8xl md:text-[255px] lg:text-[338px] font-medium lg:leading-[338px] lg:tracking-[-10.14px] uppercase"
    >
      RIVOR
    </h1>
    <h2 class="mt-6 md:mt-10 lg:mt-20">
      Powering <br />
      businesses with <br />
      modern tech
    </h2>
  </div>
</section>


 <section
  class="pt-28 md:pt-32 lg:pt-44 xl:pt-[200px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <!-- About Description -->
    <h3 class="mx-auto reveal-text-2 reveal-me">
      We specialize in designing cutting-edge web <br />
      experiences that flawlessly blend creativity with <br />
      innovative technology.
      <br />
      <br />
      We provide customized solutions for <br />
      enhancing your existing site or building <br />
      a brand-new digital platform from the ground up
    </h3>

    <div
      class="flex max-md:flex-wrap items-center justify-around gap-[30px] pt-[75px] reveal-me"
    >
      <div
        class="border dark:border-dark py-7 lg:py-10 px-9 lg:px-16 space-y-3 flex justify-center flex-col items-center"
        id="counter"
      >
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="15"></span>
        </h2>
        <p>Years of Experience</p>
      </div>
      <div
        class="border dark:border-dark py-7 lg:py-10 px-9 lg:px-16 space-y-3 flex justify-center flex-col items-center"
        id="counter"
      >
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="50"></span> +
        </h2>
        <p>Countries in Services</p>
      </div>
      <div
        class="border dark:border-dark py-7 lg:py-10 px-9 lg:px-16 space-y-3 flex justify-center flex-col items-center"
        id="counter"
      >
        <h2 class="lg:text-7xl">
          <span class="counter" data-value="30"></span> %
        </h2>
        <p>Incrase in Productivity</p>
      </div>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div class="text-center">
      <div class="rv-badge mb-3 md:mb-8 reveal-me">
        <span class="rv-badge-text">Solutions</span>
      </div>
      <h2 class="mx-auto mb-10 md:mb-20 text-appear">
        Creative solutions for your business <br />
        challenges.
      </h2>
    </div>
    <div class="[&>*:not(:last-child)]:mb-4">
      <!-- Card -1 -->
      <div
        class="flex flex-col-reverse md:flex-row items-center border dark:border-dark md:gap-x-11 lg:gap-x-[70px] md:gap-y-10 reveal-me underline-hover-effect group"
      >
        <div class="pl-5 lg:pl-10 max-md:pr-5 max-lg:py-6 flex-1">
          <a href="blog-details.php">
            <div class="blog-title mb-6">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                Understanding Your Business Goals
              </h3>
            </div>
          </a>
          <p class="border-t dark:border-dark pt-2 md:pt-5">
            We start by gaining a deep understanding of your business goals.
          </p>
        </div>
        <figure
          class="overflow-hidden flex-1 w-full h-full max-md:p-3 max-lg:pr-4"
        >
          <a href="blog-details.php" class="block">
            <img
              src="images/blog-img/blogV3-img-1.png"
              alt="Blog Images"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </a>
        </figure>
      </div>
      <!-- Card -2 -->
      <div
        class="flex flex-col-reverse md:flex-row items-center border dark:border-dark md:gap-x-11 lg:gap-x-[70px] md:gap-y-10 reveal-me underline-hover-effect group"
      >
        <div class="pl-5 lg:pl-10 max-md:pr-5 max-lg:py-6 flex-1">
          <a href="blog-details.php">
            <div class="blog-title mb-6">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                Developing Tailored Solutions
              </h3>
            </div>
          </a>
          <p class="border-t dark:border-dark pt-2 md:pt-5">
            Next, our team of experts develops tailored solutions.
          </p>
        </div>
        <figure
          class="overflow-hidden flex-1 w-full h-full max-md:p-3 max-lg:pr-4"
        >
          <a href="blog-details.php" class="block">
            <img
              src="images/blog-img/blogV3-img-2.png"
              alt="Blog Images"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </a>
        </figure>
      </div>
      <!-- Card -3 -->
      <div
        class="flex flex-col-reverse md:flex-row items-center border dark:border-dark md:gap-x-11 lg:gap-x-[70px] md:gap-y-10 reveal-me underline-hover-effect group"
      >
        <div class="pl-5 lg:pl-10 max-md:pr-5 max-lg:py-6 flex-1">
          <a href="blog-details.php">
            <div class="blog-title mb-6">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                Implementing Technology
              </h3>
            </div>
          </a>
          <p class="border-t dark:border-dark pt-2 md:pt-5">
            We leverage cutting-edge technology to implement seamlessly
          </p>
        </div>
        <figure
          class="overflow-hidden flex-1 w-full h-full max-md:p-3 max-lg:pr-4"
        >
          <a href="blog-details.php" class="block">
            <img
              src="images/blog-img/blogV3-img-3.png"
              alt="Blog Images"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </a>
        </figure>
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
      <div class="rv-badge mb-3 md:mb-8 reveal-me">
        <span class="rv-badge-text">Services</span>
      </div>
      <h2 class="text-appear">
        Creative solutions for your business <br />
        challenges.
      </h2>
    </div>

    <!-- Services Container -->
    <div
      class="max-w-[1170px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me"
    >
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 transition-all duration-300"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between"
          >
            <div
              class="absolute inset-0 opacity-0 bg-[url('/images/services/services-background.png')] bg-cover transition-opacity duration-700 in-expo group-hover:opacity-100"
            ></div>

            <h3
              class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span
                class="font-medium transition-colors duration-700 group-hover:text-white"
              >
                Software Solution
              </span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg transition-colors duration-700 group-hover:text-white"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="relative overflow-hidden z-10 bg-white dark:bg-dark border dark:border-dark inline-flex size-14 md:size-24 transition-all duration-[800ms] ease-faq-body-transition group-hover:bg-primary group-hover:border-transparent"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:translate-x-20 transition-all duration-500 in-expo opacity-100 group-hover:opacity-0"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-20 -translate-y-1/2 group-hover:-translate-x-1/2 transition-all duration-500 opacity-0 group-hover:opacity-100"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 transition-all duration-300"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between"
          >
            <div
              class="absolute inset-0 opacity-0 bg-[url('/images/services/services-background-02.png')] bg-cover transition-opacity duration-700 in-expo group-hover:opacity-100"
            ></div>

            <h3
              class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span
                class="font-medium transition-colors duration-700 group-hover:text-white"
              >
                Hardware Solution
              </span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg transition-colors duration-700 group-hover:text-white"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="relative overflow-hidden z-10 bg-white dark:bg-dark border dark:border-dark inline-flex size-14 md:size-24 transition-all duration-[800ms] ease-faq-body-transition group-hover:bg-primary group-hover:border-transparent"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:translate-x-20 transition-all duration-500 in-expo opacity-100 group-hover:opacity-0"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-20 -translate-y-1/2 group-hover:-translate-x-1/2 transition-all duration-500 opacity-0 group-hover:opacity-100"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 transition-all duration-300"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between"
          >
            <div
              class="absolute inset-0 opacity-0 bg-[url('/images/services/services-background-03.png')] bg-cover transition-opacity duration-700 in-expo group-hover:opacity-100"
            ></div>

            <h3
              class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span
                class="font-medium transition-colors duration-700 group-hover:text-white"
              >
                Artificial Intelligence
              </span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg transition-colors duration-700 group-hover:text-white"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="relative overflow-hidden z-10 bg-white dark:bg-dark border dark:border-dark inline-flex size-14 md:size-24 transition-all duration-[800ms] ease-faq-body-transition group-hover:bg-primary group-hover:border-transparent"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:translate-x-20 transition-all duration-500 in-expo opacity-100 group-hover:opacity-0"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-20 -translate-y-1/2 group-hover:-translate-x-1/2 transition-all duration-500 opacity-0 group-hover:opacity-100"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>
        </div>
      </a>
      <!--  -->
      <a href="services-details.php" class="block">
        <div
          class="bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 transition-all duration-300"
        >
          <div
            class="relative group z-10 cursor-pointer py-5 px-5 md:px-10 flex justify-between"
          >
            <div
              class="absolute inset-0 opacity-0 bg-[url('/images/services/services-background-04.png')] bg-cover transition-opacity duration-700 in-expo group-hover:opacity-100"
            ></div>

            <h3
              class="relative z-10 flex flex-col md:flex-row items-start md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
            >
              <span
                class="font-medium transition-colors duration-700 group-hover:text-white"
              >
                Innovative Solutions
              </span>
              <p
                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg transition-colors duration-700 group-hover:text-white"
              >
                Delivering a stellar experience for every user.
              </p>
            </h3>

            <div
              class="relative overflow-hidden z-10 bg-white dark:bg-dark border dark:border-dark inline-flex size-14 md:size-24 transition-all duration-[800ms] ease-faq-body-transition group-hover:bg-primary group-hover:border-transparent"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:translate-x-20 transition-all duration-500 in-expo opacity-100 group-hover:opacity-0"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-20 -translate-y-1/2 group-hover:-translate-x-1/2 transition-all duration-500 opacity-0 group-hover:opacity-100"
              >
                <path
                  d="M5 16H27"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-black dark:stroke-white transition-colors duration-500 group-hover:stroke-white"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <div class="container">
    <div class="text-center mb-10 md:mb-20">
      <div class="rv-badge mb-3.5 md:mb-8 reveal-me">
        <span class="rv-badge-text">User Review</span>
      </div>
      <h2 class="text-appear">Simple pricing to boost your brand.</h2>
    </div>
  </div>
  <!-- Clients Logo Marquee -->
  <div class="relative">
    <div
      class="absolute left-0 top-0 h-full w-[15%] md:w-[20%] bg-gradient-to-r from-white to-transparent dark:from-dark-gradient z-40"
    ></div>
    <div
      class="absolute right-0 top-0 h-full w-[15%] md:w-[20%] bg-gradient-to-l from-white to-transparent dark:from-dark-gradient z-40"
    ></div>
    <div class="marquee-container reveal-me">
      <div class="flex gap-7">
        <!--Review Card 01 -->
        <div
          class="max-w-[408px] border dark:border-backgroundBody/10 p-5 ml-7"
        >
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-1.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Wade Warren
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                Product Designer
              </p>
            </div>
          </div>
          <span class="w-full block">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
              class="w-full"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </div>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!--Review Card 02 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-2.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Marvin McKinney
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                Manager at Lattice
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!--Review Card 03 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-3.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Arlene McCoy
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                General Manager at Lattice
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!--Review Card 04 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-4.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Arlene McCoy
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                General Manager at Lattice
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!-- Review Card 05 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-5.png"
              alt="Devon Lane"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Devon Lane
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                Marketing Specialist at Omega
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Quis autem vel eum iure reprehenderit qui in ea voluptate velit
            esse.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 18, 2024</span
            >
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Reverse -->
  <div class="relative">
    <div
      class="absolute left-0 top-0 h-full w-[10%] md:w-[20%] bg-gradient-to-r from-white to-transparent dark:from-dark-gradient z-40"
    ></div>
    <div
      class="absolute right-0 top-0 h-full w-[10%] md:w-[20%] bg-gradient-to-l from-white to-transparent dark:from-dark-gradient z-40"
    ></div>
    <div class="marquee-reverse-container reveal-me mt-[30px]">
      <div class="flex gap-7">
        <!--Review Card 01 -->
        <div
          class="max-w-[408px] border dark:border-backgroundBody/10 p-5 ml-7"
        >
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-1.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Wade Warren
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                Product Designer
              </p>
            </div>
          </div>
          <span class="w-full block">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
              class="w-full"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </div>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!--Review Card 02 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-2.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Marvin McKinney
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                Manager at Lattice
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!--Review Card 03 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-3.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Arlene McCoy
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                General Manager at Lattice
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!--Review Card 04 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-4.png"
              alt="Wade Warren"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Arlene McCoy
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                General Manager at Lattice
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Sed rem perspiciatis unde omnis iste natus quae ab illo inventore
            veritatis et quasi.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>

          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 03, 2024</span
            >
          </div>
        </div>
        <!-- Review Card 05 -->
        <div class="max-w-[408px] border dark:border-backgroundBody/10 p-5">
          <div class="flex items-center space-x-4 pb-4">
            <img
              src="images/avatar/review-5.png"
              alt="Devon Lane"
              class="rounded-full w-16 h-16"
            />
            <div>
              <h3 class="text-[22px] leading-[28.8px] tracking-wide">
                Devon Lane
              </h3>
              <p class="text-[15px] font-light leading-6 mt-[2px]">
                Marketing Specialist at Omega
              </p>
            </div>
          </div>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <blockquote
            class="text-base md:text-xl md:leading-7 md:tracking-[0.4px] text-colorText py-4 text-pretty"
          >
            “Quis autem vel eum iure reprehenderit qui in ea voluptate velit
            esse.”
          </blockquote>
          <span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="2"
              viewBox="0 0 362 2"
              fill="none"
            >
              <path
                class="stroke-secondary dark:stroke-backgroundBody"
                d="M0 0.785156H362"
                stroke-opacity="0.1"
                stroke-dasharray="6 6"
              />
            </svg>
          </span>
          <div class="flex justify-between items-center pt-4">
            <div class="flex items-center space-x-1">
              <img
                src="images/icons/testimonial-logo.png"
                alt="Logo"
                class="inline dark:hidden"
              />
              <img
                src="images/icons/testimonial-dark-logo.png"
                alt="Logo"
                class="dark:inline hidden"
              />
            </div>
            <span class="text-colorText text-sm font-light leading-5"
              >Feb 18, 2024</span
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 
 <!--=====================================
   FAQ Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative @@faqSpacing"
>
  <div
    class="absolute scale-y-[3.5] sm:scale-y-[2.2] md:scale-y-[1.6] xl:scale-y-[1.4] scale-x-[1.7] left-1/2 top-1/2 max-md:-translate-y-[45%] md:-translate-y-1/2 -translate-x-1/2 -z-30"
  >
    <img src="images/gradient-bg.png" alt="gradient-bg" />
  </div>
  <div class="container">
    <!-- FAQ Section Title -->
    <div class="text-center hidden">
      <div class="rv-badge mb-3 lg:mb-7 reveal-me">
        <span class="rv-badge-text">Faq</span>
      </div>
    </div>
    <h1 class="mb-10 md:mb-20 text-center lg:text-[84px] text-appear-2">
      Frequently Asked Questions
    </h1>

    <!-- FAQ Items Container -->
    <div
      class="max-w-[900px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me"
    >
      <!-- FAQ Item 1 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10"
          >
            What services does Rivor offer?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          Rivor provides a range of digital services including web design,
          development, SEO, branding, mobile app development, and digital
          marketing. development, SEO, branding, mobile app development, and
          digital marketing. The email automation company also enhances the UX
          using a sidebar with a category overview and jump-to links,
          information about additional resources, and messages that encourage
          sales conversions.
        </p>
      </div>

      <!-- FAQ Item 2 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10"
          >
            How long does a project typically take to complete?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          Project timelines vary depending on the scope and complexity. We work
          with you to set clear deadlines and ensure timely delivery.
        </p>
      </div>

      <!-- FAQ Item 3 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8"
          >
            Can Rivor handle both small and large-scale projects?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          Yes, we are equipped to handle projects of any size, from small
          startups to large enterprises, tailoring our approach to meet your
          specific needs.
        </p>
      </div>

      <!-- FAQ Item 4 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8"
          >
            How involved will I be in the project?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          We value collaboration and will keep you updated at every stage. Your
          input is crucial to ensure we align with your vision and goals.
        </p>
      </div>

      <!-- FAQ Item 5 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8"
          >
            Do you provide post-launch support?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          Absolutely! We offer ongoing support and maintenance to ensure your
          project runs smoothly after launch.
        </p>
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
