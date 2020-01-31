 <?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
setcookie('testing', $em , time() - 3600);
setcookie('f_name', $em , time() - 3600);
  	
  	header ("location: index.php");

?>

</body>
</html> 