<?php

class Db 
{

    private $host = '127.0.0.2';
    private $user = 'root';
    private $password = '';
    private $dbName = 'tester';
    
         public function connect()
         {     
    
         try
         {
           
           $conn =new PDO('mysql:host=' . $this->host . ';dbname='. $this->dbName . 
                          ';user=' . $this->user .';password=' . $this->password);      
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
         } catch(PDOException $e)     
         {
           echo 'Connection error:' .$e->getMessage();
         }
           return $conn;
         } 
}

?>