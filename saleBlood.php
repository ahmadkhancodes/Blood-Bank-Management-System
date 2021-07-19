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

    <title>Sale Blood</title>
</head>

<body>
    <h2 class="text-center py-5" style="background-color: brown; color: whitesmoke; ">
        <!-- <i class="fas fa-plus"></i> -->
        Sale Blood
    </h2>
    <div class="container my-3">


        <div class="row">
            <div class="col-3">
                <a href="./dashboard.php" class="btn btn-lg" style="background-color:brown;color:white">Back to Dashboard</a>
            </div>
        </div>

        <div class="row my-5">
            <div class="container" id="add-blood-form">
                <form method="POST" action="saveSaleBlood.php" class="row g-3 my-1" onsubmit="true" enctype="multipart/form-data">

                    <div class="col-4">
                        <label for="pname" class="form-label">Patient Name</label>
                        <input type="text" class="" name="pname" id="pname" aria-label="Full name">
                    </div>

                    <div class="col-4">

                        <label for="pgroup">Blood Group</label><br>
                        <select name="pgroup" id="pgroup" class="extramargin mt-2">
                            <option value="select" class="category" selected disabled>Select Group</option>
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM bloodgroupnames WHERE quantity>0";
                            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful !");

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['groupId']; ?>" class="category"><?php echo $row['groupName']; ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <!-- <label for="iinputBloodGroup" class="form-label">Blood Group</label>
                        <select name="inputBloodGroup" id="iinputBloodGroup" class="extramargin">
                            <option selected>Choose...</option>
                            <option>A+</option>
                            <option>B+</option>
                            <option>AB+</option>
                            <option>O+</option>
                            <option>A-</option>
                            <option>B-</option>
                            <option>AB-</option>
                            <option>O-</option>
                        </select> -->
                    </div>

                    <div class="col-4">
                        <label for="page" class="form-label">Age</label>
                        <input type="number" class="" name="page" id="page">
                    </div>
                    <div class="col-4">
                        <label for="pemail" class="form-label">Email</label>
                        <input type="email" class="" name="pemail" id="pemail">
                    </div>

                    <div class="col-4">
                        <label for="pphone" class="form-label">Phone</label>
                        <input type="phone" class="" name="pphone" id="pphone">
                    </div>
                    <div class="col-4">
                        <label for="pcity" class="form-label">City</label>
                        <input type="text" class="" id="pcity" name="pcity">
                    </div>
                    <div class="col-4">
                        <label for="page" class="form-label">Purpose</label>
                        <input type="text" class="" id="ppurpose" name="ppurpose">
                    </div>
                    <div class="col-4">
                        <label for="pquantity" class="form-label">Quantity (ml)</label>
                        <input type="number" class="" name="pquantity" id="pquantity">
                    </div>
                    <div class="col-4">
                        <label for="pprice" class="form-label">Price (Rs.)</label>
                        <input type="number" class="" name="pprice" id="pprice">
                    </div>
                    <div class="col-4 text-center">
                        <input id="add-blood" class="button-margin" type="submit" value="Sale Blood" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>