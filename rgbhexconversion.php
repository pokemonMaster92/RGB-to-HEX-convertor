<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>Let's Convert RGB to HEX</title>
</head>
<body><form method="get">
		<p>
			Red:<input type="text" name="r">
			Green:<input type="text" name="g">
			Blue:<input type="text" name="b">
		
<?php
	if (!empty($_GET)){
	$red = $_GET['r'];
	$green = $_GET['g'];
	$blue = $_GET['b'];}
function convertToHex(){
	global $red;
	global $green;
	global $blue;		
	$rgbColors = array($red, $green, $blue);
	for($i = 0; $i < 3; $i++){
		$quotient = $rgbColors[$i]/16;
		$firstWholeNumber = floor($quotient);
		$decimalNumber = $quotient - $firstWholeNumber;
		$secondWholeNumber = $decimalNumber * 16;
		switch($firstWholeNumber){
			case "10":
			$firstWholeNumber = 'A';
			break;
			case "11":
			$firstWholeNumber = 'B';
			break;
			case "12":
			$firstWholeNumber = 'C';
			break;
			case "13":
			$firstWholeNumber = 'D';
			break;
			case "14":
			$firstWholeNumber = 'E';
			break;
			case "15":
			$firstWholeNumber = 'F';
			break;
		}
		switch($secondWholeNumber){
			case "10":
			$secondWholeNumber = 'A';
			break;
			case "11":
			$secondWholeNumber = 'B';
			break;
			case "12":
			  $secondWholeNumber = 'C';
			break;
			case "13":
			$secondWholeNumber = 'D';
			break;
			case "14":
			$secondWholeNumber = 'E';
			break;
			case "15":
			$secondWholeNumber = 'F';
			break;
		}
		print $firstWholeNumber.$secondWholeNumber;
}
}
convertToHex();

?>
</p>
		<input type="submit" value="Convert!">
	</form>
</body>
</html>
