<?php 
  

try{

$d = new PDO ('mysql:host=loccalhost;dbname=users;charset=utf8','root','');
    
  
}

catch (Exception $e ) {

    echo $e->getMessage();

}

?>