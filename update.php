<?
include 'bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
   <form action="updated.php" method="post">
       <? 
       $id = $_GET['id'];
       $select = mysqli_query($bd, "SELECT * FROM `registr` WHERE `id`='$id'");
       $row = mysqli_fetch_assoc($select);
       ?>
      
       ID:<br><input type="text" name="id" value="<?=$row['id']?>"><br><br>
       Name:<br><input type="text" name="name" value="<?=$row['name']?>"><br><br>
       Surname:<br><input type="text" name="surname" value="<?=$row['surname']?>"><br><br>
       Email:<br><input type="email" name="email" value="<?=$row['email']?>"><br><br>
       Password:<br><input type="password" name="password" value="<?=$row['password']?>"><br><br>
       Conpassword:<br><input type="password" name="conpassword" value="<?=$row['conpassword']?>"><br><br>
       <input type="submit">
   </form>
</body>
</html>

<!-- value - показывает значени в перемееный -->