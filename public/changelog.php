<!DOCTYPE HTML>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <title>Teammoby changelog</title>
</head>
<body>
  <div class='container'>
    <h2 style='text-align:center'>Changelog</h2>
    <table class='table table-bordered'>
      <thead>
        <tr>
          <th>Time entered</th>
          <th>Description</th>
          <th>Laborer</th>
        </tr>
      </thead>
      <?php include('../includes/changelog.php'); ?>
    </table>
    <div class='container'>
    <form role='form'>
      <div class='row'>
      <div class='form-group col-xs-3'>
        <label for='name'>Name:</label>
        <input type='text' class='form-control' id='name' name='name' />
      </div>
      </div>
      <div class='row'>
      <div class='col-xs-4'>
        <label for='desc'>Description:</label>
        <input type='textarea' class='form-control input-lg' rows='3' id='desc' name='desc' />
      </div>
      </div>
      <br>
      <div class='row'>
      <div class='form-group col-xs-3'>
        <label for='pwd'>Password:</label>
        <input type='password' class='form-control' id='pwd' name='pwd' />
      </div>
      </div>
    </form>
    </div>
  </div>
</body>
</html>
