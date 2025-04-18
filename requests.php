<?php
require_once "./common/db.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];	
    $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : '';
    $department = $_POST['department'];
    $address = $_POST['address'];

    $insertQuery = "INSERT INTO user (`first-name`, `last-name`, `email`, `password`, `date-of-birth`, `gender`, `skills`, `department`, `address`) 
                VALUES ('$firstName', '$lastName', '$email', '$password', '$dob', '$gender', '$skills', '$department', '$address')";


    if($conn->query($insertQuery)=== true){
        echo "<script>alert('User registered successfully');</script>";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}
?>