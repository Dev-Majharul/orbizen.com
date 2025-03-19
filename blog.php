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
   Page Header Section
======================================-->
<section
  class="pt-28 sm:pb-28 max-md:pb-16 md:py-[155px] lg:py-[177px] relative z-50 overflow-hidden"
>
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] scale-75"
  >
    <!-- Gradient Background Image: Positioned centrally with responsive sizing -->
    <img
      src="images/hero-gradient-background.webp"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Content Container -->
  <div class="container">
    <!-- Centered Content with Animation -->
    <div class="text-center reveal-me">
      <!-- Badge Component -->
      <div class="rv-badge">
        <span class="rv-badge-text">Blog</span>
      </div>

      <!-- Title and Description -->
      <h1 class="mt-3.5 sm:mt-5 lg:mt-9 mb-3 sm:mb-4 lg:mb-7">What we got to say</h1>
      <p>These alternatives can add a different tone or emphasis depending on how you want <br> to introduce your creative team. Let me know if you'd like any specific adjustments!</p>
    </div>
  </div>
</section>


<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <div
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center items-center md:items-start gap-6 gap-y-12"
    >
      <div class="max-w-[370px] reveal-me underline-hover-effect group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-1.webp"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            alt="Blog Images"
          />
        </figure>
        <p
          class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-[30px] mb-5"
        >
          SEPTEMBER 10, 2024
        </p>
        <a href="blog-details.php">
          <div class="blog-title mb-9">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Changing Face of Digital Advertising
            </h3>
          </div>
        </a>

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
      <div class="max-w-[370px] reveal-me underline-hover-effect group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-2.webp"
            alt="Blog Images"
            class="max-h-[389px] h-full w-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
        <p
          class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-[30px] mb-5"
        >
          SEPTEMBER 10, 2024
        </p>
        <a href="blog-details.php">
          <div class="blog-title mb-9">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Shifting Dynamics of Digital Advertising
            </h3>
          </div>
        </a>

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
      <div class="max-w-[370px] reveal-me underline-hover-effect group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-3.webp"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            alt="Blog Images"
          />
        </figure>
        <p
          class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-[30px] mb-5"
        >
          SEPTEMBER 10, 2024
        </p>
        <a href="blog-details.php">
          <div class="blog-title mb-9">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Transformation of Digital Advertising
            </h3>
          </div>
        </a>

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

    <article class="mt-12 md:mt-[70px] [&>*:not(last-child)]:mb-10">
      <div
        class="border dark:border-dark p-7 lg:p-10 flex flex-col-reverse gap-y-12 lg:flex-row justify-center md:justify-normal items-center reveal-me underline-hover-effect group"
      >
        <div class="max-lg:self-center">
          <p
            class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal"
          >
            SEPTEMBER 10, 2024
          </p>
          <a href="blog-details.php">
            <div class="blog-title mt-5 mb-6 lg:mb-10">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                The Rapid Evolution of Digital Advertising
              </h3>
            </div>
          </a>

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

        <figure class="overflow-hidden w-full lg:min-w-[464px]">
          <img
            src="images/blog-img/blog-img-4.webp"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            alt="Blog Images"
          />
        </figure>
      </div>
      <div
        class="border dark:border-dark p-7 lg:p-10 flex flex-col-reverse gap-y-12 lg:flex-row justify-center md:justify-normal items-center reveal-me underline-hover-effect group"
      >
        <div>
          <p
            class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal"
          >
            SEPTEMBER 10, 2024
          </p>
          <a href="blog-details.php">
            <div class="blog-title mt-5 mb-7 lg:mb-10">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                The New Era of Digital Advertising
              </h3>
            </div>
          </a>

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
        <figure class="overflow-hidden w-full lg:min-w-[464px]">
          <img
            src="images/blog-img/blog-img-5.webp"
            alt="Blog Images"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
      </div>
      <div
        class="border dark:border-dark p-7 lg:p-10 flex flex-col-reverse gap-y-12 lg:flex-row justify-center md:justify-normal items-center reveal-me underline-hover-effect group"
      >
        <div>
          <p
            class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal"
          >
            SEPTEMBER 10, 2024
          </p>
          <a href="blog-details.php">
            <div class="blog-title mt-5 mb-7 lg:mb-10">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                Artificial Intelligence & Automation
              </h3>
            </div>
          </a>

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
        <figure class="overflow-hidden w-full lg:min-w-[464px]">
          <img
            src="images/blog-img/blog-img-7.webp"
            alt="Blog Images"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
      </div>
      <div
        class="border dark:border-dark p-7 lg:p-10 flex flex-col-reverse gap-y-12 lg:flex-row justify-center md:justify-normal items-center reveal-me underline-hover-effect group"
      >
        <div>
          <p
            class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal"
          >
            SEPTEMBER 10, 2024
          </p>
          <a href="blog-details.php">
            <div class="blog-title mt-5 mb-7 lg:mb-10">
              <h3
                class="text[27px] md:text-4xl md:leading-[1.2] md:tracking-[-0.72px]"
              >
                The Changing Face of Digital Advertising
              </h3>
            </div>
          </a>
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
        <figure class="overflow-hidden w-full lg:min-w-[464px]">
          <img
            src="images/blog-img/blog-img-6.webp"
            alt="Blog Images"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
      </div>
    </article>

    <div class="mt-16 md:mt-24">
      <ul class="flex items-center justify-center gap-3">
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-14 h-14 items-center justify-center border dark:border-colorText hover:bg-primary duration-300 text-sm font-normal group"
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
            class="flex w-14 h-14 items-center text-sm justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            1
          </a>
        </li>
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-14 h-14 items-center text-sm justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            2
          </a>
        </li>
        <li class="group page-active">
          <a
            href="blog-details.php"
            class="flex w-14 h-14 items-center justify-center hover:bg-primary duration-300 hover:text-paragraph group-[.page-active]:bg-primary dark:group-[.page-active]:text-paragraph"
          >
            3
          </a>
        </li>

        <li class="group max-md:hidden">
          <a
            href="blog-details.php"
            class="flex w-14 h-14 items-center text-sm font-medium justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            4
          </a>
        </li>
        <li class="group max-md:hidden">
          <a
            href="blog-details.php"
            class="flex w-14 h-14 items-center text-sm font-medium justify-center hover:bg-primary duration-300 hover:text-secondary/70 group-[.page-active]::bg-primary"
          >
            5
          </a>
        </li>
        <li class="group">
          <a
            href="blog-details.php"
            class="flex w-14 h-14 items-center justify-center border dark:border-colorText hover:bg-primary duration-300 text-sm font-normal group"
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
