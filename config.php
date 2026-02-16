<?php 
    $usuario = 'root';
    $password = '';
    $db_name = 'tigrinhodatabase';

    try{
        $conn = new PDO("mysql:host=localhost;dbname=$db_name;charset=utf8", $usuario, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Erro na conexão" . $e->getMessage();
    }
    
?>