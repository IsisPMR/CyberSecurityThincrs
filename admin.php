<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hola admin</h1>
    <form action ="process.php" method="post" >
	<input type="submit" value="Salir"/>
    </form>
</body>
</html>

<?php
session_start();
//Validacion por tiempo
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("Location: index.html");
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
 ?>
 
