<?
include 'bd.php';

if($_POST){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $conpassword=md5($_POST['conpassword']);
    $insert = mysqli_query($bd, "INSERT INTO `registr`(`name`, `surname`, `email`, `password`, `conpassword`) VALUES ('$name','$surname','$email','$password','$conpassword')");   
    header("location:index.php");
}
?>