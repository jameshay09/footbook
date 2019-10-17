<?php 
require ('config.inc.php'); 


$page_title = 'FootBook';

//1 - include the header file

include "header.html";


?>

<div class="profile-left">

<div id="profile-picture">

	<img src="img/empty-profile.jpg" alt="image for empty profile picture" />

</div>


<div id="info">

<div class="info-name">Name: </div><div class="info-data"><?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "my_jameshay";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT first_name, last_name FROM users LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     
     while($row = $result->fetch_assoc()) {
         echo "   ". $row["first_name"]. " " . $row["last_name"] . "<br>";
		 
     }
} else {
     echo "0 results";
}

$conn->close();
?>  </div>
<br />
<div class="info-name">Age:</div><div class="info-data">20</div>
<br />
<div class="info-name">Position:</div><div class="info-data">Striker</div>
<br />
<div class="info-name">Bio:</div><div class="info-data">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet risus urna. Nullam eget justo tempus, tempor erat at, aliquet turpis. Phasellus fermentum sagittis feugiat. Ut ex erat, ultricies et est vitae, faucibus blandit mi. </div>


</div>

</div>

<div class="profile-right">

<div class="stars">

	<img class="rating-img" src="img/stars.png">

</div>

</div>

<?php 

include "footer.html";

//3 - include the footer file 

?>