g<?php
include "config/db-connection.php";
$sql = "SELECT * FROM `posts`";
$stmt= $pdo ->prepare($sql);
$stmt->execute();
$posts = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>body</th>
            <th>cretaed</th>
        </tr>
        <?php
        foreach($posts as $post){?>
        <tr>
            <td><?php echo $post['id'];?></td>
            <td><?php echo $post['title'];?></td>
            <td><?php echo $post['body'];?></td>
            <td><?php echo $post['created'];?></td>
        </tr>
              <?php
        }?>

    </table>
</body>
</html>