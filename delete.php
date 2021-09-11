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
            if (!($result->num_rows>0)) {
                $message="No Employee Details with Employee ID:".$x;
                echo"<script type='text/javascript'> { alert('$message');} window.location.replace('dis.php');</script>";

            }
            else {
                $sql="DELETE  FROM employee WHERE empid='$x'";
                if ($conn->query($sql) === TRUE) {
                    $msg="Details Deleted Successfully";
                    echo"<script type='text/javascript'> { alert('$msg');} window.location.replace('dis.php');</script>";
                    }
                    else {
                             echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                    mysqli_close($conn);
                }
        ?>
    </body>
</html>