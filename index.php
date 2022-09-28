<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Cairo+Play&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope Online || اضافة منتجات</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class = "main">
            <form action="insert.php" method = "post" enctype="multipart/form-data">
                <h2>موقع تسويقي اونلاين </h2>
                <img src="/assets/logo.png" alt="logo" width="300px">
                <br>
                <input type="text" name='name' placeholder='اسم المنتج' >
                <br>
                <input type="text" name='price' placeholder='سعر المنتج'>
                <br>
                <textarea  placeholder= "وصف المنتج" id="description" name="description" rows="5" cols="45%"></textarea>
                <br>
                <label for="file">اختيار صورة للمنتج</label>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <button name='upload'>رفع المنتج</button>
                <br>
                <a href ="https://github.com/ghaidaahaj4/Yad2final"> عرض </a>
                <br>
                <a herf= "pages/products.php">عرض جميع المنتجات</a>  
                <input type="button" onclick="location.href='pages/products.php';" value="عرض جميع المنتجات" />  
            </form>
        </div>
        <p> Developed BY BYG</p>
    </center>
    
</body>
</html>