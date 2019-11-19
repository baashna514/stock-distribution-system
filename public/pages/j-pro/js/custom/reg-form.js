$(document).ready(function() {
    $("#j-pro").justFormsPro( {
        rules: {
            name: {
                required: true
            }
            , email: {
                required: true
            }
            , phone: {
                required: true
            }
            , address: {
                required: true
            }
            , city: {
                required: true
            }
            , password: {
                required: true
            }
        }
        , messages: {
            name: {
                required: "Add your name"
            }
            , email: {
                required: "Add your email"
            }
            , phone: {
                required: "Add your phone"
            }
            , address: {
                required: "Add your address"
            }
            , city: {
                required: "Add your city"
            }
            , password: {
                required: "Add your password"
            }
        }
    }
    );
}

);