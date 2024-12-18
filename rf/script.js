$(document).ready(function() {
    // Form submission event handler
    $('#registration-form').on('submit', function(e) {
      e.preventDefault(); // Prevent default form submission
  
      // Collect form data
      var formData = $(this).serialize();
  
      // Send data to PHP script using AJAX
      $.ajax({
        type: "POST",
        url: "submit.php",
        data: formData,
        success: function(response) {
          // Show success message
          $('#success-message').show();
          $('#form-data').html(response);
          $('#registration-form').hide(); // Hide the form after submission
        },
        error: function() {
          alert("Error occurred while submitting the form.");
        }
      });
    });
  });
  