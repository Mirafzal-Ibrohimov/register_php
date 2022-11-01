<?
session_start();
require_once "bd.php";

if($_POST){
    $name = $_POST['name'];
    $password = md5($_POST['password']);
   

    $check_user = mysqli_query($bd, "SELECT * FROM `registr` WHERE `name` = '$name' AND `password`='$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        header('location:cab.php');
    }else{
        header('location:error.php');
    }
}    

echo $row['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cabinet</title>
</head>
<body>
    <form action="signin.php" method="post">
        Write name:<br><input type="text" name="name"><br><br> 
        Write password:<br><input type="text" name="password"><br><br>        
        <input type="submit">
    </form>
</body>
</html>