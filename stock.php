<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/24b1e6deb5.js" crossorigin="anonymous"></script>
    <!-- StyleSheet Link -->
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    </link>
     <!-- Favicon -->
     <link rel="icon" type="image/png" href="./asset/logo.png" />
    <!-- Title  -->

    <title>Stock</title>
</head>

<body>
    <h2 class="text-center py-5 mb-5" style="background-color: brown; color: whitesmoke; ">
        <i class="fas fa-cubes"></i>
        Stock
    </h2>
    <div class="container">
        <div class="row m-4">
            <div class="col-3 ">
                <a href="./dashboard.php" class="btn btn-lg" style="background-color:brown;color:white">Back to Dashboard</a>
            </div>
        </div>
        <div class="row">
            <?php
            include 'config.php';
            $query = 'SELECT quantity,groupName from bloodgroupnames';
            $result = mysqli_query($conn, $query) or die($query);
            ?>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-3 stock-card m-5 d-inline-block">
                    <div class="card-body">
                        <i class="fas fa-tint"></i>
                        <h3 class="card-text">
                            <?php
                            echo $row['groupName'];
                            ?>
                        </h3>
                    </div>
                    <div class="container text-center row">
                        <?php
                        if ($row['quantity'] > 0) {
                        ?>
                            <span class="col-6"><?php echo $row['quantity']; ?>ml</span>
                            <span class="col-6">In Stock</span>
                        <?php
                        } else {
                        ?>
                            <span class="col-12">Out of Stock</span>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- <div class="col-3 stock-card m-5 d-inline-block" style="width: 18rem;">
            <div class="card-body">
                <a href="./dashboard.php" class="btn btn-lg" style="color:white">Back to Dashboard</a>
            </div>
        </div> -->

</body>

</html>