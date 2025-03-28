<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Building Web and Mobile Applications That Your Users Will Love | Orbizen Limited';
$PAGE_DESCRIPTION = 'Discover how Orbizen creates user-centered web and mobile applications through strategic planning, iterative design, and thorough user testing.';

// Blog Schema Data
$article_title = $PAGE_TITLE;
$article_description = $PAGE_DESCRIPTION;
$article_published_date = "2024-03-10T10:00:00+00:00";
$article_modified_date = "2024-03-15T14:30:00+00:00";
$article_author = "John Smith";
$article_categories = ["Web Development", "Mobile Apps", "User Experience"];
$article_image = "https://orbizen.com/images/blog/web-mobile-apps.webp";
$article_image_width = "1200";
$article_image_height = "630";
$article_word_count = "1250";

get_template('header');
get_template('navbar');

// Include blog schema
get_template('blog-schema');
?>

<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Page Header Details Section
======================================-->
<section
  class="pt-32 md:pt-44 lg:pt-[200px] pb-10 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden"
>
  <!-- Gradient Background Wrapper -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] max-sm:scale-75 sm:scale-75"
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
        <span class="rv-badge-text">Blog Details</span>
      </div>

      <!-- Hero Title -->
      <h1 class="mb-5 lg:mb-8 max-sm:max-w-md max-sm:mx-auto">
        Changing Face of Digital Advertising
      </h1>
    </div>
  </div>
</section>


<!--=====================================
    Blog Details Section Area
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="max-w-[1440px] mx-auto px-10 md:px-20">
    <!-- Featured Image -->
    <figure class="w-full reveal-me">
      <img
        src="images/blog-img/blog-details-img-1.webp"
        alt="Blog Details"
        class="w-full"
      />
    </figure>

    <!-- Blog Content Wrapper -->
    <div
      class="flex flex-col gap-10 lg:flex-row justify-start mt-12 md:mt-[60px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
    >
      <!-- Sidebar -->
      <aside class="min-w-[275px] flex-1">
        <div class="sticky top-24 max-md:mb-7">
          <div class="reveal-me">
            <!-- Table of Contents -->
            <h3
              class="max-sm:text-[35px] max-md:text-[40px] md:text-[32px] mt-2 mb-4 lg:mb-10"
            >
              Table of contents
            </h3>
            <ul
              class="[&>*:not(:last-child)]:mb-2 md:[&>*:not(:last-child)]:mb-4"
            >
              <li>
                <a
                  href="#project-overview"
                  class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Get to Know the Project – Overview & Highlights
                </a>
              </li>
              <li>
                <a
                  href="#our-service-includes"
                  class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Building the User Experience
                </a>
              </li>
              <li>
                <a
                  href="#why-choose"
                  class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Building the information architecture
                </a>
              </li>
              <li>
                <a
                  href="#wireframing-the-findings-of-the-research"
                  class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Wireframing the findings of the research
                </a>
              </li>
              <li>
                <a
                  href="#testing-the-website-with-real-users"
                  class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Testing the website with real users
                </a>
              </li>
              <li>
                <a
                  href="#final-design"
                  class="text-xl normal-case font-normal leading-7 dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                >
                  Final design
                </a>
              </li>
            </ul>

            <!-- Social Share -->
            <h3
              class="max-sm:text-[35px] max-md:text-[40px] md:text-[32px] mt-5 sm:mt-7 md:mt-12 lg:mt-20 mb-7"
            >
              Share
            </h3>
            <!-- Social Media Icons -->
            <ul class="flex gap-5 items-center max-lg:mb-7">
              <li
                class="border-2 border-secondary dark:border-dark inline-block rounded-full w-10 h-10 hover:bg-primary duration-300 relative"
              >
                <a href="https://discord.gg/fSxDJyvJmr" target="_blank">
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 inline dark:hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#000000"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M104,140a12,12,0,1,1-12-12A12,12,0,0,1,104,140Zm60-12a12,12,0,1,0,12,12A12,12,0,0,0,164,128Zm74.45,64.9-67,29.71a16.17,16.17,0,0,1-21.71-9.1l-8.11-22q-6.72.45-13.63.46t-13.63-.46l-8.11,22a16.18,16.18,0,0,1-21.71,9.1l-67-29.71a15.93,15.93,0,0,1-9.06-18.51L38,58A16.07,16.07,0,0,1,51,46.14l36.06-5.93a16.22,16.22,0,0,1,18.26,11.88l3.26,12.84Q118.11,64,128,64t19.4.93l3.26-12.84a16.21,16.21,0,0,1,18.26-11.88L205,46.14A16.07,16.07,0,0,1,218,58l29.53,116.38A15.93,15.93,0,0,1,238.45,192.9ZM232,178.28,202.47,62s0,0-.08,0L166.33,56a.17.17,0,0,0-.17,0l-2.83,11.14c5,.94,10,2.06,14.83,3.42A8,8,0,0,1,176,86.31a8.09,8.09,0,0,1-2.16-.3A172.25,172.25,0,0,0,128,80a172.25,172.25,0,0,0-45.84,6,8,8,0,1,1-4.32-15.4c4.82-1.36,9.78-2.48,14.82-3.42L89.83,56s0,0-.12,0h0L53.61,61.93a.17.17,0,0,0-.09,0L24,178.33,91,208a.23.23,0,0,0,.22,0L98,189.72a173.2,173.2,0,0,1-20.14-4.32A8,8,0,0,1,82.16,170,171.85,171.85,0,0,0,128,176a171.85,171.85,0,0,0,45.84-6,8,8,0,0,1,4.32,15.41A173.2,173.2,0,0,1,158,189.72L164.75,208a.22.22,0,0,0,.21,0Z"
                      ></path>
                    </svg>
                  </span>
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:inline hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#fff"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M104,140a12,12,0,1,1-12-12A12,12,0,0,1,104,140Zm60-12a12,12,0,1,0,12,12A12,12,0,0,0,164,128Zm74.45,64.9-67,29.71a16.17,16.17,0,0,1-21.71-9.1l-8.11-22q-6.72.45-13.63.46t-13.63-.46l-8.11,22a16.18,16.18,0,0,1-21.71,9.1l-67-29.71a15.93,15.93,0,0,1-9.06-18.51L38,58A16.07,16.07,0,0,1,51,46.14l36.06-5.93a16.22,16.22,0,0,1,18.26,11.88l3.26,12.84Q118.11,64,128,64t19.4.93l3.26-12.84a16.21,16.21,0,0,1,18.26-11.88L205,46.14A16.07,16.07,0,0,1,218,58l29.53,116.38A15.93,15.93,0,0,1,238.45,192.9ZM232,178.28,202.47,62s0,0-.08,0L166.33,56a.17.17,0,0,0-.17,0l-2.83,11.14c5,.94,10,2.06,14.83,3.42A8,8,0,0,1,176,86.31a8.09,8.09,0,0,1-2.16-.3A172.25,172.25,0,0,0,128,80a172.25,172.25,0,0,0-45.84,6,8,8,0,1,1-4.32-15.4c4.82-1.36,9.78-2.48,14.82-3.42L89.83,56s0,0-.12,0h0L53.61,61.93a.17.17,0,0,0-.09,0L24,178.33,91,208a.23.23,0,0,0,.22,0L98,189.72a173.2,173.2,0,0,1-20.14-4.32A8,8,0,0,1,82.16,170,171.85,171.85,0,0,0,128,176a171.85,171.85,0,0,0,45.84-6,8,8,0,0,1,4.32,15.41A173.2,173.2,0,0,1,158,189.72L164.75,208a.22.22,0,0,0,.21,0Z"
                      ></path>
                    </svg>
                  </span>
                </a>
              </li>

              <li
                class="border-2 border-secondary dark:border-dark inline-block rounded-full w-10 h-10 hover:bg-primary duration-300 relative"
              >
                <a href="https://www.facebook.com/staticmania" target="_blank">
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 inline dark:hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#000"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"
                      ></path>
                    </svg>
                  </span>
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:inline hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#fff"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"
                      ></path>
                    </svg>
                  </span>
                </a>
              </li>
              <li
                class="border-2 border-secondary dark:border-dark inline-block rounded-full w-10 h-10 hover:bg-primary duration-300 relative"
              >
                <a
                  href="https://www.linkedin.com/company/staticmania/"
                  target="_blank"
                >
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 inline dark:hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#000"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"
                      ></path>
                    </svg>
                  </span>
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:inline hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#fff"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"
                      ></path>
                    </svg>
                  </span>
                </a>
              </li>
              <li
                class="border-2 border-secondary dark:border-dark inline-block rounded-full w-10 h-10 hover:bg-primary duration-300 relative"
              >
                <a href="https://www.instagram.com/staticmania" target="_blank">
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 inline dark:hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#000000"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                      ></path>
                    </svg>
                  </span>
                  <span
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 dark:inline hidden"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      fill="#fff"
                      viewBox="0 0 256 256"
                    >
                      <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                      ></path>
                    </svg>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </aside>

      <!-- Main Article Content -->
      <article class="blog-details-body">
        <div class="reveal-me">
          <h3 id="project-overview">
            Get to Know the Project – Overview & Highlights
          </h3>
          <p>
            Introducing our latest innovation: the 'Best Sellers No-Code
            Website'! Effortlessly merging creativity with functionality, this
            platform allows businesses to stylishly and efficiently display
            their top products. Say goodbye to coding complexities and hello to
            a streamlined, user-friendly experience. <br />
            <br />
            This version keeps the core idea but slightly changes the phrasing
            to make it more concise and engaging.
          </p>
        </div>
        <div class="reveal-me">
          <h3 id="our-service-includes">Building the User Experience</h3>
          <p>
            refers to the process of creating a product, service, or digital
            interface that prioritizes the needs, behaviors, and emotions of the
            user. The goal is to craft a seamless, intuitive, and satisfying
            interaction between the user and the product. Key elements involved
            in building the user experience (UX) include: <br />
          </p>
          <ul>
            <li>
              User Research: Understanding your audience through surveys,
              interviews, and data analysis to identify pain points and needs.
            </li>
            <li>
              Wireframing and Prototyping: Designing basic layouts and
              interactive models to visualize the structure and flow of the user
              interface.
            </li>
            <li>
              User Testing: Gathering feedback from actual users to refine the
              design, ensuring it meets usability standards.
            </li>
            <li>
              Interaction Design: Focusing on the way users interact with the
              interface, considering ease of navigation and user behaviors.
            </li>
            <li>
              Visual Design: Enhancing the user experience with appealing,
              cohesive, and accessible aesthetics.
            </li>
          </ul>
          <p>
            Building the user experience requires collaboration between
            designers, developers, and product teams to ensure that
            functionality and design work in harmony for the end-user.
          </p>
        </div>
        <figure class="reveal-me">
          <img
            src="images/services/services-details-img.webp"
            alt="Services Big Img"
          />
        </figure>
        <div class="reveal-me">
          <h3 id="why-choose">Building the information architecture</h3>
          <p>
            It sounds like you're working on translating research findings into
            a wireframe. Are you focusing on a specific type of project or
            platform, like a website, app, or something else? And what kind of
            research findings are you incorporating?
          </p>
        </div>
        <div class="reveal-me">
          <h3 id="wireframing-the-findings-of-the-research">
            Wireframing the findings of the research
          </h3>
          <p>
            Got it. Testing with real users is crucial for refining your design
            and ensuring it meets their needs. Here's a basic outline of how you
            might incorporate your research findings into wireframes and test
            them:
          </p>
          <ul>
            <li>
              User Research: Understanding your audience through surveys,
              interviews, and data analysis to identify pain points and needs.
            </li>
            <li>
              Wireframing and Prototyping: Designing basic layouts and
              interactive models to visualize the structure and flow of the user
              interface.
            </li>
            <li>
              User Testing: Gathering feedback from actual users to refine the
              design, ensuring it meets usability standards.
            </li>
            <li>
              Interaction Design: Focusing on the way users interact with the
              interface, considering ease of navigation and user behaviors.
            </li>
            <li>
              Visual Design: Enhancing the user experience with appealing,
              cohesive, and accessible aesthetics.
            </li>
          </ul>
        </div>

        <figure class="reveal-me">
          <img
            src="images/services/services-details-img.webp"
            alt="Services Big Img"
          />
        </figure>
        <div class="reveal-me">
          <h3 id="testing-the-website-with-real-users">
            Testing the website with real users
          </h3>
          <ul>
            <li>
              User Research: Understanding your audience through surveys,
              interviews, and data analysis to identify pain points and needs.
            </li>
            <li>
              Wireframing and Prototyping: Designing basic layouts and
              interactive models to visualize the structure and flow of the user
              interface.
            </li>
            <li>
              User Testing: Gathering feedback from actual users to refine the
              design, ensuring it meets usability standards.
            </li>
            <li>
              Interaction Design: Focusing on the way users interact with the
              interface, considering ease of navigation and user behaviors.
            </li>
            <li>
              Visual Design: Enhancing the user experience with appealing,
              cohesive, and accessible aesthetics.
            </li>
          </ul>
        </div>
        <div class="reveal-me">
          <h3 id="final-design">Final design</h3>
          <ul>
            <li>
              User Research: Understanding your audience through surveys,
              interviews, and data analysis to identify pain points and needs.
            </li>
            <li>
              Wireframing and Prototyping: Designing basic layouts and
              interactive models to visualize the structure and flow of the user
              interface.
            </li>
            <li>
              User Testing: Gathering feedback from actual users to refine the
              design, ensuring it meets usability standards.
            </li>
            <li>
              Interaction Design: Focusing on the way users interact with the
              interface, considering ease of navigation and user behaviors.
            </li>
            <li>
              Visual Design: Enhancing the user experience with appealing,
              cohesive, and accessible aesthetics.
            </li>
          </ul>
          <p>Let me know if you need more specifics on any of these steps!</p>
        </div>
      </article>
    </div>

    <!-- Related Articles Grid -->
    <div
      class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center items-center md:items-start gap-6 gap-y-12 pt-7 md:pt-8 lg:pt-10 xl:pt-14"
    >
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-1.webp"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            alt="Blog Images"
          />
        </figure>
        <p
          class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-[30px] mb-5"
        >
          SEPTEMBER 10, 2024
        </p>
        <a href="blog-details">
          <div class="blog-title mb-9">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Changing Face of Digital Advertising
            </h3>
          </div>
        </a>

        <a href="blog-details" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>
      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-2.webp"
            alt="Blog Images"
            class="max-h-[389px] h-full w-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
          />
        </figure>
        <p
          class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-[30px] mb-5"
        >
          SEPTEMBER 10, 2024
        </p>
        <a href="blog-details">
          <div class="blog-title mb-9">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Shifting Dynamics of Digital Advertising
            </h3>
          </div>
        </a>

        <a href="blog-details" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
      </div>

      <div class="max-w-[370px] reveal-me group">
        <figure class="overflow-hidden">
          <img
            src="images/blog-img/blog-img-3.webp"
            class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
            alt="Blog Images"
          />
        </figure>
        <p
          class="text-sm leading-[1.1] tracking-[1.12px] uppercase font-poppins font-normal mt-[30px] mb-5"
        >
          SEPTEMBER 10, 2024
        </p>
        <a href="blog-details">
          <div class="blog-title mb-9">
            <h3
              class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]"
            >
              The Transformation of Digital Advertising
            </h3>
          </div>
        </a>

        <a href="blog-details" class="rv-button rv-button-primary2">
          <div class="rv-button-top !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline dark:hidden"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
            <img
              class="hidden dark:inline"
              src="images/icons/top-arrow-dark.svg"
              alt="Arrow Icon"
            />
          </div>
          <div class="rv-button-bottom !text-center flex items-center">
            <span class="pr-1">3 minute read</span>
            <img
              class="inline"
              src="images/icons/top-arrow.svg"
              alt="Arrow Icon"
            />
          </div>
        </a>
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

<?php include ABSPATH . '/core/social-share'; ?>

<?php get_template('footer'); ?>
