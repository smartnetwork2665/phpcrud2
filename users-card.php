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
        /* img{
            width:150px;
            height :150px;
            border-radius:50px
        } */
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width:200px;
            height: 200px;
        }
        body{
            background-color:lightblue;
        }
        .card{
            box-shadow:0 4px 10px 0 rgba(0,0,0.2);
            transition:0.3s;;
        }

    </style>
    <link rel="stylesheet" href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include "components/navbar.php"?>
    <div class="container" >
        <div class="row ">
            <?php foreach($posts as $post){?>
                <div class="col-md-4 mt-5">
                    <div class="card text-center mt-5 shadow-lg w-100 h-100">
                        <div class="card-img-top">
                        <img src="upload/<?php echo $post['passport']?>" class="img-fluid">
                        </div>
                        <div class="card-body">
                        <p><?php echo $post['id']?></p>
                        <h5><?php echo $post['fullname']?></h5>
                        <p><?php echo $post['gender']?></p>
                        <p><?php echo $post['phone']?></p>
                        <p><?php echo $post['email']?></p>
                        <p><?php echo $post['addresss']?><p>
                        </div>
                    
                    </div>
                </div>
          
            <?php
            }?>
        </div>
    </div>

       
 </div>
  </div>
</body>
</html>