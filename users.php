<?php
include "config/db-connection.php";
$sql="SELECT * FROM `users`";
$stmt = $pdo -> prepare($sql);
$stmt -> execute();
$posts = $stmt -> fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{
            width:50px;
            height 50px;
        }
        .body{
            background-color:lightblue;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class= "table">
        <tr>
            <th>id</th>
            <th>fullname</th>
            <th>gender</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
            <th>passport</th>
        </tr>
<?php
foreach($posts as $post){?>
<tr>

<td><?php echo $post['id']?></td>
<td><?php echo $post['fullname']?></td>
<td><?php echo $post['gender']?></td>
<td><?php echo $post['phone']?></td>
<td><?php echo $post['email']?></td>
<td><?php echo $post['addresss']?></td>
<td><img src="upload/<?php echo $post['passport']?>" class="img-fluid"> </td>

</tr>
<?php
}?>
    </table>
</body>
</html>