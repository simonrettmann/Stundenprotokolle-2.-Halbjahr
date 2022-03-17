<?php
  require 'database.php'; //include

  if (!empty($_POST)) //empty !
  { 
    $id=$_POST["ID"]; //? warum ID und nicht "Stat"
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM statusled WHERE ID = ?';
    
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
    
    echo $data['Stat'];
  }
?>