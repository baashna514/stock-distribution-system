$(document).ready(function() {

    // Validation
    $("#j-pro").justFormsPro({
        rules: {
            name: {
                required: true
            },
            description: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Add category name"
            },
            description: {
                required: "Add category description"
            }
        },
    });
});
