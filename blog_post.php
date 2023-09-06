<?php
include "config/db-connection.php";
if(isset($GET['id'])){
    $id=GET['id'];
    $id=$_GET['[id'];
    $sql="SELECT * FROM post WHERE id = $id";
    $stmt = $pdo -> prepare ($sql);
    $stmt = execute([$id]);
    // stroe your stmt in a variable
    $post= $stmt->fetch(PDO::FETCH_ASSOC);
}
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
    
     <a class="btn btn-primary" href="process/deletepost.php?id=<?php echo $id; ?>">DELETE</a>
</body>
</html>
<!-- create,  prepare and execute -->