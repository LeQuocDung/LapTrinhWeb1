<?PHP			
require('config.php');			
			
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);			
$sql = 'SELECT * FROM users';			
$data = mysqli_query($connection, $sql);			
			
$users=array();		
			
while ($row = mysqli_fetch_assoc($data)) {			
	$users[] = $row;		
}			
			
//var_dump($users);			
			
?>			