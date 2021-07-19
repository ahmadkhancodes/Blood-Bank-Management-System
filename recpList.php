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

    <title>Recipient List</title>
</head>

<body>
    <h2 class="text-center py-5" style="background-color: brown; color: whitesmoke; ">
        <i class="fas fa-hand-holding-medical"></i>
        Recipient List
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table my-5">

                    <div class="table-responsive">
                        <?php

                        include 'config.php';
                        $query = "SELECT * FROM recipients";
                        $result = mysqli_query($conn, $query) or die($query);

                        if (mysqli_num_rows($result) > 0) {

                        ?>
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Blood Group</th>
                                        <th>Donated Quantity</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Price</th>
                                        <th>Purpose</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $query1 = 'SELECT groupName from bloodgroupnames WHERE groupId=' . $row['bloodGroup'];
                                        $fetch_group = mysqli_query($conn, $query1) or die($query1);
                                    ?>
                                        <tr class="text-center">
                                            <td><?php echo "#" . $row['patientId']; ?></td>
                                            <td><?php echo $row['patientName']; ?></td>
                                            <td><?php echo $row['age']; ?></td>
                                            <td><?php if ($row1 = $fetch_group->fetch_assoc()) {
                                                    echo $row1['groupName'];
                                                }  ?></td>
                                            <td><?php echo $row['quantity']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['purpose']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        <?php
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="./dashboard.php" class="btn btn-lg" style="background-color:brown;color:white">Back to Dashboard</a>
            </div>
        </div>
    </div>

</body>

</html>