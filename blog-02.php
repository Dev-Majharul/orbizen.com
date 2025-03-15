<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Blog';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>
<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Page Header v3
======================================-->
<section class="pt-36 lg:pt-[240px] pb-10 lg:pb-20 relative overflow-hidden">
  <!-- Gradient Background Wrapper -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full md:w-[40%] h-full md:h-[40%] max-md:top-1/2 max-lg:-translate-y-1/2 lg:top-0 -z-10 blur-[60px] scale-90"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute lg:left-[78%] xl:left-full max-md:top-20 md:top-[45%] lg:-translate-x-[78%]"
    />
  </div>

  <!-- Content Container -->
  <div class="container">
    <!-- Header Content Flex Container -->
    <div
      class="flex flex-col md:flex-row gap-x-10 gap-y-4 justify-center lg:justify-between mb-20"
    >
      <!-- Title Section -->
      <div class="max-sm:self-start">
        <h1
          class="text-appear text-[46px] max-lg:leading-[1.33] lg:text-7xl xl:text-[80px] font-normal leading-[1.1]"
        >
          <span class="font-instrument lg:text-[100px] italic"> Insights </span>
          <br class="hidden md:block" />
          we share
        </h1>
      </div>

      <!-- Description Section -->
      <div class="md:max-w-[470px] self-center md:self-end">
        <p class="text-appear">
          We champion athletes, storytellers, and brands that shape culture and
          inspire the world with their unique perspectives.
        </p>
      </div>
    </div>
  </div>
</section>


<!--=====================================
    Blog Posts Grid Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] bg-transparent">
  <div class="container">
    <div
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center items-center md:items-start gap-x-6 gap-y-[60px]"
    >
      <!-- Blog Post 1 -->
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blogV2-img-1.png"
            alt="Web Design Trends"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
        <a href="blog-details.php">
          <div class="blog-title mt-[30px] mb-5">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Web Design Trends That Will Dominate 2024
            </h3>
          </div>
        </a>

        <p class="mb-7 md:mb-10">
          Explore the cutting-edge design trends shaping the digital landscape,
          from AI-driven interfaces to immersive experiences.
        </p>
        <a href="blog-details.php" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>

      <!-- Blog Post 2 -->
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blogV2-img-2.png"
            alt="UX Design Process"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
        <a href="blog-details.php">
          <div class="blog-title mt-[30px] mb-5">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Mastering Modern UX Design: A Complete Guide
            </h3>
          </div>
        </a>

        <p class="mb-7 md:mb-10">
          Learn how leading design teams are revolutionizing user experiences
          through innovative methodologies, items and tools.
        </p>
        <a href="blog-details.php" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>

      <!-- Blog Post 3 -->
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blogV2-img-3.png"
            alt="Design Systems"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>

        <a href="blog-details.php">
          <div class="blog-title mt-[30px] mb-5">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Building Scalable Design Systems in 2024
            </h3>
          </div>
        </a>

        <p class="mb-7 md:mb-10">
          Discover how design systems are transforming workflow efficiency and
          maintaining consistency across digital products.
        </p>
        <a href="blog-details.php" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>

      <!-- Blog Post 4 -->
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blogV2-img-4.png"
            alt="AI in Design"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>

        <a href="blog-details.php">
          <div class="blog-title mt-[30px] mb-5">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Future of AI in Digital Design
            </h3>
          </div>
        </a>

        <p class="mb-7 md:mb-10">
          Explore how artificial intelligence and machine learning are reshaping
          the landscape of modern digital design and creativity.
        </p>
        <a href="blog-details.php" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>

      <!-- Blog Post 5 -->
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-1.png"
            alt="Accessibility Design"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>

        <a href="blog-details.php">
          <div class="blog-title mt-[30px] mb-5">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Inclusive Design: Beyond the Basics
            </h3>
          </div>
        </a>

        <p class="mb-7 md:mb-10">
          A comprehensive guide to creating accessible digital experiences that
          work for everyone, including advanced techniques and best practices.
        </p>
        <a href="blog-details.php" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>

      <!-- Blog Post 6 -->
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blogV2-img-5.png"
            alt="Future of Design"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
        <a href="blog-details.php">
          <div class="blog-title mt-[30px] mb-5">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              Emerging Technologies in Web Design
            </h3>
          </div>
        </a>

        <p class="mb-7 md:mb-10">
          Dive into the latest technologies and methodologies shaping the future
          of web design, from WebGL to 3D interactions and apllication.
        </p>
        <a href="blog-details.php" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>
    </div>

    <div class="mt-16 md:mt-24">
      <ul class="flex items-center justify-center gap-3">
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center justify-center border dark:border-colorText hover:bg-primary duration-300 text-sm font-normal group"
          >
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                height="16"
                viewBox="0 0 18 16"
                fill="none"
                class="stroke-black dark:stroke-white"
              >
                <path
                  d="M17.25 8H0.75M0.75 8L7.5 1.25M0.75 8L7.5 14.75"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </a>
        </li>
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center text-sm justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            1
          </a>
        </li>
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center text-sm justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            2
          </a>
        </li>
        <li class="group page-active">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center justify-center hover:bg-primary duration-300 group-[.page-active]:bg-primary"
          >
            3
          </a>
        </li>

        <li class="group max-md:hidden">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center text-sm font-medium justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            4
          </a>
        </li>
        <li class="group max-md:hidden">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center text-sm font-medium justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            5
          </a>
        </li>
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-10 md:w-14 h-10 md:h-14 items-center justify-center border dark:border-colorText hover:bg-primary duration-300 text-sm font-normal group"
          >
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="stroke-black dark:stroke-white"
                width="18"
                height="16"
                viewBox="0 0 18 16"
                fill="none"
              >
                <path
                  d="M0.75 8H17.25M17.25 8L10.5 1.25M17.25 8L10.5 14.75"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </a>
        </li>
      </ul>
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
