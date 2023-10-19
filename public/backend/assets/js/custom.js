// For Frontend Back Validation
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})();


//   document.addEventListener('DOMContentLoaded', function () {
//     tinymce.init({
//         selector: '#kt_docs_tinymce_basic'
//     });
// });

// Calander With Target ANd Time
document.addEventListener('DOMContentLoaded', function () {
  $("#kt_daterangepicker_1").daterangepicker({
    timePicker: true,
    startDate: moment().startOf("hour"),
    endDate: moment().startOf("hour").add(32, "hour"),
    locale: {
      format: "M/DD hh:mm A"
    }
  });
});
// Single Calander
document.addEventListener('DOMContentLoaded', function () {
  $("#kt_datepicker_3").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
  });
});



// 
$(document).ready(function () {
  var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function (file, done) {
      if (file.name == "wow.jpg") {
        done("Naha, you don't.");
      } else {
        done();
      }
    }
  });
});
$(document).ready(function () {
  // Select elements
  const target = document.getElementById('kt_clipboard_4');
  const button = target.nextElementSibling;

  // Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
  clipboard = new ClipboardJS(button, {
    target: target,
    text: function () {
      return target.innerHTML;
    }
  });

  // Success action handler
  clipboard.on('success', function (e) {
    var checkIcon = button.querySelector('.bi.bi-check');
    var svgIcon = button.querySelector('.svg-icon');

    // Exit check icon when already showing
    if (checkIcon) {
      return;
    }

    // Create check icon
    checkIcon = document.createElement('i');
    checkIcon.classList.add('bi');
    checkIcon.classList.add('bi-check');
    checkIcon.classList.add('fs-2x');

    // Append check icon
    button.appendChild(checkIcon);

    // Highlight target
    const classes = ['text-success', 'fw-boldest'];
    target.classList.add(...classes);

    // Highlight button
    button.classList.add('btn-success');

    // Hide copy icon
    svgIcon.classList.add('d-none');

    // Revert button label after 3 seconds
    setTimeout(function () {
      // Remove check icon
      svgIcon.classList.remove('d-none');

      // Revert icon
      button.removeChild(checkIcon);

      // Remove target highlight
      target.classList.remove(...classes);

      // Remove button highlight
      button.classList.remove('btn-success');
    }, 3000)
  });
});




function copyCode() {
  // Get the code element
  var codeElement = document.querySelector('.highlight-code code');

  // Create a text area to hold the code
  var textArea = document.createElement('textarea');
  textArea.value = codeElement.textContent;
  document.body.appendChild(textArea);

  // Select the text in the text area
  textArea.select();
  document.execCommand('copy');

  // Remove the text area from the DOM
  document.body.removeChild(textArea);

  // You can add a tooltip or other feedback here if needed
  alert('Code copied!');
}

$(document).on('click', '.delete', function (e) {
  e.preventDefault();
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger'
    },
    buttonsStyling: false
  });

  var deleteUrl = $(this).attr('href');

  swalWithBootstrapButtons.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    buttonsStyling: false,
    customClass: {
      confirmButton: 'btn btn-danger',
      cancelButton: 'btn btn-success'
    }
  }).then(function (result) {
    if (result.isConfirmed) {
      $.ajax({
        url: deleteUrl,
        type: 'DELETE',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        success: function (data) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          ).then(function () {
            location.reload();
          });
        },
        error: function (xhr, status, error) {
          swalWithBootstrapButtons.fire(
            'Error Occurred!',
            error,
            'error'
          );
        }
      });
    }
    else if (result.dismiss === swal.DismissReason.cancel) {
      swalWithBootstrapButtons.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      );
    }
  });
});