<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Admin</title>
</head>

<body class="body">
    <!--- header start here-->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span id="header" class="fs-4 text-center">
                <h1><strong>V</strong>illage <strong>G</strong>rievance & <strong>R</strong>edressal
                    <strong>S</strong>ystem
                </h1>
            </span>
        </a>

        <ul class="nav">
            <a class="nav-link active text-dark" href="index.html" aria-current="page">Home</a>
            <a class="nav-link text-dark" href="about.html">Abuot Us</a>
            <a class="nav-link text-dark" href="status.html">Status</a>
            <a class="nav-link text-dark" href="contact.html">Contact Us</a>
            <a class="nav-link active text-dark" href="docomplaint.html">Complaint</a>
            <a class="nav-link active text-dark" href="adminlogin.html"> Admin Login </a>

        </ul>
    </header>

    <center>
        <div class="container">
            <h2><b>Admin Login</b></h2>
            <form class=" " method="POST" action="adminlogin.php">
                <h4>
                    use for only Admin
                </h4>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="validationDefault01"  name="uname" value="" required>
                </div>

                <!--password-->

                <div class="col-md-3">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <input type="password" id="inputPassword6" class="form-control" maxlength="8" name="password"
                        aria-describedby="passwordHelpInline" required>
                </div><br>
                <div class="col-10">
                    <button class="btn btn-success" type="submit" name="login"><a href="registration.php" class="text-light">Login</button>


                    <button class="btn btn-success" type="submit"><a href="registration.php"
                            class="text-light">Registration</a></button>
                </div>

            </form>
        </div>
    </center>
    <!--- header ends here-->

    <!--- footer-->
    <footer class="py-3 my-4 bg-dark">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Contact us</a></li>
        </ul>
    </footer>

    <script src="/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    
    <?php
        include "connection.php";

        if(isset($_POST['login'])){
            $uname = $_POST['uname'];
            $password = $_POST['password'];
           
            $query = "INSERT INTO login( `uname`, `password`) VALUES ('$uname','$password')";
            $data = mysqli_query($con,$query);
            if ($data->num_rows > 0) {

                echo '<script>
                
                window.location="index.php";
                
                </script>';
                
                } else {
                
                echo '<script>
                
                alert(“Wrong user name or password”);
                
                </script>';
                
                }
            
            }
        
        
        ?>

</body>

</html>