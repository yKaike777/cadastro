<?php 
    session_start();            //
    require_once('config.php'); // Inicia a sessão e conecta com o banco de daddos
    
    if(!isset($_SESSION['user_id'])){ // Se a sessão não foi iniciada, manda pro login
        header("Location: login.php");
        exit;
    };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tigrinho DOIS</title>
</head>
<body>
