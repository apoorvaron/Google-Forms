<?php 
    session_start();
    if(!$_SESSION['auth']){
        header('location: auth/login.php');
    }
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        header('location: auth/login.php');
    }
?>

<?php	 include('includes/header.php');
		 include('includes/navbar.php');		
         ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                        </li>
                        <li class="d-flex justify-content-center align-items-center">
                            <a href="logout.php" class="btn btn-sm btn-primary shadow-sm d-flex align-items-center justify-content-center" style="max-height: 20px;">
                            <i class="fas fa-download fa-sm text-white-50" style="margin-right: 5px;"></i> Logout</a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="transform: translateX(100px);" class="h3 mb-0 text-gray-800">Apoorv's Dashboard</h1>
                    </div>
                </div>
                <div class="row">
                <?php
                    $table='f';

                    if (isset($_GET['table'])){
                        $table = $_GET['table'];
                    }
                    switch ($table) {                    
                        case 'AddForm':
                            include('./faqadmin/forms.php');
                            break;
                        case 'Forms':
                            include('./faqadmin/formstable.php');
                            break;
                        case 'ResponsesForm':
                            include('../blogAdmin/responses.php');
                            break;
                        case 'formCreation':
                            include('./faqadmin/form-created.php');
                            break;
                        default:
                            include('./faqadmin/formstable.php');
                            break;
                        
                    }
                ?>
                </div>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->
<?php
	include('includes/footer.php');
	?>
