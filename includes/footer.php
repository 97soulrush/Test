<?php
  // What's your number? I need to call you and explain how this works.
  echo '
<head>
<style>
.footer-nav li
{
display:inline;
padding:5px;
}
.footer-nav li a
{
 text-decoration:none;
}
.footer-nav li a:hover
{
 text-decoration: underline;
}
</style>
</head>
    <footer class="w3-container w3-margin-top w3-teal">
      <ul class="footer-nav" style="list-style-type:none; text-align:center">
        <li><a href="#">Home</a></li>
        <li>|</li>
        <li><a href="#">Sign In</a></li>
        <li>|</li>
        <li><a href="#">Register</a></li>
        <li>|</li>
        <li><a href="#">View My Logs</a></li>
        <li>|</li>
        <li><a href="#">Add a Log</a></li>
        <li>|</li>
        <li><a href="#">About Us</a></li>
      </ul>
      <p style="text-align:center">-Team Moby 2015-</p>
    </footer>';
?>
