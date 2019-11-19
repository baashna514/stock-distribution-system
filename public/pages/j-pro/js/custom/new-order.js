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

    // Finish date
    /* function dateTo(date_from) {
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
    function destroyDate(date) {
        $(date).datepicker("destroy");
    } 

    // Initialize date range
    dateFrom("#date");
    // dateTo("#date_from", "#date_to");
    /***************************************/
    /* end datepicker */
    /***************************************/

    // Validation
    $("#j-pro").justFormsPro({
        rules: {
            date: {
                required: true
            },
            client: {
                required: true
            },
            product: {
                required: true
            },
            shipping_cost: {
                required: true
            },
            status: {
                required: true
            },
            payment_status: {
                required: true
            }
        },
        messages: {
            date: {
                required: "Choose booking date"
            },
            client: {
                required: "Add client name"
            },
            product: {
                required: "Add product name"
            },
            shipping_cost: {
                required: "Add shipping cost"
            },
            status: {
                required: "Choose order status"
            },
            payment_status: {
                required: "Choose payment status"
            }
        },
        afterSubmitHandler: function() {
            // Destroy date range
            destroyDate("#date");
            // destroyDate("#date_to");

            // Initialize date range
            dateFrom("#date");
            // dateTo("#date_from", "#date_to");

            return true;
        }
    });
});
