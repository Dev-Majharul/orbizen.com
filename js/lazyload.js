// Lazy Load Images
document.addEventListener("DOMContentLoaded", function() {
  // Check if browser supports IntersectionObserver
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        // Check if the image is in view
        if (entry.isIntersecting) {
          const image = entry.target;
          
          // Handle image element
          if (image.tagName === 'IMG') {
            // Load the actual image source
            if (image.dataset.src) {
              image.src = image.dataset.src;
              image.removeAttribute('data-src');
            }
            
            // Handle srcset for responsive images
            if (image.dataset.srcset) {
              image.srcset = image.dataset.srcset;
              image.removeAttribute('data-srcset');
            }
            
            // Apply transition effect
            setTimeout(() => {
              image.classList.add('loaded');
            }, 100);
            
            // Stop observing once loaded
            observer.unobserve(image);
          }
          
          // Handle background image elements
          if (image.dataset.background) {
            image.style.backgroundImage = `url(${image.dataset.background})`;
            image.removeAttribute('data-background');
            
            // Apply transition effect
            setTimeout(() => {
              image.classList.add('loaded');
            }, 100);
            
            // Stop observing once loaded
            observer.unobserve(image);
          }
        }
      });
    }, {
      // Element becomes visible when it's 200px away from viewport
      rootMargin: '200px 0px',
      threshold: 0.01
    });
    
    // Select all images with data-src attribute
    const lazyImages = document.querySelectorAll('img[data-src], [data-background]');
    lazyImages.forEach(image => {
      // Add class for transition effects
      image.classList.add('lazy');
      // Start observing the image
      imageObserver.observe(image);
    });
  } else {
    // Fallback for browsers that don't support IntersectionObserver
    const lazyLoad = function() {
      const lazyImages = document.querySelectorAll('img[data-src], [data-background]');
      
      // Calculate which elements are in viewport
      lazyImages.forEach(function(image) {
        if ((image.getBoundingClientRect().top <= window.innerHeight && 
             image.getBoundingClientRect().bottom >= 0) && 
             getComputedStyle(image).display !== 'none') {
          
          if (image.tagName === 'IMG' && image.dataset.src) {
            image.src = image.dataset.src;
            image.removeAttribute('data-src');
            
            if (image.dataset.srcset) {
              image.srcset = image.dataset.srcset;
              image.removeAttribute('data-srcset');
            }
          }
          
          if (image.dataset.background) {
            image.style.backgroundImage = `url(${image.dataset.background})`;
            image.removeAttribute('data-background');
          }
          
          image.classList.add('loaded');
        }
      });
    };
    
    // Run on load and scroll
    window.addEventListener('load', lazyLoad);
    window.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
  }
}); 