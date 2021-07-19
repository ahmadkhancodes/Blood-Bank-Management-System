<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- StyleSheet Link -->
    <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    </link>
     <!-- Favicon -->
     <link rel="icon" type="image/png" href="./asset/logo.png" />
    <!-- Title  -->

    <title>BBMS</title>
</head>

<body>

    <!-- Main Section -->
    <div class="container-fluid">
        <!-- Sign In  -->

        <div class="col-4 container-fluid bg-success" id="signin">
            <h3>Admin Login Here</h3>
            <form method="POST" action="checkAdmin.php" id="myform" autocomplete="off">
                <div class="mb-3">
                    <label for="name" class="col-form-label">Username</label>
                    <input type="username" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="password" class="col-form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div>
                    <button type="submit" id="button" name="submit" class="my-2">Sign In</button>
                </div>
            </form>
        </div>

    </div>

    </div>
</body>

</html>