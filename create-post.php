<?php
if (isset($_POST['create'])){
    require 'config/db-connection.php';
    $title = $_POST['title'];
     $body = $_POST['body'];
    $sql ="INSERT into posts (title, body) VALUES(?, ?)";
    $stmt= $pdo ->prepare($sql);
    $result=$stmt->execute([$title,$body]);
    if($result){
        header("location:../post.php");
    }else{
        header("location:../post.php");
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daily news paper</title>
</head>
<body>
    <form class= "form-control"action="" method="post">
    <div>
    <input class="form-control" type="text" name="title" required placeholder="Nigeria Early Newspaper">
    <br>
    <br>
    <div>
        <textarea name="" id="" cols="182" rows="30" placeholder="BODY"></textarea>
    </div>
    <div>
        <button type="submit"> click
        </button>
    </div>
    </div>
    </form>
</body>
</html>