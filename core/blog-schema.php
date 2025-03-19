<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

// Required variables to be set before including this file:
// $article_title - The title of the blog post
// $article_description - The description/excerpt of the blog post
// $article_published_date - The ISO 8601 date when the article was published (e.g., '2024-03-15T10:00:00+00:00')
// $article_modified_date - The ISO 8601 date when the article was last modified (e.g., '2024-03-16T10:00:00+00:00')
// $article_author - The name of the author
// $article_categories - Array of categories the article belongs to
// $article_image - URL to the featured image of the article
// $article_image_width - Width of the featured image
// $article_image_height - Height of the featured image
// $article_word_count - Approximate word count of the article
?>

<!-- Article Schema Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"
  },
  "headline": "<?php echo htmlspecialchars($article_title, ENT_QUOTES, 'UTF-8'); ?>",
  "description": "<?php echo htmlspecialchars($article_description, ENT_QUOTES, 'UTF-8'); ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?php echo $article_image; ?>",
    "width": "<?php echo $article_image_width; ?>",
    "height": "<?php echo $article_image_height; ?>"
  },
  "datePublished": "<?php echo $article_published_date; ?>",
  "dateModified": "<?php echo $article_modified_date; ?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo htmlspecialchars($article_author, ENT_QUOTES, 'UTF-8'); ?>",
    "url": "https://orbizen.com/team.php"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Orbizen Limited",
    "logo": {
      "@type": "ImageObject",
      "url": "https://orbizen.com/images/logo.webp",
      "width": "180",
      "height": "60"
    }
  },
  "wordCount": "<?php echo $article_word_count; ?>",
  "keywords": "<?php echo implode(', ', array_map(function($cat) { return htmlspecialchars($cat, ENT_QUOTES, 'UTF-8'); }, $article_categories)); ?>"
}
</script> 