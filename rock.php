<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAN Card Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>

<form id="panForm">
    <label for="pan">PAN Card Number:</label>
    <input type="text" id="pan" name="pan" maxlength="10">
</form>

<script>
$(document).ready(function () {
    // Custom method for PAN validation
    $.validator.addMethod("pan", function (value, element) {
        return /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
    }, "Please enter a valid PAN card number.");

    // Initialize validation
    $("#panForm").validate({
        rules: {
            pan: {
                required: true,
                pan: true
            }
        },
        messages: {
            pan: {
                required: "Please enter your PAN card number.",
                pan: "Invalid PAN card format."
            }
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.insertAfter(element); // Place error message after input field
        }
    });

    // Automatically validate on input or when leaving the field
    $('#pan').on('input blur', function () {
        $(this).valid(); // Validate the PAN field
    });
});
</script>

</body>
</html>
