<?php
session_id("session2");
session_start();
?>

<!DOCTYPE html>
<html>
  <head><title>Perl Sessions</title></head>
<body>
  <h1>Perl Sessions Page 1</h1>
  <?php
  $name = $_POST["username"];
  if ($name){
	print("<p><b>Name:</b> $name");
  }else{
	print "<p><b>Name:</b> You do not have a name set</p>";
  }
  ?>
  <a href="/cgi-bin/php-sessions-1.php">Session Page 2</a><br>
  <a href="/perl-cgiform.html">Perl CGI Form</a><br>
  <form style="margin-top:30px" action="/cgi-bin/php-destroy-session.php" method="get">
  <button type="submit">Destroy Session</button></form>

</body>
</html>