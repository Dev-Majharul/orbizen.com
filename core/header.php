<?php

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$page_title = 'Orbizen Limited';

// Set dynamic page titles
// Use page title defined in individual pages if set
if (isset($PAGE_TITLE)) {
    $page_title = $PAGE_TITLE;
} else {
    // Default page title with current page name
    $page_title = 'Orbizen Limited';
    if ($current_page != 'index') {
        $page_title .= ' | ' . ucfirst($current_page);
    }
}

// Use description defined in individual pages if set
if (!isset($PAGE_DESCRIPTION)) {
    $PAGE_DESCRIPTION = 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions with expertise in blockchain technology and digital security.';
}
$description = $PAGE_DESCRIPTION;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  
  <!-- SEO Meta Tags -->
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Orbizen Limited, software solutions, web design, UI/UX design, website development, web application development, SaaS, password manager, secure software, digital security, Web3 technology, blockchain, personal server, SME, cloud security, next-gen technology, IT security">
  <meta name="author" content="Orbizen Limited">
  <meta name="copyright" content="Orbizen Limited">
  <meta name="language" content="English">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="rating" content="general">

  <!-- Search Engine Verification -->
  <meta name="google-site-verification" content="YOUR-GOOGLE-VERIFICATION-CODE">
  <meta name="msvalidate.01" content="YOUR-BING-VERIFICATION-CODE">
  <meta name="yandex-verification" content="YOUR-YANDEX-VERIFICATION-CODE">
  
  <!-- SEO Pagination for Multi-page Content -->
  <?php if (isset($page_number) && isset($total_pages)): ?>
    <?php if ($page_number > 1): ?>
      <link rel="prev" href="https://orbizen.com/<?php echo $current_page; ?>?page=<?php echo $page_number - 1; ?>">
    <?php endif; ?>
    <?php if ($page_number < $total_pages): ?>
      <link rel="next" href="https://orbizen.com/<?php echo $current_page; ?>?page=<?php echo $page_number + 1; ?>">
    <?php endif; ?>
  <?php endif; ?>

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <!-- Removed .php extension from URLs - Update URL structure here if needed -->
  <meta property="og:url" content="https://orbizen.com/<?php echo ($current_page !== 'index') ? $current_page : ''; ?>">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="https://orbizen.com/images/og-image.png">
  <meta property="og:site_name" content="Orbizen Limited">
  <meta property="og:locale" content="en_US">

  <!-- LinkedIn-Specific Meta Tags -->
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Orbizen Limited">
    
  <!-- WhatsApp Meta Tags -->
  <meta property="og:image:type" content="image/png">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://orbizen.com/<?php echo ($current_page !== 'index') ? $current_page : ''; ?>">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">
  <meta name="twitter:image" content="https://orbizen.com/images/og-image.png">
  <meta name="twitter:creator" content="@OrbizenLimited">

  <!-- Pinterest -->
  <meta name="pinterest-rich-pin" content="true">

  <!-- Mobile Responsive Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="theme-color" content="#ffffff">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://orbizen.com/<?php echo ($current_page !== 'index') ? $current_page : ''; ?>">

  <!-- Performance Optimization -->
  <link rel="preload" href="css/main.css" as="style">
  <link rel="preload" href="images/og-image.png" as="image">
  <meta http-equiv="x-dns-prefetch-control" content="on">
  
  <!-- Structured Data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Orbizen Limited",
      "url": "https://orbizen.com",
      "logo": {
        "@type": "ImageObject",
        "url": "https://orbizen.com/images/logo.png",
        "width": "180",
        "height": "60"
      },
      "description": "<?php echo $description; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "UK"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "",
        "contactType": "customer service",
        "availableLanguage": ["English"]
      },
      "sameAs": [
        "https://www.facebook.com/orbizenlimited",
        "https://www.twitter.com/orbizenlimited",
        "https://www.linkedin.com/company/orbizen-limited"
      ]
    }
  </script>

  <!-- Local Business Structured Data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Orbizen Limited",
      "image": "https://orbizen.com/images/logo.png",
      "url": "https://orbizen.com",
      "priceRange": "$$",
      "description": "<?php echo $description; ?>",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "UK"
      },
      "openingHours": "Mo-Fr 09:00-17:00"
    }
  </script>

  <!-- BreadcrumbList Structured Data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://orbizen.com"
      }<?php if($current_page != 'index'): ?>,
      {
        "@type": "ListItem",
        "position": 2,
        "name": "<?php echo ucfirst($current_page); ?>",
        "item": "https://orbizen.com/<?php echo $current_page; ?>"
      }
      <?php endif; ?>]
    }
  </script>

  <!-- Stylesheets -->
  <link href="css/main.css" rel="stylesheet">
  <link href="css/lazyload.css" rel="stylesheet">

  <!-- Web App Manifest -->
  <link rel="manifest" href="images/site.webmanifest">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/svg+xml" href="images/favicon.svg">
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  
  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//analytics.google.com">
  
  <!-- Preconnect -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Lazy Loading Script -->
  <script src="js/lazyload.js" defer></script>
</head>

<body>

  <header id="header" class="w-full fixed z-[9999]">
    <div class="w-full fixed h-[155px] top-0 z-[21] pointer-events-none gradient-shadow">
      <div class="absolute inset-0 pointer-events-none"
        style="backdrop-filter: blur(0px); -webkit-backdrop-filter: blur(0px)"></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 1) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 0) 50%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 1) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 0) 50%
        );
        backdrop-filter: blur(-7px);
        -webkit-backdrop-filter: blur(-7px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 0) 66.66666666666666%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 0) 66.66666666666666%
        );
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 0) 83.33333333333333%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 0) 83.33333333333333%
        );
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 0) 100%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 0) 100%
        );
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
      "></div>
      <div class="absolute inset-0 pointer-events-none rounded-[inherit]" style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 1) 100%,
          rgba(255, 255, 255, 0) 116.66666666666666%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 1) 100%,
          rgba(255, 255, 255, 0) 116.66666666666666%
        );
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
      "></div>  
