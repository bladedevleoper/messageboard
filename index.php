<?php
require_once 'Database.php';
require_once 'Post.php';
require_once 'Display.php';


if(isset($_POST['user']) && isset($_POST['message'])){
	$user = $_POST['user'];
	$message = $_POST['message'];
		if($user != Null && $message != Null){
			$post = new POST();
			$post->postMessage($user, $message);
		} else {
		echo '<div>Please fill in the input boxes</div';
	}
} 

?>
<!DOCTYPE html>
<html>
<title>Message Board Through OOP PHP</title>
<head>
</head>
<body>

<h1>Unit 13 Message Board</h1>
<form action="" method="post">
	<label for="fullname">full Name:</label>
	<input type="text" name="user" id="user" placeholder="full name"></br>
	<label for="message">Message:</label>
	<textarea name="message" id="message" placeholder="Your Message here"></textarea>
	<button type="Submit">Submit</button>
</form>
<h1>Messages are displayed below</h1>
<?php
	$display = new Display();
	echo $display->displayMessages();
?>

</body>
</html>