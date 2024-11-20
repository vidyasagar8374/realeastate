document.getElementById('toggle-btn').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const content = document.querySelector('.content');

    if (window.innerWidth <= 768) {
        // Toggle sidebar and overlay on small screens
        sidebar.classList.toggle('sidebar-show');
        overlay.classList.toggle('sidebar-show');
    } else {
        // Toggle sidebar and content width on larger screens
        sidebar.classList.toggle('sidebar-hidden');
        content.classList.toggle('full-width');
    }
});

// Close sidebar on small screens when overlay is clicked
document.getElementById('sidebar-overlay').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    
    // Hide sidebar and overlay
    sidebar.classList.remove('sidebar-show');
    overlay.classList.remove('sidebar-show');
});


document.addEventListener('DOMContentLoaded', function() {
const profileImage = document.querySelector('.profile-dropdown img');
const dropdownMenu = document.querySelector('.dropdown-menu');

// Toggle the dropdown menu on click
profileImage.addEventListener('click', function(event) {
    event.stopPropagation(); // Prevent the event from bubbling up
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block'; // Toggle visibility
});

// Close the dropdown when clicking outside
document.addEventListener('click', function(event) {
    if (!dropdownMenu.contains(event.target) && !profileImage.contains(event.target)) {
        dropdownMenu.style.display = 'none'; // Hide the dropdown
    }
});
});


// multi step form

// $(document).ready(function() {
//     let currentStep = 0;
//     const steps = $(".form-step");
//     const headers = $(".step-header");
//     const loading = $("#loading");

//     function showStep(step) {
//       // Show the current step
//       steps.addClass("d-none");
//       steps.eq(step).removeClass("d-none");

//       // Update the active header
//       headers.removeClass("active");
//       headers.eq(step).addClass("active");
//     }

//     $(".next-step").click(function() {
//       if (currentStep < steps.length - 1) {
//         currentStep++;
//         showStep(currentStep);
//       }
//     });

//     $(".prev-step").click(function() {
//       if (currentStep > 0) {
//         currentStep--;
//         showStep(currentStep);
//       }
//     });

    // $("#multiStepForm").submit(function(event) {
    //   event.preventDefault();
    //   // Show the loading GIF
    //   loading.removeClass("d-none");

    //   // Collect form data
    //   const formData = $(this).serialize();
    //   console.log("Form Data Submitted:", formData);

    //   // Simulate an AJAX call with a delay for demonstration
    //   $.ajax({
    //     url: 'your-server-endpoint',
    //     method: 'POST',
    //     data: formData,
    //     success: function(response) {
    //       alert("Form submitted successfully!");
    //     },
    //     error: function(error) {
    //       alert("Error submitting form!");
    //     },
    //     complete: function() {
    //       // Hide the loading GIF when the AJAX call is complete
    //       loading.addClass("d-none");
    //     }
    //   });
    // });

    // Click event on headers to navigate directly
    // headers.click(function() {
    //   const step = $(this).data("step");
    //   currentStep = step;
    //   showStep(currentStep);
    // });
  });
