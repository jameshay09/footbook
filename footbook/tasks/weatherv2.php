<html>
<head>
	<title>Working With If Else If</title>
</head>
<body>
  <h1>Weather Report</h1>
  <?php
  
  $weather="sunny";
  
  if($weather=="rainy" or $weather=="drizzly" ){
	  
	  echo "It will be rainy today. Use your umbrella.";
  }
  
  else if($weather=="sunny" or $weather=="partially sunny" ){
	  
	  echo "It will be sunny today. Wear your sunglasses.";
	  
  }
  
   else if($weather=="snowy" or $weather=="icy" ){
	   
	   echo "It will be snowy today. Bring your shovel.";
   }
   
   else{
	   
	   echo "I don't know what the weather is doing today.";
   }
  
 //Declare a variable named weather and then assign a value sunny
 
  //if weather is equal to rainy or drizzly
  
    // Print "It will be rainy today. Use your umbrella." on the screen as a paragraph
   
 //Else if weather is equal to sunny or partially sunny
  
   // Print "It will be sunny today. Wear your sunglasses." on the screen as a paragraph;
  
 //Else if weather is equal to snowy or icy
  
    // Print "It will be snowy today. Bring your shovel." as a paragraph
  
 //Else{
    // Print "I don't know what the weather is doing today." as a paragraph
  
  ?>
</body>
</html>