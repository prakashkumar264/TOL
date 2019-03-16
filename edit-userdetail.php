

<?php 
  session_start(); 

  if (!isset($_SESSION['xyz'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: sign-in.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['xyz']);
  	header("location: sign-in.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome USer</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves ECss -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animati -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">TreeOfLife</a>
            </div>
            
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                   
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="userdetail.php">
                            <i class="material-icons">details</i>
                            <span>Details</span>
                        </a>
                    </li>
                      <li>
                        <a href="uniqueid.php">
                            <i class="material-icons">note</i>
                            <span>Generate Unique Id</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">note</i>
                            <span>Reports</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="medicalcondition.php">
                            <i class="material-icons">M</i>
                            <span>Medical Condition</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">note</i>
                            <span>Ongoing Treatment</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">history</i>
                            <span>Past Treatments</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">healing</i>
                            <span>Medicines</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle1">
                                    <span>Current</span>
                                </a>
                              
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle2">
                                    <span>Past</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#">Infobox-1</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="material-icons">I</i>
                            <span>Insurance</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="material-icons">B</i>
                            <span>Bill</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">TreeOfLife</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
      
    </section>

    <section class="content">
        <div class="container-fluid">
            
			  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Your Basic Details 
                            </h2>
							<br />
							
							
                        </div>
				
                         
                              
							
                    
                        <div class="body ">
                            <form id="form_validation" method="POST">
							<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="dob" required>
                                        <label class="form-label">Date of Birth</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="location" required>
                                        <label class="form-label">Location</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="familydoctor" required>
                                        <label class="form-label">Family Doctor</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="currentdoctor" required>
                                        <label class="form-label">Current Doctor</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bloodgroup" required>
                                        <label class="form-label">Blood Group</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="height" required>
                                        <label class="form-label">Height</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="weight" required>
                                        <label class="form-label">Weight</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="ongoingmedication" required>
                                        <label class="form-label">Ongoing Medication</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="allergies" required>
                                        <label class="form-label">Allergies</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="medicalcondition" required>
                                        <label class="form-label">Medical Condition</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="bloodpressure" required>
                                        <label class="form-label">Blood Pressure</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="pulse" required>
                                        <label class="form-label">Pulse</label>
                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="gender" required>
                                        <label class="form-label">Gender</label>
                                    </div>
                                </div>
                               <!--  <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div> -->
                               
                                
                                <button class="btn btn-primary waves-effect" type="submit" name="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->
			
			<?php  if (isset($_SESSION['xyz'])) : ?>
							<?php
			$db = mysqli_connect('localhost', 'root', '', 'treeoflife');
		
			if (isset($_POST['submit'])) {
			$Userid = $_SESSION['xyz'];
			$Dob = $_POST['dob'];
			$Location = $_POST['location'];
			$Family_Doctor = $_POST['familydoctor'];
			$Current_Doctor = $_POST['currentdoctor'];
			$Blood_Group = $_POST['bloodgroup'];
			$Height = $_POST['height'];
			$Weight = $_POST['weight'];
			$Sex = $_POST['gender'];
			$Ongoing_Medication = $_POST['ongoingmedication'];
			$Allergies = $_POST['allergies'];
			$Medical_Conditions = $_POST['medicalcondition'];
			$BloodPressure = $_POST['bloodpressure'];
			$Pulse = $_POST['pulse'];


			
				

				$query = "UPDATE userdetail
						 SET Dob = '$Dob' , Location = '$Location' , Family_Doctor = '$Family_Doctor', Current_Doctor = '$Current_Doctor', Blood_Group = '$Blood_Group', Height = '$Height', 
						 Weight = '$Weight',Sex = '$Sex', Ongoing_Medication = '$Ongoing_Medication',Allergies = '$Allergies' ,Medical_Conditions = '$Medical_Conditions', BloodPressure = '$BloodPressure', Pulse = '$Pulse' 
						 where Userid='$Userid'";
				mysqli_query($db, $query);

			   echo("<script>location.href = 'userdetail.php';</script>");
				
			  }
			
			?>
			<?php endif ?>
			
			
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstra Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select PJs -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscrogin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Eflugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom J-->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
