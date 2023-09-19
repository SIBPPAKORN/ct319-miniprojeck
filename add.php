<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูล</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    
   

   

</head>
<body>
    <?php include 'navber.php'; ?>
    <div class="container mt-5">
    <style>
    body {
        background-image: url('image/m3.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form name="form1" method="post" action="insert.php" enctype="multipart/form-data">
                <h1 class="text-center my-custom-heading ">เพิ่มเครื่องดนตรี</h1>

                    <div class="mb-3">
                        <label for="pname" class="form-label">ชื่อเครื่องดนตรี:</label>
                        <input type="text" name="pname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="typeID" class="form-label">หมวดหมู่:</label>
                        <select class="form-select" name="typeID">
                            <?php
                            $sql = "SELECT * FROM type ORDER BY type_name";
                            $hand = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($hand)) {
                            ?>
                                <option value="<?= $row['type_id'] ?>"><?= $row['type_name'] ?></option>
                            <?php
                            }
                            mysqli_close($conn);
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">รายละเอียด:</label>
                        <input type="text" name="detail" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="file1" class="form-label">รูปภาพ:</label>
                        <input type="file" name="file1" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">ตกลง</button>
                        <a href="show.php#show" class="btn btn-primary">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
