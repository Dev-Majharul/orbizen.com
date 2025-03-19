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
   Centered Hero Section
======================================-->
<section
  class="pt-[130px] md:pt-36 lg:pt-44 xl:pt-[180px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container reveal-me">
    <!-- Decorative Header -->
    <p
      class="flex justify-center items-center gap-2 md:gap-5 font-poppins text-sm font-normal leading-6 tracking-[3px] uppercase"
    >
      <!-- Left Text -->
      <span class="max-sm:whitespace-nowrap">Design Agency</span>

      <!-- Decorative Line -->
      <span
        class="inline-block w-[150px] h-[1px] bg-dark dark:bg-[#ffffffb3]"
      ></span>

      <!-- Right Text -->
      <span>Palermo</span>
    </p>

    <!-- Main Heading -->
    <h1 class="mt-5 sm:mt-6 md:mt-9 xl:text-nowrap text-center">
      Crafting Tomorrow's
      <span class="font-instrument italic">Solutions</span>,
      <br class="hidden md:block" />
      Today
    </h1>

    <!-- Description Text -->
    <p class="mt-3 md:mt-7 text-center">
      With years of industry expertise, our team of visionaries, storytellers,
      and design <br />
      virtuosos come together here for you to see.
    </p>
  </div>
</section>


 <!--=====================================
   Project Showcase Section
======================================-->
<section
  class="pt-16 md:pt-20 lg:pt-[98px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container grid gap-16 xl:gap-14 max-md:gap-y-16 md:grid-cols-2">
    <!-- Project 1 - User Experience -->
    <div class="col-span-full reveal-me group">
      <a href="project-details-02.php" class="max-md:w-full">
        <div
          class="flex flex-col md:flex-row items-start md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect"
        >
          <figure class="w-full md:w-[42%] overflow-hidden">
            <img
              src="images/services-2/services-1.webp"
              alt="Epicurean Elegance"
              class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </figure>

          <div class="flex-1 md:mt-14">
            <!-- Project Category -->
            <p
              class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]"
            >
              User Experience
            </p>
            <!-- Project Title -->
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3
                class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]"
              >
                Project Nexus
              </h3>
            </div>
            <!-- Project Year -->
            <p
              class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]"
            >
              /2024
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Project 2 - E-commerce (Reversed Layout) -->
    <div class="col-span-full md:justify-self-end reveal-me group">
      <a href="project-details-02.php" class="w-full">
        <div
          class="flex flex-col md:flex-row-reverse items-end md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect"
        >
          <figure class="w-full overflow-hidden md:w-[31%]">
            <img
              src="images/services-2/services-2.webp"
              alt="Artistry in Motion"
              class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </figure>
          <div class="md:mt-9 text-right">
            <p
              class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]"
            >
              E-commerce
            </p>
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3
                class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]"
              >
                E-Shop Revolution
              </h3>
            </div>
            <p
              class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]"
            >
              /2023
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Project 3 - Identity Transformation -->

    <div class="col-span-full reveal-me group">
      <a href="project-details-02.php" class="max-md:w-full">
        <div
          class="flex flex-col md:flex-row items-start md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect"
        >
          <figure class="w-full md:w-[52%] overflow-hidden">
            <img
              src="images/services-2/services-3.webp"
              alt="Epicurean Elegance"
              class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </figure>

          <div class="flex-1 md:mt-14">
            <!-- Project Category -->
            <p
              class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]"
            >
              Identity Transformation
            </p>
            <!-- Project Title -->
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3
                class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]"
              >
                BrandPulse
              </h3>
            </div>
            <!-- Project Year -->
            <p
              class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]"
            >
              /2022
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Project 4 - Mobile Solutions (Reversed Layout) -->

    <div class="col-span-full md:justify-self-end reveal-me group">
      <a href="project-details-02.php" class="w-full">
        <div
          class="flex flex-col md:flex-row-reverse items-end md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect"
        >
          <figure class="w-full overflow-hidden md:w-[55%]">
            <img
              src="images/services-2/services-4.webp"
              alt="Artistry in Motion"
              class="w-full h-full block transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            />
          </figure>
          <div class="md:mt-9 text-right">
            <p
              class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]"
            >
              E-commerce
            </p>
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3
                class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]"
              >
                Mobile App
              </h3>
            </div>
            <p
              class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]"
            >
              /2021
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Projcet 5   -->
    <div class="col-span-full reveal-me group">
      <a href="project-details-02.php" class="max-md:w-full">
        <div
          class="flex flex-col md:flex-row items-start md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect"
        >
          <figure class="overflow-hidden max-md:w-full">
            <img
              src="images/services-2/services-5.webp"
              alt="Digital Canvas"
              class="w-full group-hover:scale-125 group-hover:rotate-3 transition-all md:w-[380px] duration-500 object-cover"
            />
          </figure>
          <div class="md:mt-9 text-left">
            <p
              class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]"
            >
              Project
            </p>
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3
                class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]"
              >
                Tech Canvas
              </h3>
            </div>
            <p
              class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]"
            >
              /2024
            </p>
          </div>
        </div>
      </a>
    </div>

    <!-- Projcet 6   -->
    <div class="col-span-full md:justify-self-end reveal-me group">
      <a href="project-details-02.php" class="max-md:w-full">
        <div
          class="flex flex-col md:flex-row-reverse items-end md:items-center gap-y-6 gap-x-10 w-full underline-hover-effect"
        >
          <figure class="overflow-hidden max-md:w-full">
            <img
              src="images/services-2/services-6.webp"
              alt="Digital Canvas"
              class="w-full group-hover:scale-125 group-hover:rotate-3 transition-all duration-500"
            />
          </figure>

          <div class="md:mt-9 text-right">
            <p
              class="uppercase text-xs text-secondary dark:text-backgroundBody font-poppins font-normal leading-3 md:leading-6 tracking-[5px] md:tracking-[8px]"
            >
              Case Study
            </p>
            <div class="blog-title mt-3 md:mt-4 lg:mt-5 xl:mt-7 mb-2 lg:mb-4">
              <h3
                class="text-3xl sm:text-4xl md:text-[40px] lg:text-[56px] lg:leading-[1.2] lg:tracking-[-1.68px]"
              >
                Next-Gen Style
              </h3>
            </div>
            <p
              class="text-base md:text-2xl text-[#000000b3] dark:text-dark-100 leading-[1.4] tracking-[0.48px]"
            >
              /2025
            </p>
          </div>
        </div>
      </a>
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
