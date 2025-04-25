<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to Celsius">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Fahrenheit to Celsius</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Fahrenheit to Celsius</h1>";
			echo "<h3>This program will convert temperature in Fahrenheit to Celsius.</h3>";
		?>
		<!-- form to get the temperature in Fahrenheit from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="fahrenheit">Temperature in Fahrenheit</label>
      <input type="float" id="fahrenheit" placeholder="Enter value..." name="fahrenheit"><br><br>
      <input type="submit" value="Convert to Temperature">
    </form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">
        <div id="user-info">
        <div id="$temp"></div>
        </div>
      </iframe>
	</body>
</html>