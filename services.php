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
   Page Header Details Section
======================================-->
<section
  class="pt-32 max-md:pb-20 md:py-44 lg:pt-[200px] relative overflow-hidden"
>
  <!-- Gradient Background Wrapper -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] sm:scale-[0.1] bg-blend-multiply md:scale-75"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-[45%]"
    />
  </div>

  <!-- Hero Content Container -->
  <div class="container reveal-me">
    <div class="text-center">
      <!-- Badge Component -->
      <div class="rv-badge mb-4 lg:mb-10">
        <span class="rv-badge-text">Services</span>
      </div>

      <!-- Hero Title -->
      <h1 class="mb-5 lg:mb-8">Services</h1>

      <!-- Hero Description -->
      <p class="max-md:max-w-[650px]">Explore our innovative cutting-edge no-code websites designed to captivate and engage your <br> visitors effortlessly</p>
    </div>
  </div>
</section>


<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden pt-0 md:pt-0 lg:pt-0 xl:pt-6 "
>
  <div class="container">
    <div
      class="flex flex-col md:flex-row gap-y-3 gap-x-10 justify-center lg:justify-start items-start sm:items-center mb-16 md:mb-20"
    >
      <div class="flex-1">
        <h2 class="text-appear-2">
          Elevating Your <br />
          <span class="font-instrument italic">Digital</span> Presence
        </h2>
      </div>
      <div class="flex-1 max-w-lg">
        <p
          class="text-appear max-md:text-justify dark:text-colorText text-appear-2"
        >
          We offer expert digital solutions to boost your brand and online
          presence. Our services drive growth, engagement, and success in the
          digital world.
        </p>
      </div>
    </div>
  </div>

  <div
    class="flex max-xl:flex-wrap max-xl:gap-5 justify-center [&>*:not(:last-child)]:border-l dark:[&>*:not(:last-child)]:border-l-dark [&>*:last-child]:border-l dark:[&>*:last-child]:border-l-dark [&>*:last-child]:border-r dark:[&>*:last-child]:border-r-dark [&>*]:border-y dark:[&>*]:border-y-dark max-xl:[&>*:first-child]:border-r dark:max-xl:[&>*:first-child]:border-dark max-xl:[&>*:nth-child(2)]:border-r dark:max-xl:[&>*:nth-child(2)]:border-dark max-2xl:[&>*:nth-child(3)]:border-r dark:max-2xl:[&>*:nth-child(3)]:border-dark xl:px-5"
  >
    <!-- Research Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">Research</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5
              class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              Research
            </h5>
            <span
              class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
          <p
            class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
          >
            What specific research are you interested in? Research can range
            across a variety of fields such as:
          </p>
          <ul
            class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
          >
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              Scientific research (e.g., medical, environmental, technological
              studies)
            </li>
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              Market research (consumer trends, competitor analysis)
            </li>
          </ul>
        </a>
      </div>
    </div>

    <!-- Alchemy Studio Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">Studio</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5
              class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              Studio
            </h5>
            <span
              class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
            >
              <svg
                class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
          <p
            class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
          >
            What specific design elements are you focusing on? Design can span
            across:
          </p>
          <ul
            class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
          >
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              Visual design (e.g., branding, marketing assets)
            </li>
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              Digital design (e.g., app interfaces, website layouts)
            </li>
          </ul>
        </a>
      </div>
    </div>
    <!-- Rhythms Media Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">Media</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5
              class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              Media
            </h5>
            <span>
              <svg
                class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
              >
                <path
                  d="M5 16H27"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
          <p
            class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
          >
            What specific design elements are you focusing on? Design can span
            across:
          </p>
          <ul
            class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
          >
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              Visual design (e.g., branding, marketing assets)
            </li>
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              Digital design (e.g., app interfaces, website layouts)
            </li>
          </ul>
        </a>
      </div>
    </div>

    <!-- Sound Studios  Card -->

    <div
      class="relative group overflow-hidden w-[360px] h-[500px] reveal-me justify-self-center"
    >
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">Development</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div class="mb-[55px] flex gap-1 items-center justify-between">
            <h5
              class="max-sm:text-3xl text-white t dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              Development
            </h5>
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
              >
                <path
                  d="M5 16H27"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18 7L27 16L18 25"
                  class="stroke-white dark:stroke-black"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </span>
          </div>
          <p
            class="text-backgroundBody/70 dark:text-secondary/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
          >
            Which aspects of UI/UX design are you targeting? Consider:
          </p>
          <ul
            class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
          >
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              User interface design (e.g., layouts, colors, typography)
            </li>
            <li
              class="text-backgroundBody/70 dark:text-secondary/70 list-disc text-base leading-relexed"
            >
              User experience design (e.g., interactions, user flows)
            </li>
          </ul>
        </a>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Workflow Process Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <!-- Section Title -->
    <h3
      class="max-md:text-3xl md:text-6xl lg:text[56px] lg:leading-[1.2] lg:tracking-[-1.68px] text-center mb-14 md:mb-20 text-appear"
    >
      How do we do it?
    </h3>

    <!-- Process Timeline Container -->
    <!-- Parent with horizontal connecting lines -->
    <div
      class="relative after:content-[''] after:absolute max-md:after:top-16 md:after:top-[105px] after:bg-[#e5e5e5] dark:after:bg-white/10 after:block after:w-full after:h-[1px] after:-z-10 max-lg:before:content-[''] max-lg:before:absolute max-md:bottom-5 max-md:before:bottom-[137px] max-lg:before:bottom-[155px] max-lg:before:bg-[#e5e5e5] dark:max-lg:before:bg-white/10 max-lg:before:block max-lg:before:w-full max-lg:before:h-[1px] max-lg:before:-z-10 reveal-me"
    >
      <!-- Process Steps Grid -->
      <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[30px] justify-between items-center"
      >
        <!-- Step 1 - Request -->
        <div class="text-center reveal-me">
          <!-- Step Number with Dot -->
          <span
            class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-50"
          >
            01
          </span>
          <h3
            class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
          >
            Request
          </h3>
          <p class="text-base leading-[1.4] tracking-[0.32px]">
            We mostly work on a fixed-bid basis for our projects, focusing on a
            select few clients at a time.
          </p>
        </div>

        <!-- Step 2 - Approve -->
        <div class="text-center reveal-me">
          <!-- Step Number with Dot -->
          <span
            class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-10"
          >
            02
          </span>
          <h3
            class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
          >
            Approve
          </h3>
          <p class="text-base leading-[1.4] tracking-[0.32px]">
            We mostly work on a fixed-bid basis for our projects, focusing on a
            select few clients at a time.
          </p>
        </div>

        <!-- Step 3 - Develop -->
        <div class="text-center reveal-me">
          <!-- Step Number with Dot -->
          <span
            class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-10"
          >
            03
          </span>
          <h3
            class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
          >
            Develop
          </h3>
          <p class="text-base leading-[1.4] tracking-[0.32px]">
            We mostly work on a fixed-bid basis for our projects, focusing on a
            select few clients at a time.
          </p>
        </div>

        <!-- Step 4 - Deliver -->
        <div class="text-center reveal-me">
          <!-- Step Number with Dot -->
          <span
            class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-10"
          >
            04
          </span>
          <h3
            class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
          >
            Deliver
          </h3>
          <p class="text-base leading-[1.4] tracking-[0.32px]">
            We mostly work on a fixed-bid basis for our projects, focusing on a
            select few clients at a time.
          </p>
        </div>
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
