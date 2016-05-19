<?php
if(isset($_POST['george']))
{	
		if(!empty($_POST['textbox'])){
			echo "The name in the box is... " . @$_POST['textbox'] ;
		}
		else{
			echo "Must fill out box";
		}

}

?>

<html>
<head>
	
</head>
<body>

<form action="issettest.php" method="POST">
<input type="text" name="textbox">
<input type="button" name="sally" value="submit">
	
<button type="submit" name="george">Submit</button>
	
</form>
	
</body>
</html>