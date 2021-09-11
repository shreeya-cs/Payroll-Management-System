<html>
  <head>
  <title>Details</title>
  
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

    .upd{
      overflow: visible;
      background-color: #D0D3D4;
      float: right;
      color: black;
      margin-top: -40px;
      padding: 5px 10px;
      text-decoration: none;
      font-size: 15px;
      }

    .upd a:hover {
      background-color: black;
      color: white;
      }

    .form-popup {
      display: none;
      position: fixed;
      bottom: 25%;
      right: 15px;
      }

    .form-container {
      max-width: 250px;
      padding: 10px;
      background-color: white;
      }


    .form-container input[type=text] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
      }

    .form-container input[type=text]:focus {
      background-color: #ddd;
      outline: none;
      }

    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:5px;
      opacity: 0.8;
      }

    .form-container .cancel {
      background-color: red;
      }

    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
      }
  </style>

  <script>
    function openForm(form) {
      document.getElementById(form).style.display = "block";
      }

    function closeForm(form) {
      document.getElementById(form).style.display = "none";
      }
  </script>
  </head>



  <body bgcolor="#45B39D" >
    <?php
        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        mysqli_select_db($conn,"salary");
        $sql = "SELECT * FROM employee ";

        $result = $conn->query($sql);
    ?>

    <p class="topnav">Employee Details</p>
    <a class="hme" href="main.php">Home</a>
    <div class="upd">
      <a style="text-decoration: none;" class="open-button" onclick="openForm('myForm1')">Update</a>&nbsp;&nbsp;
      <div class="form-popup" id="myForm1">
        <form action="update.php" class="form-container" method="POST">
          <h1>UPDATE</h1>
          <input type="text" placeholder="Enter Employee ID"  name="empid2" required>
          <button type="submit" class="btn" >Submit</button>
          <button type="button" class="btn cancel" onclick="closeForm('myForm1')">Cancel</button>
        </form>
      </div>

      <a style="text-decoration: none;" class="open-button" onclick="openForm('myForm')">Delete</a>
        <div class="form-popup" id="myForm">
          <form action="delete.php" class="form-container" method="POST">
            <h1>DELETE</h1>
            <input type="text" placeholder="Enter Employee ID" name="empid" required>
            <button type="submit" class="btn">Delete</button>
            <button type="button" class="btn cancel" onclick="closeForm('myForm')">Cancel</button>
          </form>
        </div>
    </div>
 
    <center> 
      <table>
        <tr>
          <th>Sl No</th>
          <th>Employee ID</th>
          <th>Name</th>
          <th>Mobile</th>
          <th>E-Mail ID</th>
          <th>Designation</th>
          <th>Date of join</th>
          <th>Gender</th>
        </tr>

        <?php
          $count=1;
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                print "<tr> <td>";
                echo $count++; 
                print "</td> <td>";    
                echo $row["empid"]; 
                print "</td> <td>";
                echo $row["name"]; 
                print "</td> <td>";
                echo $row["mobile"]; 
                print "</td> <td>";
                echo $row["email"]; 
                print "</td> <td>";
                echo $row["design"]; 
                print "</td> <td>";
                echo $row["date1"]; 
                print "</td> <td>";
                echo $row["gen"]; 
                print "</td> </tr>";
                }

              }
          else
            echo '<tr><td colspan="8">No Employee Details Found</td></tr>';
        ?>

      </table>
    </center>
  </body>
</html>