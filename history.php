<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

    
</head>

<body>


<?php include 'navber.php';?>
    <!-- about section starts -->
    <section id="about" class="about section-padding">
        <div class="container">
            
            <div class="row">
<?php
$ids=$_GET['id'];
$sql = "SELECT * FROM instrument , type WHERE instrument.type_id= type.type_id and instrument.pro_id='$ids'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)


?>
  
                <div style="margin-top: 80px;" class="col-lg-4 col-md-12 col-12">
     

                    <div class="about-img">
                        
                        <img src="image/<?=$row['image']?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    
                    <div style="margin-top: 80px;" class="about-text">
                    
                        <h1>ชื่อเครื่องดนตรี: <?=$row['pro_name']?></h1>
                        <h2>ประเภทของเครื่องดนตรี: <?=$row['type_name']?></h2>
                        <h4>รายละเอียด: </h4><p><?=$row['detail']?></p>
                        <a href="show.php#show" class="btn btn-primary">ย้อนกลับ</a>
                    </div>
                </div>
                <?php

mysqli_close($conn);
?>
            </div>
        </div>
    </section>
    <!-- about section Ends -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>