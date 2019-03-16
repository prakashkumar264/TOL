<?php
$db = mysqli_connect('localhost', 'root', '', 'treeoflife');

		if (isset($_POST['submit'])) {
			
		$usrid = mysqli_real_escape_string($db, $_POST['usrcode']);
		
		
		$query = "SELECT  * FROM userdetail WHERE UniqueId = '$usrid' ";

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
			
			
		
header('location: userresult.php');
		 
		}else {
			
		}
		}

?>