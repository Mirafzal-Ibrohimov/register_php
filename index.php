<?
    include 'bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Registration</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>surname</td>
            <td>email</td>
            <td>password</td>
            <td>conpassword</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>
        <?
        $select=mysqli_query($bd, "SELECT * FROM `registr`");
        $mylang=mysqli_fetch_assoc($select);
        do{
        ?>
        <tr>
            <td><?=$mylang['id']?></td>
            <td><?=$mylang['name']?></td>
            <td><?=$mylang['surname']?></td>
            <td><?=$mylang['email']?></td>
            <td><?=$mylang['password']?></td>
            <td><?=$mylang['conpassword']?></td>
            <td><a href="del.php?id=<?=$mylang['id']?>">delete</a></td>
            <td><a href="update.php?id=<?=$mylang['id']?>">update</a></td>
        </tr>
        <?}while($mylang=mysqli_fetch_assoc($select));?>
    </table> 
        <button><a href="add.php">Add</a></button>
        <button><a href="signin.php">Войти</a></button>
</body>
</html>