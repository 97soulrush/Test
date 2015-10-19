<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<title>Herman</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-teal.css">
</head>

<body>
<?php
  include('../includes/header.php');
?>



<div class="w3-container">

<form class="w3-container w3-animate-left w3-card-4 w3-half val" style="margin-top: 50px; margin-bottom: 50px;" action="logs.php" method="post">
  <div class="w3-group w3-large"> 
    <input class="w3-input w3-text-theme" type="date" name="date" id="date" placeholder="none" required>
  </div>
  <div class="w3-group w3-large"> 
    <input class="w3-input"type="text" name="hours" id="hours" required>
    <label class="w3-label">Hours</label>
  </div>
  <div class="w3-group w3-large">
    <select name="institution" id="institution">
      <?php
        include('../includes/getinst.php');
      ?>
      <!--<option>eHarmony.com</option>
<option>BlackPeopleMeet.com</option>
<option>WhitePeopleMeet.com</option>
<option>ThatsRacist.com</option>
<option>WhitePrivilege.com</option>
<option>JoinTheKlan.info</option>
<option>BuyCocaineOnline.biz</option>
<option>SatanicSacrifices.how</option>
<option>JohnCena.champ</option>
<option>BuySlavesOnline.com</option>
<option>AlaskanPipelineInitiative.gov</option>
<option>ePimp.hoes</option>-->
    </select>
  </div>
  <div class="w3-group w3-large">
    <textarea rows="5" cols="20" name="notes" id="notes" placeholder="Notes"></textarea>
  </div>
  <div class="w3-group">
  <input class="w3-btn w3-teal" type="submit"/>
  </div>
</form>

</div>

<?php
  include('../includes/footer.php');
?>
</body>
</html> 
