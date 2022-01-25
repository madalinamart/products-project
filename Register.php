<?php

class Register 
{
    protected $dbConn;

    public function __construct()
    {
        require_once('./Db.php');
        $db = new Db();
        $this->dbConn = $db->connect();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed__password = password_hash($password, PASSWORD_BCRYPT);


    try {
    $sql = "INSERT INTO login (email, password) VALUES (:email, :password)";
    $stmt = $this->dbConn->prepare($sql);
    $result = $stmt->execute(['email' => $email, 'password' => $hashed__password]);
    header('Location: products.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }   

} else {
    echo 'error';
}
}
}

if(isset($_POST['submit'])){
    $user = new Register;
} 

?>