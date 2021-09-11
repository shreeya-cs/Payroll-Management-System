<html>
	<head>
	<title>Salaries</title>
	<style>
		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
		tr:nth-child(odd) {background-color: #BDBDBD;}
		table {
 		  border-collapse: collapse;
 
		 }

		.topnav {
  
		  background-color: #333;
		  color: #f2f2f2;
		  text-align: center;
					font-family: cursive;
					  font-size: 40px;
		 }
	</style>
	</head>

	<body>
		<p class="topnav">Salaries</p>

	    <?php

	        $conn = new mysqli('localhost','root','');
	        if ($conn->connect_error) {
	            die("Connection failed: " . $conn->connect_error);
	         } 

	        mysqli_select_db($conn,"salary");
	 		$mon=$_GET['val'];
		    $sql = "SELECT * FROM calcul WHERE month='$mon'";
			$result = $conn->query($sql);
	        echo "<center><h3>Month :".$mon."</h3></center>";
			if ($result->num_rows > 0) {

	    ?>
		<center> <table >
	    	<tr>
	    		<th>Sl No</th>
			    <th>Employee ID</th>
			    <th>Designation</th>
			    <th>Salary</th>
			    <th>Deduction</th>
			    <th>Final Salary</th>
			    <th>Number of Leave</th>
	      	</tr>

	        <?php
	        	$count=1;
	        	while($row = $result->fetch_assoc()) {
			        print "<tr> <td>";
			        echo $count++; 
			        print "</td> <td>";    
			        echo $row["empid"]; 
			        print "</td> <td>";
			        echo $row["design"]; 
			        print "</td> <td>";
			        echo $row["bsal"]; 
			        print "</td> <td>";
			        echo $row["deduct"]; 
			        print "</td> <td>";
			        echo $row["tsal"]; 
			        print "</td> <td>";
			        echo $row["leav"]; 
			        print "</td> </tr>";
	   			 }
			  }
	 			else
	              echo '<center><h3>No Salary Details Found</h3></center>';
	       ?>

		</table></center>

	</body>
</html>