<!DOCTYPE html>
<html>
  <title>Perl Session Destroyed</title>
<body>

<?php
// remove all session variables
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
#setcookie("username", "", time() - 3600);
session_unset();

// destroy the session
session_destroy();

?>

<h1>Session Destroyed</h1>
<a href=/cgi-bin/php-state-demo.php>Back to the PHP CGI Form</a><br />
<a href=/cgi-bin/php-sessions-1.php>Back to Page 1</a><br />
<a href=/cgi-bin/php-sessions-2.php>Back to Page 2</a>
</body>
</html>