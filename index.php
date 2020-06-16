<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'otsubo';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $sql = "SELECT * FROM sample;"
	$result = $dbh->query($sql);
    
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
    
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
  <?php foreach( $result as $value ) { ?>
  	<h1><?php echo "$value[name]<br>";?></h1>
  <?php}?> 
</body>
</html>








