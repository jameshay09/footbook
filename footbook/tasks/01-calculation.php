<html>
<head>
	<title>Calculation</title>
</head>
<body>
  <h1>Calculation</h1>
  
  <?php
  

  
  function addNumbers($num1,$num2 ) {

		$sum=$num1+$num2;
		
		return $sum;

	}
	
	$first=45;
	$second=55;
	
	$total=addNumbers($first,$second);
	
	echo "The sum of two numbers is: ".$total."<br>";
	
	
	function subNumbers($num1,$num2 ) {

		$sum=$num1-$num2;
		
		return $sum;

	}
	
	$first=100;
	$second=55;
	
	
	
	
	$total=subNumbers($first,$second);
	
	
	
	
	echo "The subtraction of two numbers is: ".$total."<br>";
	
	function divNumbers($num1,$num2 ) {

		$sum=$num1/$num2;
		
		return $sum;

	}
	
	$first=100;
	$second=50;
	
	$total=divNumbers($first,$second);
	
	echo "The division of two numbers is: ".$total."<br>";
	
	
	function mulNumbers($num1,$num2 ) {

		$sum=$num1*$num2;
		
		return $sum;

	}
	
	$first=10;
	$second=7;
	
	$total=mulNumbers($first,$second);
	
	echo "The multiplication of two numbers is: ".$total."<br>";



  //Create a Function that will add two numbers together
  //Create two parameters within the Function
  //Declare a variable that will add the numbers together
  //Return the variable
  
  //Declare two variable with two different integers
  //Echo "The sum of the two numbers is " + the function
  
//Do the same for Subtracting, dividing and multiplying
	
  ?>
</body>
</html>