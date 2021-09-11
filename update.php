<html>
	<head>
		<title>Update</title>
		
		<style>

			th, td {
		  		text-align: left;
		  		padding: 8px;
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
	<body bgcolor="gray" >
		<center> <p class="topnav">Update Employee Data</p>

	    <?php
	        $conn = new mysqli('localhost','root','');
	        if ($conn->connect_error) {
	            die("Connection failed: " . $conn->connect_error);
	        	} 

	        mysqli_select_db($conn,"salary");
	        $x=$_POST['empid2']; 
	        $sql = "SELECT * FROM employee where empid='$x'";
	        $result = $conn->query($sql);
	        if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
	                $name=$row['name'];
	                $empid=$row['empid'];
	                $email = $row['email'];
	                $mobile = $row['mobile'];
	                $design = $row['design'];
	                $date1 = $row['date1'];
	                $gen = $row['gen'];
	      
	    			?>
	       
					<form action="update2.php" method="post">
						<center> <table>
						<tr>
							<td width="100">Employee ID</td>
							<td style="color:white"><?=$empid?></td>
							<td><input name="emp" type="hidden" value="<?=$empid?>" required></td>
						</tr>
						<tr>
							<td width="100">Name</td>
							<td><input name="name" type="text" value="<?=$name?>" required></td>
						</tr>
						<tr>
							<td width="100">Email</td>
							<td><input name="email" type="text" value="<?=$email?>" required></td>
						</tr>
						<tr>
							<td width="100">Mobile</td>
							<td><input name="mobile" type="text" value="<?=$mobile?>" required></td>
						</tr>
						<tr>
							<td width="100">Designation</td>
							<td>
								<select name="design" style="width:160px;height:25px;" id="design" required >
					  				<option value="Daily Labour">Daily Labour</option>
					  				<option value="Supervisor">Supervisor</option>
									<option value="Accountant">Accountant</option>
									<option value="Asst. Manager">Assistant Manager</option>
								</select><br><br>
							</td>
							<script>document.getElementById("design").value='<?=$design?>'</script>
						</tr>

				<?php } ?>
				<tr>
					<td width="100"> </td>
				</tr>
				<tr>
					<td width="100"> </td>
					<td>
					<input name="update" type="submit" id="update" value="Update">
					</td>
				</tr>
				</form>
				</table></center>

			<?php }
				else
				{
					echo "<script>{ alert('Invalid Employee ID');}window.location.replace('dis.php');</script>";

					}

		?>

	</body>
</html>