<?php
// Define ABSPATH
define('ABSPATH', dirname(__FILE__));

require_once ABSPATH . '/core/function.php';

// Page Title and Description - Enhanced for SEO
$PAGE_TITLE = 'Orbizen Limited - Terms & Conditions | Software Development Services';
$PAGE_DESCRIPTION = 'Official Terms & Conditions for Orbizen Limited software development, web design, and digital services. Learn about our policies, user rights, and legal agreements for UK and global customers.';


get_template('header');
get_template('navbar');
?>

<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
<!--=====================================
   Terms and Conditions Header Section
======================================-->
<section
  class="pt-32 md:pt-36 lg:pt-[180px] pb-12 lg:pb-16 2xl:pb-[135px] relative overflow-hidden"
>
  <!-- Background Gradient Wrapper: Creates a blurred, responsive background effect -->
  <div
    id="hero-gradient-wrapper"
    class="absolute w-[44%] lg:w-[40%] h-[44%] lg:h-[40%] top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 -z-10 blur-[60px] md:scale-[0.7]"
  >
    <!-- Gradient Background Image: Positioned centrally with responsive sizing -->
    <img
      src="images/hero-gradient-background.png"
      alt="hero-gradient-background"
      id="hero-gradient"
      class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2"
    />
  </div>

  <!-- Container for page content with reveal animation -->
  <div class="container reveal-me">
    <div class="text-center">
      <!-- Badge to provide additional context or categorization -->
      <div class="rv-badge mb-4 md:mb-8">
        <span class="rv-badge-text">Legal Agreement</span>
      </div>

      <!-- Main page heading with dark mode support -->
      <h1 class="dark:text-white">Terms & Conditions</h1>
      
      <!-- SEO-friendly subheading -->
      <p class="max-w-[700px] mx-auto mt-5 text-lg text-bodyColor dark:text-bodyColorDark">
        Your agreement with Orbizen Limited for software development, web design, and digital services provided in the UK, Bangladesh, and globally.
      </p>
    </div>
  </div>
</section>


<!--=====================================
   Terms and Conditions Content Section
======================================-->
<section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="container">
    <!-- Introduction Header -->
    <h2
      class="text-[25px] md:text-4xl md:leading-[1.5] mb-12 md:mb-24 reveal-me"
    >
      These Terms and Conditions govern your use of Orbizen Limited's software development, web design, and digital services. Our commitment to transparency ensures that you understand your rights and obligations when working with us.
    </h2>

    <!-- Terms Content Body -->
    <div class="blog-details-body">
      <!-- 1. Introduction and Definitions -->
      <div class="reveal-me">
        <h3>1. Introduction and Definitions</h3>
        <p>
          These Terms and Conditions ("Terms") constitute a legally binding agreement between you and Orbizen Limited ("we," "us," "our," or "Orbizen"), a technology company registered in both the United Kingdom and Bangladesh, specializing in software development, web design, and digital solutions. These Terms govern your access to and use of our website, software development services, web design services, digital solutions, and related applications (collectively, the "Services").
        </p>
        <p>
          <strong>Effective Date:</strong> <?php echo date('F d, Y'); ?>
        </p>
        <p>
          For clarity in these Terms, we define the following key concepts:
        </p>
        <ul>
          <li><strong>"User," "You," or "Your"</strong> refers to any individual, business, or organization accessing or using our software development, web design, or digital services.</li>
          <li><strong>"Content"</strong> refers to any software code, designs, graphics, text, data, materials, or other digital assets that are created, provided, or made accessible through our Services.</li>
          <li><strong>"Subscription"</strong> refers to any recurring payment plan that grants access to our development, design, or digital services.</li>
          <li><strong>"Intellectual Property Rights"</strong> refers to all patent rights, copyright rights, mask work rights, moral rights, rights of publicity, trademark, trade dress and service mark rights, goodwill, trade secret rights, and other intellectual property rights associated with our Services or content.</li>
          <li><strong>"Deliverables"</strong> refers to the final software, websites, applications, designs, or other digital products we create and provide to you as part of our Services.</li>
        </ul>
      </div>

      <!-- 2. Acceptance of Terms -->
      <div class="reveal-me">
        <h3>2. Acceptance of Terms</h3>
        <p>
          By accessing or using Orbizen Limited's software development, web design, or digital services, you acknowledge that you have read, understood, and agree to be bound by these Terms. These Terms form a legally binding contract between you and Orbizen Limited regarding your use of our Services.
        </p>
        <p>
          We may update these Terms periodically to reflect changes in our Services, business practices, or legal requirements. Any significant changes will be communicated to you via email or prominent notice on our website. Your continued use of our Services after such modifications constitutes your acceptance of the updated Terms.
        </p>
        <p>
          You represent and warrant that you are of legal age (at least 18 years old) to form a binding contract and are not prohibited from using our Services under applicable laws in the United Kingdom, Bangladesh, or your jurisdiction of residence or business operation.
        </p>
      </div>

      <!-- 3. Services and Account Registration -->
      <div class="reveal-me">
        <h3>3. Services and Account Registration</h3>
        <p>
          Orbizen Limited provides professional software development, web design, digital solutions, and related technical services as described on our website, marketing materials, and service agreements. Our Services include but are not limited to:
        </p>
        <ul>
          <li>Custom software development for web and mobile platforms</li>
          <li>Website design and development services</li>
          <li>UI/UX design for digital products</li>
          <li>E-commerce solutions and implementations</li>
          <li>Digital transformation consulting</li>
          <li>Blockchain application development</li>
          <li>API development and integration services</li>
          <li>Cloud-based solution deployment</li>
          <li>Technical support and maintenance services</li>
        </ul>
        <p>
          To access our Services, you may need to create an account on our platform. When registering for an account, you must provide accurate, current, and complete information about yourself or your organization. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.
        </p>
        <p>
          We reserve the right to suspend or terminate any user account if we detect suspicious activity, policy violations, or if we reasonably believe that you have provided false or misleading information during the registration process.
        </p>
      </div>

      <!-- 4. Use of Services -->
      <div class="reveal-me">
        <h3>4. Use of Services</h3>
        <p>
          When using Orbizen Limited's software development, web design, and digital services, you agree to comply with these Terms and all applicable laws and regulations. Our Services are designed to help businesses and organizations create powerful digital experiences.
        </p>
        <p>
          You agree to use our Services responsibly and not to:
        </p>
        <ul>
          <li>Use our development or design services to create software, websites, or applications for illegal purposes, including but not limited to fraud, phishing, or intellectual property infringement;</li>
          <li>Request development of systems that violate privacy regulations such as GDPR, Data Protection Act 2018, or similar regulations in Bangladesh or other jurisdictions;</li>
          <li>Provide content, materials, or instructions that promote discrimination, hate speech, or violence against any individual or group;</li>
          <li>Impersonate another person or misrepresent your affiliation with any organization when using our Services;</li>
          <li>Interfere with or disrupt our development, design, or digital services, or the servers and networks connected to our Services;</li>
          <li>Attempt to gain unauthorized access to our development environments, code repositories, design files, or other protected systems;</li>
          <li>Introduce malware, viruses, or other harmful code into our systems or the deliverables we create;</li>
          <li>Reverse engineer, decompile, or attempt to extract the source code of our proprietary tools and platforms;</li>
          <li>Use automated tools or scripts to access our Services without our explicit permission.</li>
        </ul>
      </div>

      <!-- 5. Subscription Plans and Fees -->
      <div class="reveal-me">
        <h3>5. Subscription Plans and Fees</h3>
        <p>
          Orbizen Limited offers a range of subscription plans for our software development, web design, and digital services. Our transparent pricing structure is designed to accommodate businesses of different sizes and requirements.
        </p>
        <p>
          When subscribing to our Services, you agree to the following terms:
        </p>
        <ul>
          <li><strong>Payment Obligation:</strong> You agree to pay all fees associated with your selected subscription plan for software development, web design, or digital services. All fees are listed in the currency specified on our website and may be subject to applicable taxes.</li>
          <li><strong>Billing Cycles:</strong> Subscription fees for our development and design services are billed according to the billing cycle you select (monthly, quarterly, or annually). Longer-term commitments may qualify for preferential rates.</li>
          <li><strong>Automatic Renewal:</strong> For continuity of service, your subscription to our development and design services will automatically renew at the end of each billing period unless you cancel it at least 7 days before the renewal date.</li>
          <li><strong>Payment Methods:</strong> We accept various secure payment methods including major credit and debit cards, PayPal, bank transfers, and other digital payment options. You authorize us to charge your chosen payment method for all fees related to your subscription.</li>
          <li><strong>Price Adjustments:</strong> We may adjust our subscription fees periodically. Any price changes will be communicated to you at least 30 days before taking effect, giving you the opportunity to review the new pricing before your next billing cycle.</li>
          <li><strong>Refunds:</strong> Our refund policy for software development, web design, and digital services is detailed in our separate Refund Policy. Generally, we offer refunds for Services not yet rendered. Once development or design work has commenced, refunds may be prorated or limited based on work completed.</li>
        </ul>
      </div>

      <!-- 6. Payment Processing -->
      <div class="reveal-me">
        <h3>6. Payment Processing</h3>
        <p>
          Orbizen Limited partners with trusted, industry-leading payment processors to securely handle all financial transactions for our software development, web design, and digital services. Our payment infrastructure is designed to provide maximum security while offering convenient payment options for our global clientele.
        </p>
        <p>
          We currently support the following payment methods:
        </p>
        <ul>
          <li><strong>Credit and Debit Cards:</strong> Visa, MasterCard, American Express, and Discover</li>
          <li><strong>Digital Wallets:</strong> PayPal, Apple Pay, Google Pay, and Samsung Pay</li>
          <li><strong>Bank Transfers:</strong> Direct bank transfers for larger projects or enterprise clients</li>
          <li><strong>Regional Payment Options:</strong> bKash (for Bangladesh), Faster Payments (for UK), and other regional payment systems where available</li>
          <li><strong>Cryptocurrency:</strong> Bitcoin and Ethereum payments for select services (please contact us for details)</li>
        </ul>
        <p>
          When you provide payment information, it is transmitted using secure socket layer technology (SSL) and stored with AES-256 encryption. As part of our commitment to security, we do not store complete payment card details on our own servers. Instead, we rely on our PCI-DSS compliant payment processors to securely handle sensitive financial information.
        </p>
        <p>
          All payments are processed in real-time, and you will receive an electronic receipt for each transaction. For subscription services, you will be notified before each recurring charge.
        </p>
      </div>

      <!-- 7. Term and Termination -->
      <div class="reveal-me">
        <h3>7. Term and Termination</h3>
        <p>
          These Terms remain effective for as long as you use Orbizen Limited's software development, web design, or digital services, or maintain an active account with us.
        </p>
        <p>
          <strong>Client-Initiated Termination:</strong> You may terminate your subscription to our development, design, or digital services at any time by:
        </p>
        <ul>
          <li>Logging into your account and using the cancellation option in your dashboard</li>
          <li>Contacting our customer support team via email or phone</li>
          <li>Submitting a cancellation request through our website's contact form</li>
        </ul>
        <p>
          Upon termination, you will remain responsible for any fees accrued up to the date of termination. For ongoing development projects, we will deliver all completed work and provide a summary of the project status at termination.
        </p>
        <p>
          <strong>Orbizen-Initiated Termination:</strong> We may suspend or terminate your access to our software development, web design, or digital services if:
        </p>
        <ul>
          <li>You breach any provision of these Terms</li>
          <li>You fail to make timely payments for our Services</li>
          <li>We have reason to believe you are using our Services for fraudulent or illegal purposes</li>
          <li>You misuse our development resources or abuse our support systems</li>
          <li>We decide to discontinue a particular service or feature</li>
        </ul>
        <p>
          If we terminate your account for breach of Terms, we reserve the right to retain any prepaid but unused fees. For service discontinuations, we will provide a prorated refund for any prepaid services.
        </p>
        <p>
          Following termination, provisions related to intellectual property rights, payment obligations, warranties, liability limitations, and dispute resolution will continue to apply.
        </p>
      </div>

      <!-- 8. Intellectual Property Rights -->
      <div class="reveal-me">
        <h3>8. Intellectual Property Rights</h3>
        <p>
          Intellectual property rights are a critical aspect of our software development, web design, and digital services. We have structured our IP terms to balance our business interests with your needs for the deliverables we create.
        </p>
        <p>
          <strong>Orbizen's Intellectual Property:</strong> Our website, brand, proprietary development tools, frameworks, and methodologies ("Our Assets") are owned exclusively by Orbizen Limited. These Assets are protected by copyright, trademark, trade secret, and other intellectual property laws. You acknowledge that using our Services does not grant you ownership of Our Assets.
        </p>
        <p>
          <strong>License to Deliverables:</strong> Upon full payment for our software development, web design, or digital services, we grant you a non-exclusive, worldwide, perpetual license to use, modify, and display the deliverables created specifically for you. The exact scope of this license depends on your subscription plan:
        </p>
        <ul>
          <li><strong>Standard Plan:</strong> License to use the deliverables for your business purposes without the right to resell or distribute them as standalone products.</li>
          <li><strong>Professional Plan:</strong> License to use and modify the deliverables, with limited redistribution rights as part of your own services.</li>
          <li><strong>Enterprise Plan:</strong> Comprehensive license that may include source code ownership, depending on the specific terms of your enterprise agreement.</li>
        </ul>
        <p>
          <strong>Your Content:</strong> You retain all rights to the content, materials, and data you provide to us for incorporation into your project ("Your Content"). By providing Your Content, you grant us a limited license to use, reproduce, and modify it solely for the purpose of delivering our Services to you.
        </p>
        <p>
          <strong>Feedback and Improvements:</strong> If you provide suggestions, ideas, or feedback about our software development, web design, or digital services, you grant us a non-exclusive, royalty-free license to use and incorporate such feedback into our Services without obligation to compensate you.
        </p>
        <p>
          <strong>Portfolio Rights:</strong> Unless explicitly prohibited in writing, you grant us permission to include a general description of the project and relevant non-confidential screenshots or examples in our portfolio and marketing materials.
        </p>
      </div>

      <!-- 9. Confidentiality -->
      <div class="reveal-me">
        <h3>9. Confidentiality</h3>
        <p>
          As a professional software development and design company, we understand the sensitive nature of the projects we handle. Confidentiality is a cornerstone of our client relationships at Orbizen Limited.
        </p>
        <p>
          During the course of our work together, both parties may share confidential business information. We commit to protecting your sensitive information and expect the same respect for our proprietary knowledge. Specifically:
        </p>
        <p>
          <strong>What We Consider Confidential:</strong>
        </p>
        <ul>
          <li>Project specifications, wireframes, and technical requirements</li>
          <li>Business strategies, marketing plans, and financial information</li>
          <li>User data, customer lists, and market research</li>
          <li>Unpublished software features and product roadmaps</li>
          <li>Development methodologies and technical solutions</li>
          <li>Pricing structures and commercial arrangements</li>
        </ul>
        <p>
          <strong>Our Confidentiality Commitments:</strong>
        </p>
        <ul>
          <li>We will use your confidential information solely for providing our contracted services</li>
          <li>We implement strict access controls, limiting exposure of your information only to team members directly involved in your project</li>
          <li>We maintain secure development environments with industry-standard protection measures</li>
          <li>All our team members sign confidentiality agreements as part of their employment</li>
          <li>We will promptly notify you of any unauthorized disclosure or security incidents</li>
        </ul>
        <p>
          This confidentiality obligation does not apply to information that is publicly available, previously known to us, independently developed, rightfully obtained from third parties, or required to be disclosed by law.
        </p>
        <p>
          For projects requiring heightened security or privacy protections, we offer the option to execute a separate Non-Disclosure Agreement (NDA) with more specific terms tailored to your particular needs.
        </p>
      </div>

      <!-- 10. Disclaimers and Warranties -->
      <div class="reveal-me">
        <h3>10. Disclaimers and Warranties</h3>
        <p>
          While we strive for excellence in our software development, web design, and digital services, it's important to establish clear expectations about warranties and service guarantees.
        </p>
        <p>
          <strong>Service Commitment:</strong> We are committed to delivering high-quality software development, web design, and digital services according to agreed-upon specifications and timelines. We employ industry best practices in our development processes and maintain professional standards throughout our work.
        </p>
        <p>
          <strong>Regarding Our Services:</strong>
        </p>
        <ul>
          <li>We will make reasonable efforts to ensure our deliverables meet the specifications outlined in project documents</li>
          <li>We will use commercially reasonable skills and care in providing our services</li>
          <li>We will comply with applicable laws and regulations in performing our services</li>
          <li>We will make reasonable efforts to meet agreed-upon deadlines, subject to timely client feedback and approvals</li>
        </ul>
        <p>
          <strong>Warranty Limitations:</strong> Despite our best efforts, we cannot guarantee that:
        </p>
        <ul>
          <li>Our software or digital solutions will be entirely free from defects or bugs</li>
          <li>Our services will meet your business objectives or increase your profitability</li>
          <li>Websites or applications we develop will achieve specific search engine rankings or conversion rates</li>
          <li>Third-party services or APIs integrated into our solutions will continue to function without changes</li>
          <li>Our services will be compatible with all browsers, devices, or operating systems, especially outdated versions</li>
        </ul>
        <p>
          <strong>Third-Party Elements:</strong> Many of our solutions incorporate third-party software, frameworks, libraries, or services (like payment processors, hosting providers, or analytics tools). These components are subject to their own terms and conditions, and we cannot warrant their performance or continued availability.
        </p>
        <p>
          EXCEPT AS EXPRESSLY STATED IN THESE TERMS OR IN A SEPARATE WRITTEN AGREEMENT, OUR SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
        </p>
      </div>

      <!-- 11. Limitation of Liability -->
      <div class="reveal-me">
        <h3>11. Limitation of Liability</h3>
        <p>
          While we take great pride in our software development, web design, and digital services at Orbizen Limited, we must establish reasonable boundaries on liability that reflect the nature and pricing of our services.
        </p>
        <p>
          TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, ORBIZEN LIMITED AND OUR DIRECTORS, EMPLOYEES, PARTNERS, AGENTS, SUPPLIERS, AND AFFILIATES WILL NOT BE LIABLE FOR:
        </p>
        <ul>
          <li>ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES</li>
          <li>LOSS OF PROFITS, REVENUE, DATA, BUSINESS OPPORTUNITIES, OR ANTICIPATED SAVINGS</li>
          <li>BUSINESS INTERRUPTION OR DOWNTIME</li>
          <li>COST OF PROCUREMENT OF SUBSTITUTE SERVICES</li>
          <li>DAMAGE TO REPUTATION OR GOODWILL</li>
          <li>LOSSES ARISING FROM YOUR USE OF OR INABILITY TO USE OUR SERVICES</li>
          <li>ANY ACTIONS WE TAKE OR FAIL TO TAKE AS A RESULT OF COMMUNICATIONS YOU SEND</li>
          <li>TECHNICAL FAILURES BEYOND OUR REASONABLE CONTROL</li>
          <li>UNAUTHORIZED ACCESS TO YOUR DATA OR TRANSMISSIONS</li>
        </ul>
        <p>
          THESE LIMITATIONS APPLY WHETHER THE ALLEGED LIABILITY IS BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR ANY OTHER BASIS, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
        </p>
        <p>
          IN NO EVENT WILL OUR TOTAL LIABILITY TO YOU FOR ALL CLAIMS RELATED TO OUR SERVICES EXCEED THE AMOUNT PAID BY YOU TO ORBIZEN LIMITED DURING THE SIX (6) MONTHS PRECEDING THE EVENT GIVING RISE TO THE LIABILITY, OR ONE HUNDRED POUNDS STERLING (£100), WHICHEVER IS GREATER.
        </p>
        <p>
          SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES OR THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.
        </p>
        <p>
          This limitation of liability section applies to the maximum extent permitted by law and shall survive termination of this agreement and the provision of our services.
        </p>
      </div>

      <!-- 12. Indemnification -->
      <div class="reveal-me">
        <h3>12. Indemnification</h3>
        <p>
          When using Orbizen Limited's software development, web design, and digital services, you agree to protect us from certain legal claims and expenses that may arise from your actions.
        </p>
        <p>
          You agree to defend, indemnify, and hold harmless Orbizen Limited, our directors, officers, employees, affiliates, partners, contractors, and service providers from and against any and all claims, liabilities, damages, losses, costs, expenses, and fees (including reasonable attorneys' fees) arising from or relating to:
        </p>
        <ul>
          <li>Your use of our software development, web design, or digital services</li>
          <li>Content, materials, or instructions you provide to us for inclusion in your project</li>
          <li>Your violation of any provision of these Terms or any applicable law or regulation</li>
          <li>Your violation of any third-party right, including any intellectual property right, publicity right, or privacy right</li>
          <li>Any claim that your content or project requirements caused harm to a third party</li>
          <li>Any misrepresentation made by you</li>
          <li>Your failure to ensure that materials you provide us are legally compliant</li>
        </ul>
        <p>
          If you are involved in a claim or suit where this indemnification might apply, we will:
        </p>
        <ul>
          <li>Promptly notify you of the claim in writing</li>
          <li>Provide reasonable cooperation in the defense and settlement of the claim</li>
          <li>Give you reasonable control over the defense and settlement of the claim (though we reserve the right to participate in the defense at our own expense)</li>
        </ul>
        <p>
          This indemnification obligation will survive the termination of your relationship with Orbizen Limited and your use of our services.
        </p>
      </div>

      <!-- 13. Governing Law and Dispute Resolution -->
      <div class="reveal-me">
        <h3>13. Governing Law and Dispute Resolution</h3>
        <p>
          As a company with international operations and clients, we've established clear guidelines for how legal matters and disputes are handled across different jurisdictions.
        </p>
        <p>
          <strong>Governing Law:</strong> These Terms shall be governed by and construed in accordance with the laws of the United Kingdom, specifically English law, without regard to its conflict of law principles. Our choice of UK law provides a stable, well-established legal framework that protects both our clients and our business.
        </p>
        <p>
          <strong>Jurisdiction-Specific Provisions:</strong>
        </p>
        <ul>
          <li><strong>For Clients in the United Kingdom:</strong> Any dispute arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts of England and Wales.</li>
          <li><strong>For Clients in Bangladesh:</strong> While UK law governs these Terms, we acknowledge that certain mandatory provisions of Bangladesh law may apply to transactions with Bangladesh-based clients. Any dispute may be resolved through the courts of Bangladesh if proceedings are initiated there.</li>
          <li><strong>For International Clients:</strong> Any dispute arising from or related to these Terms shall be finally resolved by arbitration under the Rules of the London Court of International Arbitration (LCIA). The arbitration panel shall consist of one arbitrator. The place of arbitration shall be London, United Kingdom. The language of arbitration shall be English.</li>
        </ul>
        <p>
          <strong>Informal Dispute Resolution:</strong> We believe most disagreements can be resolved informally. Before initiating any formal legal proceeding, we require that both parties attempt to resolve any dispute through direct negotiation:
        </p>
        <ul>
          <li>The aggrieved party must send a written notice describing the issue and requested resolution</li>
          <li>Within 14 days of receiving this notice, representatives from both parties will meet (in person or virtually) to discuss the issue</li>
          <li>If no resolution is reached within 30 days of the initial notice, either party may proceed with the formal dispute resolution procedures outlined above</li>
        </ul>
        <p>
          <strong>Class Action Waiver:</strong> Both parties agree that any proceedings to resolve disputes will be conducted solely on an individual basis. Neither you nor Orbizen Limited will seek to have any dispute heard as a class action, collective action, private attorney general action, or any proceeding in which either party acts or proposes to act in a representative capacity.
        </p>
      </div>

      <!-- 14. Changes to Terms -->
      <div class="reveal-me">
        <h3>14. Changes to Terms</h3>
        <p>
          The software development and digital services industry evolves rapidly, as do the legal requirements governing our business. To ensure our Terms remain current, we may need to update them periodically.
        </p>
        <p>
          <strong>Our Update Process:</strong> When we make changes to these Terms, we follow a consistent notification process:
        </p>
        <ul>
          <li><strong>For Minor Updates:</strong> Changes that don't significantly affect your rights or obligations (such as correcting typos, clarifying existing terms, or updating contact information) may be made without specific notification.</li>
          <li><strong>For Material Changes:</strong> Significant updates that affect your rights, obligations, or our service delivery will be communicated through:
            <ul>
              <li>Email notification to the primary contact associated with your account</li>
              <li>Prominent notice on our website or client dashboard</li>
              <li>Updated "Effective Date" at the beginning of these Terms</li>
            </ul>
          </li>
        </ul>
        <p>
          <strong>Review Period:</strong> For material changes, we provide a 30-day notice period before the new Terms take effect. This gives you sufficient time to review the changes and decide whether to continue using our services under the updated Terms.
        </p>
        <p>
          <strong>Your Response Options:</strong> Upon notification of material changes to these Terms, you have several options:
        </p>
        <ul>
          <li>Continue using our services, which constitutes acceptance of the updated Terms</li>
          <li>Contact us to discuss specific concerns about the changes</li>
          <li>Terminate your subscription if you do not agree with the changes (subject to any existing contractual commitments)</li>
        </ul>
        <p>
          <strong>Archived Versions:</strong> We maintain an archive of previous versions of our Terms for reference purposes. If you need access to a previous version, please contact our customer support team.
        </p>
        <p>
          We encourage you to review these Terms regularly to stay informed about your rights and obligations when using our Services.
        </p>
      </div>

      <!-- 15. Severability and Waiver -->
      <div class="reveal-me">
        <h3>15. Severability and Waiver</h3>
        <p>
          The legal concepts of severability and waiver help ensure that our agreement remains enforceable even if specific portions are challenged or unenforced in certain situations.
        </p>
        <p>
          <strong>Severability:</strong> If any provision of these Terms is found to be unenforceable or invalid under applicable law:
        </p>
        <ul>
          <li>That specific provision will be modified to the minimum extent necessary to make it valid and enforceable, or removed if modification is not possible</li>
          <li>The remaining provisions of these Terms will continue in full force and effect</li>
          <li>The unenforceability or invalidity of a provision in one jurisdiction will not affect the enforceability or validity of that provision in any other jurisdiction</li>
        </ul>
        <p>
          This severability provision ensures that the entire agreement doesn't fail if a court or regulatory authority finds issue with a specific section.
        </p>
        <p>
          <strong>Waiver:</strong> Regarding the enforcement of these Terms:
        </p>
        <ul>
          <li>If Orbizen Limited fails to enforce any right or provision of these Terms, this will not be considered a waiver of those rights for future situations</li>
          <li>No waiver of any term shall be deemed a further or continuing waiver of such term or any other term</li>
          <li>Any waiver of a provision of these Terms must be in writing and signed by an authorized representative of Orbizen Limited to be valid</li>
        </ul>
        <p>
          For example, if we choose not to take action against a minor violation of these Terms in one instance, we still retain the right to enforce these Terms for similar or other violations in the future.
        </p>
      </div>

      <!-- 16. Entire Agreement -->
      <div class="reveal-me">
        <h3>16. Entire Agreement</h3>
        <p>
          These Terms, together with our Privacy Policy, Refund Policy, and any Service Level Agreements or Statements of Work executed between you and Orbizen Limited, constitute the complete and exclusive understanding and agreement between you and Orbizen Limited regarding your use of our software development, web design, and digital services.
        </p>
        <p>
          This "Entire Agreement" provision serves several important purposes:
        </p>
        <ul>
          <li>It confirms that these written terms supersede any previous oral or written agreements, communications, or understandings regarding our Services</li>
          <li>It establishes that marketing materials, verbal discussions, or email exchanges not explicitly incorporated into these Terms do not form part of our legally binding agreement</li>
          <li>It helps prevent misunderstandings by making clear that the formal documents we've provided contain all terms of our agreement</li>
          <li>It protects both parties from claims based on statements or promises not included in these Terms</li>
        </ul>
        <p>
          If a specific project requires terms that differ from these standard Terms, we can address those unique requirements through a separate written agreement (such as a custom Service Level Agreement or Statement of Work) that explicitly references and modifies these Terms for that particular project.
        </p>
        <p>
          This provision helps ensure clarity and certainty in our business relationship, reducing the potential for misunderstandings or disputes about what was agreed upon.
        </p>
      </div>

      <!-- 17. Contact Information -->
      <div class="reveal-me">
        <h3>17. Contact Information</h3>
        <p>
          We welcome your questions, feedback, and inquiries about these Terms or our software development, web design, and digital services. Our dedicated support team is ready to assist you through multiple channels.
        </p>
        <p>
          <strong>General Inquiries and Support:</strong>
        </p>
        <ul>
          <li>Email: support@orbizen.com</li>
          <li>Phone (UK): +44 20 1234 5678</li>
          <li>Phone (Bangladesh): +880 2 1234 5678</li>
          <li>Live Chat: Available on our website during business hours</li>
        </ul>
        <p>
          <strong>Legal and Compliance Matters:</strong>
        </p>
        <ul>
          <li>Email: legal@orbizen.com</li>
        </ul>
        <p>
          <strong>Business Hours:</strong>
        </p>
        <ul>
          <li>UK Office: Monday to Friday, 9:00 AM to 5:30 PM GMT</li>
          <li>Bangladesh Office: Sunday to Thursday, 10:00 AM to 6:30 PM BST</li>
        </ul>
        <p>
          <strong>Physical Addresses:</strong>
        </p>
        <p>
          <strong>United Kingdom Headquarters:</strong><br>
          Orbizen Limited<br>
          123 Tech Innovation Street<br>
          London, EC1V 1AB<br>
          United Kingdom
        </p>
        <p>
          <strong>Bangladesh Office:</strong><br>
          Orbizen Limited<br>
          456 Digital Drive, Gulshan<br>
          Dhaka 1212<br>
          Bangladesh
        </p>
        <p>
          For urgent matters requiring immediate attention, please contact our support team by phone or through the emergency contact form on our website.
        </p>
        <p>
          We aim to respond to all inquiries within 24 business hours. Your feedback helps us improve our services and ensure we're meeting your needs effectively.
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

    <?php get_template('subscription'); ?>
  </div>
</section>

</main>

<?php
  get_template('footer');
  ?>
