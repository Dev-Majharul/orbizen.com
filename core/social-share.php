<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

// Get current page URL
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$encodedURL = urlencode($currentURL);

// Get page title for sharing
$shareTitle = isset($page_title) ? $page_title : 'Orbizen Limited';
$encodedTitle = urlencode($shareTitle);

// Get page description for sharing
$shareDescription = isset($description) ? $description : 'Orbizen Limited delivers innovative software development, web design, and secure SaaS solutions.';
$encodedDescription = urlencode($shareDescription);
?>

<!-- Social Sharing Section -->
<div class="social-share-container py-5">
  <div class="container">
    <div class="flex flex-col md:flex-row items-center gap-4">
      <h3 class="text-lg font-medium mb-0">Share this page:</h3>
      <div class="social-share-buttons flex gap-3">
        <!-- Facebook -->
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encodedURL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#1877F2] text-white hover:bg-opacity-90 transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"></path>
          </svg>
        </a>
        
        <!-- Twitter/X -->
        <a href="https://twitter.com/intent/tweet?text=<?php echo $encodedTitle; ?>&url=<?php echo $encodedURL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black text-white hover:bg-opacity-90 transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
          </svg>
        </a>
        
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $encodedURL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#0A66C2] text-white hover:bg-opacity-90 transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"></path>
            <path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z"></path>
            <path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18C16 18.5523 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z"></path>
          </svg>
        </a>
        
        <!-- WhatsApp -->
        <a href="https://api.whatsapp.com/send?text=<?php echo $encodedTitle; ?>%20-%20<?php echo $encodedURL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Share on WhatsApp" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#25D366] text-white hover:bg-opacity-90 transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.415 14.382C17.117 14.233 15.656 13.515 15.384 13.415C15.112 13.316 14.914 13.267 14.715 13.565C14.517 13.861 13.948 14.531 13.775 14.729C13.601 14.928 13.428 14.952 13.131 14.804C12.834 14.654 11.876 14.341 10.741 13.329C9.858 12.541 9.261 11.568 9.088 11.27C8.915 10.973 9.069 10.812 9.218 10.664C9.352 10.531 9.516 10.317 9.664 10.144C9.813 9.97 9.862 9.846 9.962 9.647C10.062 9.449 10.012 9.276 9.938 9.127C9.862 8.978 9.268 7.515 9.02 6.92C8.779 6.341 8.534 6.416 8.352 6.408C8.178 6.4 7.98 6.4 7.782 6.4C7.583 6.4 7.262 6.474 6.99 6.772C6.717 7.07 5.95 7.788 5.95 9.251C5.95 10.714 7.014 12.126 7.163 12.325C7.311 12.523 9.258 15.525 12.239 16.812C12.949 17.118 13.502 17.301 13.933 17.437C14.645 17.664 15.293 17.632 15.805 17.556C16.376 17.47 17.563 16.836 17.811 16.142C18.058 15.448 18.058 14.853 17.984 14.729C17.91 14.605 17.712 14.531 17.415 14.382Z" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8423 3.11495C16.2793 -1.44904 8.83829 -1.10194 4.60229 3.66695C1.28629 7.39595 0.267294 12.6739 1.8473 17.1869L0.0413036 23.0069C-0.0396964 23.2369 0.00530356 23.4909 0.157304 23.6819C0.308304 23.8739 0.547294 23.9839 0.800294 23.9839C0.847294 23.9839 0.894294 23.9799 0.941294 23.9709L7.04229 22.3639C17.6423 26.8419 29.3123 19.3449 29.3123 8.62695C29.3123 6.17495 28.4603 3.74095 26.8423 1.71295C25.2053 -0.33505 23.0613 -0.0340497 20.8423 3.11495ZM25.2053 14.3119C25.2053 21.4839 17.9803 27.0629 11.0113 24.5329L10.4413 24.3059L6.2303 25.4329L7.3443 21.3469L7.0963 20.7559C4.1333 13.5559 10.3383 5.93595 17.5413 6.10295C21.0593 6.16695 24.2353 8.01395 25.2053 14.3119Z" />
          </svg>
        </a>
        
        <!-- Email -->
        <a href="mailto:?subject=<?php echo $encodedTitle; ?>&body=Check%20out%20this%20page:%20<?php echo $encodedURL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Share via Email" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700 text-white hover:bg-opacity-90 transition-all">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
            <path d="M3 5.25C2.58579 5.25 2.25 5.58579 2.25 6V18C2.25 18.4142 2.58579 18.75 3 18.75H21C21.4142 18.75 21.75 18.4142 21.75 18V6C21.75 5.58579 21.4142 5.25 21 5.25H3ZM12.75 12.75L20.25 7.5V6.75L12.75 12L5.25 6.75V7.5L12.75 12.75Z" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div> 