<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description
$PAGE_TITLE = 'Orbizen Limited - Privacy Policy';
$PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';



get_template('header');
get_template('navbar');
?>


<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Privacy Policy Header Section
======================================-->
<section
  class="pt-32 md:pt-36 lg:pt-[180px] pb-12 lg:pb-16 2xl:pb-[135px] relative overflow-hidden"
>
  <!-- Gradient Background Wrapper -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-[44%] lg:w-[40%] h-[44%] lg:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] md:scale-[0.7]"
  >
    <!-- Gradient Background Image: Positioned centrally with responsive sizing -->
    <img
      src="images/hero-gradient-background.webp"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Header Content Container -->
  <div class="container text-center reveal-me">
    <!-- Badge Component -->
    <div class="rv-badge mb-4 md:mb-8">
      <span class="rv-badge-text">Policy</span>
    </div>

    <!-- Main Title -->
    <h1 class="dark:text-white">Privacy & Policy</h1>
  </div>
</section>


<!--=====================================
   Terms and Conditions Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Introduction Header -->
    <h2
      class="text-[25px] md:text-4xl md:leading-[1.5] mb-12 md:mb-24 reveal-me"
    >
      The contents of a Terms and Conditions (T&C) agreement can differ based on
      the specific service or product provided. However, for a
      subscription-based design agency, you'll typically find the following key
      elements:
    </h2>

    <!-- Terms Content Body -->
    <div class="blog-details-body">
      <!-- 1. Introduction and Definitions -->
      <div class="reveal-me">
        <h3>1. Introduction and Definitions:</h3>
        <p>
          This section outlines the basic information, such as the date the
          agreement is established, the parties involved (your agency and the
          user), and any definitions of key terms used within the document.
        </p>
      </div>

      <!-- 2. Use of Service -->
      <div class="reveal-me">
        <h3>2. Use of the Service:</h3>
        <p>
          This section details the user's rights and limitations when using your
          subscription design service. It might specify:
        </p>
        <ul>
          <li>Permitted uses of the designs created for the user.</li>
          <li>Permitted uses of the designs created for the user.</li>
          <li>
            Restrictions on using the platform or design services for illegal or
            unethical purposes.
          </li>
          <li>
            User responsibility for providing accurate and complete information
            during the design request process.
          </li>
        </ul>
      </div>

      <!-- 3. Subscription Plans -->
      <div class="reveal-me">
        <h3>3. Subscription Plans and Fees:</h3>
        <p>
          This section clarifies the details of your subscription plans,
          including:
        </p>
        <ul>
          <li>
            Description of different subscription tiers and their features
            (number of design requests, project complexity, etc.).
          </li>
          <li>
            Payment terms, including billing cycles, accepted payment methods,
            and any applicable taxes.
          </li>
          <li>
            Information on automatic renewals and the process for cancellation.
          </li>
        </ul>
      </div>

      <!-- 4. Intellectual Property -->
      <div class="reveal-me">
        <h3>4. Intellectual Property:</h3>
        <p>
          This section outlines ownership rights of the designs created for the
          user. It typically states that:
        </p>
        <ul>
          <li>
            You (the agency) retain ownership of the original design concepts
            and copyright.
          </li>
          <li>
            The user receives a license to use the final designs for their
            specific purposes as outlined in the agreement.
          </li>
          <li>
            Limitations on modifying or redistributing the designs without your
            permission.
          </li>
        </ul>
      </div>

      <!-- 5. Disclaimers -->
      <div class="reveal-me">
        <h3>5. Disclaimers and Warranties:</h3>
        <p>
          This section outlines limitations on your liability. It might clarify
          that:
        </p>
        <ul>
          <li>
            The service is provided "as is" and there are no guarantees of
            specific results.
          </li>
          <li>
            You are not liable for any damages caused by the use of the designs
            by the user.
          </li>
          <li>
            You are not responsible for any delays or disruptions in the
            service.
          </li>
        </ul>
      </div>

      <!-- 6. Dispute Resolution -->
      <div class="reveal-me">
        <h3>6. Dispute Resolution:</h3>
        <p>
          This section outlines the process for resolving any disagreements
          between you and the user. It might specify:
        </p>
        <ul>
          <li>
            The preferred method of resolving disputes (e.g., mediation,
            arbitration).
          </li>
          <li>Governing law that applies to the agreement.</li>
          <li>pen_spark</li>
        </ul>
      </div>

      <!-- 7. Termination -->
      <div class="reveal-me">
        <h3>7. Termination:</h3>
        <p>
          This section outlines ownership rights of the designs created for the
          user. It typically states that:
        </p>
        <ul>
          <li>
            You (the agency) retain ownership of the original design concepts
            and copyright.
          </li>
          <li>
            The user receives a license to use the final designs for their
            specific purposes as outlined in the agreement.
          </li>
          <li>
            Limitations on modifying or redistributing the designs without your
            permission.
          </li>
        </ul>
      </div>

      <!-- 8. Entire Agreement -->
      <div class="reveal-me">
        <h3>8. Entire Agreement and Amendments:</h3>
        <ul>
          <li>
            This section clarifies that the T&C constitutes the entire agreement
            between you and the user, superseding any prior communications.
          </li>
          <li>
            It also specifies the process for amending the terms and conditions
            in the future.
          </li>
        </ul>
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

<?php
  get_template('footer');
  ?>
