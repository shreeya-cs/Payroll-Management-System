<html>
<head>
	<title>Add</title>
	<style>
.pd{
  padding-left:58%;
}
	

.bg { 
  background-image: url("img/5.jpg");
  height: 100%
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 }

.topnav {
  
    background-color: #333;
    color: #f2f2f2;
    text-align: center;
    font-family: cursive;
    font-size: 40px;
 }

.hme  {

  
  background-color: #21618C;
  float: left;
  margin-top: -40px;
  padding: 5px 10px;
  text-decoration: none;
  font-size: 15px;
  color:#FEF5E7;
  }


.hme:hover {
  background-color: black;
  color: white;
 }

.container {
  max-width: 350px;
  padding: 5px;
  background-color: #21618C;
}

</style>

<script>
  function ValidateEmail() 
  {
  var x=document.forms["myForm"]["email"].value;
  var  x1=parseInt(document.forms["myForm"]["mobile"].value);
   if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
    {
       
        if (/^([1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])/.test(x1) && x1>999999999 && x1<10000000000)
       {
     
          return (true)
        }  
        else{
              alert("Enter a valid mobile number!");
              return (false)
            }
      
  }
    
   else{
      alert("Enter a valid Email !");
      return (false)
      }
  }

</script>

</head>


<body class="bg">
  <p class="topnav">Enter New Employee Details</p>
  <a class="hme" href="main.php">Home</a>
  
  <div class="pd">
    <form name="myForm" class="container" action="add.php" onsubmit="return ValidateEmail()" method="POST">
      <br><input type="text" name="name" placeholder="NAME" style="height:5%; width:80%; font-family:courier; font-size:95%" required/><br><br>
      <input type="text" name="empid" placeholder="EMPLOYEE ID" style="height:5%; width:80%; font-family:courier; font-size:95%" required/><br><br>
      <input type="text" name="mobile" placeholder="MOBILE " style="height:5%; width:80%; font-family:courier; font-size:95%" required/><br><br>
      <input type="text" name="email" placeholder="EMAIL" style="height:5%; width:80%; font-family:courier; font-size:95%" required/><br><br>
      <select name="dsgn" style="height:5%; width:80%; font-family:courier; font-size:95%" required>
        <option value="">DESIGNATION</option>
        <option value="Daily Labour">Daily Labour</option>
        <option value="Supervisor">Supervisor</option>
        <option value="Accountant">Accountant</option>
        <option value="Asst. Manager">Assistant Manager</option>
      </select><br><br>
      Date Of Join<br>
      <input type="date" name="date" style="height:5%; width:80%; font-family:courier; font-size:95%" required/><br><br>
      Gender<br>
      <input type="radio" name="gender" value="Male" required> Male<br>
      <input type="radio" name="gender" value="Female" required> Female<br>
      <input type="radio" name="gender" value="Other" required> Other<br><br>
      <input type="submit" value="submit" style=" font-family:courier; height:5%; width:40%; font-size:105%;color:white;background-color:green;border:2% solid #336600;padding:3% border-radius:4%"/><br>
    </form>
  </div>
</body>
</html>