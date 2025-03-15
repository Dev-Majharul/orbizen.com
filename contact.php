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
   Contact Page Header Section
======================================-->
<section
  class="pt-[120px] md:pt-[180px] pb-20 sm:pb-32 md:pb-36 lg:pb-36 xl:pb-[100px] relative overflow-hidden"
>
  <!-- Gradient Background -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-[44%] lg:w-[40%] h-[44%] lg:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] max-sm:scale-125 md:scale-[0.72]"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Header Content -->
  <div class="container">
    <div class="text-center reveal-me">
      <div class="rv-badge">
        <span class="rv-badge-text">Contact</span>
      </div>
      <h1 class="mt-3 lg:mt-8 mb-4 md:mb-7">Let's Work Together</h1>
      <p class="">Discover our innovative, cutting-edge no-code websites, crafted to effortlessly <br> captivate and engage your visitors.</p>
    </div>
  </div>
</section>


<!--=====================================
    Contact Form Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Contact Form -->
    <form
      class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mx-auto reveal-me"
    >
      <!-- Full Name Field -->
      <div class="md:col-span-full">
        <label
          for="name"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Full Name
        </label>
        <input
          type="text"
          name="name"
          placeholder="Enter your full name"
          class="py-4 pl-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"
        />
      </div>

      <!-- Company Field -->
      <div>
        <label
          for="company"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Company Name
        </label>
        <input
          type="text"
          name="company"
          placeholder="Your company name"
          class="py-4 pl-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"
        />
      </div>

      <!-- Email Field -->
      <div>
        <label
          for="email"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Work Email
        </label>
        <input
          type="email"
          name="email"
          placeholder="name@company.com"
          class="py-4 pl-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"
        />
      </div>

      <!-- Service Selection -->
      <div class="relative">
        <label
          for="select Service"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Service Type*
        </label>
        <select
          name="Select your Service"
          class="py-4 px-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3 appearance-none indent-px text-ellipsis"
        >
          <option selected value="UI/UX">UX Design</option>
          <option value="Web design">Product Design</option>
          <option value="Web development">Brand Identity</option>
          <option value="Web development">Design System</option>
        </select>
        <span class="absolute right-5 top-1/2 translate-y-1/3">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="inline dark:hidden"
          >
            <path
              d="M6 9L12 15L18 9"
              stroke="black"
              stroke-opacity="0.7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            class="hidden dark:inline"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M6 9L12 15L18 9"
              stroke="white"
              stroke-opacity="0.7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </span>
      </div>

      <!-- Budget Range -->
      <div class="relative">
        <label
          for="select Service"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Project Budget*
        </label>
        <select
          name="Select your Service"
          class="py-4 px-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3 appearance-none indent-px text-ellipsis"
        >
          <option selected value="40k">$10k - $25k</option>
          <option value="55k">$25k - $50k</option>
          <option value="90k">$50k - $100k</option>
          <option value="100k+">$100k+</option>
        </select>
        <span
          class="absolute right-5 top-1/2 translate-y-1/3 inline dark:hidden"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M6 9L12 15L18 9"
              stroke="black"
              stroke-opacity="0.7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </span>
        <span
          class="absolute right-5 top-1/2 translate-y-1/3 hidden dark:inline"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
          >
            <path
              d="M6 9L12 15L18 9"
              stroke="white"
              stroke-opacity="0.7"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </span>
      </div>

      <!-- Project Details -->
      <div class="md:col-span-full">
        <label
          for="Message"
          class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100"
        >
          Project Brief*
        </label>
        <textarea
          name="Message"
          placeholder="Tell us about your project goals and timeline"
          class="py-4 pl-5 bg-white dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"
        ></textarea>
      </div>

      <!-- Submit Button -->
      <div class="col-span-full mx-auto sm:mt-14">
        <button type="submit" class="rv-button rv-button-primary">
          <div class="rv-button-top">
            <span>Send Message</span>
          </div>
          <div class="rv-button-bottom">
            <span>Send Message</span>
          </div>
        </button>
      </div>
    </form>
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
