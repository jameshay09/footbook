<html>
<head>
	<title>Students</title>
</head>
<body>
  <h1>Students List</h1>
  <?php
  
  $students = array(
  
  
  
  	array('name'=>'Theodore Pinto', 'dept'=>'Engineering'),

	array('name'=>'Joshua Owen', 'dept'=>'Computing'),

	array('name'=>'Andrew Hunter', 'dept'=>'Business'),
	
	array('name'=>'Christopher Domingo', 'dept'=>'Science'),

	array('name'=>'Alistair Nedved', 'dept'=>'Computing'),

	array('name'=>'Louise Santos', 'dept'=>'Business'),
	
	array('name'=>'Theodore Pinto', 'dept'=>'Computing'),

	array('name'=>'Vivien Ivanovic', 'dept'=>'Science'),

	array('name'=>'Ben Ferguson', 'dept'=>'Art'),
	
	array('name'=>'Vicky Nicols', 'dept'=>'Computing'),
	
	);

  ?>
  
  <?php
  
  
  foreach ($students as $student){
	  
	  
	  if($student['dept']=='Computing'){
		  
		  echo $student['name']."-".$student['dept']."<br>";
	  }
		  
	  }
	  
	  
	  
  
  
  
  
 
  
  //Create an Associative Array with an appropriate name
  //inside the Associative Array add ID Key's for their name and dept as values
  //Theodore Pinto - Engineering
  //Joshua Owen - Computing
  //Andrew Hunter - Business
  //Christopher Domingo - Science
  //Alistair Nedved - Computing
  //Louise Santos - Business
  //Vivien Ivanovic - Computing
  //Samuel Bailey - Science
  //Ben Ferguson - Art
  //Vicky Nicols - Computing'),
  
  //create a foreach loop that will echo the students name and dept if they are part of the Computing dept
  
?>

</body>
</html>