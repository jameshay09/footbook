<?php 

$page_title = 'View the Current Users';
include ('header.html');
echo '<h1>Registered Users</h1>';
require ('mysqlconnect.php');
$display = 10;
if (isset($_GET['p']) && is_numeric($_GET['p'])) { 
	$pages = $_GET['p'];
} else { 
	$q = "SELECT COUNT(user_id) FROM users";
	$r = @mysqli_query ($dbc, $q);
	$row = @mysqli_fetch_array ($r, MYSQLI_NUM);
	$records = $row[0];
	
	if ($records > $display) { 
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}
} 
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}
$sort = (isset($_GET['sort'])) ? $_GET['sort'] : 'rd';
switch ($sort) {
	case 'ln':
		$order_by = 'last_name ASC';
		break;
	case 'fn':
		$order_by = 'first_name ASC';
		break;
	case 'rd':
		$order_by = 'registration_date ASC';
		break;
	case 'ad':
		$order_by = 'user_level ASC';
		break;
	default:
		$order_by = 'registration_date ASC';
		$sort = 'rd';
		break;
}
$q = "SELECT last_name, first_name, DATE_FORMAT(registration_date, '%d.%m.%Y') AS dr, user_level, user_id FROM users ORDER BY $order_by LIMIT $start, $display";		
$r = @mysqli_query ($dbc, $q); 
echo '<table align="center" cellspacing="0" cellpadding="5" width="75%">
<tr>
	<td align="left"><b>Edit</b></td>
	<td align="left"><b>Delete</b></td>
	<td align="left"><b><a href="view_users.php?sort=ln">Last Name</a></b></td>
	<td align="left"><b><a href="view_users.php?sort=fn">First Name</a></b></td>
	<td align="left"><b><a href="view_users.php?sort=rd">Date Registered</a></b></td>
	<td align="left"><b><a href="view_users.php?sort=ad">User Level</a></b></td>
</tr>
';
$bg = '#eeeeee'; 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	$bg = ($bg=='#eeeeee' ? '#ffffff' : '#eeeeee');
		echo '<tr bgcolor="' . $bg . '">
		<td align="left"><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>
		<td align="left"><a href="delete_user.php?id=' . $row['user_id'] . '">Delete</a></td>
		<td align="left">' . $row['last_name'] . '</td>
		<td align="left">' . $row['first_name'] . '</td>
		<td align="left">' . $row['dr'] . '</td>
		<td align="left">' . $row['user_level'] . '</td>
	</tr>
	';
} 
echo '</table>';
mysqli_free_result ($r);
mysqli_close($dbc);
if ($pages > 1) {
	
	echo '<br /><p>';
	$current_page = ($start/$display) + 1;
	
	
	if ($current_page != 1) {
		echo '<a href="view_users.php?s=' . ($start - $display) . '&p=' . $pages . '&sort=' . $sort . '">Previous</a> ';
	}
	
	
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="view_users.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '&sort=' . $sort . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} 
	
	
	if ($current_page != $pages) {
		echo '<a href="view_users.php?s=' . ($start + $display) . '&p=' . $pages . '&sort=' . $sort . '">Next</a>';
	}
	
	echo '</p>'; 
	
} 
	
include ('footer.html');
?>