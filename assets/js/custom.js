$(document).ready(function() {
    $("#registration").validate({
        rules: {
            fname: "required",
            lname: "required",
            father: "required",
            mother: "required",
            aadhar: {
                required: true,
                number: true,
                minlength:12,
                maxlength:16    
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
                minlength:10,
                maxlength:10
            }
        },
        messages: {
           /* name: "Please enter your name",
            email: "Please enter a valid email address",
            mobile: {
                required: "Please enter your mobile number",
                minlength: "Your username must consist of at least 10 characters"
            } */
        }
    });
});