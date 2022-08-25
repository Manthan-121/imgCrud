<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>imgCrud</title>
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="d-flex justify-content-center">Update</h1>
            <?php
            $id= $_GET['id'];
            include("config.php");
            $select_query = "SELECT * FROM imagecrud WHERE i_id=$id";
            $result = mysqli_query($conn, $select_query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <form method="post" action="_insert.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="your name" value="<?php echo $row["i_name"] ?>" name="txtIname">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" type="file" id="formFile" name="fuIimg">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" name="btnInsert" type="submit">Insert</button>
                </div>
                <div class="mb-3">
                    <img src="<?php echo $row["i_pathx"] ?>" height="150px" width="150px">
                </div>
            </form>
            <?php
                }
            } else {
                echo "No data Found";
            }
                ?>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    </body>
</html>