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
      src="images/hero-gradient-background.webp"
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
        <span class="rv-badge-text">Changelog</span>
      </div>

      <!-- Hero Title -->
      <h1 class="mb-5 lg:mb-8">Changelog</h1>

      <!-- Hero Description -->
      <p class="max-md:max-w-[650px]">This page is password protected. <br> Unlock a world of discovery and secrets within!</p>
    </div>
  </div>
</section>


<!--=====================================
   Changelog Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Version 2.0.0 -->
    <div
      class="max-w-[970px] border dark:border-dark p-10 mx-auto mb-[30px] reveal-me"
    >
      <h3 class="md:text-[40px] md:leading-[1.2] mb-5">V.2.0.0</h3>
      <p>
        Major update including new design system, improved performance, and
        enhanced user experience features.
      </p>
    </div>

    <!-- Version 1.0.0 -->
    <div class="max-w-[970px] border dark:border-dark p-10 mx-auto reveal-me">
      <h3 class="md:text-[40px] md:leading-[1.2]">V.1.0.0</h3>
      <p>
        Initial release of MyAgency with core features and responsive design
        implementation.
      </p>
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
