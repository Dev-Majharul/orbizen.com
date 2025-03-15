<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Career';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar'); 
?>

<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Career Page Header Section
======================================-->
<section class="pt-32 sm:pt-36 md:pt-44 lg:pt-44 xl:pt-[210px] pb-20 md:pb-32 lg:pb-[180px] relative overflow-hidden">
  <!-- Gradient Background -->
  <div id="hero-gradient-wrapper" class="absolute w-full h-full top-[50%] left-[30%] -translate-y-1/2 -translate-x-[30%] -z-10 blur-[60px]">
    <img src="images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
  </div>

  <!-- Header Content -->
  <div class="container max reveal-me">
    <!-- Page Navigation -->
    <p class="flex flex-col md:flex-row max-lg:justify-center items-center gap-2 md:gap-5 font-poppins text-sm font-normal leading-6 tracking-[3px] uppercase">
      <span>Creative Studio</span>
      <span class="inline-block w-[150px] h-[1px] bg-dark dark:bg-[#ffffffb3]"></span>
      <span>Join Our Team</span>
    </p>

    <!-- Main Heading -->
    <h1 class="mt-6 lg:mt-10 max-lg:text-center">
      Shape the Future of Digital <br>
      Design as an <span class="font-instrument italic">Innovator</span> with Us
    </h1>
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


<!--=====================================
   Achievement Counter Section
======================================-->
<section class="pt-20 md:pt-28 lg:pt-36 xl:pt-[200px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container relative overflow-hidden">
    <!-- Section Header -->
    <h2 class="text-center tracking-[-1.92px] text-appear">
      Creating Impact Through Design Excellence
    </h2>
    <p class="text-center mt-4 lg:mt-7 max-w-[754px] mx-auto text-appear">
      Join a team that's redefining digital experiences through innovative
      design. Our work spans across industries, delivering measurable results
      for global brands.
    </p>

    <!-- Counter Stats -->
    <div id="counter" class="flex gap-6 justify-items-center max-md:flex-wrap pt-16 xl:pt-20 reveal-me">
      <!-- Projects Completed -->
      <div class="max-w-[270px] max-md:text-center mx-auto">
        <h2 class="">
          <span class="counter" data-value="250"> </span>
          <span class="percent">+</span>
        </h2>
        <h6 class="mt-5 mb-3">Projects Delivered</h6>
        <p>
          Successfully completed projects for clients worldwide across various
          industries.
        </p>
      </div>

      <!-- Team Growth -->
      <div class="max-w-[270px] max-md:text-center mx-auto">
        <h2 class="">
          <span class="counter" data-value="95"> </span>
          <span class="percent">%</span>
        </h2>
        <h6 class="mt-5 mb-3">Client Satisfaction</h6>
        <p>
          Of our clients report exceeding their project goals and expectations.
        </p>
      </div>

      <!-- Design Awards -->
      <div class="max-w-[270px] max-md:text-center mx-auto">
        <h2 class="">
          <span class="counter" data-value="40"> </span>
          <span class="percent">+</span>
        </h2>
        <h6 class="mt-5 mb-3">Design Awards</h6>
        <p>Industry recognitions for outstanding design and innovation.</p>
      </div>

      <!-- Client Retention -->
      <div class="max-w-[270px] max-md:text-center mx-auto">
        <h2 class="">
          <span class="counter" data-value="85"> </span>
          <span class="percent">%</span>
        </h2>
        <h6 class="mt-5 mb-3">Client Retention</h6>
        <p>Long-term partnerships built on trust and consistent results.</p>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   Careers Section
======================================-->
<section class="relative overflow-hidden pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div class="flex flex-col md:flex-row gap-x-10 gap-y-4 justify-center lg:justify-between items-start sm:items-center md:items-end mb-10 lg:mb-[60px]">
      <!-- Title with Responsive Display -->
      <div class="">
        <h2 class="text-appear hidden md:block">
          <span class="font-instrument lg:text-[80px] italic">Available </span>
          <br>
          Positions
        </h2>
        <h2 class="text-appear block md:hidden">
          <span class="font-instrument lg:text-[80px] italic">Available </span>
          Positions
        </h2>
      </div>
      <!-- Description -->
      <div class="self-center md:self-end">
        <p class="text-appear">
          We champion athletes, storytellers, and brands that <br>
          shape culture and inspire the world with their <br>
          unique perspectives.
        </p>
      </div>
    </div>

    <!-- Job Listings Container -->
    <div class="mt-10 md:mt-[60px] [&>*:not(last-child)]:mb-6 max-lg:px-5">
      <!-- Software Developer Position -->
      <article class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me">
        <div class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center">
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
          <a href="career-details.php" class="rv-button rv-button-secondary block md:inline-block">
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
      <article class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me">
        <div class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center">
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
            Prepares and reviews financial records to ensure they are accurate
            and comply with relevant laws and regulations.
          </p>
        </div>
        <!-- Apply Button -->
        <div class="max-md:w-full">
          <a href="career-details.php" class="rv-button rv-button-secondary block md:inline-block">
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
      <article class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me">
        <div class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center">
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
          <a href="career-details.php" class="rv-button rv-button-secondary block md:inline-block">
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
      <article class="max-w-[1170px] mx-auto border dark:border-dark bg-white dark:bg-dark p-6 lg:p-10 flex flex-col md:flex-row gap-y-7 justify-center md:justify-between items-center reveal-me">
        <div class="flex flex-col flex-wrap justify-center md:justify-normal max-md:items-center">
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
          <a href="career-details.php" class="rv-button rv-button-secondary block md:inline-block">
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
  </div>
</section>
               

<!--=====================================
   Community & Social Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center">
      <h2 class="mb-12 md:mb-20 text-appear">
        Growing <span class="font-instrument italic">together.</span> <br>As a
        community.
      </h2>
    </div>

    <!-- Community Grid -->
    <div class="grid grid-cols-12 gap-6">
      <!-- Discord Community Card -->
      <div class="col-span-full flex flex-col md:flex-row max-md:gap-y-8 gap-x-4 justify-center md:justify-between items-start md:items-center border dark:border-dark p-6 md:p-10 reveal-me">
        <div class="max-md:block max-md:w-full">
          <h3 class="mb-8 md:my-8 lg:text-4xl leading-[1.2] tracking-[-1.08px]">
            Join Our Community of <br>
            500+ Designers
          </h3>
          <a href="https://discord.com/invite/Y8n8ST6a" class="rv-button rv-button-secondary block md:inline-block w-full md:w-auto">
            <div class="rv-button-top text-center">
              <span>Join Discord</span>
            </div>
            <div class="rv-button-bottom text-center">
              <span>Join Discord</span>
            </div>
          </a>
        </div>
        <figure class="max-md:w-full">
          <img src="images/community-image.jpg" alt="Community Discussion" class="max-md:w-full">
        </figure>
      </div>

      <!-- YouTube Channel Card -->
      <div class="col-span-full md:col-span-6 border dark:border-dark pt-10 pb-10 md:pb-[60px] text-center reveal-me">
        <div class="inline-block border border-colorText dark:border-colorText rounded-[72px] bg-backgroundBody/20 dark:bg-secondary">
          <span class="text-black dark:text-[#FFF] text-xs uppercase tracking-[0.96px] py-2 px-4 bg-gradient-to-r from-secondary to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block">Youtube</span>
        </div>
        <h3 class="my-6 md:my-8 text-[25px] lg:text-4xl leading-[1.2] tracking-[-1.08px]">
          Design Tips & <br>
          Tutorial Videos
        </h3>
        <a href="https://youtu.be/JGLfyTDgfDc?si=0-iUKu3hv8uewpxg" target="_blank" class="rv-button rv-button-secondary block md:inline-block w-[90%] max-md:mx-auto md:w-auto">
          <div class="rv-button-top">
            <span>Subscribe Now</span>
          </div>
          <div class="rv-button-bottom">
            <span>Subscribe Now</span>
          </div>
        </a>
      </div>

      <!-- LinkedIn Profile Card -->
      <div class="col-span-full md:col-span-6 border dark:border-dark pt-10 pb-10 md:pb-[60px] text-center reveal-me">
        <div class="inline-block border border-colorText dark:border-colorText rounded-[72px] bg-backgroundBody/20 dark:bg-secondary">
          <span class="text-black dark:text-[#FFF] text-xs uppercase tracking-[0.96px] py-2 px-4 bg-gradient-to-r from-secondary to-gray-400 dark:bg-gradient-to-r dark:from-white dark:to-[#BDBDBD] text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text font-semibold inline-block">Linkedin</span>
        </div>
        <h3 class="my-6 md:my-8 text-[25px] lg:text-4xl leading-[1.2] tracking-[-1.08px]">
          Stay Updated On <br>
          Latest Design Trends
        </h3>
        <a href="https://www.linkedin.com/company/staticmania" target="_blank" class="rv-button rv-button-secondary block md:inline-block w-[90%] max-md:mx-auto md:w-auto">
          <div class="rv-button-top">
            <span>Follow Now</span>
          </div>
          <div class="rv-button-bottom">
            <span>Follow Now</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<!--=====================================
   FAQ Section
======================================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
  <div class="absolute scale-y-[3.4] sm:scale-y-[1.6] md:scale-y-[1.5] lg:scale-y-[1.5] xl:scale-y-[1.4] 2xl:scale-y-[1] scale-x-[2.8] md:scale-x-[1.9] lg:scale-x-[1.7] left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 -z-30">
    <img src="images/gradient-bg.png" alt="gradient-bg">
  </div>
  <div class="container">
    <!-- FAQ Section Title -->
    <h2 class="mb-10 md:mb-20 text-center text-appear">
      Frequently Asked <span class="font-instrument italic">Questions</span>
    </h2>

    <!-- FAQ Items Container -->
    <div class="max-w-[900px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me">
      <!-- FAQ Item 1 -->
      <div class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3 class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10">
            What services does Rivor offer?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          Rivor provides a range of digital services including web design,
          development, SEO, branding, mobile app development, and digital
          marketing. development, SEO, branding, mobile app development, and
          digital marketing. The email automation company also enhances the UX
          using a sidebar with a category overview and jump-to links,
          information about additional resources, and messages that encourage
          sales conversions.
        </p>
      </div>

      <!-- FAQ Item 2 -->
      <div class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3 class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-11">
            How long does a project typically take to complete?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          Project timelines vary depending on the scope and complexity. We work
          with you to set clear deadlines and ensure timely delivery.
        </p>
      </div>

      <!-- FAQ Item 3 -->
      <div class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3 class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-9">
            Can Rivor handle both small and large-scale projects?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          Yes, we are equipped to handle projects of any size, from small
          startups to large enterprises, tailoring our approach to meet your
          specific needs.
        </p>
      </div>

      <!-- FAQ Item 4 -->
      <div class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3 class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8">
            How involved will I be in the project?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          We value collaboration and will keep you updated at every stage. Your
          input is crucial to ensure we align with your vision and goals.
        </p>
      </div>

      <!-- FAQ Item 5 -->
      <div class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300">
        <div class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10">
          <h3 class="text-lg sm:text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8">
            Do you provide post-launch support?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0">
          Absolutely! We offer ongoing support and maintenance to ensure your
          project runs smoothly after launch.
        </p>
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
