<?php 
  session_start(); 

  if (!isset($_SESSION['hspid'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: hospitallogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['hspid']);
  	header("location: hospitallogin.php");
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
                        <a href="hspindex.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="usersearch.php">
                            <i class="material-icons">details</i>
                            <span>User Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="PatientList.php">
                            <i class="material-icons">note</i>
                            <span>PatientList</span>
                        </a>
                    </li>
					
                    <li>
                        <a href="insurancecompanies">
                            <i class="material-icons">note</i>
                            <span>Insurance Companies</span>
                        </a>
                    </li>
                    

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">TreeOfLife</a>.
					<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
      
    </section>

    <section class="content">
        <div class="container-fluid">
				 
					       <div class="body table-responsive">
                            <table class="table table-bordered">
                               
                                <tbody>
								
									 <tr>
                                       
                                        <td>Date of Birth</td>
										
                                        <td><?php  echo $_SESSION['Dob']; ?></td>
                                    </tr>

                                    <tr>
                                       
                                        <td>Location</td>
                                        <td><?php  echo $_SESSION['Location']; ?></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>Family Doctor</td>
                                        <td><?php  echo $_SESSION['Family_Doctor']; ?></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Current Doctor</td>
                                        <td><?php  echo $_SESSION['Current_Doctor']; ?></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>Blood Group</td>
                                        <td><?php  echo $_SESSION['Blood_Group']; ?></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>Height</td>
                                        <td><?php  echo $_SESSION['Height']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Weight</td>
                                        <td><?php  echo $_SESSION['Weight']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Ongoing Medication</td>
                                        <td><?php  echo $_SESSION['Ongoing_Medication']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Allergies</td>
                                        <td><?php  echo $_SESSION['Allergies']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Medical Condition</td>
                                        <td><?php  echo $_SESSION['Medical_Conditions']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Blood Pressure</td>
                                        <td><?php  echo $_SESSION['BloodPressure']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Pulse</td>
                                        <td><?php  echo $_SESSION['Pulse']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Sex</td>
                                        <td><?php  echo $_SESSION['Sex']; ?></td>
                                    </tr>
				
                                </tbody>
                            </table>
                        </div>
						
						
						<h4> View <a href="usermedicalcondition.php">Medical Conditions</a></h4>
												<h4> View <a href="#">Ongoing Treatment</a></h4>
																		<h4> View <a href="#"> Insurance</a></h4>
																								<h4> View <a href="#">Past Treatment</a></h4>
                  
					
					
				
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
