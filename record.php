<?php
$link = mysqli_connect("localhost", "root", "", "demo");

// Check connection
if ($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$full_name = mysqli_real_escape_string($link, $_REQUEST['full_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);

// Attempt insert query execution
$sql = "INSERT INTO persons (full_name, email) VALUES ('$full_name', '$email')";
if (mysqli_query($link, $sql)){
    echo "Records added successfully.";
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>