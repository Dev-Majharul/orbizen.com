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
  class="pt-[110px] md:pt-[150px] lg:pt-[190px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="max-w-screen-xl mx-auto max-lg:px-5 px-3">
    <div class="flex flex-col max-lg:justify-center lg:flex-row gap-8">
      <div class="flex-1 max-lg:self-center">
        <h1 class="xl:text-[85px] text-appear">
          Hey I'm <i class="italic font-instrument">Svetlana —</i> Web Designer
          & Product Designer
        </h1>
        <div
          class="flex items-center gap-5 mt-10 pb-10 lg:pb-16 xl:pb-24 reveal-me"
        >
          <img src="images/avatar/hero-user.png" alt="" />
          <figcaption class="">
            <span class="text-xs text-colorText italic"
              >Step into my digital universe</span
            >
            <p class="text-secondary dark:text-backgroundBody">John Deo</p>
          </figcaption>
        </div>
        <figure class="mb-8 reveal-me">
          <img
            src="images/hero-img/hero-img-01.png"
            alt="Hero Img 01"
            class="w-full"
          />
        </figure>
        <figure class="reveal-me">
          <img src="images/hero-img/hero-img-02.png" alt="" class="w-full" />
        </figure>
      </div>
      <div class="max-lg:self-center">
        <figure class="mb-8 reveal-me">
          <img src="images/hero-img/hero-img-03.png" alt="" />
        </figure>
        <figure class="reveal-me">
          <img src="images/hero-img/hero-img-04.png" alt="" />
        </figure>
      </div>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div
      class="flex flex-col lg:flex-row justify-between gap-y-5 items-center lg:items-start"
    >
      <h4 class="reveal-me max-lg:max-w-2xl mx-auto">
        it's about understanding people, solving problems, and creating
        meaningful connections
      </h4>
      <div class="max-w-[500px] reveal-me">
        <p class="mb-5 md:mb-10">
          Hello, I'm Alexandra Bennett, a passionate UX designer dedicated to
          shaping digital experiences that seamlessly blend aesthetics with
          functionality. With a background in cognitive psychology and a love
          for cutting-edge technology, I bring a unique perspective to
          user-centric design.
        </p>
        <p>
          My journey in the design realm is not just about pixels; it's about
          understanding people, solving problems, and creating meaningful
          connections. I thrive on the intricacies of crafting intuitive
          interfaces that resonate with users.
        </p>
      </div>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <div
      class="flex flex-col md:flex-row justify-center md:justify-between items-center mb-10 md:mb-20"
    >
      <h2 class="text-appear flex-1">
        Selected <i class="font-instrument">Projects</i>
      </h2>
      <p class="md:self-end text-appear flex-1 max-w-md">
        Our user-centered design encourages productivity and boosts revenue.
      </p>
    </div>
    <div class="[&>*:not(:last-child)]:mb-[30px]">
      <!-- Project Card 01 -->
      <article class="group relative reveal-me underline-hover-effect">
        <a href="project-details-02.php" class="block overflow-hidden">
          <img
            src="images/portfolio/project-img-01.png"
            alt="Project img"
            class="group-hover:scale-125 group-hover:rotate-3 transition-all duration-500"
          />
        </a>

        <div
          class="bg-backgroundBody p-2 sm:p-3 md:p-[30px] max-w-96 md:max-w-[535px] absolute bottom-4 md:bottom-10 left-4 md:left-10 max-md:top-2 max-md:right-4"
        >
          <div class="project-title mb-2 md:mb-5">
            <a href="project-details-02.php">
              <h3
                class="text-[24px] lg:text-5xl lg:leading-[1.2] font-normal text-secondary dark:text-secondary"
              >
                Epicurean Elegance
              </h3>
            </a>
          </div>
          <p class="text-secondary dark:text-secondary max-md:text-xs">
            Apple Inc. is an American multinational corporation and technology
            company headquartered in Cupertino, California, in Silicon Valley.
            It is best known for its consumer electronics, software, and
            services.
          </p>
        </div>

        <figure
          class="bg-primary w-[55px] h-[55px] cursor-pointer overflow-hidden max-md:hidden md:block absolute top-10 right-10"
        >
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0"
          />
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute translate-y-12 -translate-x-4 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-x-[19px] group-hover:translate-y-5"
          />
        </figure>
      </article>

      <!-- Project Card 02 -->
      <article class="group relative reveal-me underline-hover-effect">
        <a href="project-details.php" class="block overflow-hidden">
          <img
            src="images/portfolio/project-img-02.png"
            class="group-hover:scale-125 group-hover:rotate-3 transition-all duration-500"
            alt="Project img"
          />
        </a>

        <div
          class="bg-backgroundBody p-2 sm:p-3 md:p-[30px] max-w-96 md:max-w-[535px] absolute bottom-4 md:bottom-10 left-4 md:left-10 max-md:top-2 max-md:right-4"
        >
          <div class="project-title mb-2 md:mb-5">
            <a href="project-details.php">
              <h3
                class="text-[24px] text-secondary dark:text-secondary lg:text-5xl lg:leading-[1.2] font-normal"
              >
                Artistry in Motion
              </h3>
            </a>
          </div>
          <p class="text-secondary max-md:text-xs dark:text-secondary">
            Apple Inc. is an American multinational corporation and technology
            company headquartered in Cupertino, California, in Silicon Valley.
            It is best known for its consumer electronics, software, and
            services.
          </p>
        </div>

        <figure
          class="bg-primary w-[55px] h-[55px] cursor-pointer overflow-hidden max-md:hidden md:block absolute top-10 right-10"
        >
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0"
          />
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute translate-y-12 -translate-x-4 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-x-[19px] group-hover:translate-y-5"
          />
        </figure>
      </article>

      <!-- Project Card 03 -->
      <article class="group relative reveal-me underline-hover-effect">
        <a href="project-details-02.php" class="block overflow-hidden">
          <img
            src="images/portfolio/project-img-03.png"
            class="group-hover:scale-125 group-hover:rotate-3 transition-all duration-500"
            alt="Project img"
          />
        </a>

        <div
          class="bg-backgroundBody p-2 sm:p-3 md:p-[30px] max-w-96 md:max-w-[535px] absolute bottom-4 md:bottom-10 left-4 md:left-10 max-md:top-2 max-md:right-4"
        >
          <div class="project-title mb-2 md:mb-5">
            <a href="project-details-02.php">
              <h3
                class="text-[24px] text-secondary dark:text-secondary lg:text-5xl lg:leading-[1.2] font-normal"
              >
                Digital Canvas
              </h3>
            </a>
          </div>
          <p class="text-secondary max-md:text-xs dark:text-secondary">
            Apple Inc. is an American multinational corporation and technology
            company headquartered in Cupertino, California, in Silicon Valley.
            It is best known for its consumer electronics, software, and
            services.
          </p>
        </div>

        <figure
          class="bg-primary w-[55px] h-[55px] cursor-pointer overflow-hidden max-md:hidden md:block absolute top-10 right-10"
        >
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0"
          />
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute translate-y-12 -translate-x-4 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-x-[19px] group-hover:translate-y-5"
          />
        </figure>
      </article>

      <!-- Project Card 04 -->
      <article class="group relative reveal-me underline-hover-effect">
        <a href="project-details.php" class="block overflow-hidden">
          <img
            src="images/portfolio/project-img-04.png"
            class="group-hover:scale-125 group-hover:rotate-3 transition-all duration-500"
            alt="Project img"
          />
        </a>

        <div
          class="bg-backgroundBody p-2 sm:p-3 md:p-[30px] max-w-96 md:max-w-[535px] absolute bottom-4 md:bottom-10 left-4 md:left-10 max-md:top-2 max-md:right-4"
        >
          <div class="project-title mb-2 md:mb-5">
            <a href="project-details.php">
              <h3
                class="text-[24px] text-secondary dark:text-secondary lg:text-5xl lg:leading-[1.2] font-normal"
              >
                Fashion Forward
              </h3>
            </a>
          </div>
          <p class="text-secondary max-md:text-xs dark:text-secondary">
            Apple Inc. is an American multinational corporation and technology
            company headquartered in Cupertino, California, in Silicon Valley.
            It is best known for its consumer electronics, software, and
            services.
          </p>
        </div>

        <figure
          class="bg-primary w-[55px] h-[55px] cursor-pointer overflow-hidden max-md:hidden md:block absolute top-10 right-10"
        >
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0"
          />
          <img
            src="images/icons/arrow-Icon.svg"
            alt="Arrow Icon"
            class="absolute translate-y-12 -translate-x-4 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-x-[19px] group-hover:translate-y-5"
          />
        </figure>
      </article>
    </div>
  </div>
</section>


 <section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] px-5"
>
  <div class="container">
    <h2 class="mb-10 md:mb-20 text-center text-appear">My Services</h2>
  </div>
  <div
    class="flex max-xl:flex-wrap max-xl:gap-6 justify-center [&>*:not(:last-child)]:border-l dark:[&>*:not(:last-child)]:border-l-dark [&>*:last-child]:border-l dark:[&>*:last-child]:border-l-dark [&>*:last-child]:border-r dark:[&>*:last-child]:border-r-dark [&>*]:border-y dark:[&>*]:border-y-dark max-xl:[&>*]:border-r dark:max-xl:[&>*:first-child]:border-dark max-xl:[&>*:nth-child(2)]:border-r dark:max-xl:[&>*:nth-child(2)]:border-dark max-2xl:[&>*:nth-child(3)]:border-r dark:max-2xl:[&>*:nth-child(3)]:border-dark"
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
          <div
            class="mb-8 lg:mb-[60px] flex gap-1 items-center justify-between"
          >
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

    <!-- Development Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">Development</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div
            class="mb-8 lg:mb-[60px] flex gap-1 items-center justify-between"
          >
            <h5
              class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              Development
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

    <!-- Design Card -->
    <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me">
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">Design</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div
            class="mb-8 lg:mb-[60px] flex gap-1 items-center justify-between"
          >
            <h5
              class="max-sm:text-3xl text-white dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              Design
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

    <!-- UI/UX Design  Card -->
    <div
      class="relative group overflow-hidden w-[360px] h-[500px] reveal-me justify-self-center"
    >
      <div
        class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
      >
        <h5 class="max-sm:text-3xl">UI/UX Design</h5>
      </div>

      <div
        class="w-full h-full bg-secondary dark:bg-white p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10"
      >
        <a href="services-details.php">
          <div
            class="mb-8 lg:mb-[60px] flex gap-1 items-center justify-between"
          >
            <h5
              class="max-sm:text-3xl text-white t dark:text-secondary opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
            >
              UI/UX Design
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


 <section
  class="relative overflow-hidden w-full pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] max-lg:pb-10 reveal-me"
>
  <div
    class="flex items-center gap-8 flex-nowrap"
    aria-hidden="true"
    ref="inner"
  >
    <div
      class="marquee-inner flex items-center gap-[30px] text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-tight xl:leading-[2.40] tracking-[-2px] xl:tracking-[-2.88px] uppercase text-nowrap"
    >
      <span> LET’S WORK TOGETHER </span>
      <span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="31"
          viewBox="0 0 30 31"
          fill="none"
        >
          <circle
            cx="15"
            cy="15.5"
            r="15"
            class="fill-black dark:fill-backgroundBody"
          />
        </svg>
      </span>
      <span> LET’S WORK TOGETHER </span>
      <span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="31"
          viewBox="0 0 30 31"
          fill="none"
        >
          <circle
            cx="15"
            cy="15.5"
            r="15"
            class="fill-black dark:fill-backgroundBody"
          />
        </svg>
      </span>
      <span> LET’S WORK TOGETHER </span>
      <span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="31"
          viewBox="0 0 30 31"
          fill="none"
        >
          <circle
            cx="15"
            cy="15.5"
            r="15"
            class="fill-black dark:fill-backgroundBody"
          />
        </svg>
      </span>
      <span> LET’S WORK TOGETHER </span>
      <span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="31"
          viewBox="0 0 30 31"
          fill="none"
        >
          <circle
            cx="15"
            cy="15.5"
            r="15"
            class="fill-black dark:fill-backgroundBody"
          />
        </svg>
      </span>
      <span> LET’S WORK TOGETHER </span>
      <span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="30"
          height="31"
          viewBox="0 0 30 31"
          fill="none"
        >
          <circle
            cx="15"
            cy="15.5"
            r="15"
            class="fill-black dark:fill-backgroundBody"
          />
        </svg>
      </span>
    </div>
  </div>
</section>


 
</main>

<?php
  get_template('footer');
  ?>
