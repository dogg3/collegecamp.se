
<?php  
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db('logintest');


//collect

$output = "";
if (isset($_POST['searchVal'])) {
	$searchq = $_POST['searchVal'];  
$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
$query = mysql_query("SELECT * FROM anvand WHERE first LIKE '%$searchq%' or last LIKE '%$searchq%' ");
$count = mysql_num_rows($query);
if ($count == 0) {
	$output = 'there was no search result';
}

else {
	while ($row = mysql_fetch_array($query)) {
		$fname = $row['first'];
		$lname = $row['last'];
		$id = $row['id'];
$output .= $fname.' '.$lname.'<br>';

	}
}

if(empty($query)) {
$output .= '';

}
echo $output;


}

?>