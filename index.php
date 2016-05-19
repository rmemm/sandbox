<?php



$cam = new Camaro;

print_r($cam);

$bill = $cam->z28("Bridgestone", "Daytona Yellow", "SS");

foreach($bill as $x){
	echo "<br> ". $x ;
}

echo "<br>". $cam->color;

echo "<br>". $bill[0];
echo "<br>". $bill[1];
echo "<br>". $bill[2];

$bob =$cam->ss();

echo "<br>". $bob[0];
echo "<br>". $bob[1];
echo "<br>". $bob[2];



class Camaro {
	
	public $tires = "Redlines";
	public $color = "Hugger Orange";
	public $trim	= "Rally Sport";
	
	function __construct() {		
		
	}
	
	function z28($tires, $color, $trim)
	{		
	$options = array($tires, $color, $trim);		
		return $options;
	}
	function ss()	{
		$options = array("Firestone","Blue", "Coupe");
		return $options;
	}
	
}

printf("this is some text, this is the b formated variable %b", 12);
echo "<br>";
printf("this is some text, this is the c formated variable %c", 12);
echo "<br>";
printf("this is some text, this is the d formated variable %d", 12);
echo "<br>";
printf("this is some text, this is the e formated variable %e", 12);
echo "<br>";
printf("this is some text, this is the f formated variable %f", 12);
echo "<br>";
printf("this is some text, this is the o formated variable %o", 12);
echo "<br>";
printf("this is some text, this is the s formated variable %s", 12);
echo "<br>";
printf("this is some text, this is the u formated variable %u", 12);
echo "<br>";
printf("this is some text, this is the x formated variable %x", 12);
echo "<br>";
printf("this is some text, this is the X formated variable %X", 12);
echo "<br>";
printf("this is some text, this is the X formated variable %X", 12);
echo "<br>";
printf("this is some text, this is the .2f formated variable %.2f", 12);
echo "<br>";
echo date("l F jS, Y - g:ia", time());
echo "<br>";
if( file_exists("testfile.txt")){
	echo "File Exists";
}


$fh = fopen("testfile.txt", 'w') or die("Failed to create file");
$text = <<<_END
Line 1
Line 2
Line 3
_END;
fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully";

echo "<br>";

$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it");
$line = fgets($fh);
fclose($fh);
echo $line;

echo "<br>";

$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it");
$text = fread($fh, 3);
fclose($fh);
echo $text;

//copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
//echo "File successfully copied to 'testfile2.txt'";
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' successfully updated";


?>