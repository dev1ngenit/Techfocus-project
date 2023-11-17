

function submitForm(event, element) {
  event.preventDefault(); // Prevent the default behavior of the anchor element
  var form = element.closest('form');
  if (form) {
    form.submit();
  }
}



// image preview
function mainThamUrl(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#mainThmb').attr('src', e.target.result).width(60).height(40);
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$('#multiImg').on('change', function() { //on file input change
  if (window.File && window.FileReader && window.FileList && window
      .Blob) //check File API supported browser
  {
      var data = $(this)[0].files; //this file data

      $.each(data, function(index, file) { //loop though each file
          if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                  .type)) { //check supported file type
              var fRead = new FileReader(); //new filereader
              fRead.onload = (function(file) { //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src',
                              e.target.result).width(70)
                          .height(50); //create image element
                      $('#preview_img').append(
                          img); //append image to output element
                  };
              })(file);
              fRead.readAsDataURL(file); //URL representing the file's data.
          }
      });

  } else {
      alert("Your browser doesn't support File API!"); //if File API is absent
  }
});




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


$(document).ready(function () {
  $('form').on('submit', function () {
    var submitButton = $('#common_submit');
    var labelSpan = submitButton.find('.indicator-label');
    var progressSpan = submitButton.find('.indicator-progress');

    // Disable the submit button
    submitButton.prop('disabled', true);

    // Hide the label and show the progress indicator
    labelSpan.hide();
    progressSpan.show();
  });
});


// Datatable Common

"use strict";

// Class definition
var KTDatatablesButtons = function () {
  // Shared variables
  var table;
  var datatable;

  // Private functions
  var initDatatable = function () {
    // Set date data order


    const tableRows = table.querySelectorAll('tbody tr');

    tableRows.forEach(row => {
      const dateRow = row.querySelectorAll('td');
      const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
        .format(); // select date from 4th column in table
      dateRow[3].setAttribute('data-order', realDate);
    });

    // Init datatable --- more info on datatables: https://datatables.net/manual/
    datatable = $(table).DataTable({
      "info": false,
      'order': [],
      'pageLength': 10,
    });
  }



  // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
  var handleSearchDatatable = () => {
    const filterSearch = document.querySelector('[data-kt-filter="search"]');
    filterSearch.addEventListener('keyup', function (e) {
      datatable.search(e.target.value).draw();
    });
  }

  // Public methods
  return {
    init: function () {
      table = document.querySelector('.data_table');

      if (!table) {
        return;
      }

      initDatatable();
      handleSearchDatatable();
    }
  };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTDatatablesButtons.init();
});

// Sweet Alert 
// Shaju


// New 
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


document.addEventListener('DOMContentLoaded', function () {
  tinymce.init({
      selector: '#kt_docs_tinymce_basic'
  });
});

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
  accept: function(file, done) {
      if (file.name == "wow.jpg") {
          done("Naha, you don't.");
      } else {
          done();
      }
  }
});
// Set the name attribute for the file input
myDropzone.on("addedfile", function (file) {
file.previewElement.querySelector("input[type='file']").setAttribute("name", "multi_image");
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

// Initialize Select Input

var next_click=document.querySelectorAll(".next_button");
var main_form=document.querySelectorAll(".main");
var step_list = document.querySelectorAll(".progress-bar li");
var num = document.querySelector(".step-number");
let formnumber=0;

next_click.forEach(function(next_click_form){
  next_click_form.addEventListener('click',function(){
      if(!validateform()){
          return false
      }
     formnumber++;
     updateform();
     progress_forward();
     contentchange();
  });
}); 

var back_click=document.querySelectorAll(".back_button");
back_click.forEach(function(back_click_form){
  back_click_form.addEventListener('click',function(){
     formnumber--;
     updateform();
     progress_backward();
     contentchange();
  });
});

var username=document.querySelector("#user_name");
var shownname=document.querySelector(".shown_name");


var submit_click=document.querySelectorAll(".submit_button");
submit_click.forEach(function(submit_click_form){
  submit_click_form.addEventListener('click',function(){
     shownname.innerHTML= username.value;
     formnumber++;
     updateform(); 
  });
});

var heart=document.querySelector(".fa-heart");
heart.addEventListener('click',function(){
 heart.classList.toggle('heart');
});


var share=document.querySelector(".fa-share-alt");
share.addEventListener('click',function(){
 share.classList.toggle('share');
});



function updateform(){
  main_form.forEach(function(mainform_number){
      mainform_number.classList.remove('active');
  })
  main_form[formnumber].classList.add('active');
} 

function progress_forward(){
  // step_list.forEach(list => {
      
  //     list.classList.remove('active');
       
  // }); 
  
   
  num.innerHTML = formnumber+1;
  step_list[formnumber].classList.add('active');
}  

function progress_backward(){
  var form_num = formnumber+1;
  step_list[form_num].classList.remove('active');
  num.innerHTML = form_num;
} 

var step_num_content=document.querySelectorAll(".step-number-content");

function contentchange(){
   step_num_content.forEach(function(content){
      content.classList.remove('active'); 
      content.classList.add('d-none');
   }); 
   step_num_content[formnumber].classList.add('active');
} 


function validateform(){
  validate=true;
  var validate_inputs=document.querySelectorAll(".main.active input");
  validate_inputs.forEach(function(vaildate_input){
      vaildate_input.classList.remove('warning');
      if(vaildate_input.hasAttribute('require')){
          if(vaildate_input.value.length==0){
              validate=false;
              vaildate_input.classList.add('warning');
          }
      }
  });
  return validate;
  
}

