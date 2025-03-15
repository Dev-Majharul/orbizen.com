<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Transforming Ideas into Digital Reality';
$PAGE_DESCRIPTION = 'Orbizen Limited pioneers cutting-edge digital solutions through expert software engineering, immersive web experiences, and enterprise-grade SaaS platforms. Our blockchain innovation and cybersecurity excellence drive digital transformation forward.';


get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Case Studies Grid Section
======================================-->
<section
  class="pt-28 sm:pt-36 md:pt-[157px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <!-- Section Header -->
    <div
      class="flex flex-col md:flex-row gap-x-10 gap-y-3 sm:gap-y-7 justify-center lg:justify-between items-center md:items-end mb-20 md:mb-28 xl:mb-32"
    >
      <div class="">
        <h2
          class="text-appear text-[46px] max-lg:leading-[1.33] lg:text-7xl xl:text-[96px] font-normal leading-[1.1] lg:tracking-[-2.88px]"
        >
          <span class="font-instrument italic">Proud</span>
          <br class="hidden md:block" />
          Case Studies
        </h2>
      </div>
      <div class="md:self-end">
        <p class="text-appear">
          When presenting recent case studies, it's important <br />
          to highlight key aspects that showcase your <br />
          agency's work and impact. Here's a general <br />
          structure you might follow.
        </p>
      </div>
    </div>

    <!-- Case Studies Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-14">
      <div class="reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-1.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">Staticmania</h3>
          </div>
        </a>
      </div>
      <div class="md:mt-12 lg:mt-20 reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-7.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center mb-1">
            <h3 class="capitalize text-center">creative studio</h3>
          </div>
        </a>
      </div>
      <div class="reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-3.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">HealthTech</h3>
          </div>
        </a>
      </div>

      <div class="md:mt-12 lg:mt-20 reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-7.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center mb-1">
            <h3 class="capitalize text-center">BeautyForge</h3>
          </div>
        </a>
      </div>
      <div class="reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-5.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">Tech Canvas</h3>
          </div>
        </a>
      </div>

      <div class="md:mt-12 lg:mt-20 reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-6.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center mb-1">
            <h3 class="capitalize text-center">Next-Gen Style</h3>
          </div>
        </a>
      </div>
      <div class="reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-7.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center">
            <h3 class="capitalize text-center">Trendsetting Style</h3>
          </div>
        </a>
      </div>

      <div class="md:mt-12 lg:mt-20 reveal-me underline-hover-effect group">
        <a href="project-details.php">
          <figure class="overflow-hidden">
            <img
              src="images/project-3/services-8.png"
              class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
              alt="Services Img"
            />
          </figure>
          <div class="blog-title mt-[30px] text-center mb-1">
            <h3 class="capitalize text-center">Digital Palette</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!--===============================
    Inspiring CTA Section
===============================-->
<section
  class="bg-[#fffbfb] dark:bg-[#161616] mt-14 md:mt-16 lg:mt-[88px] xl:mt-[100px] pt-16 lg:pt-[100px] pb-20 md:pb-36"
>
  <!-- Container for the CTA section -->
  <div
    class="container flex flex-col md:flex-row justify-center max-md:items-center gap-y-10 sm:justify-between"
  >
    <!-- CTA Heading -->
    <h2
      class="text-[46px] max-lg:leading-[1.33] lg:text-[96px] font-normal leading-[1.1] lg:tracking-[-2.88px] reveal-me"
    >
      <span class="font-instrument lg:text-[100px] italic">New</span>
      <br class="hidden md:block" />
      Project?
    </h2>

    <!-- CTA Button -->
    <a href="contact.php">
      <div
        class="bg-secondary dark:bg-primary p-5 w-44 h-44 lg:w-[230px] lg:h-[230px] group reveal-me"
      >
        <figure class="bg-primary dark:bg-secondary w-full h-full relative">
          <!-- Arrow Icon (Light Mode) -->
          <img
            src="images/icons/big-arrow-Icon.svg"
            alt="Big Arrow Icon"
            class="dark:hidden inline absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-28 group-hover:translate-x-9 transition-all duration-500 opacity-100 group-hover:opacity-0"
          />
          <!-- Arrow Icon (Dark Mode) -->
          <img
            src="images/icons/big-arrow-Icon-dark.svg"
            alt="Big Arrow Icon"
            class="dark:inline hidden absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-28 group-hover:translate-x-9 transition-all duration-500 opacity-100 group-hover:opacity-0"
          />
          <!-- Arrow Icon (Light Mode - Hover) -->
          <img
            src="images/icons/big-arrow-Icon.svg"
            alt="Big Arrow Icon"
            class="inline dark:hidden absolute top-full -left-2 -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-32 group-hover:translate-x-[80%] transition-all duration-500 opacity-0 group-hover:opacity-100"
          />
          <!-- Arrow Icon (Dark Mode - Hover) -->
          <img
            src="images/icons/big-arrow-Icon-dark.svg"
            alt="Big Arrow Icon"
            class="dark:inline hidden absolute top-full -left-2 -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-32 group-hover:translate-x-[80%] transition-all duration-500 opacity-0 group-hover:opacity-100"
          />
        </figure>
      </div>
    </a>
  </div>
</section>

</main>

<?php
  get_template('footer');
  ?>
