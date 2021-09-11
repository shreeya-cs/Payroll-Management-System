<html>
      <title>Login</title>   
<head>
<style>
.padd{
      padding-left: 70%;
      padding-top: 10%;
  }


.bg { 
  background-image: url("img/1.jpg");
  height: 100%
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>


<script>

function check(){
   if(document.getElementById("psd").value == "psd") {
          return true;
   }
   else {    
        alert("wrong keyword entry");
        return false;
   }
 }

</script>

</head>


  <body class="bg" >
      <br><br><br>
      <font color="#1C2833" size="20%"><center>Payroll Management System</center></font>
      <form name="myForm" action="log.php" onsubmit="return check()" method="POST"  >
        <div class="padd">
                 <input type="text" name ="id" placeholder="MANAGER ID" style="height:30; width:130; border-radius: 2; font-family:LCALLIG; font-size:100%" background-color:#33F451; required><br><br>
                  <input type="password" name="psd" placeholder="PASSWORD" style="height:30; width:130; font-family:LCALLIG; font-size:100%" background-color:#33F451; required><br><br>
                  <input type="submit" value="LOG IN" style="height:30; width:60;  font-family:impact; font-size:100%; color:white; background-color:#33FFD7;"> 
                  <br><br><font color="#000000">Not a Member?<a href="signup.php" style="text-decoration: none;color: #5B2C6F;">  Sign Up</a></font>
        </div>
       </form>
  </body>
  
  <?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS salary";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			
		CREATE TABLE `calcul` ( `empid` varchar(20) NOT NULL,
  `design` varchar(20) NOT NULL,
  `month` varchar(15) NOT NULL,
  `bsal` double NOT NULL,
  `deduct` double NOT NULL,
  `tsal` double NOT NULL,
  `leav` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$sql = "CREATE TABLE IF NOT EXISTS calcul ( 
		empid varchar(20) NOT NULL,
		design varchar(20) NOT NULL,
		month varchar(15) NOT NULL,
		bsal double NOT NULL,
		deduct double NOT NULL,
		tsal double NOT NULL,
		leav int(10) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
		echo "Table created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
		
		$conn->close();
		}
		?>
  
</html>