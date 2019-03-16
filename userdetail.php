

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
<?php 
$db = mysqli_connect('localhost', 'root', '', 'treeoflife');
$userid = $_SESSION['xyz'];
$query = "SELECT  * FROM userdetail WHERE Userid = '$userid' ";

$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
  session_start();
  
	while($row = mysqli_fetch_array($results)){
		$_SESSION['UniqueId'] = $row["UniqueId"];
		$_SESSION['Dob'] = $row["Dob"];
		$_SESSION['Location'] = $row["Location"];
		$_SESSION['Family_Doctor'] = $row["Family_Doctor"];
		$_SESSION['Current_Doctor'] = $row["Current_Doctor"];
		$_SESSION['Blood_Group'] = $row["Blood_Group"];
		$_SESSION['Height'] = $row["Height"];
		$_SESSION['Weight'] = $row["Weight"];
		$_SESSION['Sex'] = $row["Sex"];
		$_SESSION['Ongoing_Medication'] = $row["Ongoing_Medication"];
		$_SESSION['Allergies'] = $row["Allergies"];
		$_SESSION['Medical_Conditions'] = $row["Medical_Conditions"];
		$_SESSION['BloodPressure'] = $row["BloodPressure"];
		$_SESSION['Pulse'] = $row["Pulse"];
	}
	
	


 
}else {
	
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
							 <a href="edit-userdetail.php" > Edit</a> 
							
                        </div>
				
                         
                              
							
                    
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                               
                                <tbody>
								
									 <tr>
                                       
                                        <td>Date of Birth</td>
                                        <td><?php  echo $_SESSION['Dob']; ?></td>
                                    </tr>
									 <tr>
                                       
                                        <td>Unique Id</td>
                                        <td><?php  echo $_SESSION['UniqueId']; ?></td>
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
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->
			
			
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
