<script>
	
	function test()
	{
		a = 123
		var b = 456
		if (a == 123) var c = 789
	}
	
	test()
	
	if (typeof a != 'undefined') document.write('a = "' + a + '"<br>')
	if (typeof b != 'undefined') document.write('b = "' + b + '"<br>')
	if (typeof c != 'undefined') document.write('c = "' + c + '"<br>')
	
	
	
	function displayItems()
	{
		for(j = 0; j < displayItems.arguments.length ; ++j){
			document.write(displayItems.arguments[j] + "<br>")
		}
	}
	
	
	
	
</script>



<?php

?>

<html>
	<head>
		<title>Link Test</title>
	</head>
	<body>
		<a id="mylink" href="http://mysite.com">Click Me</a><br>
		<script>
			url = document.links.mylink.href
			document.write('The URL is ' + url + "<br>")
			
			displayItems("one", "two", "three", "red")
		</script>
		
	</body>
	
	
</html>