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
    <title>Dashboard</title>

</head>

<body>

    <h2 class="text-center py-5 mb-5" style="background-color: brown; color: whitesmoke; ">Blood Bank Management System
    </h2>


    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <a href="./stock.php" class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fas fa-cubes"></i>
                        <h3 class="card-text">Stock</h3>
                    </div>
                </div>
            </a>
            <a href="./addBlood.php" class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fas fa-plus"></i>
                        <h3 class="card-text">New Blood</h3>
                    </div>
                </div>
            </a>
            <a href="./donorsList.php" class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fas fa-hand-holding-medical"></i>
                        <h3 class="card-text">Donors List</h3>
                    </div>
                </div>
            </a>
            <a href="./recpList.php" class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fas fa-hands-helping"></i>
                        <h3 class="card-text">Recepients List</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
            <a href="./saleBlood.php" class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <i class="fas fa-coins"></i>
                        <h3 class="card-text">Sale Blood</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>




</body>

</html>