<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost"; // Change if your server is different
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "student_registration"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully to the database.<br>";
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $course = htmlspecialchars(trim($_POST['course']));

     // Debugging: Print the sanitized values
     echo "Sanitized Name: $name<br>";
     echo "Sanitized Email: $email<br>";
     echo "Sanitized Course: $course<br>";

    // Validate the data
    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($course)) {
        $errors[] = "Course is required.";
    }

    // Check if there are any errors
    if (empty($errors)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $course);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Registration successful!<br>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Course: $course<br>";
        } else {
            echo "Error: " . $stmt->error; // This will show SQL errors
        }

        // Close the statement
        $stmt->close();
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
} else {
    echo "Invalid request method.";
}

// Close the connection
$conn->close();
?>