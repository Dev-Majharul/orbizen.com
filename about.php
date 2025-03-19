<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

  // Page Title and Description
  $PAGE_TITLE = 'About Us';
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
    <img src="images/hero-gradient-background.webp" alt="hero-gradient-background" id="hero-gradient" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
  </div>

  <!-- Content Container -->
  <div class="container">
    <!-- Centered Content with Animation -->
    <div class="text-center reveal-me">
      <!-- Badge Component -->
      <div class="rv-badge">
        <span class="rv-badge-text">About</span>
      </div>

      <!-- Title and Description -->
      <h1 class="mt-3.5 sm:mt-5 lg:mt-9 mb-3 sm:mb-4 lg:mb-7">Digital Solution <i class="font-instrument italic">Agency</i></h1>
      <p>As a agency we are working on client projects, official Webflow Templates <br> and cloneables for the Webflow community.</p>
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
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] pt-28 md:pt-32 lg:pt-44 xl:pt-[200px] relative overflow-hidden about">
  <div class="container">
    <!-- Content Wrapper -->
    <div class="flex flex-col items-center lg:items-stretch justify-center lg:justify-normal reveal-me">
      <!-- Logo Circle -->
      <div class="relative w-[168px] h-[168px] bg-secondary dark:bg-white rounded-[50%] flex items-center justify-center mx-auto">
        <figure>
          <img src="images/icons/text-circle-logo.webp" alt="text-circle-logo" class="inline dark:hidden">
          <img src="images/icons/text-circle-dark-logo.webp" alt="text-circle-logo" class="hidden dark:inline">
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
   Team Member Showcase Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative z-50 overflow-hidden">
  <div class="container reveal-me">
    <!-- Main Profile Card -->
    <div class="our-team-details flex flex-col lg:flex-row gap-10 gap-x-[30px] max-md:justify-center max-md:items-center border dark:border-dark p-5 lg:p-10 bg-backgroundBody dark:bg-dark">
      <figure class="max-lg:w-full lg:max-w-[330px] lg:max-h-[350px]">
        <img src="images/home-ai/team/ai-team-1.webp" alt="Team Leader" class="w-full object-cover">
      </figure>

      <!-- Profile Details Container -->
      <div>
        <div class="flex flex-col gap-y-10 md:flex-row justify-between mb-5 lg:mb-10">
          <div>
            <h2 class="lg:text-4xl lg:leading-[1.2] lg:-tracking-[1.08px] mb-3">
              Marvin McKinney
            </h2>

            <p class="text-lg font-light leading-[20px]">Founder</p>
          </div>
          <ul class="flex gap-5 md:self-end">
            <li>
              <a href="https://x.com/home" target="_blank">
                <img src="images/icons/x-twitter.svg" alt="Twitter" class="inline dark:hidden">
                <img src="images/icons/x-twitter-dark.svg" alt="Twitter" class="hidden dark:inline">
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/staticmania" target="_blank">
                <img src="images/icons/facebook.svg" alt="Facebook" class="inline dark:hidden">
                <img src="images/icons/facebook-dark.svg" alt="Facebook" class="hidden dark:inline">
              </a>
            </li>
            <li>
              <a href="https://youtu.be/ceJ82RaW9mM?si=t9f7MrHVZSmeR8Gl" target="_blank">
                <img src="images/icons/youtube.svg" alt="YouTube" class="inline dark:hidden">
                <img src="images/icons/youtube-dark.svg" alt="YouTube" class="hidden dark:inline">
              </a>
            </li>
          </ul>
        </div>
        <div class="max-w-[730px] border-t dark:border-dark pt-5 lg:pt-10">
          <p>
            Enthusiasts of open-source and no-code tools, a professional UI/UX
            designer with 17 years of industry experience, I’m a visionary
            entrepreneur, crafting innovative tech solutions. StaticMania and
            KEEP Design System are my other breakthrough moves.
          </p>
        </div>
      </div>
    </div>

    <!-- Team Member Selection Tabs -->
    <div class="flex max-lg:flex-wrap gap-6 justify-center mt-[30px]">
      <div class="tab-member max-w-[370px] flex-auto border dark:border-dark p-5 flex items-center h-auto gap-5 transitionTimingFunction tab-active" data-member="marvin">
        <figure>
          <img src="images/home-ai/team/ai-team-1.webp" alt="Marvin McKinney" class="w-[130px] h-[130px] object-cover">
        </figure>
        <div>
          <h3 class="text-2xl leading-[1.2] tracking-[-0.72px] mb-3">
            Marvin McKinney
          </h3>
          <p>Founder</p>
        </div>
      </div>
      <div class="tab-member border dark:border-dark max-w-[370px] flex-auto p-5 flex items-center h-auto gap-5 transitionTimingFunction" data-member="marvin">
        <figure>
          <img src="images/home-ai/team/ai-team-2.webp" alt="Marvin McKinney" class="w-[130px] h-[130px] object-cover">
        </figure>
        <div>
          <h3 class="text-2xl leading-[1.2] tracking-[-0.72px] mb-3">
            Jacks Henry
          </h3>
          <p>Co-Founder</p>
        </div>
      </div>
      <div class="tab-member max-w-[370px] flex-auto border dark:border-dark p-5 flex items-center h-auto gap-5 transitionTimingFunction" data-member="marvin">
        <figure>
          <img src="images/home-ai/team/ai-team-3.webp" alt="Marvin McKinney" class="w-[130px] h-[130px] object-cover">
        </figure>
        <div>
          <h3 class="text-2xl leading-[1.2] tracking-[-0.72px] mb-3">
            Courtney Henry
          </h3>
          <p>Web Engineer</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Gradient Marquee Section
======================================-->
<section class="relative max-md:pt-0.5 pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] mb-14 md:mb-16 lg:mb-[88px] xl:mb-[100px] overflow-hidden">
  <div class="absolute scale-y-75 lg:scale-y-[0.5] xl:scale-y-[0.5] 2xl:scale-y-[0.22] scale-x-[2.5] left-1/2 top-1/2 -translate-y-1/2 lg:-translate-y-[45%] xl:-translate-y-[50%] 2xl:-translate-y-[46%] -translate-x-1/2 -z-30">
    <img src="images/gradient-bg.webp" alt="gradient-bg">
  </div>
  <!-- Gradient Background Container -->
  <div class="py-5 sm:py-10 reveal-me">
    <!-- Marquee Wrapper -->
    <div class="relative overflow-hidden">
      <div class="absolute left-0 top-0 h-full w-40 bg-gradient-to-r from-white to-transparent dark:from-dark z-40"></div>
      <div class="absolute right-0 top-0 h-full w-40 bg-gradient-to-l from-white to-transparent dark:from-dark z-40"></div>
      <!-- Infinite Scroll Container -->
      <div class="z-50 flex gap-5 w-fit flex-nowrap whitespace-nowrap will-change-transform marquee-inner">
        <!-- Marquee Items - Frosted Glass Effect -->
        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <!-- Light/Dark Mode Logo Variants -->
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-3xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white/80 dark:bg-dark backdrop-blur-2xl w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>
      </div>
    </div>
  </div>
</section>


<!--=====================================
    Awards & Recognition Area
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Section Header -->
  <div class="container flex flex-col lg:flex-row lg:justify-between gap-x-8 gap-y-4 mb-10 md:mb-20">
    <!-- Section Title -->
    <div class="flex-1">
      <div class="rv-badge reveal-me">
        <span class="rv-badge-text">Excellence in Design</span>
      </div>
      <h2 class="text-appear mt-3 lg:mt-9">Recognition & Achievements</h2>
    </div>
    <!-- Section Description -->
    <p class="max-w-[570px] flex-1 text-2xl leading-[1.3] tracking-[0.48px] text-appear lg:self-end">
      Our commitment to exceptional design has earned global recognition and
      industry accolades.
    </p>
  </div>

  <!-- Awards List Container -->
  <div class="divide-y-[1px] dark:divide-dark [&>*:first-child]:border-t max-md:last:border-b dark:last:border-dark dark:[&>*:first-child]:border-dark">
    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/70 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-6 justify-self-center col-span-2 italic group-hover:text-white transition-colors duration-300 text-[19px] font-normal leading-[1.4] relative z-20">2024</span>
      <h3 class="lg:text-5xl lg:leading-[1.2] max-md:col-span-6 col-span-4 group-hover:text-white transition-colors duration-300 relative z-20">
        Site of the Year
      </h3>
      <p class="lg:text-[21px] lg:leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-3 relative z-20 pr-1">
        Awwwards
      </p>
      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-2 relative z-20">
        Gold Winner
      </p>
    </div>

    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/70 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-6 justify-self-center col-span-2 group-hover:text-white transition-colors duration-300 italic text-[19px] font-normal leading-[1.4] relative z-20">2023</span>
      <h3 class="lg:text-5xl lg:leading-[1.2] max-md:col-span-6 col-span-4 group-hover:text-white transition-colors duration-300 relative z-20">
        Design Excellence
      </h3>
      <p class="lg:text-[21px] lg:leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-3 relative z-20">
        CSS Design Awards
      </p>
      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-2 relative z-20">
        Best UI Design
      </p>
    </div>

    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/70 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-6 justify-self-center col-span-2 group-hover:text-white transition-colors duration-300 italic text-[19px] font-normal leading-[1.4] relative z-20">2022</span>
      <h3 class="lg:text-5xl lg:leading-[1.2] max-md:col-span-6 col-span-4 group-hover:text-white transition-colors duration-300 relative z-20">
        Innovation Award
      </h3>
      <p class="lg:text-[21px] lg:leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-3 relative z-20">
        Adobe Design
      </p>
      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-2 relative z-20">
        Grand Prize
      </p>
    </div>

    <!-- Single Award Item -->
    <div class="grid grid-cols-12 max-md:text-center py-10 px-5 text-left items-center h-full relative group overflow-hidden">
      <div class="w-full h-full absolute bg-secondary dark:bg-primary/70 left-0 top-0 origin-bottom scale-y-0 transition-transform ease-in-out duration-500 group-hover:scale-y-100 group-hover:origin-top"></div>
      <span class="font-instrument max-md:col-span-6 group-hover:text-white transition-colors duration-300 justify-self-center col-span-2 italic text-[19px] font-normal leading-[1.4] relative z-20">2021</span>
      <h3 class="lg:text-5xl lg:leading-[1.2] max-md:col-span-6 group-hover:text-white transition-colors duration-300 col-span-4 relative z-20">
        Best Portfolio
      </h3>
      <p class="lg:text-[21px] lg:leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-3 relative z-20">
        Webby Awards
      </p>
      <p class="text-[21px] leading-[1.4] text-secondary dark:text-backgroundBody group-hover:text-white transition-colors duration-300 max-md:col-span-6 col-span-2 relative z-20">
        People's Choice
      </p>
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
      Let's chat!
      <div class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-5 translate-y-2 sm:translate-y-[20px] max-sm:mt-2.5">
        <div class="cta-inline-slider">
          <div class="slide">
            <img src="images/agent/01.webp" alt="Slide 1">
          </div>
          <div class="slide">
            <img src="images/agent/02.webp" alt="Slide 2">
          </div>
          <div class="slide">
            <img src="images/agent/03.webp" alt="Slide 3">
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
