<html>
<body>
<?php
    
         session_start();
        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        mysqli_select_db($conn,"salary");
 
        $x=$_POST['mgrid'];
        $sql = "SELECT * FROM signup WHERE mgrid='$x'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $message="Manager already Registered";
            echo"<script type='text/javascript'> { alert('$message');} window.location.replace('signup.php');</script>";
        }
    
         else {
                $sql="INSERT INTO signup (name,mgrid,email,phone,Pass) VALUES ('$_POST[name]','$_POST[mgrid]','$_POST[email]','$_POST[phone]','$_POST[pass]')";
     
                        if ($conn->query($sql) === TRUE) {
                            header("Location:home.php"); /* Redirect browser */
	                   }
                        else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                mysqli_close($conn);
            }
?>
</body>
</html>