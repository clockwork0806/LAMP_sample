<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'yuya';
$password = 'yuya0806';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $id = $_POST['id'];
     $id = $_POST['name'];
     $id = $_POST['age'];
    
    $sql = "insert into user values (:id, :name, :age)";
    $stmt = $dbh->prepare($sql);
    $prams = array(':id'=> $id,':name'=> $name,':age'=> $age,);
    $stmt = $execute($prams);
    
    header('Location: index.php?fg=1');
    
	
    
} catch (PDOException $e) {
    header('Location: index.php?fg=2?err='.$e->getMessage());
    
    exit();
    
}

?>









