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
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">
    <img src="image/77.png" alt="Your Image Alt Text" width="50" height="40" class="d-inline-block align-text-top">
    <span class="text-warning">เครื่อง</span>ดนตรีไทย
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form method="POST" action="show.php#show">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
    <a class="nav-link nav-link-custom" href="add.php">เพิ่มข้อมูล</a>
                </li>

            <li class="nav-item">
                <a class="nav-link nav-link-custom"href="show.php">หน้าหลัก</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="#services"></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="#portfolio"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#team"></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="#contact"></a>
            </li>
            <form method="POST" action="show.php#show">
            <input type="search"name="keyword" class="form-control form-control-dark" placeholder="ค้นหา..." aria-label="Search"><button type="submit" class="btn btn-warning">ค้นหา</button>
            </ul>   
        </div>
        </form>
        </div>
    </nav>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>