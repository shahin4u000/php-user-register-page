<?php 

$titleText="Register Yourself :) ";
include("include/header.php"); 

  
    

 
if($_SERVER['REQUEST_METHOD']=='POST') {

   if(isset($_POST['first_name'])) {
    $fn = $_POST['first_name']; }
    
    if(isset($_POST['first_name'])){
    
    $ln = $_POST['last_name'];  }
        
    if(isset($_POST['first_name'])){
    
    $email = $_POST['email'];   }
    
    if(isset($_POST['first_name'])){
    
    $pa = $_POST['pass'];   }
   
    }
   
    if(isset($pa)){
       require ("include/mysql_connect.php");
    
        
        
        $sql = " INSERT INTO userinfo (first_name,last_name,email,pass)
                VALUES('$fn','$ln','$email','$pa') ";
        
        $inject = mysqli_query($dbc,$sql);
        
        
        if($inject) {
        
        echo "<br> <br> <br> <center><h1> Registration successfull </h1> </center> <br> <br> <br>";
        
        }
        
        mysqli_close ($dbc); 
        include("include/footer.html");
        exit();
        
     
    }
    







?>

<script>

    function myFunction() {
    var pass1 = document.getElementById("pass").value;
    var pass2 = document.getElementById("pass1").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("pass").style.borderColor = "#E34234";
        document.getElementById("pass1").style.borderColor = "#E34234";
        ok = false;
        
    }
        
        else {
        
        alert("Everythis is Ok");
        }
    
    return ok;
    }



</script>

    
    <form action="register.php" onsubmit="return myFunction()" method="post" id="formDesign">
       <center> 
            <div>

                <input type="text" name="first_name" value="<?php if( isset($_POST['first_name'])) { echo $_POST['first_name'];} ?>" Placeholder="Your First Name" required >
            </div>

            <div>

                <input type="text" name="last_name" value="<?php if( isset($_POST['last_name'])) { echo $_POST['last_name'];} ?>" Placeholder="Your Last Name" required >            
            </div>

            <div>

                <input type="email" name="email" value="<?php if( isset($_POST['email'])) { echo $_POST['email'];} ?>" Placeholder="Your valid Email address" required>
            </div>

            <div>

                <input type="email1" name="email1" value="<?php if(isset($_POST['email1'])) { echo $_POST['email1'];} ?>" Placeholder="Your valid Email address" required>
            </div>

            <div>
                <input type="password" name="pass" id="pass"  Placeholder="Please Enter Password">
            </div>

            <div>


                <input type="password" id="pass1" oninput="passCheck(this)" placeholder="Please retype your password">
            </div>

            <div  id="button1">


                <input type="submit" name="register" value="Register me">

            </div>
             <br>

    </center>
    
    </form>

  
<?php include("include/footer.html"); ?>