<?php

require_once 'login.php';

$x=8;

if($x==1){  //this will create the table cats

	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	$query = "CREATE TABLE cats (
	id SMALLINT NOT NULL AUTO_INCREMENT,
	family VARCHAR(32) NOT NULL,
	name VARCHAR(32) NOT NULL,
	age TINYINT NOT NULL,
	PRIMARY KEY (id)
	)";
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
}


if($x==2){  //this will show the cats table schema

	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	$query = "DESCRIBE cats";
	$result = $conn->query($query);
	if (!$result) die ("Database access failed: " . $conn->error);
	$rows = $result->num_rows;
	echo "<table><tr><th>Column</th><th>Type</th><th>Null</th><th>Key</th></tr>";
	for ($j = 0 ; $j < $rows ; ++$j)
	{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_NUM);
	echo "<tr>";
	for ($k = 0 ; $k < 4 ; ++$k) echo "<td>$row[$k]</td>";
	echo "</tr>";
	}
	echo "</table>";
	
}

if($x==3) {  //this will add data to the table cats
	

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
	
}

if($x==4) {  //this will drop the table cats
	

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "DROP TABLE cats";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
	
}

if($x==5) {  //this will retrieve data from cats table
	
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM cats";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
echo "<table><tr> <th>Id</th> <th>Family</th><th>Name</th><th>Age</th></tr>";
for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_NUM);
echo "<tr>";
for ($k = 0 ; $k < 4 ; ++$k) echo "<td>$row[$k]</td>";
echo "</tr>";
}
echo "</table>";
	
}

if($x==6) {  //this will update spelling of Charly to Charlie in table

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);

	
}



if($x==7) {  //this will remove cat Growler from the cats table

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "DELETE FROM cats WHERE name='Growler'";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
	
}

if($x==8) {  //this insert new row and report autoincremented id

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);


//$insertid = $result->insert_id; //this is the text book answer, it does not work
//$insertid = mysqli_insert_id($conn);  // this works
$insertid = $conn->insert_id;   // This works

echo "The Insert ID was: " . $insertid;
	
}




?>

Insert into barrell * 