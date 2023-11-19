
// $(document).ready(function () {
//     $('.multiselect').each(function () {
//         var $select = $(this);

//         $select.select2({
//             // placeholder: 'Select an Industry Name',
//             allowClear: true,
//             closeOnSelect: false,
//             minimumResultsForSearch: 0,
//             tags: false // Enable tags
//         });


//         $select.on('change', function () {
//             var selectedOptions = $select.val();
//             var $selection = $select.next('.select2-container').find('.select2-selection__rendered');

//             if (selectedOptions && selectedOptions.length > 2) {
//                 var displayText = selectedOptions.length + ' options selected';
//                 $selection.text(displayText);
//                 $selection.siblings('.select2-selection__choice').css('display', 'none');
//             } else {
//                 // $selection.text('');
//                 $selection.siblings('.select2-selection__choice').css('display', 'block');
//             }
//         });



//     });
// });

function updateSelectionDisplay($select) {
    var selectedOptions = $select.val();
    var $selection = $select.next('.select2-container').find('.select2-selection__rendered');

    if (selectedOptions && selectedOptions.length > 2) {
        var displayText = selectedOptions.length + ' options selected';
        $selection.text(displayText);
        $selection.siblings('.select2-selection__choice').css('display', 'none');
    } else {
        // $selection.text('');
        $selection.siblings('.select2-selection__choice').css('display', 'block');
    }
}

$('.multiselect').each(function () {
    var $select = $(this);

    $select.select2({
        // placeholder: 'Select an Industry Name',
        allowClear: true,
        closeOnSelect: false,
        minimumResultsForSearch: 0,
        tags: false // Enable tags
    });

    // Event handler for "Select All" option
    $select.on('select2:open', function () {
        var $results = $select.data('select2').$dropdown.find('.select2-results');
        var $selectAllOption = $results.find('.select-all-option');

        if (!$selectAllOption.length) {
            $results.prepend('<li class="select2-results__option select-all-option">Select All</li>');
        }

        $('.select-all-option').off('click').on('click', function () {
            
            var selectAll = !$select.find('option:not(:selected)').length;
            $select.find('option').prop('selected', !selectAll);
            // Use requestAnimationFrame for more efficient delay
            requestAnimationFrame(function () {
                $select.trigger('change.select2');
            });

            updateSelectionDisplay($select);
        });
    });

    $select.on('select2:select select2:unselect', function () {
        updateSelectionDisplay($select);
    });
});
