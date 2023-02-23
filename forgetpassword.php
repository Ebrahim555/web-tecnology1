<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
<h1>Change Password</h1>
<?php



  $current_password_err = $new_password_err = $retyped_password_err = "";
// Validation 
$currPass = "ebrahim12";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $retyped_password = $_POST["retyped_password"];

    $current_password_err = $new_password_err = $retyped_password_err = "";

    // Validate current password
    if ($current_password !== $currPass) {
        $current_password_err = "Invalid current password.";
    }

    // Validate new password
    if ($new_password === $currPass) {
        $new_password_err = "New password should not be same  current password.";
    }

    // Validate retyped password
    if ($retyped_password !== $new_password) {
        $retyped_password_err = "Retyped password must match with  new password.";
    }

    //  update password
    if (empty($current_password_err) && empty($new_password_err) && empty($retyped_password_err)) {
        // Code to update password goes here
       echo "Password updated ";
    }
}

?>

	  
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<label for="current_password">Current Password:</label>
		<input type="text" id="current_password" name="current_password" required><?php echo $current_password_err; ?><br>
<br><br>
		<label for="new_password">New Password:</label>
	<input type="password" id="new_password" name="new_password" required><?php echo $new_password_err; ?><br>
<br><br>
		<label for="retyped_password">Retype Password:</label>
	<input type="password" id="retyped_password" name="retyped_password" required><?php echo $retyped_password_err; ?><br>
<br><br>
		<input type="submit" value="Submit">
	</form>



	
	
</body>
</html>

