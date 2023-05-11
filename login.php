<?php
if (isset($_POST['submit'])) {   
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

    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
    
        echo "<h2>Welcome!</h2>";
        echo "<p>You are logged in.</p>";
    } else {
    
        echo "<p>Invalid email or password.</p>";
    }

    
    $conn->close();
}
?>
