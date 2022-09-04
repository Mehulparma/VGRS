<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title> DO COMPLAIN </title>
</head>

<body class="body">
    <header class="d-flex flex-wrap justify-content\-center py-3 mb-4 border-bottom">
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
            <a class="nav-link active text-dark" href="docomplaint.html">Complaint </a>
            <a class="nav-link active text-dark" href="adminlogin.html"> Admin Login </a>

        </ul>
    </header>

    

    <center>
        <h2><b>Complaint Here</b></h2>
    <form action="" method="post">
        <div>
            <h4><i>define your problem</i></h4>
           <input type="text" name="problem" maxlength="30" id="problemtype">
        </div>
        <br>
        <div class="col-md-3">
            <label for="inputEmail3" class="form-label">Village Name</label>
            <input type="text" name="village" class="form-control" maxlength="20" id="inputEmail3">

        </div><br>
        <div class=" col-md-3">
            <label for="inputPassword3" class="form-label">Address</Address></label>
            <input type="text" name="address" class="form-control" maxlength="40" id="inputPassword3">

        </div><br>
        <div class="col-md-3">
            <label for="formFile" class="form-label">*problem photo file formate putting here</label>
            <input class="form-control"  name="picture"  type="file" id="formFile">
        </div><br>
        <div class=" col-md-3">
            <label for="inputPassword3" class="form-label">extra expalin </label>
            <input type="text" name="explain" class="form-control" id="inputPassword3" maxlength="200">

        </div><br>
        complainer userID
        <div class="col-md-3">
            <label for=" inputZip" class="form-label"></label>
            <input type="text" name="cid" class="form-control" maxlength="15" id="inputZip">
        </div>
        <br>

        <div class="col-md-3">
            <label for="inputPassword6" class="form-label">Password</label>
            <input type="password"  name="password" id="inputPassword6" class="form-control" maxlength="8" aria-describedby="passwordHelpInline">
        </div><br>

        <button type="submit" class="btn btn-success" name="submit">submit</button>
    </form></center>
    


    <!----footer---->
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
            $problem = $_POST['problem'];
            $village = $_POST['village'];
            $address= $_POST['address'];
            $picture = $_POST['picture'];
            $explain = $_POST['explain'];
            $cid = $_POST['cid'];
            $password = $_POST['password'];


            $query = "INSERT INTO complaint(problem, village, address, picture, explain, cid, password) VALUES ('$problem','$village','$address','$picture','$explain','$cid','$password')";
            $data = mysqli_query($con,$query);
            if($data){
                ?>
                <script>
                    alert("Data inserted successfully...");
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