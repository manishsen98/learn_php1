<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
  if(isset($_POST)) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    include "config.php";
    $sql = "SELECT * FROM users WHERE email = "$email";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($user){
        if(password_verify($password, $user["password"])){
            header(Location: index.php);
             die();
        }else{
            echo "password not matched";
        }
    } else {
        echo "email does not match"
    }
} 
 ?>

    <form action="login.php" method = "post" >
       <input type="email >
       <input type="password" >
       <input type="submit">
        
    </form>
</body>
</html>