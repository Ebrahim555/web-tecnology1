<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$err='';
$err1='';

$name = $email = $gender = $degree = $website = $day= $month= $year= $blood="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  
  $degree= test_input($_POST["degree"]);
  $gender = test_input($_POST["gender"]);
   $day = test_input($_POST["day"]);
    $month = test_input($_POST["month"]);
	 $year = test_input($_POST["year"]);
	  $blood = test_input($_POST["blood"]);
 
}


if(empty($name) && empty($email)){
$err='fill up fielf';}

if(empty($name) && empty($email)){
$err1='chose one fielf';}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name"><?php echo $err ?> <br><br>
  E-mail: <input type="text" name="email"><?php echo $err ?><br><br>
 
  
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="other">Other
  <?php echo $err1 ?>
  <br><br>
  
   Degree:
  <input type="radio" name="degree" value="ssc">SSC
  <input type="radio" name="degree" value="hsc">HSC
  <input type="radio" name="degree" value="bsc">BSC
  <input type="radio" name="degree" value="msc">MSC
  <input type="radio" name="gender" value="other">Other
  <?php echo $err1 ?>
  <br><br>
Birth of Date:
   Day:
  <input type="text" id="day" name="day" maxlength="2" pattern="[0-9]{1,2}" required>

  Month:
  <input type="text" id="month" name="month" maxlength="2" pattern="[0-9]{1,2}" required>

  Year:
  <input type="text" id="year" name="year" maxlength="4" pattern="(19|20)[0-9]{2}" required>
  
  <br><br>
   
  
  Blood:
  
  <select id="blood" name="blood" required>  
        <option value="A+" name="blood">A+</option>
        <option value="A-" name="a-">A-</option>
        <option value="B+" name="b+">B+</option>
        <option value="B-" name="b-">B-</option>
		<option value="B+" name="b+">O+</option>
        <option value="B-" name="b-">O-</option>
        <option value="AB+" name="ab+">AB+</option>
        <option value="AB-" name="ab-">AB-</option>
    </select>
  <br><br>
  
  <input type="checkbox"name="remember Me"value="Remember Me">
  <input type="submit" name="submit" value="Submit">  
</form> 



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo " birth Date is" ;
echo $day;
echo "- ";
echo $month;
echo "- ";
echo $year;
echo "<br>";
echo $blood;

?>

</body>
</html>