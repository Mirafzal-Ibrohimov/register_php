<?

include "bd.php";

$id = $_GET['id'];

$delet = mysqli_query($bd,"DELETE FROM `registr` WHERE `id` = '$id'");
header("location:index.php");

?>