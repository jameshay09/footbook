<?php 

$page_title = 'Edit a User';
include ('header.html');//Add header.html using include()
echo '<h1>Edit a User</h1>';

if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { 
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { 
	$id = $_POST['id'];
} else { 
	echo '<p class="error">This page has been accessed in error.</p>';
include ('footer.html')	;//Add footer.html using include()
	exit();
}

require ('mysqlconnect.php');//Connect to database using require()

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Check if form has been submitted {

	$errors = array();
	
	if (empty($_POST['first_name'])) { //Check if first name has been entered
		$errors[] = 'You forgot to enter your first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	
	if (empty($_POST['last_name'])) {//Check if first name has been entered
		$errors[] = 'You forgot to enter your last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}

	
	if (empty($_POST['email'])) {	//Check if email has been entered {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}
	
	if ($_SESSION['user_level'] == 2) {
	if (!isset($_POST['user_level'])) { //Check if first name has been entered
		$errors[] = 'You forgot to enter your user level.';
	} else {
		$ul = mysqli_real_escape_string($dbc, trim($_POST['user_level']));
	}} else {
		false;
	}
	
	if (empty($errors)) { //Check is array $errors is empty {
		
				
		$q = "SELECT user_id FROM users WHERE email='$e' AND user_id != $id";
		$r = @mysqli_query($dbc, $q); //Run query and store result in the variable $r
		if (mysqli_num_rows($r) == 0) {

			// Make the query:
			if ($_SESSION['user_level'] == 2) {
			$q = "UPDATE users SET first_name='$fn', last_name='$ln', email='$e', user_level='$ul' WHERE user_id=$id LIMIT 1";
			}
			else {
			$q = "UPDATE users SET first_name='$fn', last_name='$ln', email='$e' WHERE user_id=$id LIMIT 1";
			}
			$r = @mysqli_query ($dbc, $q); //Run query and store result in the variable $r
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

				
				echo '<p>The user has been edited.</p>';	
				
			} else { 
				echo '<p class="error">The user could not be edited due to a system error. We apologize for any inconvenience.</p>'; 
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; 
			}
				
		} else { 
			echo '<p class="error">The email address has already been registered.</p>';
		}
		
	} else { 

		echo '<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { 
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';
	
	} 

} 


$q = "SELECT first_name, last_name, email user_level FROM users WHERE user_id=$id";		
$r = @mysqli_query ($dbc, $q); //Run query and store result in the variable $r

if (mysqli_num_rows($r) == 1) { 

	
	$row = mysqli_fetch_array ($r, MYSQLI_NUM);
	
	
	echo '<form action="edit_user.php" method="post">
<table>
<tr>
<td>First Name:</td><td><input type="text" name="first_name" size="15" maxlength="15" value="' . $row[0] . '" /></td>
</tr>
<tr>
<td>Last Name:</td><td><input type="text" name="last_name" size="15" maxlength="30" value="' . $row[1] . '" /></td>
</tr>
<tr>
<td>Email Address:</td><td><input type="text" name="email" size="20" maxlength="60" value="' . $row[2] . '"  /></td>
</tr>
</table>';
if ($_SESSION['user_level'] == 1) {
	echo '<p>User Level <select name="user_level"><option>0</option><option>1</option></select> </p>'
	;}
echo '<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="id" value="' . $id . '" />
</form>';

} else { 
	echo '<p class="error">This page has been accessed in error.</p>';
}

mysqli_close ($dbc);//Close database connection
		
include ('footer.html')//Add footer.html using include()
?>