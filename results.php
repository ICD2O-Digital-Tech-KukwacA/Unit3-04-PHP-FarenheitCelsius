<?php
	// get value of temperature from the textfields
	$fahrenheit = $_POST['fahrenheit'];

	// convert the temperature from Fahrenheit to Celsius
    $temp = ($fahrenheit - 32) * (5/9);
    $temp = round($temp,2);
?>
	<h3>Results:</h3>
	<?php echo "$fahrenheit"?>°F in Celsius is <?php echo "$temp" ?>°C.