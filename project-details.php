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
   Page Header Section
======================================-->
<section
  class="pt-28 sm:pb-28 max-md:pb-16 md:py-[155px] lg:py-[177px] relative z-50 overflow-hidden"
>
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] scale-75"
  >
    <!-- Gradient Background Image: Positioned centrally with responsive sizing -->
    <img
      src="images/hero-gradient-background.webp"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Content Container -->
  <div class="container">
    <!-- Centered Content with Animation -->
    <div class="text-center reveal-me">
      <!-- Badge Component -->
      <div class="rv-badge">
        <span class="rv-badge-text">Project case study</span>
      </div>

      <!-- Title and Description -->
      <h1 class="mt-3.5 sm:mt-5 lg:mt-9 mb-3 sm:mb-4 lg:mb-7">Best sellers No-code <span class="font-instrument italic"> <br class="hidden md:block"/> website</span></h1>
      <p>Introducing our latest creation: the 'Best Sellers No-Code Website'! Seamlessly blending creativity <br> and functionality, this innovative platform empowers businesses to showcase their top products with <br> style and efficiency. Say goodbye to coding hassles and hello to a user-friendly interface.</p>
    </div>
  </div>
</section>


<!--=====================================
   Documentation Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="max-w-[1440px] mx-auto px-7 md:px-20">
    <div class="flex flex-col gap-x-8 gap-y-12 lg:flex-row">
      <!-- Sticky Table of Contents Sidebar -->
      <aside class="min-w-[275px] lg:mx-auto flex-1">
        <div class="sticky top-40">
          <div class="reveal-me">
            <h3 class="max-md:text-[40px] md:text-[32px]">Table of contents</h3>
            <ul
              class="mt-7 md:mt-10 [&>*:not(:last-child)]:mb-3 md:[&>*:not(:last-child)]:mb-5"
            >
              <li>
                <a
                  href="#project-overview"
                  class="text-xl normal-case font-normal leading-7 tracking-normal text-[#000000b3] dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Learn about the project - project overview
                </a>
              </li>
              <li>
                <a
                  href="#designing"
                  class="text-xl normal-case font-normal leading-7 tracking-normal text-[#000000b3] dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Designing the User Experience
                </a>
              </li>
              <li>
                <a
                  href="#architecture"
                  class="text-xl normal-case font-normal leading-7 tracking-normal text-[#000000b3] dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Building the information architecture
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>

      <!-- Main Content Area -->
      <article class="project-details-body">
        <figure class="reveal-me">
          <img
            src="images/services/services-details-img.webp"
            alt="Services Big Img"
          />
        </figure>
        <div class="reveal-me">
          <h3 id="project-overview">
            Learn about the project - project overview
          </h3>
          <p>
            Introducing our latest creation: the 'Best Sellers No-Code Website'!
            Seamlessly blending creativity and functionality, this innovative
            platform empowers businesses to showcase their top products with
            style and efficiency. Say goodbye to coding hassles and hello to a
            user-friendly interface. <br />
            <br />
            Introducing our latest creation: the 'Best Sellers No-Code Website'!
            Seamlessly blending creativity and functionality, this innovative
            platform empowers businesses to showcase their top products with
            style and efficiency. Say goodbye to coding hassles and hello to
          </p>
        </div>
        <div class="reveal-me">
          <h3 id="designing">Designing the User Experience</h3>
          <p>
            Introducing our latest creation: the 'Best Sellers No-Code Website'!
            Seamlessly blending creativity and functionality, this innovative
            platform empowers businesses to showcase their top products with
            style and efficiency. Say goodbye to coding hassles and hello to a
            user-friendly interface. <br />
            <br />
            Introducing our latest creation: the 'Best Sellers No-Code Website'!
            Seamlessly blending creativity and functionality, this innovative
            platform empowers businesses to showcase their top products with
            style and efficiency. Say goodbye to coding hassles and hello to
          </p>

          <img
            src="images/project-details/project-details-button.webp"
            alt="Project details Button Img"
          />

          <p>
            Designing the User Experience (UX) is a meticulous process that
            involves understanding user needs, preferences, and behaviors to
            create intuitive and seamless interactions. Through thoughtful
            research and analysis, we strive to craft interfaces <br />
            <br />
            that not only meet user expectations but exceed them. In this
            section, we delve into our approach to UX design, exploring
            methodologies, techniques, and best practices employed to create
            engaging and user-centric experiences
          </p>
        </div>
        <div class="reveal-me">
          <h3 id="architecture">Building the information architecture</h3>
          <p>
            Information architecture (IA) is the structural design of digital
            information environments, such as websites and applications, to
            facilitate intuitive navigation and efficient access to content. It
            involves organizing and categorizing information in a logical and
            hierarchical manner, ensuring that users can easily find what
            they're looking for. Information architecture considers factors such
            as user goals, business objectives, and content relationships to
            create a cohesive and user-friendly <br />
            <br />
            structure. Through techniques like card sorting and site mapping, IA
            aims to create a clear and intuitive navigation system that guides
            users through the interface seamlessly. Effective information
            architecture lays the foundation for a positive user experience,
            helping users navigate complex information landscapes with ease and
            confidence.
          </p>

          <img
            id="final-design"
            src="images/services/business-big.webp"
            alt="Business Card"
          />

          <p>
            Through techniques like card sorting and site mapping, IA aims to
            create a clear and intuitive navigation system that guides users
            through the interface seamlessly. Effective information architecture
            lays the foundation for a positive user experience, helping users
            navigate complex information landscapes with ease and confidence.
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
