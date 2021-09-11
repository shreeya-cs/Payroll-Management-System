<html>
	<body>
		<?php
			$conn = new mysqli('localhost','root','');
	 		if ($conn->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
	    	 } 
			mysqli_select_db($conn,"salary");
	 		$sql="SELECT * FROM signup  WHERE mgrid='$_POST[id]' AND pass='$_POST[psd]'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				header("Location:main.php");
			 }
	 		else {
	    		$message="MANAGER ID or PASSWORD was incorrect";
				echo"<script type='text/javascript'> { alert('$message');} window.location.replace('home.php');</script>";
			 }

			mysqli_close($conn);
		?>
	</body>
</html>