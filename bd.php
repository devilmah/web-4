<?php
$user = 'u47633';
$pass = '4643488';


try {
    $db = new PDO('mysql:host=localhost;dbname=u47633;charset=utf8', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
}
 catch (PDOException $e) {
     echo"<div class=' container w-50' >
	<div class=' my-5 p-5 bg-light rounded' style='--bs-bg-opacity: .7;'>
		<h2 class='text-center'> Error!: " . $e->getMessage() . "</h2></div></div>";
  exit();
}
