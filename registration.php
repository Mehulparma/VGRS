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
            <span class="fs-4">
                <h2 id="header"><b> Admin Registration</b></h2>
            </span>
        </a>

    </header>

    <div class="container">
        <form class="row g-3" action="registration.php" method="post">
            <h4>
                <p> use for only Admin</p>
            </h4>
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">User Name</label>
                <input type="text" class="form-control" id="user" name="uname" value="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Contact no</label>
                <input type="tel" max="10" class="form-control" id="mobile" name="mobile" value="" required>
            </div>

            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Village</label>
                <input type="text" class="form-control" id="village" name="village" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">E mail</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div><br>
            <!--password-->

            <div class="col-md-3">
                <label for="inputPassword6" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpInline">
            </div>

            <!---conform passwod-->

            <div class="col-md-3">
                <label for="inputPassword6" class="form-label">conform password</label>
                <input type="password" id="inputPassword6" class="form-control" name="cpassword" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
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

        if(isset($_POST['submit'])){
            $uname = $_POST['uname'];
            $mobile = $_POST['mobile'];
            $village = $_POST['village'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];


            $query = "INSERT INTO registration( unmae, mobile, village, email, password, cpassword) VALUES ('$uname','$mobile','$village','$email','$password','$cpassword')";
            $data = mysqli_query($con,$query);
            if($data){
                ?>
                <script>
                    alert("Data inserted");
                </script>
                <?php
            }else
            {
                ?>
                <script>
                    alert("Data is not inserted");
                </script>
                <?php
            }
            }
        
        
        ?>
    </body>
</html>

</body>

</html>