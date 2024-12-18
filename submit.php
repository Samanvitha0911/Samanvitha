<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $fname = htmlspecialchars(trim($_POST['fname']));
    $lname = htmlspecialchars(trim($_POST['lname']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));

    // You can process the data further (e.g., save it to a database)
    // For this example, we just display the submitted data

    echo "<p><strong>First Name:</strong> $fname</p>";
    echo "<p><strong>Last Name:</strong> $lname</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "No data received.";
}
?>
