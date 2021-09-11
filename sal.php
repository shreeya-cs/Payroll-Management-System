<html>
  <head>
    <style>
      th, td {
        text-align: left;
        padding: 8px;
        }


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

      .hme  {
        background-color: #D0D3D4;
        float: left;
        color: #f2f2f2;
        margin-top: -40px;
        padding: 5px 10px;
        text-decoration: none;
        font-size: 15px;
        color:black;
        }

      .hme:hover {
        background-color: black;
        color: white;
       }
      
      .fnt{
        font-size: 200px;
       }

    </style>
  </head>

  <body bgcolor="#45B39D">
    <p class="topnav">Salary Details</p>
    <a class="hme" href="main.php">Home</a>
  
    <?php
        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
         }  
        mysqli_select_db($conn,"salary");
        $mon=$_POST['sel'];
        $leav=$_POST['leave'];
        $x=$_POST['empid2'];
        $sql = "SELECT * FROM employee WHERE empid='$x'";
        $result = $conn->query($sql);
        if ($result->num_rows <= 0) {       
          $message="No Employee Found with Employee ID: ".$x;
          echo"<script > { alert('$message');} window.location.replace('main.php');</script>";
         }
        $sql2 = "SELECT * FROM calcul WHERE empid='$x' AND month='$mon' ";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {       
          $message="Salary Already Calculated for ".$mon." With Employee ID: ".$x;
          echo"<script > { alert('$message');} window.location.replace('main.php');</script>";
         }
        else{
          while($row = $result->fetch_assoc()){
            $em=$row['empid'];
            $d=$row['design'];
           }
          $sal=0;
          $deduct=0;
          $msal;
          if($d=="Supervisor"){
            $msal=19000;
            if($leav>1){
            $deduct=($msal/30)*($leav-1);
          }
            $sal=($msal)-($deduct);
           }

          if($d=="Daily Labour"){
            $msal=15000;
            if($leav>1){
            $deduct=($msal/30)*($leav-1);
          }
            $sal=($msal)-($deduct);
           }

          if($d=="Accountant"){
            $msal=23000;
            if($leav>1){
            $deduct=($msal/30)*($leav-1);}
            $sal=($msal)-($deduct);
           }

          if($d=="Asst. Manager"){
            $msal=30000;
            if($leav>1){
            $deduct=($msal/30)*($leav-1);}
            $sal=($msal)-($deduct);
           }
          
          $sal=round($sal,2);
          $deduct=round($deduct,2);
          $sql="INSERT INTO calcul (empid,design,month,bsal,deduct,tsal,leav) VALUES ('$x','$d','$mon','$msal','$deduct','$sal','$leav')";
          if ($conn->query($sql) === TRUE) {
      
            print "<center><table><tr> <td>Employee ID</td><td>";    
            echo $x; 
            print "</td></tr>";
            print "<tr> <td>Designation</td><td>";    
            echo $d; 
            print "</td></tr>";    
            print "<tr> <td>Month</td><td>";    
            echo $mon; 
            print "</td></tr>";
            print "<tr> <td>Salary</td><td>";    
            echo $msal; 
            print "</td></tr>";
            print "<tr> <td>Dedecuted </td><td>";    
            echo $deduct; 
            print "</td></tr>";
            print "<tr> <td>Final Salary</td><td>";    
            echo $sal; 
            print "</td></tr>";
            print "<tr> <td>Number of Leave</td><td>";    
            echo $leav; 
            print "</td></tr></table></center>";

           }
          else {
            echo "Error: " . $sql . "<br>" . $conn->error;
           }
          mysqli_close($conn);

         }




    ?>
  </body>
</html>