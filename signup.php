<html>
<head>
<title>sign up</title>
<style>

form{
position:absolute;
left:35%;
top:5.5%;
}

.bg { 
  background-image: url("img/4.jpg");
  height: 100%
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.abc input[type=text],input[type=password] {
   height:30%;
   width:100%;
   font-family:courier; 
   font-size:95%;
   background-color: #ECEFF1;
   
}

.abc{
  color:white;
}

</style>

<script>

function ValidateEmail() 
{
var x=document.forms["myForm"]["email"].value;
var  x1=parseInt(document.forms["myForm"]["phone"].value);
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
  {
     
      if (/^([1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])/.test(x1) && x1>999999999 && x1<10000000000)
     {
   
        return (true)
      }  
      else{
            alert("Enter a valid Phone number!");
            return (false)
          }
    
  }
  
 else{
    alert("Enter a valid Email !");
    return (false)
    }
}


function validatepass(){
if(!ValidateEmail()){
   return false;  
}
else{
  var x=document.forms["myForm"]["pass"].value;
  var y=document.forms["myForm"]["cpass"].value;
  if(x!=y){
     alert("Password not matching");
     return false;
   }
  }
}

</script>

</head>


<body class="bg">
<div class="form">
      <form  name="myForm"  action="sign.php" onsubmit="return validatepass()" method="POST">
      <fieldset style="width:150%;">
      <legend style="font-size:250%;text-align:center;color:white;">SIGN UP</legend>
        <div class="abc">
            Name: <span style="color:red">*</span><br>
            <input type="text" name="name" required/><br><br>
            Manager ID: <span style="color:red">*</span><br>
            <input type="text" name="mgrid"  required/><br><br>
            Email: <span style="color:red">*</span><br>
            <input type="text" name="email"  required/><br><br>
            Phone: <span style="color:red">*</span><br>
            <input type="text" name="phone" required/><br><br>
            Password: <span style="color:red">*</span><br>
            <input type="password" name="pass" required/><br><br>
            Confirm Password: <span style="color:red">*</span><br>
            <input type="password" name="cpass" required/><br><br>
        </div>

        <input type="submit" value="submit" style=" font-family:courier; height:100%; width:100%; font-size:105%;color:white;background-color:green;border:2% solid #336600;padding:3% border-radius:4%"/>


      </fieldset>
      </form>
</div>
</body>
</html>

 
