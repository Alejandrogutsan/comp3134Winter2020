<?php


session_start();
$session = $_SESSION['confirmation'];
$post = $_POST['confirmation'];


$displayForm = true;
$email = $_POST['username'];
$password = $_POST['passwd'];
if(isset($_POST['passwd']) && isset($_POST['username'])){
  $displayForm = false;
  $successMsg = 'Login Successfully ';
  $failMsg = ' Login Unuccessfull';
  if($email === 'host' && $password === 'pass'){
	echo "<div>".$successMsg."</div>";
	echo "<div>Session: ".$session."</div>";
	echo "<div>Post: ".$post."</div>";
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

