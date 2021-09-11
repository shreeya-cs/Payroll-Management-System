<html>
<head>
    <title>HOME</title>
    <style >


    	.bg { 
  background-image: url("img/.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 }

      .topnav {
        overflow: hidden;
        background-color: #333;
       

      }

      .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 21px;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav a.active {
        background-color: #4CAF50;
        color: white;
      }

      .form-popup {
        display: none;
        position: fixed;
        top: 27%;
        left:34%;
        
      }

      .form-container {
        max-width: 250px;
        padding: 10px;
        background-color: white;
      }

      .form-container input[type=text] {
        width: 75%;
        padding: 3px;
        margin: 5px 0 7px 0;
        border: none;
        background: #CFD8DC;
      }

      .form-container input[type=text]:focus {
        background-color: #ddd;
        outline: none;
      }

      .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 8px 15px;
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


      .form-popup2 {
        display: none;
        position: fixed;
        top: 28%;
        left:50%;

      }

      .upd{
        overflow: visible;
        background-color: #D0D3D4;
        float: right;
        color: black;
       margin-top: -40px;
       margin-right: 10px;
        padding: 5px 10px;
        text-decoration: none;
        font-size: 15px;
        

      }

      .upd a:hover {
        background-color: black;
        color: white;
       
      }
    </style>

    <script>

      function subwin(){
        var val=document.getElementById("sel2").value;
        if(val=="")
        {
            alert("Select Month");
        }
        else
        {
            url= "http://localhost/payroll/all_sal.php?val="+val;
            var myWindow=window.open(url, "PartySearch", "width=800,height=600");
            myWindow.moveTo(300, 2);
            
        }
        document.getElementById("sel2").value="";
        }

        function validate()
        {
        	var mon=document.getElementById("sel").value;
        	var num=document.getElementById("leave").value;
        	if(mon=="January" || mon=="March" || mon=="May" || mon=="July" || mon=="August" || mon=="October" || mon=="December"){ 
        		if(num<0 || num>31){
        			alert("Enter valid Number of leave");
        			return false;
        		}
        	}
      
        	if(mon=="April" || mon=="June" || mon=="September" || mon=="November"){ 
        		if(num<0 || num>30){
        			alert("Enter valid Number of leave");
        			return false;
        		}
        	}
        	if(mon=="February"){
        		if(num<0 || num>28 ){
        			alert("Enter valid Number of leave");
        			return false;
        		}
        	}
   
        	return true;
		}
        

      function openForm() {
      	closeForm2();
        document.getElementById("myForm1").style.display = "block";
        }

      function closeForm() {
        document.getElementById("myForm1").style.display = "none";
        document.getElementById("empid0").value="";
        document.getElementById("leave").value="";
        document.getElementById("sel").value="";

        }

        function openForm2() {
      	closeForm();
        document.getElementById("myForm2").style.display = "block";
        }

      function closeForm2(){
        document.getElementById("myForm2").style.display="none";
        document.getElementById("sel2").value="";

        }

      function log()
        {
          window.location.replace('home.php');
        }

    
        

    </script>

</head>


<body class="bg">
	<br><font size="40px">PayRoll Management</font><br><br>
	<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="addemp.php">Add Employee</a>
  <a href="dis.php">Employee Details</a>
  <a class="open-button" onclick="openForm()">Salary Calculation</a>
  <div class="form-popup" id="myForm1">
        <form action="sal.php"  class="form-container" method="POST" >
          <h1>Calculation</h1>
          <input type="text" placeholder="Enter Employee ID"  name="empid2" id="empid0" required>
          <input type="text" placeholder="Number of Leave"  name="leave" id="leave" required>

          <select name="sel" id="sel" required>
          	<option value="">Select Month</option>
          	<option value="January">January</option>
          	<option value="February">February</option>
          	<option value="March">March</option>
          	<option value="April">April</option>
          	<option value="May">May</option>
          	<option value="June">June</option>
          	<option value="July">July</option>
          	<option value="August">August</option>
          	<option value="September">September</option>
          	<option value="October">October</option>
          	<option value="November">November</option>
          	<option value="December">December</option>
          </select><br><br>
          <table>
          	<tr>
          <td><button type="submit" class="btn" onclick="return validate()" >Submit</button></td>
          <td><button type="button" class="btn cancel" onclick="closeForm()">Cancel</button></td>
      </tr>
  </table>
        </form>
      </div>
  <a class="open-button" onclick="openForm2()">All Salaries</a>
<div class="form-popup2" id="myForm2">
        <div class="form-container"> 
          <h1>Salary Details</h1>
         

          <select name="sel2" id="sel2" required>
          	<option value="">Select Month</option>
          	<option value="January">January</option>
          	<option value="February">February</option>
          	<option value="March">March</option>
          	<option value="April">April</option>
          	<option value="May">May</option>
          	<option value="June">June</option>
          	<option value="July">July</option>
          	<option value="August">August</option>
          	<option value="September">September</option>
          	<option value="October">October</option>
          	<option value="November">November</option>
          	<option value="December">December</option>
          </select><br><br>
          <table>
          	<tr>
          <td><button type="submit" class="btn" onclick="subwin()">Submit</button></td>
          <td><button type="button" class="btn cancel" onclick="closeForm2()">Cancel</button></td>
      </tr>
  </table>
        </form>
      </div>
  </div>

</div>
	<a style="text-decoration: none;" class="upd" onclick="log()" >Logout</a>&nbsp;&nbsp;&nbsp;
</body>
</html>