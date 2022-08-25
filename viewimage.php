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
        <h1 class="d-flex justify-content-center">Views</h1>
        <table class="table table-bordered border-primary mt-4">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            include("config.php");
            $select_query = "SELECT * FROM imagecrud";
            $result = mysqli_query($conn, $select_query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tbody class="text-center">
                        <tr>
                            <th scope="row" class="mt-4"><?php echo $row["i_id"] ?></th>
                            <td><img src="<?php echo $row["i_path"] ?>" alt="<?php echo $row["i_name"] ?>" height="100px" width="100px"></td>
                            <td class="mt-4"><?php echo $row["i_name"] ?></td>
                            <td><a href="updateimage.php?id=<?php echo $row["i_id"] ?>" class="btn btn-success me-1 mt-4">&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>
                                <a href="deleteimage.php?id=<?php echo $row["i_id"] ?>" class="btn btn-danger mt-4">Delete</a>
                            </td>
                        </tr>
                <?php
                }
            } else {
                echo "No data Found";
            }
                ?>
                    </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>