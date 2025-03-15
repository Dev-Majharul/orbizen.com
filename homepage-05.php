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
   SEO Hero Section
======================================-->
<section class="pt-32 lg:pt-[140px] xl:pt-[180px] pb-7 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Hero Content Wrapper -->
  <div class="flex flex-col gap-y-8 xl:flex-row justify-center md:justify-between items-center pl-10 reveal-me">
    <!-- Text Content Container -->
    <div class="container max-sm:!-ml-[5%] lg:!ml-[10%] xl:!ml-[7%]">
      <!-- Agency Label -->
      <p class="flex gap-5 items-center max-md:justify-center font-poppins text-sm font-normal leading-6 tracking-[3px] uppercase">
        SEO Agency
      </p>

      <!-- Responsive Headings -->
      <h1 class="mt-2 sm:mt-6 md:hidden block">
        We are the brilliants in terms of digital marketing
      </h1>
      <h1 class="mt-6 xl:text-[80px] 2xl:text-8xl hidden md:block">
        We are the <br>
        brilliants in terms <br>
        of digital marketing
      </h1>
    </div>

    <!-- Hero Image -->
    <figure>
      <img src="images/home-5/hero-img.png" alt="Hero Img">
    </figure>
  </div>
</section>


 <!--==================================
   About Description Section Area
===================================-->
<section class="pt-6 lg:pt-12 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="container">
    <!-- About Description Text -->
    <h3 class="reveal-text-2 text-xl lg:text-[40px] xl:text-[50px] font-normal lg:leading-[1.2] lg:tracking-[-1.68px]">
      At Orbizen Limited, we blend creativity with functionality to craft designs
      that resonate with your's brand essence. Let's create something beautiful
      together. we blend creativity with functionality to craft designs that
      resonate with your's brand essence. Let's create something beautiful
      together.
    </h3>
  </div>
</section>


 <!--=====================================
   Company Logos Marquee Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div>
    <!-- Section Header -->
    <p class="container text-center mb-10 lg:mb-20 reveal-me">
      Trusted by over 100+ fast-growing companies all around the world
    </p>

    <!-- Marquee Container -->
    <div class="relative overflow-hidden">
      <!-- Infinite Scroll Container -->
      <div class="z-50 flex gap-px w-fit flex-nowrap whitespace-nowrap will-change-transform marquee-inner reveal-me">
        <!-- Marquee Items -->
        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <!-- Light/Dark Mode Logo Variants -->
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/invert.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/invert-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>

        <div class="bg-white dark:bg-dark border-r border-y border-secondary/10 dark:border-backgroundBody/10 w-48 h-24 flex items-center justify-center z-50 flex-shrink-0 marquee-part">
          <img src="images/marquee-img/greenish.svg" alt="Company Logo" class="inline-block dark:hidden">
          <img src="images/marquee-img/greenish-dark.svg" alt="Company Logo" class="dark:inline-block hidden">
        </div>
      </div>
    </div>
  </div>
</section>


 <!--=====================================
   Results Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div>
      <p class="font-satoshi text-center text-sm font-normal leading-6 tracking-[3px] uppercase reveal-me">
        SEO Agency
      </p>
      <h2 class="mt-3 lg:mt-5 mb-10 lg:mb-20 text-center text-appear">
        Our results speak for themselves
      </h2>
    </div>

    <!-- Case Studies Container -->
    <div class="mb-[60px] space-y-10">
      <!-- Case Study 1 - Cloud Storage -->
      <div class="flex flex-col lg:flex-row items-center relative reveal-me underline-hover-effect group">
        <!-- Case Study Image -->
        <figure class="max-w-[870px] -z-30 overflow-hidden">
          <a href="project-details.php" class="block">
            <img src="images/home-5/case-study-1.png" class="w-full h-full group-hover:scale-125 group-hover:rotate-3 transition-all duration-500" alt="case-studies Img">
          </a>
        </figure>

        <!-- Overlapping Content Card -->
        <div class="p-[30px] z-30 max-md:-mt-5 lg:absolute lg:right-0 bg-white dark:bg-dark border border-black/10 dark:border-white/10 max-w-[570px]">
          <p class="font-satoshi text-sm font-normal leading-6 tracking-[3px] uppercase mb-2 lg:mb-[14px]">
            Company
          </p>
          <div class="blog-title mb-3.5 lg:mb-5">
            <a href="project-details.php">
              <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                Introducing the first cloud storage solution for web-based
              </h3>
            </a>
          </div>
          <p class="mb-10">
            Could you clarify what you'd like to know or discuss regarding It
            can refer to representation.
          </p>
          <!-- Case Study Button -->
          <a href="project.php" class="rv-button rv-button-white">
            <div class="rv-button-top !text-center">
              <span> project Study</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center">
              <span class=""> project Study</span>
              <img class="dark:inline hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="dark:hidden inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
          </a>
        </div>
      </div>

      <!-- Case Study 2 - AI Finance -->
      <div class="flex flex-col lg:flex-row items-center relative reveal-me underline-hover-effect group">
        <!-- Case Study Image -->
        <figure class="max-w-[870px] -z-30 overflow-hidden">
          <a href="project-details.php" class="block">
            <img src="images/home-5/case-study-2.png" class="w-full h-full group-hover:scale-125 group-hover:rotate-3 transition-all duration-500" alt="case-studies Img">
          </a>
        </figure>

        <!-- Overlapping Content Card -->
        <div class="p-[30px] z-30 max-md:-mt-5 lg:absolute lg:right-0 bg-white dark:bg-dark border border-black/10 dark:border-white/10 max-w-[570px]">
          <p class="font-satoshi text-sm font-normal leading-6 tracking-[3px] uppercase mb-2 lg:mb-[14px]">
            Company
          </p>
          <div class="blog-title mb-3.5 lg:mb-5">
            <a href="project-details-02.php">
              <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                How AI is redefining finance and banking
              </h3>
            </a>
          </div>
          <p class="mb-10">
            Could you clarify what you'd like to know or discuss regarding It
            can refer to representation.
          </p>
          <!-- Case Study Button -->
          <a href="project-02.php" class="rv-button rv-button-white">
            <div class="rv-button-top !text-center">
              <span> project Study</span>
              <img class="inline dark:hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="hidden dark:inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
            <div class="rv-button-bottom !text-center">
              <span class=""> project Study</span>
              <img class="dark:inline hidden" src="images/icons/top-arrow.svg" alt="Arrow Icon">
              <img class="dark:hidden inline" src="images/icons/top-arrow-dark.svg" alt="Arrow Icon">
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- View All Projects Button -->
    <ul class="flex justify-center reveal-me">
      <li class="block md:inline-block w-[90%] mx-auto md:w-auto">
        <a href="project-03.php" class="rv-button rv-button-secondary block md:inline-block text-center">
          <div class="rv-button-top">
            <span>View All Project</span>
          </div>
          <div class="rv-button-bottom">
            <span>View All Project</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>


 <!--=====================================
   SEO Process Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div class="">
      <p class="font-satoshi text-center text-sm font-normal leading-6 tracking-[3px] uppercase reveal-me mb-2 lg:mb-3">
        Our Process
      </p>
      <h2 class="mb-10 lg:mb-20 text-center text-appear">
        A simple, yet effective <br>
        SEO ranking process
      </h2>
    </div>

    <!-- Process Steps Container -->
    <div class="flex max-md:flex-wrap gap-[30px] justify-center service-item-wrapper">
      <!-- Step 1 - Keyword Research -->
      <div class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
        <h2 class="service-item-number"></h2>
        <h5 class="mb-5">Keyword Research</h5>
        <p class="text-center">Dive deep into your market, understand your</p>
      </div>

      <!-- Step 2 - Link Building -->
      <div class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
        <h2 class="service-item-number"></h2>
        <h5 class="mb-5">Link Building</h5>
        <p class="text-center">Dive deep into your market, understand your</p>
      </div>

      <!-- Step 3 - Ranking -->
      <div class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
        <h2 class="service-item-number"></h2>
        <h5 class="mb-5">Ranking</h5>
        <p class="text-center">Dive deep into your market, understand your</p>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Testimonials Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <!-- Section Header -->
  <div class="container">
    <p class="font-satoshi text-center text-sm font-normal leading-6 tracking-[3px] uppercase reveal-me">
      Testimonials
    </p>
    <h2 class="mt-3 mb-10 lg:mb-20 text-center text-appear">
      Read what our amazing past <br class="hidden md:block">
      clients say
    </h2>
  </div>

  <!-- Marquee Slider -->

  <div class="marquee-container">
    <div class="flex items-center gap-[30px] max-sm:mb-[1px]">
      <!-- Testimonial Card 1 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px] ml-[30px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-1.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Cindy Ibanez
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Founder of Product Hunt
            </p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 2 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-2.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Darrell Steward
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Product design
            </p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 3 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-3.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Wade Warren
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Founder of Product Hunt
            </p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 4 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-4.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Arlene McCoy
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Founder of Product Hunt
            </p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 5 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-7.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Marvin McKinney
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Founder of Product Hunt
            </p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 6 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-6.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Jacob Jones
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Founder of Product Hunt
            </p>
          </div>
        </div>
      </div>

      <!-- Testimonial Card 7 -->
      <div class="border dark:border-dark p-[30px] min-w-[380px] md:min-w-[490px]">
        <p class="text-[17px] tracking-normal leading-normal text-balance">
          "Working with was an absolute game changer for our business. From the
          very first meeting."
        </p>
        <div class="flex items-center gap-4 mt-[29px]">
          <img src="images/avatar/review-5.png" alt="Review Author">
          <div>
            <h3 class="text-xl leading-[1.2] tracking-wide font-medium">
              Jacob Jones
            </h3>
            <p class="text-base font-light leading-5 mt-[3.5px]">
              Founder of Product Hunt
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


 <!--=====================================
   Latest Blog Posts Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div>
      <p class="font-satoshi text-center text-sm font-normal leading-6 tracking-[3px] uppercase reveal-me">
        Insights & Resources
      </p>
      <h2 class="mt-3 mb-20 text-center text-appear hidden md:block">
        Latest Insights on <br>
        Digital Innovation & Design
      </h2>
      <h2 class="mt-3 mb-10 lg:mb-20 text-center text-appear block md:hidden">
        Latest Insights on Digital Innovation & Design
      </h2>
    </div>

    <!-- Blog Posts Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[30px] gap-y-16 justify-center place-items-center">
      <!-- Blog Post 1 -->
      <div class="reveal-me max-w-[370px] group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-8.png" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="AI Design Trends">
          </figure>
          <p class="text-sm mb-3.5 md:pb-5 text-secondary dark:text-white leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-5 md:mt-[30px]">
            March 15, 2024
          </p>
          <div class="blog-title dark:border-dark border-t pt-5 mb-1">
            <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
              The Rise of AI-Powered Design Systems
            </h3>
          </div>
        </a>
      </div>

      <!-- Blog Post 2 -->
      <div class="reveal-me max-w-[370px] group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-12.png" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="UX Research Methods">
          </figure>
          <p class="text-sm mb-3.5 md:pb-5 text-secondary dark:text-white leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-5 md:mt-[30px]">
            March 21, 2024
          </p>

          <div class="blog-title dark:border-dark border-t pt-5 mb-1">
            <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
              Modern UX Research Beyond Basic Testing
            </h3>
          </div>
        </a>
      </div>

      <!-- Blog Post 3 -->
      <div class="reveal-me max-w-[370px] group">
        <a href="blog-details.php">
          <figure class="overflow-hidden">
            <img src="images/blog-img/blog-img-10.png" class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3" alt="Web Performance">
          </figure>
          <p class="text-sm mb-3.5 md:pb-5 text-secondary dark:text-white leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-5 md:mt-[30px]">
            March 28, 2024
          </p>
          <div class="blog-title dark:border-dark border-t pt-5 mb-1">
            <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
              Optimizing Web Performance for 2024
            </h3>
          </div>
        </a>
      </div>
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

    <?php get_template('subscription'); ?>
  </div>
</section>
 
</main>

<?php
  get_template('footer');
  ?>
