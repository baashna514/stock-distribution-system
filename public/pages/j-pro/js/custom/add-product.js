$(document).ready(function() {

    // Phone masking
    // $("#phone").mask("(9999) 999-9999", { placeholder: "x" });

    /***************************************/
    /* Datepicker */
    /***************************************/
   /*  // Start date
    function dateFrom(date_from, date_to) {
        $(date_from).datepicker({
            dateFormat: "mm/dd/yy",
            prevText: '<i class="fa fa-caret-left"></i>',
            nextText: '<i class="fa fa-caret-right"></i>',
            onClose: function(selectedDate) {
                $(date_to).datepicker("option", "minDate", selectedDate);
            }
        });
    }

    // Finish date
    function dateTo(date_from, date_to) {
        $(date_to).datepicker({
            dateFormat: "mm/dd/yy",
            prevText: '<i class="fa fa-caret-left"></i>',
            nextText: '<i class="fa fa-caret-right"></i>',
            onClose: function(selectedDate) {
                $(date_from).datepicker("option", "maxDate", selectedDate);
            }
        });
    } */

    // Destroy date
    /* function destroyDate(date) {
        $(date).datepicker("destroy");
    } */ 

    // Initialize date range
    /* dateFrom("#date_from", "#date_to");
    dateTo("#date_from", "#date_to"); */
    /***************************************/
    /* end datepicker */
    /***************************************/

    // Validation
    $("#j-pro").justFormsPro({
        rules: {
            name: {
                required: true
            },
            category: {
                required: true
            },
            size: {
                required: true
            },
            /* pet: {
                required: true
            },
            carton: {
                required: true
            }, */
            price: {
                required: true,
                minvalue: 0
            }
        },
        messages: {
            name: {
                required: "Add product name"
            },
            category: {
                required: "Choose product category"
            },
            size: {
                required: "Choose product size"
            },
            /* pet: {
                required: "Choose number of pets"
            },
            carton: {
                required: "Choose number of cartons"
            }, */
            price: {
                required: "Add product price",
                minvalue: "Value not less than 0"
            },
        },
        /* afterSubmitHandler: function() {
            // Destroy date range
            destroyDate("#date_from");
            destroyDate("#date_to");

            // Initialize date range
            dateFrom("#date_from", "#date_to");
            dateTo("#date_from", "#date_to");

            return true;
        } */
    });
});
