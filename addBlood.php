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

    <title>Add Blood</title>
</head>

<body>
    <h2 class="text-center py-5" style="background-color: brown; color: whitesmoke; ">
        <!-- <i class="fas fa-plus"></i> -->
        Add Blood
    </h2>

    <div class="container  my-3">

        <div class="row">
            <div class="col-3">
                <a href="./dashboard.php" class="btn btn-lg" style="background-color:brown;color:white">Back to Dashboard</a>
            </div>
        </div>
        <!-- Sign Up  -->

        <div class="row my-5">
            <div class="container col-12" id="add-blood-form">
                <form method="POST" action="saveBlood.php" class="row g-3 my-1" onsubmit="true" enctype="multipart/form-data">

                    <div class="col-4">
                        <label for="bname" class="form-label">Full Name</label>
                        <input type="text" class="" name="bname" id="bname" aria-label="Full name">
                    </div>

                    <!-- <div class="col-4">
                        <label for="ilname" class="form-label">Last Name</label>
                        <input type="text" class="" name="lname" id="ilname" aria-label="Last name">
                    </div> -->
                    <div class="col-4">

                        <label for="bgroup">Blood Group</label><br>
                        <select name="bgroup" id="bgroup" class="extramargin mt-2">
                            <option value="select" class="category" selected disabled>Select Group</option>
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM bloodgroupnames";
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
                        <label for="bemail" class="form-label">Email</label>
                        <input type="email" class="" name="bemail" id="bemail">
                    </div>

                    <div class="col-4">
                        <label for="bphone" class="form-label">Phone</label>
                        <input type="phone" class="" name="bphone" id="bphone">
                    </div>
                    <div class="col-4">
                        <label for="bcity" class="form-label">City</label>
                        <input type="text" class="" id="bcity" name="bcity">
                    </div>
                    <div class="col-4">
                        <label for="bage" class="form-label">Age</label>
                        <input type="text" class="" id="bage" name="bage">
                    </div>
                    <div class="col-4">
                        <label for="bquantity" class="form-label">Donated Quantity (ml)</label>
                        <input type="number" class="" name="bquantity" id="bquantity">
                    </div>
                    <div class="col-4 text-center">
                        <input id="add-blood" class="button-margin" type="submit" value="Add Blood" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>