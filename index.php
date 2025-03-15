<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Innovative Software Development & Digital Solutions';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


  <main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
    <!--=====================================
   Hero Section with Gradient
======================================-->
    <section class="pt-[137px] md:pt-[160px] xl:pt-[180px] pb-20 md:pb-[100px] relative overflow-hidden">
      <!-- Gradient Background Wrapper -->
      <div id="hero-gradient-wrapper" class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px]">
        <img src="images/hero-gradient-background.png" alt="Orbizen Software Solutions Background" id="hero-gradient"
          class="absolute left-1/2 top-1/2 -translate-x-1/2 max-md:-translate-y-[60%] md:-translate-y-1/2">
      </div>

      <!-- Main Content Container -->
      <div class="container reveal-me">
        <div class="text-center">
          <!-- Status Badge -->
          <div class="rv-badge mb-5 md:mb-10">
            <span class="rv-badge-text">Accepting New Projects</span>
          </div>

          <!-- Hero Heading -->
          <h1 class="mb-7 xl:mb-8">
            Transforming Businesses<br>
            with Enterprise-Grade<br>
            <span class="font-instrument italic">Software</span> Solutions
          </h1>

          <!-- Hero Description -->
          <p class="mb-10 md:mb-14 xl:mb-[76px] max-w-xl lg:max-w-[750px] mx-auto">
            Orbizen delivers custom software development, web applications, and digital transformation services. Our team of expert developers creates secure, scalable, and innovative solutions tailored to your business needs.
          </p>

          <!-- CTA Buttons -->
          <ul class="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-6 list-none">
            <!-- Primary CTA Button -->
            <li class="block md:inline-block w-[90%] mx-auto md:ml-auto md:mr-0 md:w-auto">
              <a href="contact.php" class="rv-button rv-button-secondary block md:inline-block">
                <div class="rv-button-top">
                  <span>Get a Free Consultation</span>
                </div>
                <div class="rv-button-bottom">
                  <span>Get a Free Consultation</span>
                </div>
              </a>
            </li>
            <!-- Secondary CTA Button -->
            <li class="block md:inline-block w-[90%] mx-auto md:mr-auto md:ml-0 md:w-auto">
              <a href="services.php" class="rv-button rv-button-white block md:inline-block">
                <div class="rv-button-top">
                  <span>Explore Services</span>
                </div>
                <div class="rv-button-bottom">
                  <span>Explore Services</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Additional Service Highlights Section -->
    <section class="py-16 md:py-20 relative">
      <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
          <!-- Service 1 -->
          <div class="service-card p-6 border border-gray-100 dark:border-gray-800 rounded-lg transition-all hover:shadow-lg">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Custom Software Development</h3>
            <p class="text-gray-600 dark:text-gray-300">Tailored software solutions designed to address your specific business challenges and streamline operations.</p>
          </div>
          <!-- Service 2 -->
          <div class="service-card p-6 border border-gray-100 dark:border-gray-800 rounded-lg transition-all hover:shadow-lg">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
            <p class="text-gray-600 dark:text-gray-300">Native and cross-platform mobile applications built for iOS and Android with seamless user experiences.</p>
          </div>
          <!-- Service 3 -->
          <div class="service-card p-6 border border-gray-100 dark:border-gray-800 rounded-lg transition-all hover:shadow-lg">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Web Application Development</h3>
            <p class="text-gray-600 dark:text-gray-300">Responsive, high-performance web applications using modern frameworks and cloud architecture.</p>
          </div>
          <!-- Service 4 -->
          <div class="service-card p-6 border border-gray-100 dark:border-gray-800 rounded-lg transition-all hover:shadow-lg">
            <div class="mb-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold mb-2">Cybersecurity Solutions</h3>
            <p class="text-gray-600 dark:text-gray-300">Enterprise-grade security implementations including encryption, secure authentication, and vulnerability assessments.</p>
          </div>
        </div>
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


    <!--==================================
   About Content Area With Logo
===================================-->
    <section
      class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] pt-28 md:pt-32 lg:pt-44 xl:pt-[200px] relative overflow-hidden about">
      <div class="container">
        <!-- Content Wrapper -->
        <div class="flex flex-col items-center lg:items-stretch justify-center lg:justify-normal reveal-me">
          <!-- Logo Circle -->
          <div
            class="relative w-[168px] h-[168px] bg-secondary dark:bg-white rounded-[50%] flex items-center justify-center mx-auto">
            <figure>
              <img src="images/icons/text-circle-logo.png" alt="text-circle-logo" class="inline dark:hidden">
              <img src="images/icons/text-circle-dark-logo.png" alt="text-circle-logo" class="hidden dark:inline">
            </figure>
            <div class="text">
              <p>Building Brands,and Creating Impact</p>
            </div>
          </div>

          <!-- About Description -->
          <h3 class="mt-[34px] mx-auto reveal-text relative overflow-hidden">
            We specialize in designing cutting-edge web
            <br class="hidden sm:block">
            experiences that flawlessly blend creativity with
            <br class="hidden sm:block">
            innovative technology.
            <br>
            <br>
            We provide customized solutions for <br class="hidden sm:block">
            enhancing your existing site or building <br class="hidden sm:block">
            a brand-new digital platform from the ground up
          </h3>
        </div>
      </div>
    </section>


    <!--=====================================
   Portfolio Section
======================================-->
    <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
      <div class="container">
        <!-- Section Header -->
        <div
          class="flex flex-col md:flex-row gap-y-6 gap-x-10 justify-center lg:justify-start items-start md:items-end mb-10 md:mb-20">
          <div class="flex-1">
            <div class="rv-badge reveal-me">
              <span class="rv-badge-text">Our Portfolio</span>
            </div>
            <h2 class="text-appear mt-3 md:mt-5">
              Success Stories in
              <span class="font-instrument italic">Digital</span> Innovation
            </h2>
          </div>
          <div class="flex-1">
            <p class="text-appear">
              Discover how Rivor brings brands to life with impactful digital
              solutions.Our portfolio showcases quality and creativity in every
              project.
            </p>
          </div>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="relative group cursor-pointer reveal-me">
            <a href="project-details.php" class="w-full">
              <figure class="overflow-hidden">
                <img class="w-full h-full block transition-all duration-500 group-hover:scale-125"
                  src="images/services/services-1.png" alt="Services Image">
              </figure>
              <div
                class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
                <h3 class="text-white text-2xl lg:text-[32px]">Project Nexus</h3>
                <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
                </figure>
              </div>
            </a>
          </div>
          <div class="relative group cursor-pointer reveal-me">
            <a href="project-details.php" class="w-full">
              <figure class="overflow-hidden">
                <img class="w-full h-full block transition-all duration-500 group-hover:scale-125"
                  src="images/services/services-2.png" alt="Services Image">
              </figure>
              <div
                class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
                <h3 class="text-white text-2xl lg:text-[32px]">
                  E-commerce Evolution
                </h3>
                <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
                </figure>
              </div>
            </a>
          </div>
          <div class="relative group cursor-pointer reveal-me">
            <a href="project-details.php" class="w-full">
              <figure class="overflow-hidden">
                <img class="w-full h-full block transition-all duration-500 group-hover:scale-125"
                  src="images/services/services-3.png" alt="Services Image">
              </figure>
              <div
                class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
                <h3 class="text-white text-2xl lg:text-[32px]">Brand Reimagined</h3>
                <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
                </figure>
              </div>
            </a>
          </div>
          <div class="relative group cursor-pointer reveal-me">
            <a href="project-details.php" class="w-full">
              <figure class="overflow-hidden">
                <img class="w-full h-full block transition-all duration-500 group-hover:scale-125"
                  src="images/services/services-4.png" alt="Services Image">
              </figure>
              <div
                class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
                <h3 class="text-white text-2xl lg:text-[32px]">AppXperience</h3>
                <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
                  <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                    class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
                </figure>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section
      class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden @@Spacing">
      <div class="container">
        <div
          class="flex flex-col md:flex-row gap-y-3 gap-x-10 justify-center lg:justify-start items-start sm:items-center mb-16 md:mb-20">
          <div class="flex-1">
            <h2 class="text-appear-2">
              Accelerating Your <br>
              <span class="font-instrument italic">Digital</span> Transformation
            </h2>
          </div>
          <div class="flex-1 max-w-lg">
            <p class="text-appear max-md:text-justify dark:text-colorText text-appear-2">
              Orbizen develops enterprise software solutions that drive innovation and efficiency. From custom development to cloud migration, we deliver technology that powers your business growth.
            </p>
          </div>
        </div>
      </div>

      <div
        class="flex max-xl:flex-wrap max-xl:gap-5 justify-center [&>*:not(:last-child)]:border-l dark:[&>*:not(:last-child)]:border-l-dark [&>*:last-child]:border-l dark:[&>*:last-child]:border-l-dark [&>*]:border-y dark:[&>*]:border-y-dark max-xl:[&>*:first-child]:border-r dark:max-xl:[&>*:first-child]:border-dark max-xl:[&>*:nth-child(2)]:border-r dark:max-xl:[&>*:nth-child(2)]:border-dark max-2xl:[&>*:nth-child(3)]:border-r dark:max-2xl:[&>*:nth-child(3)]:border-dark xl:px-5">
        <!-- Research Card -->
        <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
          <div
            class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
            <h5 class="max-sm:text-3xl">Research</h5>
          </div>

          <div
            class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
            <a href="services-details.php">
              <div class="mb-[55px] flex gap-1 items-center justify-between">
                <h5
                  class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
                  Research
                </h5>
                <span class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                    <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </span>
              </div>
              <p
                class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
                What specific research are you interested in? Research can range
                across a variety of fields such as:
              </p>
              <ul
                class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
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
          <div
            class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
            <h5 class="max-sm:text-3xl">Studio</h5>
          </div>

          <div
            class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
            <a href="services-details.php">
              <div class="mb-[55px] flex gap-1 items-center justify-between">
                <h5
                  class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
                  Studio
                </h5>
                <span class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0">
                  <svg class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                    <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </span>
              </div>
              <p
                class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
                What specific design elements are you focusing on? Design can span
                across:
              </p>
              <ul
                class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
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
          <div
            class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
            <h5 class="max-sm:text-3xl">Media</h5>
          </div>

          <div
            class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
            <a href="services-details.php">
              <div class="mb-[55px] flex gap-1 items-center justify-between">
                <h5
                  class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
                  Media
                </h5>
                <span>
                  <svg class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none">
                    <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </span>
              </div>
              <p
                class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
                What specific design elements are you focusing on? Design can span
                across:
              </p>
              <ul
                class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
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
          <div
            class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700">
            <h5 class="max-sm:text-3xl">Development</h5>
          </div>

          <div
            class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10">
            <a href="services-details.php">
              <div class="mb-[55px] flex gap-1 items-center justify-between">
                <h5
                  class="max-sm:text-3xl text-white t dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]">
                  Development
                </h5>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32" fill="none"
                    class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0">
                    <path d="M5 16H27" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path d="M18 7L27 16L18 25" class="stroke-white dark:stroke-black" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </svg>
                </span>
              </div>
              <p
                class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]">
                Which aspects of UI/UX design are you targeting? Consider:
              </p>
              <ul
                class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]">
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
   Community & Social Section
======================================-->
    <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
      <div class="container">
        <!-- Section Header -->
        <div class="text-center">
          <h2 class="mb-12 md:mb-20 text-appear">
            Growing <span class="font-instrument italic">together.</span> <br>As a
            community.
          </h2>
        </div>

        <!-- Community Grid -->
        <div class="grid grid-cols-12 gap-6">
          <!-- Discord Community Card -->
          <div
            class="col-span-full flex flex-col md:flex-row max-md:gap-y-8 gap-x-4 justify-center md:justify-between items-start md:items-center border dark:border-dark p-6 md:p-10 reveal-me">
            <div class="max-md:block max-md:w-full">
              <h3 class="mb-8 md:my-8 lg:text-4xl leading-[1.2] tracking-[-1.08px]">
                Join Our Community of <br>
                500+ Designers
              </h3>
              <a href="https://discord.com/invite/Y8n8ST6a"
                class="rv-button rv-button-secondary block md:inline-block w-full md:w-auto">
                <div class="rv-button-top text-center">
                  <span>Join Discord</span>
                </div>
                <div class="rv-button-bottom text-center">
                  <span>Join Discord</span>
                </div>
              </a>
            </div>
            <figure class="max-md:w-full">
              <img src="images/community-image.jpg" alt="Community Discussion" class="max-md:w-full">
            </figure>
          </div>

          <!-- YouTube Channel Card -->
          <div
            class="col-span-full md:col-span-6 border dark:border-dark pt-10 pb-10 md:pb-[60px] text-center reveal-me">
            <div
              class="inline-block border border-colorText dark:border-colorText rounded-[72px] bg-backgroundBody/20 dark:bg-secondary">
              <span
                class="text-black dark:text-[#FFF] text-xs uppercase tracking-[0.96px] py-2 px-4 bg-gradient-to-r from-secondary to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block">Youtube</span>
            </div>
            <h3 class="my-6 md:my-8 text-[25px] lg:text-4xl leading-[1.2] tracking-[-1.08px]">
              Design Tips & <br>
              Tutorial Videos
            </h3>
            <a href="https://youtu.be/JGLfyTDgfDc?si=0-iUKu3hv8uewpxg" target="_blank"
              class="rv-button rv-button-secondary block md:inline-block w-[90%] max-md:mx-auto md:w-auto">
              <div class="rv-button-top">
                <span>Subscribe Now</span>
              </div>
              <div class="rv-button-bottom">
                <span>Subscribe Now</span>
              </div>
            </a>
          </div>

          <!-- LinkedIn Profile Card -->
          <div
            class="col-span-full md:col-span-6 border dark:border-dark pt-10 pb-10 md:pb-[60px] text-center reveal-me">
            <div
              class="inline-block border border-colorText dark:border-colorText rounded-[72px] bg-backgroundBody/20 dark:bg-secondary">
              <span
                class="text-black dark:text-[#FFF] text-xs uppercase tracking-[0.96px] py-2 px-4 bg-gradient-to-r from-secondary to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block">Linkedin</span>
            </div>
            <h3 class="my-6 md:my-8 text-[25px] lg:text-4xl leading-[1.2] tracking-[-1.08px]">
              Stay Updated On <br>
              Latest Design Trends
            </h3>
            <a href="https://www.linkedin.com/company/staticmania" target="_blank"
              class="rv-button rv-button-secondary block md:inline-block w-[90%] max-md:mx-auto md:w-auto">
              <div class="rv-button-top">
                <span>Follow Now</span>
              </div>
              <div class="rv-button-bottom">
                <span>Follow Now</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!--=====================================
   FAQ Section
======================================-->
    <section
      class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
      <div
        class="absolute scale-y-[3.4] sm:scale-y-[1.6] md:scale-y-[1.5] lg:scale-y-[1.5] xl:scale-y-[1.4] 2xl:scale-y-[1] scale-x-[2.8] md:scale-x-[1.9] lg:scale-x-[1.7] left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 -z-30">
        <img src="images/gradient-bg.png" alt="gradient-bg">
      </div>
      <div class="container">
        <!-- FAQ Section Title -->
        <h2 class="mb-10 md:mb-20 text-center text-appear">
          Frequently Asked <span class="font-instrument italic">Questions</span>
        </h2>

        <!-- FAQ Items Container -->
        <div class="max-w-[900px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me">
          <!-- FAQ Item 1 -->
          <div
            class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
            <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
              <h3
                class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10">
                What services does Rivor offer?
              </h3>
              <div class="accordion-header-icon dark:border-dark"></div>
            </div>
            <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
              Rivor provides a range of digital services including web design,
              development, SEO, branding, mobile app development, and digital
              marketing. The email automation company also enhances the UX
              using a sidebar with a category overview and jump-to links,
              information about additional resources, and messages that encourage
              sales conversions.
            </p>
          </div>

          <!-- FAQ Item 2 -->
          <div
            class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
            <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
              <h3
                class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-11">
                How long does a project typically take to complete?
              </h3>
              <div class="accordion-header-icon dark:border-dark"></div>
            </div>
            <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
              Project timelines vary depending on the scope and complexity. We work
              with you to set clear deadlines and ensure timely delivery.
            </p>
          </div>

          <!-- FAQ Item 3 -->
          <div
            class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
            <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
              <h3
                class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-9">
                Can Rivor handle both small and large-scale projects?
              </h3>
              <div class="accordion-header-icon dark:border-dark"></div>
            </div>
            <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
              Yes, we are equipped to handle projects of any size, from small
              startups to large enterprises, tailoring our approach to meet your
              specific needs.
            </p>
          </div>

          <!-- FAQ Item 4 -->
          <div
            class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
            <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
              <h3
                class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8">
                How involved will I be in the project?
              </h3>
              <div class="accordion-header-icon dark:border-dark"></div>
            </div>
            <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
              We value collaboration and will keep you updated at every stage. Your
              input is crucial to ensure we align with your vision and goals.
            </p>
          </div>

          <!-- FAQ Item 5 -->
          <div
            class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
            <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
              <h3
                class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8">
                Do you provide post-launch support?
              </h3>
              <div class="accordion-header-icon dark:border-dark"></div>
            </div>
            <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
              Absolutely! We offer ongoing support and maintenance to ensure your
              project runs smoothly after launch.
            </p>
          </div>
        </div>
      </div>
    </section>


    <!--=====================================
   Client Testimonials Section
======================================-->
    <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
      <div class="container">
        <!-- Section Heading -->
        <h2 class="text-center mb-10 md:mb-20 text-appear">
          Client <span class="font-instrument italic">testimonials</span>
        </h2>
        <!-- Testimonials Grid -->
        <div class="columns-[300px] gap-6 [&>*:not(:last-child)]:mb-6">
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-1.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Cindy Ibanez
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Founder of Product Hunt
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working withwas an absolute game-changer for our business. From the
              very first meeting, their team took the time to understand our traffic
              and customer unique needs and vision.”
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-2.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Darrell Steward
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Founder of Product Hunt
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working withwas an absolute game-changer for our business. From the
              very first meeting, their team took the time to understand our traffic
              and customer unique needs and vision.”
              <br>
              <br>
              They were incredibly responsive, making us feel like a top priority
              throughout the entire process"
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-3.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Wade Warren
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  General Manager at Lattice
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working with was an absolute game changer for our business. From the
              very first meeting, theirour unique needs and vision.”
              <br>
              <br>
              They were incredibly responsive, making us feel like a top priority
              throughout the entire process"
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-4.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Jacob Jones
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Founder of Product Hunt
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working withwas an absolute game-changer for our business. From the
              very first meeting, their team took the time.”
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-5.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Esther Howard
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Founder of Product
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working withwas an absolute game-changer for our business. From the
              very first meeting, their team took the time.”
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-6.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Ralph Edwards
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Finance Director
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "They were incredibly responsive throughout the entire process."
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-7.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Kristin Watson
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Founder at Early Exit Club
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working withwas an absolute game-changer for our business. From the
              very first meeting, their team took the time.their attention to detail
              and commitment to delivering a product that exceeds expectations."
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-8.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Albert Flores
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  CEO & Co-Founder at Butter
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working with was an absolute game changer for our business. From the
              very first meeting, their team took the time to understand our unique
              needs and vision. They were incredibly responsive the entire process."
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-9.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Eleanor Pena
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Co-founder at Yonder
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working with was an absolute game changer for our business. From the
              very first meeting, their team took the time to understand our unique
              needs and vision. They were incredibly.”
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-10.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Kathryn Murphy
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  CEO at Vercel
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-6 md:tracking-[0.9px]">
              "Working an absolute game expectations."
            </p>
          </div>
          <!-- Testimonial Card -->
          <div class="py-[30px] px-[30px] border dark:border-dark flex flex-col gap-5 reveal-me">
            <div class="flex items-center gap-[15px]">
              <figure>
                <img src="images/avatar/review-11.png" alt="Review Author">
              </figure>
              <div>
                <h3 class="text-[20px] font-bold leading-[28.8px] tracking-wide">
                  Brooklyn Simmons
                </h3>
                <p class="text-base font-light leading-5 font-poppins mt-[3.5px]">
                  Analyst at Antler
                </p>
              </div>
            </div>
            <p class="italic text-base md:text-[17px] md:leading-7 md:tracking-[0.9px]">
              "Working with was an absolute game changer for our business. From the
              very first meeting. Working with was an"
            </p>
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
          Ready to innovate?
          <div
            class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-5 translate-y-2 sm:translate-y-[20px] max-sm:mt-2.5">
            <div class="cta-inline-slider">
              <div class="slide">
                <img src="images/agent/01.jpg" alt="Orbizen Software Team Member" loading="lazy">
              </div>
              <div class="slide">
                <img src="images/agent/02.jpg" alt="Orbizen Software Expert" loading="lazy">
              </div>
              <div class="slide">
                <img src="images/agent/03.jpg" alt="Orbizen Development Team" loading="lazy">
              </div>
            </div>
          </div>
          Talk to our experts.

          <span class="font-instrument sm:mt-10 italic block max-md:inline-block">Schedule your discovery call today</span>
        </h2>

        <!-- Email Subscription Form -->
        <form class="max-md:max-w-sm max-w-[570px] mt-8 md:mt-10 flex bg-secondary text-white mx-auto w-full relative">
          <input type="email" placeholder="your.email@company.com" aria-label="Email address for consultation"
            class="border-none focus:outline-none bg-transparent text-base block w-full p-5 md:p-7">
          <button type="submit"
            class="inline-block bg-primary p-3 md:p-6 uppercase text-secondary max-md:text-xs md:leading-[15.4px] md:tracking-[1.12px] absolute top-3 md:top-2 cursor-pointer right-3 md:right-2">
            Request Demo
          </button>
        </form>
      </div>
    </section>

  </main>


  <?php
  get_template('footer');
  ?>
