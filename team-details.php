<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Team Details';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Team Member Profile Section
======================================-->
<section class="pt-32 md:pt-36 lg:pt-[200px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Profile Card Container -->
    <div class="p-6 md:p-7 lg:p-10 border dark:border-dark flex flex-col lg:flex-row justify-center lg:justify-normal max-lg:items-center gap-x-8 gap-y-6 reveal-me">
      <!-- Profile Image -->
      <figure class="w-full lg:w-[428px] md:h-[682px]">
        <img src="images/team/single-team.webp" alt="Single Team Member" class="w-full h-full object-cover">
      </figure>

      <!-- Profile Information -->
      <div class="flex-1">
        <!-- Name and Role -->
        <h2 class="text-3xl md:text-4xl md:leading-[1.2] md:tracking-[-1.08px] mb-3 md:mb-5">
          Marvin McKinney
        </h2>
        <span class="text-lg font-light leading-[20px] text-colorText inline-block mb-4 md:mb-10">Founder</span>

        <!-- Biography -->
        <p class="py-4 md:py-10 border-t dark:border-dark">
          Enthusiasts of open-source and no-code tools, a professional UI/UX
          designer with 17 years of industry experience, I'm a visionary
          entrepreneur, crafting innovative tech solutions. StaticMania and KEEP
          Design System are my other breakthrough moves.
        </p>

        <!-- Skills Section -->
        <h3 class="text-2xl md:text-4xl md:leading-[1.2] md:tracking-[-1.08px] mb-3.5 md:mb-5">
          Skill
        </h3>
        <ul class="mb-5 md:mb-10">
          <li class="inline text-colorText">Ui/Ux designer,</li>
          <li class="inline text-colorText">product designer,</li>
          <li class="inline text-colorText">frontend Developer</li>
        </ul>

        <!-- Portfolio Links -->
        <h3 class="text-2xl md:text-4xl md:leading-[1.2] md:tracking-[-1.08px] mb-3.5 md:mb-5">
          Portfolio
        </h3>
        <ul>
          <li class="rv-badge mb-10">
            <span class="rv-badge-text">Dribbble</span>
          </li>
          <li class="rv-badge mb-10">
            <span class="rv-badge-text">Behance</span>
          </li>
          <li class="rv-badge mb-10">
            <span class="rv-badge-text">Artstaion</span>
          </li>
        </ul>

        <!-- Social Media Links -->
        <h3 class="text-2xl md:text-4xl md:leading-[1.2] md:tracking-[-1.08px] mb-3.5 md:mb-5">
          Contact
        </h3>
        <ul class="flex gap-x-10 gap-y-5 md:self-end">
          <!-- Twitter -->
          <li>
            <a target="_blank" href="https://x.com/home">
              <img src="images/icons/x-twitter.svg" alt="Twitter" class="inline dark:hidden">
              <img src="images/icons/x-twitter-dark.svg" alt="Twitter" class="hidden dark:inline">
            </a>
          </li>
          <!-- Facebook -->
          <li>
            <a target="_blank" href="https://www.facebook.com/staticmania">
              <img src="images/icons/facebook.svg" alt="Facebook" class="inline dark:hidden">
              <img src="images/icons/facebook-dark.svg" alt="Facebook" class="hidden dark:inline">
            </a>
          </li>
          <!-- YouTube -->
          <li>
            <a target="_blank" href="https://youtu.be/ceJ82RaW9mM?si=t9f7MrHVZSmeR8Gl">
              <img src="images/icons/youtube.svg" alt="YouTube" class="inline dark:hidden">
              <img src="images/icons/youtube-dark.svg" alt="YouTube" class="hidden dark:inline">
            </a>
          </li>
        </ul>
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

    <?php get_template('subscription'); ?>
  </div>
</section>

</main>

<?php
  get_template('footer');
  ?>
