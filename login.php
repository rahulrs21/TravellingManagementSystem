<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $dbname = "tour";
   
   $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if(isset($_POST['username'])){
       $uname = $_POST['username'];
       $password = $_POST['password'];

       $sql = "SELECT * FROM loginform WHERE user='".$uname."' AND Pass='".$password."'";

       $result = mysqli_query($con, $sql);

       if(mysqli_num_rows($result) == 1){
           echo "You have successfully Logged In";

           header("Location: index.php?getUsername=$uname");
           exit();
       }
       else{
        echo "You have entered incorrect password";
        exit();
       }
   }
?>


<!DOCTYPE html>
<html>
   <head>
    <title>Let's Go</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <!--   Navbar -->
    <div class="container-fluid  bg-primary text-white">
        <div class="page-header">
            <center>
                <h1>Tourism Management System</h1>
            </center>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>

            <!--   Login form division -->
            <div class="col-md-4 login-div">

                <form action="#" method="post">
                    <div class="form-head">
                        <center>
                            <i class="fas fa-user fa-2x"></i><br />
                            <h1>Login</h1>
                        </center>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div id="err" class="text-danger"></div>
                    
                    <p>New User? <a type="register" class="to_register" href="register.php"> Register Here</a></p>
                    
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>






    <!--Script tags-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>