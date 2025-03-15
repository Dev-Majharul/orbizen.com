<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Career';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
    Career Page Hero Section
======================================-->
<section
  class="pt-32 sm:pt-36 md:pt-40 lg:pt-44 xl:pt-[210px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <!-- Gradient Background -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[60px]"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Hero Content -->
  <div class="container reveal-me">
    <div class="text-center">
      <div class="rv-badge">
        <span class="rv-badge-text">Career</span>
      </div>
      <h1 class="mt-3.5 sm:mt-6 md:mt-7 mb-5 md:mb-8 font-medium">Start building your <i class="font-instrument italic font-normal">future</i> here</h1>
      <p class="">We provide a wide range of growth opportunities, a <br> collaborative work culture, and a supportive team focused on your success</p>
    </div>

    <!-- CTA Button -->
    <div class="flex justify-center mt-11 md:mt-[76px]">
      <a href="contact.php" class="rv-button rv-button-secondary">
        <div class="rv-button-top !text-center">
          <span>Get Started</span>
        </div>
        <div class="rv-button-bottom !text-center">
          <span>Get Started</span>
        </div>
      </a>
    </div>
  </div>
</section>


<!--=====================================
   Company Culture Gallery Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="max-w-[1440px] mx-auto max-lg:px-4">
    <!-- Gallery Grid -->
    <div
      class="relative grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 max-lg:gap-6"
    >
      <!-- Team Meeting Image -->
      <figure class="w-full md:order-4 lg:order-first">
        <img
          src="images/career-img/career-img-1.png"
          alt="Team collaborating in modern office space"
          class="w-full lg:w-full lg:object-cover"
        />
      </figure>

      <!-- Design Workshop Image -->
      <figure class="w-full place-self-start">
        <img
          src="images/career-img/career-img-2.png"
          alt="Creative workshop session with design team"
          class="w-full lg:w-1/3 lg:absolute lg:top-[57px] z-10"
        />
      </figure>

      <!-- Office Space Image -->
      <figure class="w-full lg:place-self-end">
        <img
          src="images/career-img/career-img-3.png"
          alt="Modern collaborative workspace environment"
          class="w-full lg:absolute lg:bottom-10 lg:w-fit -z-0"
        />
      </figure>

      <!-- Team Culture Image -->
      <figure class="w-full">
        <img
          src="images/career-img/career-img-4.png"
          alt="Team building and social activities"
          class="w-full"
        />
      </figure>
    </div>
  </div>
</section>


<!--=====================================
   Employee Benefits Section Area
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="container">
    <!-- Section Header -->
    <h2 class="text-center mb-4 lg:mb-8 text-appear">Why Join Our Team</h2>
    <p class="text-center max-w-[750px] mx-auto text-appear max-lg:px-5">
      Join a dynamic workspace where innovation meets well-being. We provide
      comprehensive benefits and a supportive environment designed to help you
      thrive both professionally and personally.
    </p>

    <!-- Benefits Grid -->
    <div
      class="mt-10 md:mt-[60px] grid xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-center items-center gap-[30px]"
    >
      <div class="p-[30px] border dark:border-dark reveal-me">
        Hybrid Work Environment
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Competitive Health Benefits
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Learning & Development Fund
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Performance Bonuses
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Mental Health Support
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Team Building Events
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Professional Certifications
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Modern Tech Stack
      </div>
      <div class="p-[30px] border dark:border-dark reveal-me">
        Unlimited PTO Policy
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Career Positions Section
======================================-->
<section
  class="mt-14 md:mt-16 lg:mt-[88px] xl:mt-[100px] mb-14 md:mb-16 lg:mb-[88px] xl:mb-[100px] relative overflow-hidden"
>
  <div
    class="absolute scale-y-[4] md:scale-y-[4] lg:scale-y-[2.2] xl:scale-y-[2.5] 2xl:scale-y-[1.4] scale-x-[2.7] left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 -z-30"
  >
    <img src="images/gradient-bg.png" alt="gradient-bg" />
  </div>
  <!-- Section Header -->
  <div class="container">
    <h2 class="text-center text-appear">
      Start your professional journey today
    </h2>
  </div>

  <!-- Job Listings Container -->
  <div class="mt-10 md:mt-[60px] [&>*:not(last-child)]:mb-6 max-lg:px-5">
    <!-- Software Developer Position -->
    <article
      class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me"
    >
      <div
        class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center"
      >
        <!-- Job Tags -->
        <div class="space-y-3">
          <div class="rv-badge">
            <span class="rv-badge-text">Software</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">San Francisco, California</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">Full-Time</span>
          </div>
        </div>
        <h3 class="mt-8 mb-6 text-3xl leading-[25.2px] tracking-wide">
          Software Developer
        </h3>
        <p class="max-w-[830px]">
          Creates, builds, and manages software solutions or platforms.
        </p>
      </div>
      <!-- Apply Button -->
      <div class="max-md:w-full">
        <a
          href="career-details.php"
          class="rv-button rv-button-secondary block md:inline-block"
        >
          <div class="rv-button-top text-center">
            <span>Apply Now</span>
          </div>
          <div class="rv-button-bottom text-center">
            <span>Apply Now </span>
          </div>
        </a>
      </div>
    </article>

    <!-- Accountant Position -->
    <article
      class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me"
    >
      <div
        class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center"
      >
        <!-- Job Tags -->
        <div class="space-y-3">
          <div class="rv-badge">
            <span class="rv-badge-text">Accountant</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">San Francisco, California</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">Full-Time</span>
          </div>
        </div>
        <h3 class="mt-8 mb-6 text-3xl leading-[25.2px] tracking-wide">
          Accountant
        </h3>
        <p class="max-w-[830px]">
          Prepares and reviews financial records to ensure they are accurate and
          comply with relevant laws and regulations.
        </p>
      </div>
      <!-- Apply Button -->
      <div class="max-md:w-full">
        <a
          href="career-details.php"
          class="rv-button rv-button-secondary block md:inline-block"
        >
          <div class="rv-button-top text-center">
            <span>Apply Now</span>
          </div>
          <div class="rv-button-bottom text-center">
            <span>Apply Now </span>
          </div>
        </a>
      </div>
    </article>

    <!-- Web Designer Position -->
    <article
      class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me"
    >
      <div
        class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center"
      >
        <!-- Job Tags -->
        <div class="space-y-3">
          <div class="rv-badge">
            <span class="rv-badge-text">Designer</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">San Francisco, California</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">Full-Time</span>
          </div>
        </div>
        <h3 class="mt-8 mb-6 text-3xl leading-[25.2px] tracking-wide">
          Web Designer
        </h3>
        <p class="max-w-[830px]">
          Designs and builds visually appealing, user-friendly websites by
          applying design principles and coding expertise.
        </p>
      </div>
      <!-- Apply Button -->
      <div class="max-md:w-full">
        <a
          href="career-details.php"
          class="rv-button rv-button-secondary block md:inline-block"
        >
          <div class="rv-button-top text-center">
            <span>Apply Now</span>
          </div>
          <div class="rv-button-bottom text-center">
            <span>Apply Now </span>
          </div>
        </a>
      </div>
    </article>

    <!-- Product Designer Position -->
    <article
      class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me"
    >
      <div
        class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center"
      >
        <!-- Job Tags -->
        <div class="space-y-3">
          <div class="rv-badge">
            <span class="rv-badge-text">UI/UX</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">San Francisco, California</span>
          </div>
          <div class="rv-badge">
            <span class="rv-badge-text">Full-Time</span>
          </div>
        </div>
        <h3 class="mt-8 mb-6 text-3xl leading-[25.2px] tracking-wide">
          Product Designer
        </h3>
        <p class="max-w-[830px]">
          Designs and develops visually appealing, user-friendly products by
          applying design principles and leveraging technical skills.
        </p>
      </div>
      <!-- Apply Button -->
      <div class="max-md:w-full">
        <a
          href="career-details.php"
          class="rv-button rv-button-secondary block md:inline-block"
        >
          <div class="rv-button-top text-center">
            <span>Apply Now</span>
          </div>
          <div class="rv-button-bottom text-center">
            <span>Apply Now </span>
          </div>
        </a>
      </div>
    </article>
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
