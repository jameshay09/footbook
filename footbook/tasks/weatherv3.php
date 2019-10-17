<html>
<head>
	<title>Working With If Else If</title>
</head>
<body>
  <h1>Weather Report</h1>
  <?php
  
  $weather="sunny";
  
switch($weather){
	
	case'rainy':
		echo "It will be rainy today. Use your umbrella.";
		
break;

	case'sunny':
		echo "It will be sunny today. Wear your sunglasses.";
		
break;

	case'snowy':
		echo "It will be snowy today. Bring your shovel.";
		
break;

	default:
		echo "I don't know what the weather is doing today.";
	
}
  
 //Declare a Variable named weather and give it the value sunny
  
   // Create a Switch Statement

 //in the case that the weather is rainy
  
   // echo "It will be rainy today. Use your umbrella."

 //in the case that the weather is sunny
  
   // echo "It will be sunny today. Wear your sunglasses."	

 //In the case that the weather is snowy
  
   // echo "It will be snowy today. Bring your shovel."	

 //If it is none of the above
  
   // echo "I don't know what the weather is doing today."
  
  ?>
</body>
</html>