$(document).ready(function() {

    // Phone masking
    // $("#phone").mask("(9999) 999-9999", { placeholder: "x" });

    /***************************************/
    /* Datepicker */
    /***************************************/
    // Start date
    function dateFrom(date_from) {
        $(date_from).datepicker({
            dateFormat: "mm/dd/yy",
            prevText: '<i class="fa fa-caret-left"></i>',
            nextText: '<i class="fa fa-caret-right"></i>',
            onClose: function(selectedDate) {
                $(date).datepicker("option", "minDate", selectedDate);
            }
        });
    }


    // Destroy date
    function destroyDate(date) {
        $(date).datepicker("destroy");
    } 

    // Initialize date range
    dateFrom("#date");
    /***************************************/
    /* end datepicker */
    /***************************************/

    // Validation
    $("#j-pro").justFormsPro({
        rules: {
            date: {
                required: true
            },
            category: {
                required: true
            },
            product: {
                required: true
            },
            quantity: {
                required: true
            },
            size: {
                required: true
            },
            pack: {
                required: true
            }
        },
        messages: {
            date: {
                required: "Choose stock date"
            },
            category: {
                required: "Choose category"
            },
            product: {
                required: "Choose product"
            },
            quantity: {
                required: "Add stock quantity"
            },
            size: {
                required: "Add product size"
            },
            pack: {
                required: "Add number of packs of product"
            }
        },
        afterSubmitHandler: function() {
            // Destroy date range
            destroyDate("#date");

            // Initialize date range
            dateFrom("#date");
            return true;
        }
    });
});
