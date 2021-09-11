<html>
<body>
<?php
    
        
        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        mysqli_select_db($conn,"salary");
        $x=$_POST['empid'];
        $sql = "SELECT * FROM employee WHERE empid='$x'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            $message="Employee already Registered";
            echo"<script > { alert('$message');} window.location.replace('addemp.php');</script>";

        }
    
        else {
                $sql="INSERT INTO employee (name,empid,mobile,email,design,date1,gen) VALUES ('$_POST[name]','$_POST[empid]','$_POST[mobile]','$_POST[email]','$_POST[dsgn]','$_POST[date]','$_POST[gender]')";
     
                if ($conn->query($sql) === TRUE) {
                        $msg="Details Uploaded Successfully";
                        echo"<script type='text/javascript'> { alert('$msg');} window.location.replace('main.php');</script>";
	               }
                else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                mysqli_close($conn);

            }
?>
</body>
</html>