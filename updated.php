<?
include 'bd.php';
$id - $_GET['id'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $conpassword=md5($_POST['conpassword']);
    $select = mysqli_query($bd, "UPDATE `registr` SET `name`='$name',
    `surname`='$surname',`email`='$email',`password`='$password',`conpassword`='$password' WHERE `id`='$id'");
    header("location:index.php");
?>