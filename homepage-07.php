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
  class="pt-32 md:pt-44 max-sm:px-3 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <!-- Gradient Background Wrapper -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-2/6 h-2/6 top-40 left-[12%] -z-10 blur-[35px] md:blur-[60px]"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <div class="max-w-screen-xl px-5 mx-auto">
    <div class="reveal-me">
      <h1
        class="xl:text-[96px] font-semibold xl:leading-[1.1] xl:tracking-[-2.88px] max-lg:text-center"
      >
        Design Studio
        <div
          class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-7 translate-y-5"
          id="cta-img"
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
        Shaping Web3, Tech & AI Horizons
      </h1>
    </div>

    <p class="mt-6 md:mt-10 max-w-[770px] max-lg:mx-auto reveal-me">
      As a agency we are working on client projects, official Webflow Templates
      and cloneables for the Webflow community.
    </p>
  </div>

  <!-- skew Marquee Start -->
  <div
    style="
      transform: translate3d(-200px, 0px, 0px) scale3d(1, 1, 1) rotateX(30deg)
        rotateY(17deg) rotateZ(342deg) skew(7deg, 359deg);
      transform-style: preserve-3d;
    "
    id="skew-Marquee"
  >
    <div class="pb-16 lg:pb-48 pt-24">
      <!-- Marquee Wrapper -->
      <div class="relative">
        <!-- Infinite Scroll Container -->
        <div
          class="z-50 flex gap-5 w-fit flex-nowrap whitespace-nowrap will-change-transform marquee-inner reveal-me"
        >
          <figure
            class="marquee-part flex items-center justify-center size-[370px] z-50 flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-01.png" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-02.png" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-03.png" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-04.png" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-05.png" alt="images" />
          </figure>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3 class="reveal-text-2 reveal-me">
      We specialize in designing cutting-edge web experiences that flawlessly
      blend creativity with innovative technology.
    </h3>
  </div>
</section>


<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div class="text-center mb-8 md:mb-20">
      <div class="rv-badge mb-5 md:mb-8 reveal-me">
        <span class="rv-badge-text">Our Process</span>
      </div>
      <h2 class="text-appear">Our Creative Journey</h2>
    </div>
    <!-- Process Section  -->

    <div class="flex flex-col md:flex-row gap-20 reveal-me">
      <figure class="sticky top-7">
        <img src="images/process-img-01.png" alt="Process Images " />
      </figure>

      <div>
        <ul
          class="relative space-y-10 lg:space-y-28 xl:space-y-[170px] md:border-l border-secondary dark:border-dark"
        >
          <li class="max-w-max px-10">
            <div
              class="absolute left-0 md:-left-11 lg:-left-[52px] bg-black text-white text-lg font-bold rounded-full px-3.5 lg:px-6 py-5 lg:py-8 flex items-center justify-center md:border-[18px] border-white dark:border-[#151515]"
            >
              <span
                class="text-black dark:text-[#FFF] text-xl bg-gradient-to-r from-white to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block"
              >
                01
              </span>
            </div>
            <div class="ml-[30px]">
              <h3 class="">Book a Call</h3>
              <p class="max-w-[483px] mt-1 sm:mt-3 md:mt-5">
                Choose a date and time to book a discovery session, during which
                we’ll define the project objectives, timeline, and budget.
              </p>
            </div>
          </li>
          <li class="max-w-max px-10">
            <div
              class="absolute left-0 md:-left-11 lg:-left-[54px] bg-black text-white text-lg font-bold rounded-full px-3.5 lg:px-6 py-5 lg:py-8 flex items-center justify-center md:border-[18px] border-white dark:border-[#151515]"
            >
              <span
                class="text-black dark:text-[#FFF] text-xl bg-gradient-to-r from-white to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block"
              >
                02
              </span>
            </div>
            <div class="ml-[30px]">
              <h3 class="">Receive an Offer</h3>
              <p class="max-w-[483px] mt-1 sm:mt-3 md:mt-5">
                We’ll send you a bespoke project proposal including
                deliverables, project roadmap, and a quote in 1-2 business days.
              </p>
            </div>
          </li>
          <li class="max-w-max px-10">
            <div
              class="absolute left-0 md:-left-11 lg:-left-[54px] bg-black text-white text-lg font-bold rounded-full px-3.5 lg:px-6 py-5 lg:py-8 flex items-center justify-center md:border-[18px] border-white dark:border-[#151515]"
            >
              <span
                class="text-black dark:text-[#FFF] text-xl bg-gradient-to-r from-white to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block"
              >
                03
              </span>
            </div>
            <div class="ml-[30px]">
              <h3 class="">Kickoff the Project</h3>
              <p class="max-w-[483px] mt-1 sm:mt-3 md:mt-5">
                Sign the contract, send the deposit, lean back, and let us do
                our thing. We’ll invite you to a design review meeting in 5-7
                business days.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <div class="container">
    <div class="text-center mb-10 md:mb-20">
      <div class="rv-badge mb-3.5 md:mb-8 reveal-me">
        <span class="rv-badge-text">Our work</span>
      </div>
      <h2 class="text-appear">
        We craft emotionally <br />
        engaging stories.
      </h2>
    </div>
  </div>
  <!-- Clients Logo Marquee -->
  <div class="marquee-container reveal-me">
    <div class="flex items-center justify-around gap-[30px]">
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px] ml-[30px]">
        <img src="images/marquee-img/our-work-01.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-02.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-03.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-04.png" alt="client Logo" />
      </div>
    </div>
  </div>

  <!-- Reverse -->
  <div class="marquee-reverse-container reveal-me">
    <div class="flex items-center justify-around gap-[30px] pt-[30px]">
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px] ml-[30px]">
        <img src="images/marquee-img/our-work-05.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-06.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-07.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-08.png" alt="client Logo" />
      </div>
      <div class="min-w-60 md:min-w-[370px] h-72 md:h-[470px]">
        <img src="images/marquee-img/our-work-09.png" alt="client Logo" />
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Services Accordion Section
======================================-->
<section
  class="mt-14 md:mt-16 lg:mt-[88px] xl:mt-[100px] mb-14 md:mb-16 lg:mb-[88px] xl:mb-[100px] relative overflow-hidden"
>
  <div
    class="absolute scale-y-[3.8] sm:scale-y-[3.3] md:scale-y-[2.8] lg:scale-y-[2.4] xl:scale-y-[1.2] scale-x-[2.7] xl:scale-x-[2.4] left-1/2 top-[47%] -translate-y-[45%] -translate-x-1/2"
  >
    <img src="images/services-gradient-bg-2.png" alt="" />
  </div>
  <div class="container">
    <div class="text-center mb-10 md:mb-20 reveal-me">
      <div class="rv-badge mb-5 md:mb-8">
        <span class="rv-badge-text">Services</span>
      </div>
      <h2 class="text-appear">
        There is a lot we can do. <br />
        Here is a few.
      </h2>
    </div>

    <!-- Accordion Container -->
    <div
      class="max-w-[1170px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me"
    >
      <div
        class="accordion-itemV5 overflow-hidden bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 duration-300 faq-body-transition"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row items-start md:items-center gap-x-10 gap-y-3 text-[25px] md:text-4xl lg:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
          >
            <span class="text-inherit font-medium"> UX & Research </span>
            <p
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
            >
              Creating a remarkable experience for every individual
            </p>
          </h3>
          <div class="accordion-header-iconV5">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300 size-6 md:size-8"
              >
                <path
                  d="M5 16H27"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
        </div>
        <div
          class="accordion-body px-14 duration-300 faq-body-transition h-0 flex flex-col md:flex-row justify-start md:gap-14 md:ml-2"
        >
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
      <div
        class="accordion-itemV5 overflow-hidden bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 duration-300 faq-body-transition"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row items-start md:items-center gap-x-10 gap-y-3 text-[25px] md:text-4xl lg:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
          >
            <span class="text-inherit font-medium"> Product design </span>
            <p
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
            >
              Highly skilled product designers whose focus goes beyond UI & UX
            </p>
          </h3>
          <div class="accordion-header-iconV5">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 size-6 md:size-8 ease-faq-body-transition duration-300"
              >
                <path
                  d="M5 16H27"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
        </div>
        <div
          class="accordion-body px-14 duration-300 faq-body-transition h-0 flex flex-col md:flex-row justify-start md:gap-14 md:ml-2"
        >
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
      <div
        class="accordion-itemV5 overflow-hidden bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 duration-300 faq-body-transition"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row items-start md:items-center gap-x-10 gap-y-3 text-[25px] md:text-4xl lg:text-5xl font-normal leading-[25.2px] md:leading-[1.2]"
          >
            <span class="text-inherit font-medium"> Visual Design </span>
            <p
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
            >
              Delivering excellence in every user experience
            </p>
          </h3>
          <div class="accordion-header-iconV5">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 size-6 md:size-8 ease-faq-body-transition duration-300"
              >
                <path
                  d="M5 16H27"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
        </div>
        <div
          class="accordion-body px-14 duration-300 faq-body-transition h-0 flex flex-col md:flex-row justify-start md:gap-14 md:ml-2"
        >
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
      <div
        class="accordion-itemV5 overflow-hidden bg-white dark:bg-dark border border-secondary/10 dark:border-backgroundBody/10 duration-300 faq-body-transition"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row items-start md:items-center gap-x-10 gap-y-3 text-[25px] md:text-4xl lg:text-5xl font-normal leading-[25.2px] lg:leading-[1.2]"
          >
            <span class="text-inherit font-medium"> Motion/3D </span>
            <p
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg"
            >
              Creating a remarkable experience for every individual
            </p>
          </h3>
          <div class="accordion-header-iconV5">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 size-6 md:size-8 ease-faq-body-transition duration-300"
              >
                <path
                  d="M5 16H27"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  stroke="black"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
        </div>
        <div
          class="accordion-body px-14 duration-300 faq-body-transition h-0 flex flex-col md:flex-row justify-start md:gap-14 md:ml-2"
        >
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
          <ul class="[&>*:not(:last-child)]:mb-1">
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              User Research & Market Analysis
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Prototyping
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Concept Ideation
            </li>
            <li
              class="list-disc text-colorText text-[17px] leading-[1.5] tracking-[0.36px]"
            >
              Sketching & Wireframing
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section
  class="md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <div class="container">
    <div>
      <div>
        <div class="text-center">
          <div class="rv-badge mb-3.5 md:mb-8 reveal-me">
            <span class="rv-badge-text">Pricing</span>
          </div>
          <h2 class="max-w-3xl mx-auto mb-5 md:mb-8 text-appear-2">
            Simple pricing to boost your brand.
          </h2>
        </div>

        <div
          class="flex flex-col md:flex-row items-center justify-center gap-6 reveal-me"
        >
          <p
            class="overflow-hidden text-ellipsis flex gap-2.5 font-satoshi text-[17px] font-normal leading-[1.4] tracking-[0.34px]"
          >
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                viewBox="0 0 25 25"
                fill="none"
              >
                <path
                  d="M14.75 12.0352H13.25V6.03516H14C14.7956 6.03516 15.5587 6.35123 16.1213 6.91384C16.6839 7.47644 17 8.23951 17 9.03516C17 9.23407 17.079 9.42483 17.2197 9.56549C17.3603 9.70614 17.5511 9.78516 17.75 9.78516C17.9489 9.78516 18.1397 9.70614 18.2803 9.56549C18.421 9.42483 18.5 9.23407 18.5 9.03516C18.4988 7.84206 18.0243 6.69819 17.1806 5.85455C16.337 5.0109 15.1931 4.5364 14 4.53516H13.25V3.03516C13.25 2.83624 13.171 2.64548 13.0303 2.50483C12.8897 2.36417 12.6989 2.28516 12.5 2.28516C12.3011 2.28516 12.1103 2.36417 11.9697 2.50483C11.829 2.64548 11.75 2.83624 11.75 3.03516V4.53516H11C9.80653 4.53516 8.66193 5.00926 7.81802 5.85318C6.97411 6.69709 6.5 7.84168 6.5 9.03516C6.5 10.2286 6.97411 11.3732 7.81802 12.2171C8.66193 13.0611 9.80653 13.5352 11 13.5352H11.75V19.5352H10.25C9.45435 19.5352 8.69129 19.2191 8.12868 18.6565C7.56607 18.0939 7.25 17.3308 7.25 16.5352C7.25 16.3362 7.17098 16.1455 7.03033 16.0048C6.88968 15.8642 6.69891 15.7852 6.5 15.7852C6.30109 15.7852 6.11032 15.8642 5.96967 16.0048C5.82902 16.1455 5.75 16.3362 5.75 16.5352C5.75124 17.7282 6.22575 18.8721 7.06939 19.7158C7.91303 20.5594 9.05691 21.0339 10.25 21.0352H11.75V22.5352C11.75 22.7341 11.829 22.9248 11.9697 23.0655C12.1103 23.2061 12.3011 23.2852 12.5 23.2852C12.6989 23.2852 12.8897 23.2061 13.0303 23.0655C13.171 22.9248 13.25 22.7341 13.25 22.5352V21.0352H14.75C15.9435 21.0352 17.0881 20.5611 17.932 19.7171C18.7759 18.8732 19.25 17.7286 19.25 16.5352C19.25 15.3417 18.7759 14.1971 17.932 13.3532C17.0881 12.5093 15.9435 12.0352 14.75 12.0352ZM11 12.0352C10.2044 12.0352 9.44129 11.7191 8.87868 11.1565C8.31607 10.5939 8 9.83081 8 9.03516C8 8.23951 8.31607 7.47644 8.87868 6.91384C9.44129 6.35123 10.2044 6.03516 11 6.03516H11.75V12.0352H11ZM14.75 19.5352H13.25V13.5352H14.75C15.5456 13.5352 16.3087 13.8512 16.8713 14.4138C17.4339 14.9764 17.75 15.7395 17.75 16.5352C17.75 17.3308 17.4339 18.0939 16.8713 18.6565C16.3087 19.2191 15.5456 19.5352 14.75 19.5352Z"
                  fill="black"
                />
              </svg>
            </span>
            <span> Save up to 30% </span>
          </p>
          <div class="border-4 border-secondary p-[2px] rounded-full">
            <div
              id="toggle"
              class="relative w-[177px] h-10 bg-black rounded-full p-[2px] pb-1 cursor-pointer"
            >
              <div
                class="toggle-slider absolute w-[calc(50%-1px)] h-[calc(97%-4px)] bg-white rounded-full"
              ></div>

              <div class="relative flex h-full">
                <div
                  id="monthlyOption"
                  class="toggle-option flex-1 flex items-center justify-center text-sm font-medium text-white z-10"
                >
                  Monthly
                </div>

                <div
                  id="yearlyOption"
                  class="toggle-option flex-1 flex items-center justify-center text-sm font-medium text-white z-10"
                >
                  Yearly
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div
        class="grid lg:grid-cols-2 justify-center gap-x-10 mt-10 md:mt-20 gap-y-10 reveal-me"
      >
        <div
          class="border border-secondary dark:border-backgroundBody px-[30px] pt-8 md:pt-20 pb-[30px]"
        >
          <div>
            <div>
              <h6 class="mb-4 max-md:text-3xl">Design Project</h6>
              <p class="text-base">
                Ideal for entrepreneurs seeking a cohesive approach for
                branding, web design, app, 3D, and motion projects.
              </p>
            </div>

            <div
              class="flex flex-col md:flex-row items-start md:items-end gap-y-3 md:gap-y-6 gap-x-10 py-8"
            >
              <p
                class="text-6xl leading-[60px] text-secondary dark:text-backgroundBody"
              >
                Custom
              </p>
              <p class="text-sm leading-[18px] tracking-[-0.2px]">
                Flexible payment schedule, <br />
                50% down payment
              </p>
            </div>

            <a href="#" class="rv-button rv-button-secondary !w-full">
              <div class="rv-button-top !w-full !text-center">
                <span class="!font-normal"> BOOK INTRO CALL</span>
              </div>
              <div class="rv-button-bottom !w-full !text-center">
                <span class="!font-normal"> BOOK INTRO CALL</span>
              </div>
            </a>

            <ul
              class="mt-8 [&>*:not(:last-child)]:mb-2 md:[&>*:not(:last-child)]:mb-3 md:ml-7"
            >
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Basic Components & variants
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Lifetime updates
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Single user
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Ready-to-use dashboard
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Delivered in milestones
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="inline dark:hidden"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M16.2806 10.0045C16.3504 10.0742 16.4057 10.1569 16.4434 10.248C16.4812 10.339 16.5006 10.4366 16.5006 10.5352C16.5006 10.6337 16.4812 10.7313 16.4434 10.8224C16.4057 10.9134 16.3504 10.9961 16.2806 11.0658L11.0306 16.3158C10.961 16.3855 10.8783 16.4408 10.7872 16.4786C10.6962 16.5163 10.5986 16.5357 10.5 16.5357C10.4014 16.5357 10.3038 16.5163 10.2128 16.4786C10.1218 16.4408 10.039 16.3855 9.96938 16.3158L7.71938 14.0658C7.57865 13.9251 7.49959 13.7342 7.49959 13.5352C7.49959 13.3361 7.57865 13.1453 7.71938 13.0045C7.86011 12.8638 8.05098 12.7847 8.25 12.7847C8.44903 12.7847 8.6399 12.8638 8.78063 13.0045L10.5 14.7248L15.2194 10.0045C15.289 9.9348 15.3718 9.87948 15.4628 9.84174C15.5538 9.80399 15.6514 9.78457 15.75 9.78457C15.8486 9.78457 15.9462 9.80399 16.0372 9.84174C16.1283 9.87948 16.211 9.9348 16.2806 10.0045ZM21.75 12.7852C21.75 14.7135 21.1782 16.5986 20.1068 18.202C19.0355 19.8053 17.5127 21.055 15.7312 21.793C13.9496 22.5309 11.9892 22.724 10.0979 22.3478C8.20656 21.9716 6.46928 21.043 5.10571 19.6794C3.74215 18.3159 2.81355 16.5786 2.43735 14.6873C2.06114 12.796 2.25422 10.8356 2.99218 9.05399C3.73013 7.27241 4.97982 5.74967 6.58319 4.67833C8.18657 3.60698 10.0716 3.03516 12 3.03516C14.585 3.03789 17.0634 4.06599 18.8913 5.89388C20.7192 7.72177 21.7473 10.2001 21.75 12.7852ZM20.25 12.7852C20.25 11.1535 19.7661 9.55841 18.8596 8.2017C17.9531 6.845 16.6646 5.78757 15.1571 5.16315C13.6497 4.53873 11.9909 4.37535 10.3905 4.69368C8.79017 5.01201 7.32016 5.79774 6.16637 6.95153C5.01259 8.10531 4.22685 9.57532 3.90853 11.1757C3.5902 12.776 3.75358 14.4348 4.378 15.9423C5.00242 17.4498 6.05984 18.7383 7.41655 19.6448C8.77326 20.5513 10.3683 21.0352 12 21.0352C14.1873 21.0327 16.2843 20.1627 17.8309 18.616C19.3775 17.0694 20.2475 14.9724 20.25 12.7852Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M16.2806 9.55141C16.3504 9.62106 16.4057 9.70378 16.4434 9.79483C16.4812 9.88587 16.5006 9.98347 16.5006 10.082C16.5006 10.1806 16.4812 10.2782 16.4434 10.3692C16.4057 10.4603 16.3504 10.543 16.2806 10.6127L11.0306 15.8627C10.961 15.9324 10.8783 15.9877 10.7872 16.0255C10.6962 16.0632 10.5986 16.0826 10.5 16.0826C10.4014 16.0826 10.3038 16.0632 10.2128 16.0255C10.1218 15.9877 10.039 15.9324 9.96938 15.8627L7.71938 13.6127C7.57865 13.4719 7.49959 13.2811 7.49959 13.082C7.49959 12.883 7.57865 12.6921 7.71938 12.5514C7.86011 12.4107 8.05098 12.3316 8.25 12.3316C8.44903 12.3316 8.6399 12.4107 8.78063 12.5514L10.5 14.2717L15.2194 9.55141C15.289 9.48167 15.3718 9.42635 15.4628 9.38861C15.5538 9.35087 15.6514 9.33144 15.75 9.33144C15.8486 9.33144 15.9462 9.35087 16.0372 9.38861C16.1283 9.42635 16.211 9.48167 16.2806 9.55141ZM21.75 12.332C21.75 14.2604 21.1782 16.1455 20.1068 17.7488C19.0355 19.3522 17.5127 20.6019 15.7312 21.3399C13.9496 22.0778 11.9892 22.2709 10.0979 21.8947C8.20656 21.5185 6.46928 20.5899 5.10571 19.2263C3.74215 17.8628 2.81355 16.1255 2.43735 14.2342C2.06114 12.3428 2.25422 10.3824 2.99218 8.60087C3.73013 6.81929 4.97982 5.29655 6.58319 4.2252C8.18657 3.15386 10.0716 2.58203 12 2.58203C14.585 2.58476 17.0634 3.61287 18.8913 5.44075C20.7192 7.26864 21.7473 9.74701 21.75 12.332ZM20.25 12.332C20.25 10.7003 19.7661 9.10528 18.8596 7.74858C17.9531 6.39187 16.6646 5.33445 15.1571 4.71003C13.6497 4.0856 11.9909 3.92222 10.3905 4.24055C8.79017 4.55888 7.32016 5.34462 6.16637 6.4984C5.01259 7.65218 4.22685 9.12219 3.90853 10.7225C3.5902 12.3229 3.75358 13.9817 4.378 15.4892C5.00242 16.9967 6.05984 18.2851 7.41655 19.1917C8.77326 20.0982 10.3683 20.582 12 20.582C14.1873 20.5795 16.2843 19.7096 17.8309 18.1629C19.3775 16.6163 20.2475 14.5193 20.25 12.332Z"
                      fill="white"
                    />
                  </svg>
                </span>
                Premium support
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="inline dark:hidden"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M16.2806 10.0045C16.3504 10.0742 16.4057 10.1569 16.4434 10.248C16.4812 10.339 16.5006 10.4366 16.5006 10.5352C16.5006 10.6337 16.4812 10.7313 16.4434 10.8224C16.4057 10.9134 16.3504 10.9961 16.2806 11.0658L11.0306 16.3158C10.961 16.3855 10.8783 16.4408 10.7872 16.4786C10.6962 16.5163 10.5986 16.5357 10.5 16.5357C10.4014 16.5357 10.3038 16.5163 10.2128 16.4786C10.1218 16.4408 10.039 16.3855 9.96938 16.3158L7.71938 14.0658C7.57865 13.9251 7.49959 13.7342 7.49959 13.5352C7.49959 13.3361 7.57865 13.1453 7.71938 13.0045C7.86011 12.8638 8.05098 12.7847 8.25 12.7847C8.44903 12.7847 8.6399 12.8638 8.78063 13.0045L10.5 14.7248L15.2194 10.0045C15.289 9.9348 15.3718 9.87948 15.4628 9.84174C15.5538 9.80399 15.6514 9.78457 15.75 9.78457C15.8486 9.78457 15.9462 9.80399 16.0372 9.84174C16.1283 9.87948 16.211 9.9348 16.2806 10.0045ZM21.75 12.7852C21.75 14.7135 21.1782 16.5986 20.1068 18.202C19.0355 19.8053 17.5127 21.055 15.7312 21.793C13.9496 22.5309 11.9892 22.724 10.0979 22.3478C8.20656 21.9716 6.46928 21.043 5.10571 19.6794C3.74215 18.3159 2.81355 16.5786 2.43735 14.6873C2.06114 12.796 2.25422 10.8356 2.99218 9.05399C3.73013 7.27241 4.97982 5.74967 6.58319 4.67833C8.18657 3.60698 10.0716 3.03516 12 3.03516C14.585 3.03789 17.0634 4.06599 18.8913 5.89388C20.7192 7.72177 21.7473 10.2001 21.75 12.7852ZM20.25 12.7852C20.25 11.1535 19.7661 9.55841 18.8596 8.2017C17.9531 6.845 16.6646 5.78757 15.1571 5.16315C13.6497 4.53873 11.9909 4.37535 10.3905 4.69368C8.79017 5.01201 7.32016 5.79774 6.16637 6.95153C5.01259 8.10531 4.22685 9.57532 3.90853 11.1757C3.5902 12.776 3.75358 14.4348 4.378 15.9423C5.00242 17.4498 6.05984 18.7383 7.41655 19.6448C8.77326 20.5513 10.3683 21.0352 12 21.0352C14.1873 21.0327 16.2843 20.1627 17.8309 18.616C19.3775 17.0694 20.2475 14.9724 20.25 12.7852Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M16.2806 9.55141C16.3504 9.62106 16.4057 9.70378 16.4434 9.79483C16.4812 9.88587 16.5006 9.98347 16.5006 10.082C16.5006 10.1806 16.4812 10.2782 16.4434 10.3692C16.4057 10.4603 16.3504 10.543 16.2806 10.6127L11.0306 15.8627C10.961 15.9324 10.8783 15.9877 10.7872 16.0255C10.6962 16.0632 10.5986 16.0826 10.5 16.0826C10.4014 16.0826 10.3038 16.0632 10.2128 16.0255C10.1218 15.9877 10.039 15.9324 9.96938 15.8627L7.71938 13.6127C7.57865 13.4719 7.49959 13.2811 7.49959 13.082C7.49959 12.883 7.57865 12.6921 7.71938 12.5514C7.86011 12.4107 8.05098 12.3316 8.25 12.3316C8.44903 12.3316 8.6399 12.4107 8.78063 12.5514L10.5 14.2717L15.2194 9.55141C15.289 9.48167 15.3718 9.42635 15.4628 9.38861C15.5538 9.35087 15.6514 9.33144 15.75 9.33144C15.8486 9.33144 15.9462 9.35087 16.0372 9.38861C16.1283 9.42635 16.211 9.48167 16.2806 9.55141ZM21.75 12.332C21.75 14.2604 21.1782 16.1455 20.1068 17.7488C19.0355 19.3522 17.5127 20.6019 15.7312 21.3399C13.9496 22.0778 11.9892 22.2709 10.0979 21.8947C8.20656 21.5185 6.46928 20.5899 5.10571 19.2263C3.74215 17.8628 2.81355 16.1255 2.43735 14.2342C2.06114 12.3428 2.25422 10.3824 2.99218 8.60087C3.73013 6.81929 4.97982 5.29655 6.58319 4.2252C8.18657 3.15386 10.0716 2.58203 12 2.58203C14.585 2.58476 17.0634 3.61287 18.8913 5.44075C20.7192 7.26864 21.7473 9.74701 21.75 12.332ZM20.25 12.332C20.25 10.7003 19.7661 9.10528 18.8596 7.74858C17.9531 6.39187 16.6646 5.33445 15.1571 4.71003C13.6497 4.0856 11.9909 3.92222 10.3905 4.24055C8.79017 4.55888 7.32016 5.34462 6.16637 6.4984C5.01259 7.65218 4.22685 9.12219 3.90853 10.7225C3.5902 12.3229 3.75358 13.9817 4.378 15.4892C5.00242 16.9967 6.05984 18.2851 7.41655 19.1917C8.77326 20.0982 10.3683 20.582 12 20.582C14.1873 20.5795 16.2843 19.7096 17.8309 18.1629C19.3775 16.6163 20.2475 14.5193 20.25 12.332Z"
                      fill="white"
                    />
                  </svg>
                </span>
                Invite your team to collaborate
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="inline dark:hidden"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M16.2806 10.0045C16.3504 10.0742 16.4057 10.1569 16.4434 10.248C16.4812 10.339 16.5006 10.4366 16.5006 10.5352C16.5006 10.6337 16.4812 10.7313 16.4434 10.8224C16.4057 10.9134 16.3504 10.9961 16.2806 11.0658L11.0306 16.3158C10.961 16.3855 10.8783 16.4408 10.7872 16.4786C10.6962 16.5163 10.5986 16.5357 10.5 16.5357C10.4014 16.5357 10.3038 16.5163 10.2128 16.4786C10.1218 16.4408 10.039 16.3855 9.96938 16.3158L7.71938 14.0658C7.57865 13.9251 7.49959 13.7342 7.49959 13.5352C7.49959 13.3361 7.57865 13.1453 7.71938 13.0045C7.86011 12.8638 8.05098 12.7847 8.25 12.7847C8.44903 12.7847 8.6399 12.8638 8.78063 13.0045L10.5 14.7248L15.2194 10.0045C15.289 9.9348 15.3718 9.87948 15.4628 9.84174C15.5538 9.80399 15.6514 9.78457 15.75 9.78457C15.8486 9.78457 15.9462 9.80399 16.0372 9.84174C16.1283 9.87948 16.211 9.9348 16.2806 10.0045ZM21.75 12.7852C21.75 14.7135 21.1782 16.5986 20.1068 18.202C19.0355 19.8053 17.5127 21.055 15.7312 21.793C13.9496 22.5309 11.9892 22.724 10.0979 22.3478C8.20656 21.9716 6.46928 21.043 5.10571 19.6794C3.74215 18.3159 2.81355 16.5786 2.43735 14.6873C2.06114 12.796 2.25422 10.8356 2.99218 9.05399C3.73013 7.27241 4.97982 5.74967 6.58319 4.67833C8.18657 3.60698 10.0716 3.03516 12 3.03516C14.585 3.03789 17.0634 4.06599 18.8913 5.89388C20.7192 7.72177 21.7473 10.2001 21.75 12.7852ZM20.25 12.7852C20.25 11.1535 19.7661 9.55841 18.8596 8.2017C17.9531 6.845 16.6646 5.78757 15.1571 5.16315C13.6497 4.53873 11.9909 4.37535 10.3905 4.69368C8.79017 5.01201 7.32016 5.79774 6.16637 6.95153C5.01259 8.10531 4.22685 9.57532 3.90853 11.1757C3.5902 12.776 3.75358 14.4348 4.378 15.9423C5.00242 17.4498 6.05984 18.7383 7.41655 19.6448C8.77326 20.5513 10.3683 21.0352 12 21.0352C14.1873 21.0327 16.2843 20.1627 17.8309 18.616C19.3775 17.0694 20.2475 14.9724 20.25 12.7852Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M16.2806 9.55141C16.3504 9.62106 16.4057 9.70378 16.4434 9.79483C16.4812 9.88587 16.5006 9.98347 16.5006 10.082C16.5006 10.1806 16.4812 10.2782 16.4434 10.3692C16.4057 10.4603 16.3504 10.543 16.2806 10.6127L11.0306 15.8627C10.961 15.9324 10.8783 15.9877 10.7872 16.0255C10.6962 16.0632 10.5986 16.0826 10.5 16.0826C10.4014 16.0826 10.3038 16.0632 10.2128 16.0255C10.1218 15.9877 10.039 15.9324 9.96938 15.8627L7.71938 13.6127C7.57865 13.4719 7.49959 13.2811 7.49959 13.082C7.49959 12.883 7.57865 12.6921 7.71938 12.5514C7.86011 12.4107 8.05098 12.3316 8.25 12.3316C8.44903 12.3316 8.6399 12.4107 8.78063 12.5514L10.5 14.2717L15.2194 9.55141C15.289 9.48167 15.3718 9.42635 15.4628 9.38861C15.5538 9.35087 15.6514 9.33144 15.75 9.33144C15.8486 9.33144 15.9462 9.35087 16.0372 9.38861C16.1283 9.42635 16.211 9.48167 16.2806 9.55141ZM21.75 12.332C21.75 14.2604 21.1782 16.1455 20.1068 17.7488C19.0355 19.3522 17.5127 20.6019 15.7312 21.3399C13.9496 22.0778 11.9892 22.2709 10.0979 21.8947C8.20656 21.5185 6.46928 20.5899 5.10571 19.2263C3.74215 17.8628 2.81355 16.1255 2.43735 14.2342C2.06114 12.3428 2.25422 10.3824 2.99218 8.60087C3.73013 6.81929 4.97982 5.29655 6.58319 4.2252C8.18657 3.15386 10.0716 2.58203 12 2.58203C14.585 2.58476 17.0634 3.61287 18.8913 5.44075C20.7192 7.26864 21.7473 9.74701 21.75 12.332ZM20.25 12.332C20.25 10.7003 19.7661 9.10528 18.8596 7.74858C17.9531 6.39187 16.6646 5.33445 15.1571 4.71003C13.6497 4.0856 11.9909 3.92222 10.3905 4.24055C8.79017 4.55888 7.32016 5.34462 6.16637 6.4984C5.01259 7.65218 4.22685 9.12219 3.90853 10.7225C3.5902 12.3229 3.75358 13.9817 4.378 15.4892C5.00242 16.9967 6.05984 18.2851 7.41655 19.1917C8.77326 20.0982 10.3683 20.582 12 20.582C14.1873 20.5795 16.2843 19.7096 17.8309 18.1629C19.3775 16.6163 20.2475 14.5193 20.25 12.332Z"
                      fill="white"
                    />
                  </svg>
                </span>
                Managed via Slack and Trello
              </li>
            </ul>
          </div>
        </div>

        <div class="border dark:border-dark px-[30px] pt-8 md:pt-20 pb-[30px]">
          <div>
            <div>
              <h6 class="mb-4 max-md:text-3xl">Design Subscription</h6>
              <p class="text-base">
                A no-brainer solution for growing companies looking for ongoing
                design support and seamless integration.
              </p>
            </div>
            <div id="monthlyCharge">
              <div
                class="flex flex-col md:flex-row items-start md:items-end gap-y-3 md:gap-y-6 gap-x-10 py-8"
              >
                <p
                  class="text-6xl leading-[60px] text-secondary dark:text-backgroundBody"
                >
                  $10k /m
                </p>
                <p class="text-sm leading-[18px] tracking-[-0.2px]">
                  Paid Monthly <br />
                  Pause or cancel anytime.
                </p>
              </div>
            </div>

            <div id="yearlyCharge" style="display: none">
              <div class="flex flex-col md:flex-row items-end gap-10 py-8">
                <p
                  class="text-6xl leading-[60px] text-secondary dark:text-backgroundBody"
                >
                  $200k /y
                </p>
                <p class="text-sm leading-[18px] tracking-[-0.2px]">
                  Paid Yearly <br />
                  Pause or cancel anytime.
                </p>
              </div>
            </div>

            <a href="#" class="rv-button rv-button-white !w-full">
              <div class="rv-button-top !w-full !text-center">
                <span class="!font-normal"> On request</span>
              </div>
              <div class="rv-button-bottom !w-full !text-center">
                <span class="!font-normal"> On request</span>
              </div>
            </a>

            <ul
              class="mt-8 [&>*:not(:last-child)]:mb-2 md:[&>*:not(:last-child)]:mb-3 md:ml-7"
            >
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Basic Components & variants
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Lifetime updates
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Single user
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Ready-to-use dashboard
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Delivered in milestones
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Premium support
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Invite your team to collaborate
              </li>
              <li
                class="list-none flex gap-[10px] text-[17px] leading-[1.5] text-colorText"
              >
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="inline dark:hidden"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="black"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    class="hidden dark:block"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM16.2806 10.2806L11.0306 15.5306C10.961 15.6004 10.8783 15.6557 10.7872 15.6934C10.6962 15.7312 10.5986 15.7506 10.5 15.7506C10.4014 15.7506 10.3038 15.7312 10.2128 15.6934C10.1218 15.6557 10.039 15.6004 9.96938 15.5306L7.71938 13.2806C7.57865 13.1399 7.49959 12.949 7.49959 12.75C7.49959 12.551 7.57865 12.3601 7.71938 12.2194C7.86011 12.0786 8.05098 11.9996 8.25 11.9996C8.44903 11.9996 8.6399 12.0786 8.78063 12.2194L10.5 13.9397L15.2194 9.21937C15.2891 9.14969 15.3718 9.09442 15.4628 9.0567C15.5539 9.01899 15.6515 8.99958 15.75 8.99958C15.8486 8.99958 15.9461 9.01899 16.0372 9.0567C16.1282 9.09442 16.2109 9.14969 16.2806 9.21937C16.3503 9.28906 16.4056 9.37178 16.4433 9.46283C16.481 9.55387 16.5004 9.65145 16.5004 9.75C16.5004 9.84855 16.481 9.94613 16.4433 10.0372C16.4056 10.1282 16.3503 10.2109 16.2806 10.2806Z"
                      fill="#fff"
                    />
                  </svg>
                </span>
                Managed via Slack and Trello
              </li>
            </ul>
          </div>
        </div>
      </div>
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
