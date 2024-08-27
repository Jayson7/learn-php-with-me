<!-- form.php -->
<?php
// check request method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get details and trim
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
// define eeror variables
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errors[] = "Only letters and white space allowed in name.";
    }

    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Check if there are errors
    if (count($errors) > 0) {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='index.html'>Go back to the form</a>";
    } else {
        // If no errors, display success message
        echo "<p style='color:green;'>Form submitted successfully!</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
    }
} else {
    // Redirect to form if accessed directly
    header("Location: index.html");
    exit();
}
?>