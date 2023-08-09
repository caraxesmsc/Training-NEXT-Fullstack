<?php
// process_form.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if the form is submitted using the POST method

    // Access the form data using $_POST superglobal
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Now you can use $username and $password for further processing or validation
    
    // For example, you might want to check if the fields are not empty
    if (empty($username) || empty($password)) {
        echo "Please fill in both Username and Password fields.";
    } else {
        // Do something with the form data, such as storing it in a database or performing authentication.
        // Note: For security, do not store passwords in plain text; use password hashing.
        echo "Form submitted successfully! Username: " . $username . ", Password: " . $password;
    }
}
?>
