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
   Career Details Header Section
======================================-->
<section class="pt-[220px] pb-20 lg:pb-[100px] relative">
  <!-- Gradient Background -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-[77%] lg:w-[55%] h-[77%] lg:h-[55%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px]"
  >
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Header Content -->
  <div class="container text-center reveal-me">
    <div class="rv-badge mb-4">
      <span class="rv-badge-text">Design</span>
    </div>
    <div class="rv-badge mb-4">
      <span class="rv-badge-text">New York City, NY</span>
    </div>
    <div class="rv-badge mb-4">
      <span class="rv-badge-text">Full Time</span>
    </div>

    <h1 class="mb-5 md:mb-8">Senior UX Designer</h1>
  </div>
</section>


<!--=====================================
   Career Details Section
======================================-->
<section
  class="lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
>
  <div class="max-w-[1440px] mx-auto px-10 md:px-20">
    <div>
      <!-- Tab Navigation -->
      <div
        class="flex flex-col sm:flex-row justify-center mb-12 lg:mb-14 reveal-me"
      >
        <button
          onclick="switchTab('Overview')"
          class="tab-button active text-base uppercase leading-[1.1] tracking-[1.12px] max-md:py-5 md:py-8 max-md:px-10 md:px-16 font-medium border-y border-l dark:border-transparent dark:bg-white dark:text-secondary"
        >
          Overview
        </button>
        <button
          onclick="switchTab('Apply')"
          class="tab-button text-base uppercase leading-[1.1] tracking-[1.12px] max-md:py-5 max-md:px-14 md:py-8 md:px-20 font-medium border-y border-r dark:border-transparent dark:bg-white dark:text-secondary"
        >
          Apply
        </button>
      </div>

      <!-- Content Container -->
      <div id="tab-content-container">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-start">
          <!-- Sidebar Navigation -->
          <aside class="min-w-[275px] lg:mx-auto flex-1">
            <div class="!sticky top-40">
              <div class="reveal-me">
                <h3 class="max-md:text-4xl md:text-[32px] mt-2 mb-6 lg:mb-10">
                  Career description
                </h3>
                <ul
                  class="[&>*:not(:last-child)]:mb-1.5 md:[&>*:not(:last-child)]:mb-4"
                >
                  <li>
                    <a
                      href="#job-description"
                      class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                    >
                      Job Description
                    </a>
                  </li>
                  <li>
                    <a
                      href="#responsibilities"
                      class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                    >
                      Responsibilities
                    </a>
                  </li>
                  <li>
                    <a
                      href="#requirements"
                      class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                    >
                      Requirements
                    </a>
                  </li>
                  <li>
                    <a
                      href="#your-benefits"
                      class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                    >
                      Your Benefits
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </aside>

          <!-- Main Content -->
          <article class="blog-details-body reveal-me">
            <!-- Job Description -->
            <h3 id="job-description">Job description</h3>
            <p>
              We're looking for a talented Senior UX Designer to join our
              creative team and help shape the future of digital experiences.
              This role combines strategic thinking with hands-on design
              expertise to create innovative solutions for our clients. As a key
              member of our design team, you'll collaborate with developers,
              product managers, and stakeholders to deliver exceptional user
              experiences.
            </p>

            <!-- Responsibilities -->
            <h3 id="responsibilities">Responsibilities</h3>
            <p>As a Senior UX Designer, you will be responsible for:</p>

            <ul>
              <li>
                Lead the UX design process from concept to implementation,
                including user research, wireframing, and prototyping
              </li>
              <li>
                Create user flows, interaction models, and high-fidelity
                prototypes for complex digital products
              </li>
              <li>
                Conduct user research and usability testing to inform design
                decisions
              </li>
              <li>
                Collaborate with cross-functional teams to deliver cohesive
                design solutions
              </li>
            </ul>

            <!-- Requirements -->
            <h3 id="requirements">Requirements</h3>
            <p>The ideal candidate should have:</p>

            <ul>
              <li>5+ years of experience in UX design for digital products</li>
              <li>
                Strong portfolio demonstrating complex problem-solving and
                design thinking
              </li>
              <li>
                Proficiency in design tools like Figma, Sketch, and Adobe
                Creative Suite
              </li>
              <li>Experience with design systems and component libraries</li>
            </ul>

            <!-- Benefits -->
            <h3 id="your-benefits">Your Benefits</h3>
            <p>We offer a comprehensive benefits package including:</p>

            <ul>
              <li>Competitive salary and performance bonuses</li>
              <li>Flexible work arrangements with remote options</li>
              <li>Professional development and learning allowance</li>
              <li>Health insurance and wellness programs</li>
            </ul>
            <p>
              Join our team and help shape the future of digital design while
              growing your career in an innovative environment.
            </p>
          </article>
        </div>
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
