<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Herman</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">
<script>
  function formValidate() {
    var pass = document.getElementById('pwd').value;
    var passConfirm = document.getElementById('pwdConfirm').value;

    if (pass === passConfirm) {
      return true;
    }
    alert('Password and Password confirm do not match!');
    document.getElementById('pwd').value = "";
    document.getElementById('pwdConfirm').value = "";

    return false;
  }
</script>
</head>

<?php
  include('../includes/header.php');
?>

<div class="w3-container">

<form class="w3-container w3-animate-left w3-card-4 w3-half val" style="margin-top: 50px; margin-bottom: 50px;" action="registered.php" method="post" onsubmit="return formValidate()" style="display:block; margin:auto">
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="text" name="firstname" id="firstname" required>
    <label class="w3-label">First Name</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input"type="text" name="lastname" id="lastname" required>
    <label class="w3-label">Last Name</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="email" name="email" id="email" required>
    <label class="w3-label">Email</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="password" name="pwd" id="pwd"  required>
    <label class="w3-label">Password</label>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input" type="password" name="pwdConfirm" id="pwdConfirm" required>
    <label class="w3-label">Confirm Password</label>
  </div>
  <div class="w3-group w3-large">
    <select name="usertype" id="usertype">
      <option value="1">Volunteer</option>
      <option value="2">Administrator</option>
    </select>
  </div>
  <div class="w3-group w3-text-theme">
    <label class="w3-checkbox">
    <input type="checkbox" required>
    <div class="w3-checkmark"></div> I agree to Terms & Conditions
  </label>
  </div>
  <div class="w3-group">
  <input class="w3-btn w3-teal" type="submit" onclick="return formValidate(); return false" />
  <!-- This thing was overlapping the button and making it weird -->
  <!--<label class="w3-label">Sign Up</label>-->
  </div>
</form>

</div>
<?php
  include('../includes/footer.php');
?>

</body>
</html> 
