<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Cairo+Play&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products ||  المنتجات</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <center>
        <h3> جميع المنتجات المتوفرة </h3>
    </center>
    <?php
    include('config.php');
    $result= mysqli_query($con,"SELECT * FROM prod");
    while($row = mysqli_ferch_array($result)){
        echo "
        <center>
        <main>
        <div class='card' style='width: 18rem;'>
           <img src='$row[image]' class='card-img-top' alt='...'>
           <div class='card-body'>
           <h5 class='card-title'>$row[name]</h5>
           <p class='card-text'>$row[price] </p>
           <a href='#' class='btn btn-danger'>حذف المنتج</a>
           <a href='#' class='btn btn-primary'>تعديل المنتج</a>
      </div>
    </div>
        </main>
        <center>
        ";
    }

    ?>

</body>
</html>