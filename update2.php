<html>
  <body>
    <?php
      
      $conn = new mysqli('localhost','root','');
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          } 
          mysqli_select_db($conn,"salary");

      if(isset($_POST['update'])){
        $name=$_POST['name'];
        $empid=$_POST['emp'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $design = $_POST['design'];
          
        $sql = "UPDATE employee SET name='$name', email = '$email', mobile = '$mobile', design= '$design' WHERE empid = '$empid'";
        $result = $conn->query($sql);
        if(! $result ){
          die('Could not update data: ' . mysql_error());
          }
        echo "<script>{ alert('Updated Data Successfully');}window.location.replace('dis.php');</script>";
        }



    ?>
  </body>
</lhtml>
