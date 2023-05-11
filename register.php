<?php

if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "registration_db"; 

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === true) {
        
        echo "<h2>Registration Successful</h2>";
       
    } else {
    
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>
