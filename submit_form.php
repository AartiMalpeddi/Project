<?php

$host = "localhost"; 
$dbname = "project";
$username = "root"; 
$password = ""; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$event = $conn->real_escape_string($_POST['event']);
$message = $conn->real_escape_string($_POST['message']);

if (empty($name) || empty($email) || empty($event) || empty($message)) {
    echo "Please fill in all fields.";
} else {
    
    $sql = "INSERT INTO `queries` (name, email, event, message) 
            VALUES ('$name', '$email', '$event', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: displayform.php?name=$name&email=$email&event=$event&message=$message"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

}

$conn->close();
?>
