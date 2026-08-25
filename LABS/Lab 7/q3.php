<?php
$conn = mysqli_connect("localhost","root","","lab7_db");

if(!$conn){
    die("Connection Failed");
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validation 1
if(strlen($fullname) > 40){
    die("Full name should not exceed 40 characters.");
}

// Validation 2
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    die("Invalid Email Address.");
}

// Validation 3
if(!preg_match("/^[A-Za-z]+[0-9]+$/",$username)){
    die("Username must start with letters followed by numbers.");
}

// Validation 4
if(strlen($password) <= 8){
    die("Password must be more than 8 characters.");
}

// Insert Data
$sql="INSERT INTO users(fullname,email,username,password)
VALUES('$fullname','$email','$username','$password')";

if(mysqli_query($conn,$sql)){
    echo "Registration Successful";
}
else{
    echo "Error";
}



// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validation 1: Full name length
if (strlen($fullname) > 40) {
    die("Error: Full name should not exceed 40 characters.");
}

// Validation 2: Valid email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email address.");
}

// Validation 3: Username starts with letters followed by numbers
if (!preg_match("/^[A-Za-z]+[0-9]+$/", $username)) {
    die("Error: Username must start with letters followed by numbers.");
}

// Validation 4: Password length
if (strlen($password) <= 8) {
    die("Error: Password must be more than 8 characters.");
}

// Insert into database
$sql = "INSERT INTO users(fullname, email, username, password)
VALUES ('$fullname', '$email', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Registration Successful!</h2>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>