<!DOCTYPE html>
<html>
<body>

<h1>Registration form:</h1>


<?php 

$firstName= $lastName ="";
$firstNameErr = $lastNameErr = "";
$igender = $birthday = $religion = $email = $username = $password = "" ; 
$igenderErr= $birthdayErr = $religionErr = $emailErr = $usernameErr = $passwordErr = "";
$ErrorMessage="";
$flag = false;
$successfulMessage="";
$errorMessage ="";

if($_SERVER['REQUEST_METHOD']==="POST"){
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $igender = $_POST['igender'];
  $birthday = $_POST['birthday'];
  $religion = $_POST['religion'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($firstName)){
    $firstNameErr= "First name can not be empty";
    $flag = true;
  }
  if(empty($lastName)){
    $lastNameErr= "Last name can not be empty";
    $flag = true;
  }
  if(empty($igender)){
    $igenderErr= "Gender field can not be empty";
    $flag = true;
  }
  if(empty($birthday)){
    $birthdayErr= "Birthdate field can not be empty";
    $flag = true;
  }
  if(empty($religion)){
    $religionErr= "You have forgate to select Religion";
    $flag = true;
  }
  if(empty($email)){
    $emailErr= "Email field can not be empty";
    $flag = true;
  }
  if(empty($username)){
    $usernameErr= "username field can not be empty";
    $flag = true;
  }
  if(empty($password)){
    $passwordErr= "Password field can not be empty";
    $flag = true;
  }
  else{
    echo '<script>alert("Thank you ")</script>';
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}
}

?>




<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
 <fieldset>
  <legend>Basic Information:</legend>
  <label for="firstName">First Name<span style="color: red;">*</span>:</label>
  <input type="text" id="firstName" name="firstName">
  <span style="color: red;"><?php echo $firstNameErr; ?></span>
  <br><br>
  <label for="lastName">Last Name<span style="color: red;">*</span>:</label>
  <input type="text" id="lastName" name="lastName">
  <span style="color: red;"><?php echo $lastNameErr; ?></span>
  <br><br>
  
  <label for="gender">Gender<span style="color: red;">*</span>:</label>
  <input type="radio" id="male" name="igender" value="male">

  
  <label for="male">Male</label>
  <input type="radio" id="female" name="igender" value="female">
  
  <label for="female">Female</label>
  <span style="color: red;"><?php echo $igenderErr; ?></span>
  <br><br>
  
  <label for="birthday">Birthdate<span style="color: red;">*</span>:</label>
  <input type="date" id="birthday" name="birthday">
  <span style="color: red;"><?php echo $birthdayErr; ?></span>
  <br><br>
  
  <label for="religion">Religion<span style="color: red;">*</span>:</label>

<select name="religion" id="religion">
  <option value="">Select</option>
  <option value="Islam">Islam</option>
  <option value="Hindu">Hindu</option>
  <option value="Christian">Christian</option>
  <span style="color: red;"><?php echo $religionErr; ?></span>
</select> 
 </fieldset>





 <fieldset>
  <legend>Contact Information:</legend>
  <label for="perAddress">Personal Address:</label>
  <textarea id="perAddress" name="perAddress" rows="2" cols="30"> 
  </textarea>
  <br><br>
  <label for="parAddress">Parmanent Address:</label>
  <textarea id="parAddress" name="parAddress" rows="2" cols="30"> 
  </textarea> 
  <br><br>
  <label for="phone">Enter your phone number:</label>
  <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> <br><br>
  <label for="email">Email<span style="color: red;">*</span>:</label>
  <input type="email" id="email" name="email">
  <span style="color: red;"><?php echo $emailErr ?></span>
  <br><br>
  <label for="homepage">Personal Website Link:</label>
  <input type="url" id="homepage" name="homepage"> 
  <br><br>

 </fieldset>



 <fieldset>
  <legend>Account Information:</legend>
  <label for="username">Username<span style="color: red;">*</span>:</label>
  <input type="text" id="username" name="username">
  <span style="color: red;"><?php echo $usernameErr; ?></span>
  <br><br>
  <label for="password">Password<span style="color: red;">*</span>:</label>
  <input type="text" id="password" name="password">
  <span style="color: red;"><?php echo $passwordErr; ?></span>
  <br><br>
</fieldset>
 <br>
 <input type="submit" name = "submit" value="Submit">

</form>


</body>
</html>
