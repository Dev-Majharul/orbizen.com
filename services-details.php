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
        <span class="rv-badge-text">Services Details</span>
      </div>

      <!-- Hero Title -->
      <h1 class="mb-5 lg:mb-8">Research</h1>

      <!-- Hero Description -->
      <p class="max-md:max-w-[650px]">"Discover our innovative, cutting-edge no-code websites crafted to captivate and engage your <br> visitors with ease."</p>
    </div>
  </div>
</section>


<!--=====================================
   Services Details Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="max-w-[1440px] mx-auto px-8 md:px-20">
    <div class="flex flex-col gap-8 lg:flex-row justify-start">
      <!-- Sticky Table of Contents -->
      <aside class="min-w-[275px] flex-1">
        <div class="sticky top-28">
          <div class="reveal-me">
            <h3 class="max-md:text-[40px] md:text-[32px]">Table of contents</h3>
            <ul
              class="mt-4 sm:mt-7 md:mt-10 [&>*:not(:last-child)]:mb-2 md:[&>*:not(:last-child)]:mb-5"
            >
              <li>
                <a
                  href="#service-overview"
                  class="text-xl normal-case font-normal leading-7 tracking-normal dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Service overview
                </a>
              </li>
              <li>
                <a
                  href="#our-service-includes"
                  class="text-xl normal-case font-normal leading-7 tracking-normal dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Our service includes
                </a>
              </li>
              <li>
                <a
                  href="#why-choose"
                  class="text-xl normal-case font-normal leading-7 tracking-normal dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Why Choose Us
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>

      <!-- Main Content -->
      <article class="project-details-body">
        <figure class="reveal-me">
          <img
            src="images/services/services-details2-img.webp"
            alt="Services Big Img"
          />
        </figure>
        <div class="reveal-me">
          <h3 id="service-overview">Service overview</h3>
          <p>
            At Rivor, we specialize in delivering comprehensive solutions that
            empower designers and businesses to bring their online visions to
            life. Our Figma to Framer conversion service streamlines the process
            of turning your Figma designs into stunning, fully functional
            websites on the Framer platform. With our expert team of developers
            and designers, we ensure a smooth transition from design to
            deployment, allowing you to focus on your core objectives while we
            take care of the technical details.
          </p>
        </div>
        <div class="reveal-me">
          <h3 id="our-service-includes">Our service includes</h3>
          <p>
            In-Depth Research and Analysis: We conduct thorough research to
            understand your brand, target audience, and industry trends,
            ensuring your website aligns with your business goals. <br />
            <br />
            Competitor Analysis: A comprehensive review of your competitors'
            digital presence to identify opportunities and gaps, helping you
            stand out in the market. <br />
            <br />
            User Experience (UX) Research: We gather insights on user behavior
            to inform design decisions, creating a website that offers an
            intuitive and engaging experience for visitors. <br />
            <br />SEO and Content Strategy Research: We develop strategies based
            on keyword research and content trends to improve your site's
            visibility and search ranking <br />
            <br />
            Technology and Platform Research: Our team evaluates the best
            technologies and platforms to ensure your website is built with the
            latest tools for optimal performance and scalability. the 'Best
            Sellers No-Code Website'! Seamlessly blending creativity and
            functionality, this innovative platform empowers businesses to
            showcase their top products with style and efficiency. Say goodbye
            to coding hassles and hello to
          </p>
        </div>
        <div class="reveal-me">
          <h3 id="why-choose">Why Choose Us</h3>
          <p>
            Expertise and Innovation: Our team combines years of experience with
            cutting-edge technology to deliver modern, functional, and visually
            stunning websites.<br />
            <br />
            Tailored Solutions: We understand that every project is unique, so
            we offer customized solutions that perfectly align with your brand
            and business objectives. <br />
            <br />
            Seamless Collaboration: We work closely with you throughout the
            entire process, ensuring your vision is realized while maintaining
            transparency and open communication. <br />
            <br />End-to-End Service: From concept to deployment, we handle
            every aspect of your website project, allowing you to focus on what
            matters most—your business. br
            <br />
            <br />

            Speed and Efficiency: With our streamlined process, we ensure timely
            delivery without compromising quality, so your website can launch
            quickly and effectively. <br /><br />
            Results-Driven Approach: We focus on delivering measurable outcomes,
            whether it's increased engagement, better user experience, or
            improved conversion rates.
            <br />
            <br />
            End-to-End Service: From concept to deployment, we handle every
            aspect of your website project, allowing you to focus on what
            matters most—your business. <br />Speed and Efficiency: With our
            streamlined process, we ensure timely delivery without compromising
            quality, so your website can launch quickly and effectively.
            Post-Launch Support: Our commitment doesn't end at launch. <br />
            <br />
            We provide ongoing maintenance and support to keep your site running
            smoothly and up to date. Results-Driven Approach: We focus on
            delivering measurable outcomes, whether it's increased engagement,
            better user experience, or improved conversion rates.
          </p>
        </div>
      </article>
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

    <?php get_template('subscription'); ?>
  </div>
</section>

</main>

<?php
  get_template('footer');
  ?>
