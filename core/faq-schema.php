<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

// Required variables to be set before including this file:
// $faqs - An array of associative arrays, each with 'question' and 'answer' keys
// Example:
// $faqs = [
//   ['question' => 'What services does Orbizen offer?', 'answer' => 'Orbizen offers web development, software solutions...'],
//   ['question' => 'How do I contact support?', 'answer' => 'You can contact our support team...'],
// ];
?>

<!-- FAQ Schema Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $faq_items = [];
    foreach ($faqs as $faq) {
      $faq_items[] = '{
        "@type": "Question",
        "name": "' . htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') . '",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "' . htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') . '"
        }
      }';
    }
    echo implode(',', $faq_items);
    ?>
  ]
}
</script> 