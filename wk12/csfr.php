<?php
$displayForm = true;
$email = $_POST['username'];
$password = $_POST['passwd'];
if(isset($_POST['passwd']) && isset($_POST['username'])){
  $displayForm = false;
  $successMsg = 'Successfully logged in';
  $failMsg = 'Failed to log in';
  if($email === 'host' && $password === 'pass'){
	echo "<div>".$successMsg."</div>";
  }
  else {
	echo "<div>".$failMsg."</div>";
 }
}
if($displayForm){
?>
<form action="csfr.php" method="POST">
	<label for="username"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="username" required>
	<label for="passwd"><b>Password</b></label>
	<input type="password" placeholder="Enter Password" name="passwd" required>
    	<button type="submit">Login</button>
</form>
<?php
}
?>

