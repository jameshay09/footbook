<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Convert Temperature</title>
</head>
<body>
<?php

function convertFtoC($temperature) {
	
	$celcius = ($temperature - 32 * (5 / 9));
	
	$result = $temperature. "fahrenheight is equal to " .number_format($celcius,2). "celcius";
	
	return $result;
	
	
}
	
	function convertCtoF($temperature) {
	
	$fahrenheight = ($temperature - (9 / 5) * 32);
	
	$result = $temperature. "celcius is equal to " .number_format($fahrenheight,2). "fahrenheight";
	
	return $result;


	
	}
	
		$answer = "";
	
	if ($_SERVER['REQUEST_METHOD']== "POST") {
	
		if(isset($_POST["ftoC"])){
		
		$answer = convertFtoC($_POST['temperature']);
		
		}
		
		else if (isset($_POST["CtoF"])) {
			
			$answer = convertCtoF($_POST['temperature']);
		}
	
	}


  //Converting Fahrenheit to celsius
  //Create a Function that contains one Variable as a Parameter
  //Paremeter - 32 x (5 / 9)
  //Create a Variable that will contain the Functions Parameter + ' Fahrenheit is equal to ' .number_format($... ,2) .' Celsius.'
  //Return the Variable

  //Do the same for the second conversion
  //Parameter x (9 / 5 + 32)
  //Create a Variable that will contain the Functions Parameter + ' Celsius is equal to ' .number_format($... ,2) .' Fahrenheit.'
  //Return the Variable





  //Create an empty Variable 
  //Declare an IF statement that will have the Server use the POST Request Method
  //Create an IF and Elseif statement containing a Variable that will seek data from the FtoC/CtoF and temperature names within the HTML table below

?>



<form action="temp_converter.php" method="post">

	<fieldset>
		<legend>Fahrenheit/Celsius Converter</legend>
		<p><label for="temperature">Temperature</label>
			<input type="text" name="temperature" id="temperature" size="6" />
		</p>
		<p><input type="submit" name="FtoC" value="Fahrenheit to Celsius" /></p>
		<p><input type="submit" name="CtoF" value="Celsius to Fahrenheit" /></p>		
		
	</fieldset>
</form>

<p><?php
echo $answer;  
  //Echo the data seeking variable underneath the HTML Table

?></p>

</body>
</html>