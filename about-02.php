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
   Page Header V2
======================================-->
<section class="pt-28 md:pt-48 lg:pt-[200px] pb-14 md:pb-20 lg:pb-[100px]">
  <div class="container reveal-me">
    <!-- Top Content Row -->
    <div
      class="flex flex-col sm:flex-row gap-x-20 gap-y-5 md:gap-y-10 items-center justify-end"
    >
      <!-- "About" Title -->
      <h1
        class="text-5xl md:text-6xl lg:text-9xl xl:text-[156px] font-instrument italic font-normal xl:leading-[1.1]"
      >
        About
      </h1>

      <!-- Description Text -->
      <p class="max-w-[470px]">
        We are dedicated to transforming ideas impactful solutions. With a focus
        on innovation excellence we partner with businesses around the globe to
        help them navigate complex challenges and growth.
      </p>
    </div>

    <!-- Large "Company" Text -->
    <h2
      class="text-6xl sm:text-7xl md:text-8xl lg:text-[156px] xl:text-[236px] xl:leading-[1.1] mb-5"
    >
      Company
    </h2>
  </div>
</section>


<!--=====================================
  Promo Video Section
======================================-->
<section class="video-section reveal-me relative overflow-hidden">
  <!-- Video Wrapper -->
  <div class="w-full h-fit video-wrapper scale-50 origin-top">
    <!-- Autoplay Muted Looping Promo Video -->
    <video class="w-full h-full" autoplay muted loop>
      <source src="images/promo.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
  </div>
</section>


<!--=========================
   About Section Area
==========================-->
<section class="pt-10 sm:pt-16 md:pt-[100px] relative overflow-hidden">
  <div class="container">
    <!-- Section Header -->
    <div>
      <h3
        class="reveal-text-2 text-3xl lg:text-5xl lg:leading-[1.5] text-secondary dark:text-backgroundBody mb-20"
      >
        Orbizen Limited: Shaping the Future of Digital Innovation. We are dedicated
        to empowering blockchain pioneers and transforming the realm of digital
        ownership for today and beyond.
      </h3>
    </div>
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
    <div class="pb-20 lg:pb-40 pt-20">
      <!-- Marquee Wrapper -->
      <div class="relative">
        <!-- Infinite Scroll Container -->
        <div
          class="z-50 flex gap-5 w-fit flex-nowrap whitespace-nowrap will-change-transform marquee-inner reveal-me"
        >
          <figure
            class="marquee-part flex items-center justify-center size-[370px] z-50 flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-01.webp" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-02.webp" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-03.webp" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-04.webp" alt="images" />
          </figure>
          <figure
            class="marquee-part flex items-center justify-center z-50 size-[370px] flex-shrink-0"
          >
            <img src="images/marquee-img/hero-marquee-05.webp" alt="images" />
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Services Accordion Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <div
    class="absolute scale-y-[3.8] sm:scale-y-[3.3] md:scale-y-[3.2] lg:scale-y-[2.4] xl:scale-y-[1.2] scale-x-[2.7] xl:scale-x-[2.4] left-1/2 top-[47%] lg:top-[45%] -translate-y-[45%] -translate-x-1/2"
  >
    <img src="images/services-gradient-bg-2.webp" alt="gradient-bg" />
  </div>
  <div class="container">
    <!-- Section Header -->
    <div
      class="flex flex-col md:flex-row gap-y-2 gap-x-10 justify-center lg:justify-between items-start mb-10 md:mb-20 container"
    >
      <div class="flex-1">
        <h2 class="text-appear max-lg:leading-[1.33]">
          <span class="font-instrument lg:text-[65px] italic">Cool</span>

          services
        </h2>
      </div>
      <div class="md:self-end flex-1">
        <p class="text-appear max-w-lg">
          For a comprehensive services section, outline your offerings in a
          clear and organized manner. Here’s a general template you can use.
        </p>
      </div>
    </div>

    <!-- Accordion Container -->
    <div
      class="max-w-[1170px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me"
    >
      <div
        class="accordion-item overflow-hidden bg-dark border border-dark duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl md:font-medium font-normal leading-[25.2px] md:leading-[1.2] text-white"
          >
            <span class="text-inherit"> UX & Research </span>
            <span
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]"
            >
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300"
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
          class="accordion-body px-10 duration-300 h-0 flex justify-start gap-14 md:ml-5"
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
        class="accordion-item overflow-hidden bg-dark border border-dark duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl md:font-medium font-normal leading-[25.2px] md:leading-[1.2] text-white"
          >
            <span class="text-inherit"> Web Development </span>
            <span
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]"
            >
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300"
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
          class="accordion-body px-10 duration-300 h-0 flex justify-start gap-14 md:ml-5"
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
        class="accordion-item overflow-hidden bg-dark border border-dark duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl md:font-medium font-normal leading-[25.2px] md:leading-[1.2] text-white"
          >
            <span class="text-inherit"> Web Design </span>
            <span
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]"
            >
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300"
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
          class="accordion-body px-10 duration-300 h-0 flex justify-start gap-14 md:ml-5"
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
        class="accordion-item overflow-hidden bg-dark border border-dark duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-[35px] flex justify-between px-5 md:px-10 group"
        >
          <h3
            class="flex flex-col md:flex-row md:items-center gap-x-10 gap-y-3 text-[25px] lg:text-5xl lg:font-medium font-normal leading-[25.2px] lg:leading-[1.2] text-white"
          >
            <span class="text-inherit"> Wordpress </span>
            <span
              class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] text-[#ffffff99] mt-2 pr-[2px]"
            >
              Creating a remarkable experience for every individual
            </span>
          </h3>
          <div class="accordion-header-iconV3">
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 active-arrow group-hover:rotate-90 ease-faq-body-transition duration-300"
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
          class="accordion-body px-10 duration-300 faq-body-transition h-0 flex justify-start gap-14 md:ml-5"
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


<!--=====================================
   Team Members Grid Section
======================================-->
<section
  class="flex items-center justify-center pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container w-full">
    <!-- Section Header -->
    <div
      class="flex flex-col md:flex-row gap-x-10 gap-y-2 justify-center lg:justify-between items-start md:items-center mb-20"
    >
      <div class="md:flex-1">
        <h2 class="text-appear block md:hidden">
          <span class="font-instrument lg:text-[80px] italic"> Team </span>

          Members
        </h2>
        <h2 class="text-appear text-nowrap hidden md:block">
          <span class="font-instrument lg:text-[80px] italic"> Team </span>
          <br />
          Members
        </h2>
      </div>
      <div class="md:self-end flex-1">
        <p class="text-appear">
          Here’s a template to introduce a team <br />
          member in an engaging and professional <br />
          way.
        </p>
      </div>
    </div>

    <!-- Desktop Layout (lg and above) -->
    <div class="max-lg:hidden lg:block">
      <div
        class="flex justify-center items-center space-x-4 h-96 overflow-hidden"
      >
        <div
          class="group relative w-40 h-96 transition-all duration-500 ease-in-out hover:w-96 hover:h-full cursor-pointer"
        >
          <img
            src="images/home-ai/team/ai-team-1.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-7 px-5 opacity-0 -translate-y-40 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 bg-primary m-5"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="md:text-4xl md:leading-[1.2] md:tracking-[-1.08px]">
                  Henry
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div
          class="group relative w-40 h-96 transition-all duration-500 ease-in-out hover:w-96 hover:h-full cursor-pointer"
        >
          <img
            src="images/home-ai/team/ai-team-2.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-7 px-5 opacity-0 -translate-y-40 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 bg-primary m-5"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="md:text-4xl md:leading-[1.2] md:tracking-[-1.08px]">
                  Addison
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div
          class="group relative w-40 h-96 transition-all duration-500 ease-in-out hover:w-96 hover:h-full cursor-pointer"
        >
          <img
            src="images/home-ai/team/ai-team-3.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-7 px-5 opacity-0 -translate-y-40 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 bg-primary m-5"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="md:text-4xl md:leading-[1.2] md:tracking-[-1.08px]">
                  David Kim
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div
          class="group relative w-40 h-96 transition-all duration-500 ease-in-out hover:w-96 hover:h-full cursor-pointer"
        >
          <img
            src="images/home-ai/team/ai-team-4.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-7 px-5 opacity-0 -translate-y-40 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 bg-primary m-5"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="md:text-4xl md:leading-[1.2] md:tracking-[-1.08px]">
                  John Carter
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div
          class="group relative w-40 h-96 transition-all duration-500 ease-in-out hover:w-96 hover:h-full cursor-pointer"
        >
          <img
            src="images/home-ai/team/ai-team-5.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-7 px-5 opacity-0 -translate-y-40 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 bg-primary m-5"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="md:text-4xl md:leading-[1.2] md:tracking-[-1.08px]">
                  Emily
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div
          class="group relative w-40 h-96 transition-all duration-500 ease-in-out hover:w-96 hover:h-full cursor-pointer"
        >
          <img
            src="images/home-ai/team/ai-team-4.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-7 px-5 opacity-0 -translate-y-40 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 bg-primary m-5"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="md:text-4xl md:leading-[1.2] md:tracking-[-1.08px]">
                  Thompson
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile/Tablet Layout (below lg) -->
    <div class="max-lg:block lg:hidden">
      <div
        class="relative grid grid-cols-1 sm:grid-cols-2 justify-center gap-10 items-center"
      >
        <div class="relative reveal-me">
          <img
            src="images/home-ai/team/ai-team-1.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-4 px-4 m-5 bg-primary"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="lg:text-4xl lg:leading-[1.2] lg:tracking-[-1.08px]">
                  John Henry
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div class="relative reveal-me">
          <img
            src="images/home-ai/team/ai-team-2.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-4 px-4 m-5 bg-primary"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="lg:text-4xl lg:leading-[1.2] lg:tracking-[-1.08px]">
                  Addison
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div class="relative reveal-me">
          <img
            src="images/home-ai/team/ai-team-3.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-4 px-4 m-5 bg-primary"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="lg:text-4xl lg:leading-[1.2] lg:tracking-[-1.08px]">
                  Thompson
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div class="relative reveal-me">
          <img
            src="images/home-ai/team/ai-team-4.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-4 px-4 m-5 bg-primary"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="lg:text-4xl lg:leading-[1.2] lg:tracking-[-1.08px]">
                  Emily
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div class="relative reveal-me">
          <img
            src="images/home-ai/team/ai-team-5.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-4 px-4 m-5 bg-primary"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="lg:text-4xl lg:leading-[1.2] lg:tracking-[-1.08px]">
                  John Carter
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
        <div class="relative reveal-me">
          <img
            src="images/home-ai/team/ai-team-4.webp"
            alt="Team member 1"
            class="w-full h-full object-cover shadow-lg transition-all duration-300 ease-in-out"
          />
          <div
            class="absolute bottom-0 left-0 right-0 py-4 px-4 m-5 bg-primary"
          >
            <a href="team-details.php">
              <div class="blog-title mb-1">
                <h3 class="lg:text-4xl lg:leading-[1.2] lg:tracking-[-1.08px]">
                  David Kim
                </h3>
              </div>
            </a>
            <p class="text-lg font-light leading-5 text-black/70">Founder</p>
          </div>
        </div>
      </div>
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
                  <img src="images/avatar/review-5.webp" alt="Avatar Img" />
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
                  <img src="images/avatar/review-2.webp" alt="Avatar Img" />
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
                  <img src="images/avatar/review-8.webp" alt="Avatar Img" />
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
   FAQ Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <div class="container">
    <!-- Section Heading and Description -->
    <div
      class="flex flex-col md:flex-row gap-x-10 gap-y-5 justify-center lg:justify-between max-md:items-start md:items-end mb-10 lg:mb-20"
    >
      <!-- Section Heading -->
      <div class="flex-1">
        <h2 class="text-appear block md:hidden">
          <span class="font-instrument italic">People</span>
          Asked Us
        </h2>
        <h2 class="text-appear md:block hidden">
          <span class="font-instrument lg:text-[70px] italic">People</span>
          <br />
          Asked Us
        </h2>
      </div>
      <!-- Section Description -->
      <div class="md:self-end flex-1">
        <p class="text-appear max-w-lg">
          When detailing testimonials, include key elements that provide context
          and authenticity.
        </p>
      </div>
    </div>

    <!-- FAQ Accordion Items -->
    <div
      class="w-full mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px] items-start"
    >
      <div class="space-y-[30px]">
        <!-- FAQ Item 1 -->
        <div class="reveal-me">
          <div
            class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6"
          >
            <div class="accordion-headerV4 cursor-pointer">
              <h3
                class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]"
              >
                What does it cost to work with you?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
        <!-- FAQ Item 2 -->
        <div class="reveal-me">
          <div
            class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6"
          >
            <div class="accordion-headerV4 cursor-pointer">
              <h3
                class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]"
              >
                Whats your return policy?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
      </div>

      <div class="space-y-[30px]">
        <!-- FAQ Item 3 -->
        <div class="reveal-me">
          <div
            class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6"
          >
            <div class="accordion-headerV4 cursor-pointer">
              <h3
                class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]"
              >
                How do I make a warranty claim?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
        <!-- FAQ Item 4 -->
        <div class="reveal-me">
          <div
            class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6"
          >
            <div class="accordion-headerV4 cursor-pointer">
              <h3
                class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]"
              >
                Do I have to pay customs fees or duty on my package?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
      </div>

      <div class="space-y-[30px]">
        <!-- FAQ Item 5 -->
        <div class="reveal-me">
          <div
            class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6"
          >
            <div class="accordion-headerV4 cursor-pointer">
              <h3
                class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]"
              >
                Where can I change or cancel my order?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
        <!-- FAQ Item 6 -->
        <div class="reveal-me">
          <div
            class="accordion-itemV4 overflow-hidden relative w-full lg:max-w-[370px] bg-backgroundBody dark:bg-dark border data-[active=true]:border-black data-[active=false]:border-black/10 dark:data-[active=false]:border-white/10 dark:data-[active=true]:border-white/10 duration-300 px-6 md:px-10 pt-6 md:pt-10 pb-8 md:pb-[60px] space-y-6"
          >
            <div class="accordion-headerV4 cursor-pointer">
              <h3
                class="text-[23px] md:text-[25px] tracking-normal font-normal md:leading-[25.2px]"
              >
                How do I make a warranty claim?
              </h3>
              <div class="accordion-header-iconV4 dark:border-dark"></div>
            </div>
            <p class="accordion-bodyV4 duration-300 h-0 overflow-hidden">
              If you need to exchange a product, please contact us within 14
              days of receiving your order. determine the best course of action
              and guide you through the exchange process.
            </p>
          </div>
        </div>
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
