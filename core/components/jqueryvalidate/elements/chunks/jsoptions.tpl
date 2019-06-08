{
    errorPlacement: function(error, element) {
    error.insertBefore(element);
},
errorClass: "error",
errorElement: "div",
rules: {
    first_name: "required",
    last_name: "required",
    email: {
    required: true,
    email: true
    },
    message: "required"
},
messages: {
first_name: "Please enter your First Name",
last_name: "Please enter your Last Name",
email: "Please enter a valid email",
message: "The message is required"
}
}