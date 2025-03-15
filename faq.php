<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Frequently Asked Questions | Orbizen Limited';
$PAGE_DESCRIPTION = 'Find answers to commonly asked questions about Orbizen Limited services, pricing, support, and more.';

// Define FAQs for schema markup
$faqs = [
  [
    'question' => 'What services does Orbizen Limited offer?',
    'answer' => 'Orbizen Limited offers a range of digital services including custom software development, web design and development, mobile app development, SaaS solutions, and digital security services.'
  ],
  [
    'question' => 'How do I request a quote for my project?',
    'answer' => 'You can request a quote by filling out our contact form, emailing us at info@orbizen.com, or calling our sales team directly. We typically respond to quote requests within 24-48 hours.'
  ],
  [
    'question' => 'What is your typical development process?',
    'answer' => 'Our development process includes discovery, planning, design, development, testing, and deployment phases. We follow agile methodologies and provide regular updates throughout the project lifecycle.'
  ],
  [
    'question' => 'Do you offer maintenance and support after project completion?',
    'answer' => 'Yes, we offer various maintenance and support packages to keep your software running smoothly after launch. These can include regular updates, security patches, feature enhancements, and technical support.'
  ],
  [
    'question' => 'What technologies does Orbizen work with?',
    'answer' => 'We work with a wide range of technologies including JavaScript (React, Angular, Vue.js), PHP, Python, Node.js, mobile platforms (iOS, Android), and blockchain technologies.'
  ]
];

get_template('header');
get_template('navbar');

// Include FAQ schema
include ABSPATH . '/core/faq-schema.php';
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   FAQ Section
======================================-->
<section
  class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative pt-[120px] md:pt-36 lg:pt-48 xl:pt-48"
>
  <div
    class="absolute scale-y-[3.5] sm:scale-y-[2.2] md:scale-y-[1.6] xl:scale-y-[1.4] scale-x-[1.7] left-1/2 top-1/2 max-md:-translate-y-[45%] md:-translate-y-1/2 -translate-x-1/2 -z-30"
  >
    <img src="images/gradient-bg.png" alt="gradient-bg" />
  </div>
  <div class="container">
    <!-- FAQ Section Title -->
    <div class="text-center @@hideBadge">
      <div class="rv-badge mb-3 lg:mb-7 reveal-me">
        <span class="rv-badge-text">Faq</span>
      </div>
    </div>
    <h1 class="mb-10 md:mb-20 text-center lg:text-[84px] text-appear-2">
      Frequently Asked Questions
    </h1>

    <!-- FAQ Items Container -->
    <div
      class="max-w-[900px] w-full mx-auto [&>*:not(:last-child)]:mb-6 reveal-me"
    >
      <!-- FAQ Item 1 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10"
          >
            What services does Rivor offer?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
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
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-10"
          >
            How long does a project typically take to complete?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          Project timelines vary depending on the scope and complexity. We work
          with you to set clear deadlines and ensure timely delivery.
        </p>
      </div>

      <!-- FAQ Item 3 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8"
          >
            Can Rivor handle both small and large-scale projects?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          Yes, we are equipped to handle projects of any size, from small
          startups to large enterprises, tailoring our approach to meet your
          specific needs.
        </p>
      </div>

      <!-- FAQ Item 4 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8"
          >
            How involved will I be in the project?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
          We value collaboration and will keep you updated at every stage. Your
          input is crucial to ensure we align with your vision and goals.
        </p>
      </div>

      <!-- FAQ Item 5 -->
      <div
        class="accordion-item overflow-hidden bg-backgroundBody dark:bg-dark border border-white dark:border-[#151515] duration-300"
      >
        <div
          class="accordion-header relative cursor-pointer py-5 md:py-[35px] max-md:px-5 md:px-10"
        >
          <h3
            class="text-xl md:text-[25px] font-normal sm:font-bold md:leading-[25.2px] md:tracking-normal max-md:inline-block max-lg:pr-8"
          >
            Do you provide post-launch support?
          </h3>
          <div class="accordion-header-icon dark:border-dark"></div>
        </div>
        <p
          class="accordion-body max-md:text-sm max-md:px-5 md:px-10 duration-300 h-0"
        >
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
