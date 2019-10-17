<html>
<head>
	<title>Yearly Average Temperature</title>
</head>
<body>

  <?php
  
  $months= array("January", "Febuary", "March", "April" , "May", "June", "July", "August", "September", "October", "November", "December");
  
  $temp= array(34,56,49,23,21,12,11,34,29,30,19,23);
  
  $total=0;
  
  $average=0;
  
  for ($i=0;$i<count($months);$i++){
	  
	  echo $months[$i]." ".$temp[$i]."<br>";
	 	$total=$total+$temp[$i];
  }
 
  
  //Create a Numeric Array containing all the months of the year
  //Create a Numeric array containing temperature values 34-56-49-23-21-12-11-34-29-30-19-23
  //Declare two variables, one for the $total and one for the $average and give them a default value

  //Creat a For Loop that will count the months in an increment of 1
  
  //HINT - $total=$total+$temp[$i];

$average=$total/12;
echo "The average for the 12 months is ".number_format($average,2);
  ?>
  
</body>
</html>