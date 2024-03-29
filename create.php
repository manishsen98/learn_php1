<?php
include "config.php";

if(isset($_POST['check_Emailbtn'])){
    $email = $_POST["email"];
    $checkEmail = "SELECT email FROM users WHERE email = '$email'";
    $checkEmail_run = mysqli_query($conn, $checkEmail);

    if(mysqli_num_rows($checkEmail_run)  > 0 ){
        echo "email id already taken";
    }else{
        $sql = "INSERT INTO users (email) VALUES ('$email')";
        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}

$conn->close();
?>
