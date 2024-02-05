$(document).ready(function() {
    $("#togglePassword").click(function() {
        var passwordField = $("#password");
        var fieldType = passwordField.attr("type");

        if (fieldType === "password") {
            passwordField.attr("type", "text");
        } else {
            passwordField.attr("type", "password");
        }
    });

    $("#toggleConfirmPassword").click(function() {
        var confirmPasswordField = $("#password_confirmation");
        var fieldType = confirmPasswordField.attr("type");

        if (fieldType === "password") {
            confirmPasswordField.attr("type", "text");
        } else {
            confirmPasswordField.attr("type", "password");
        }
    });
});