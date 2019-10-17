<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Simple Calculation</title>
</head>
<body>
<?php 

$unit_price="5.55";
$quantity="25";
$vat="20";


//Declare a variable named unit_price and then assign a value 5.55
//Declare a variable named quantity and then assign a value 25
//Declare a variable named vat and then assign a value 20

$total_cost=$unit_price*$quantity;
$total_cost=$total_cost+($total_cost*$vat)/100;

//Multiply unit_price by quantity and then assign the result to a variable named total_cost
//total_cost is equal to total_cost plus total_cost times vat divided by 100


//Research how to format the total so that its displayed with 2 decimal places


echo "the total cost of" .$quantity." items purchased are £" .number_format($total_cost,2)."including VAT of" .$vat;

//Print "The total cost of 00000 items purchased is £0000 including VAT "

?>
</body>
</html>