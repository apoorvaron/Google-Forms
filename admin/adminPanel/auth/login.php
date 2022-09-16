<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Site Backend</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <!-- <link href="../../../assets/CSS/admin1.css" rel="stylesheet"> -->
    <style>
        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        form.user .form-control-user {
            font-size: 0.8rem;
            border-radius: 10rem;
            padding: 1.5rem 1rem;
        }
    </style>

</head>

<body class="bg-gradient-primary">

<?php 
    // echo "Before Post";
    if(isset($_POST['submit'])){
    echo "Before Post";

        // include('../faqadmin/config.php');
        require('../../blogAdmin/database.php');
        $database = new Database();
        $link = $database->connect();
        $connection = $link;
        echo "Coming to Post";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        $query = "SELECT * from users where username='$username' and password='$password'";
        $result = mysqli_query($connection,$query);
        if(mysqli_num_rows($result)==1){
    echo "Before Post";

            session_start();
            $_SESSION['auth']='true';
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
            header('location: ../index.php');
        }
        else{
            echo 'Wrong email or password';
        }
        echo "After Post";
    }
?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style=" background-image: url('../../../assets/images/main-pic.png');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="POST" class="user">
                                        <div class="form-group">
                                            <input name="username" class="form-control form-control-user"
                                                id="exampleInputEmail"
                                                placeholder="Enter Username..." value="admin">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Password" value="password">
                                        </div>
                                        <button name="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>