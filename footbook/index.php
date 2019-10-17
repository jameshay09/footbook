<?php 
require ('config.inc.php'); 


$page_title = 'FootBook';

//1 - include the header file

include "header.html";

//2 - 
echo '<h1> Welcome';
if (isset($_SESSION['first_name'])) {
	
	echo", {$_SESSION['first_name']}";
}

echo '!</h1>';
?>

<div id="search-bar-home"> 

	<input class="search-home" type="text" name="search" placeholder="Search..">

</div>


<?php 

include "footer.html";

//3 - include the footer file 

?>