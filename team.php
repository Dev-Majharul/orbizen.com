<?php
  // Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Team';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Terms and Conditions Section
======================================-->
<section class="pt-32 md:pt-36 lg:pt-[180px] pb-12 lg:pb-16 2xl:pb-[100px] overflow-hidden relative">
  <!-- Background Gradient Wrapper: Creates a blurred, responsive background effect -->
  <div id="hero-gradient-wrapper" class="absolute w-1/2 md:w-[40%] h-1/2 md:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] md:scale-90 lg:scale-75">
    <!-- Gradient Background Image: Positioned centrally with responsive sizing -->
    <img src="images/hero-gradient-background.png" alt="hero-gradient-background" id="hero-gradient" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
  </div>

  <!-- Container for page content with reveal animation -->
  <div class="container reveal-me">
    <div class="text-center">
      <!-- Badge to provide additional context or categorization -->
      <div class="rv-badge mb-4 md:mb-8">
        <span class="rv-badge-text"> Team</span>
      </div>

      <!-- Main page heading with dark mode support -->
      <h1 class="dark:text-white">Our Creative Team</h1>
      <p class="mt-5 max-w-xl lg:max-w-[750px] mx-auto">
        Turn your vision into reality with Rivor. We blend design, strategy, and
        technology to build powerful digital experiences that elevate your
        brand.
      </p>
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
        <img src="images/home-ai/team/ai-team-1.png" alt="Team Leader" class="w-full object-cover">
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
          <img src="images/home-ai/team/ai-team-1.png" alt="Marvin McKinney" class="w-[130px] h-[130px] object-cover">
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
          <img src="images/home-ai/team/ai-team-2.png" alt="Marvin McKinney" class="w-[130px] h-[130px] object-cover">
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
          <img src="images/home-ai/team/ai-team-3.png" alt="Marvin McKinney" class="w-[130px] h-[130px] object-cover">
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
