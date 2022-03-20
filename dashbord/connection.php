<?php

try{
    $mysqlConnection = new PDO(
        'mysql:host=localhost;dbname=e_classe_db;charset=utf8',
        'root',
        ''
    );
    // set the PDO error mode to exception
  $mysqlConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e)
    {
      die ('erreur : '.$e->getMessage());
    }
