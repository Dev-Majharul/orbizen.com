<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

    <!-- Email Subscription Form -->

<form
      id="subscriptionForm"
      class="max-md:max-w-sm max-w-[570px] mt-8 md:mt-10 flex bg-secondary text-white mx-auto w-full relative"
      method="POST"
      action="/subscribe.php"
      onsubmit="return validateForm()"
    >
      <input
        type="email" 
        name="email"
        id="emailInput"
        placeholder="hello@email.com"
        class="border-none focus:outline-none bg-transparent text-base block w-full p-5 md:p-7"
        required
      />
      <button
        type="submit"
        class="inline-block bg-primary p-3 md:p-6 uppercase text-secondary max-md:text-xs md:leading-[15.4px] md:tracking-[1.12px] absolute top-3 md:top-2 cursor-pointer right-3 md:right-2"
      >
        Subscribe
      </button>
      <div id="formMessage" class="absolute left-0 -bottom-8 text-sm"></div>
    </form>

    <script>
    function validateForm() {
      const email = document.getElementById('emailInput').value;
      const messageDiv = document.getElementById('formMessage');
      
      // Basic email validation
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        messageDiv.textContent = 'Please enter a valid email address';
        messageDiv.style.color = '#ff0000';
        return false;
      }

      // Submit form via AJAX
      fetch('/subscribe.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'email=' + encodeURIComponent(email)
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          messageDiv.textContent = 'Thank you for subscribing!';
          messageDiv.style.color = '#00ff00';
          document.getElementById('emailInput').value = '';
        } else {
          messageDiv.textContent = data.message || 'Subscription failed. Please try again.';
          messageDiv.style.color = '#ff0000';
        }
      })
      .catch(error => {
        messageDiv.textContent = 'An error occurred. Please try again later.';
        messageDiv.style.color = '#ff0000';
      });

      return false; // Prevent default form submission
    }
    </script>