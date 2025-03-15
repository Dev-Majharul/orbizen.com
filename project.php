<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Project';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Page Header Section
======================================-->
<section class="pt-28 sm:pb-28 max-md:pb-16 md:py-[155px] lg:py-[177px] relative z-50 overflow-hidden">
  <div id="hero-gradient-wrapper" class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] scale-75">
    <!-- Gradient Background Image: Positioned centrally with responsive sizing -->
    <img src="images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
  </div>

  <!-- Content Container -->
  <div class="container">
    <!-- Centered Content with Animation -->
    <div class="text-center reveal-me">
      <!-- Badge Component -->
      <div class="rv-badge">
        <span class="rv-badge-text">Project</span>
      </div>

      <!-- Title and Description -->
      <h1 class="mt-3.5 sm:mt-5 lg:mt-9 mb-3 sm:mb-4 lg:mb-7">Quality stuff.<span class="font-instrument italic"> In every <br class="hidden md:block "> project.</span></h1>
      <p></p>
    </div>
  </div>
</section>


<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-xs:px-5">
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 group-hover:scale-125" src="images/services/services-1.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Project Nexus</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-2.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Code.ai</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-3.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Black Code.ai</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-4.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Graphic.ai</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-5.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Booklet mockup</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-6.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Packaging</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-7.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Business Card</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
      <div class="relative group cursor-pointer reveal-me">
        <a href="project-details.php" class="w-full">
          <figure class="overflow-hidden">
            <img class="w-full h-full block transition-all duration-500 hover:scale-125" src="images/services/services-8.png" alt="Services Image">
          </figure>
          <div class="bg-secondary/50 backdrop-blur w-[calc(100%-20px)] py-2.5 pl-5 sm:pl-10 mx-2.5 absolute bottom-4 pr-2.5 flex items-center justify-between group-hover:scale-[1.01] transition-all duration-500">
            <h3 class="text-white text-2xl lg:text-[32px]">Clay.ai</h3>
            <figure class="bg-primary p-7 lg:p-8 cursor-pointer relative overflow-hidden">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0">
              <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon" class="absolute translate-y-8 -translate-x-12 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:-translate-x-2.5 group-hover:-translate-y-2">
            </figure>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   CTA Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-20 lg:pb-28 relative overflow-hidden">
  <div class="absolute scale-x-[2.5] scale-y-[0.75] left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2">
    <img src="images/gradient-bg.png" alt="">
  </div>
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
