<?php 

try {

	//$db=new PDO("mysql:host=localhost;dbname=is_ilani;charset=utf8",'root');
    $db=new PDO("mysql:host=eu-cdbr-west-01.cleardb.com;dbname=b50aae4c9bb78b;charset=utf8",'b50aae4c9bb78b','42dee09d');

} catch (PDOExpception $e) {

	echo $e->getMessage();
}


?>