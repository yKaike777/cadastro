<?php 
    require_once('config.php');
    $sucesso = false;

    if(isset($_POST['create'])){ // Depois do botão 'create' ser apertado, cria um novo usuário no banco de dados
        $firstName      = $_POST['first-name'];
        $lastName       = $_POST['last-name'];
        $email          = $_POST['email'];
        $phoneNumber    = $_POST['phone-number'];
        $password       = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $sql = "INSERT INTO usuarios (primeiro_nome, ultimo_nome, email, telefone, senha) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);

        $result= $stmt->execute([$firstName, $lastName, $email, $phoneNumber, $password]);

        if($result){
            header("Location: registration.php?success=1");
            exit;
        }

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    
    <div>
        <form action="registration.php" method="post" id="form">
            <div class="container">
                <h1>Registration</h1>

                <label for="first-name">Primeiro Nome:</label>
                <input type="text" name="first-name" id="first-name" required>

                <label for="last-name">Último Nome:</label>
                <input type="text" name="last-name" id="last-name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="phone-number">Telefone:</label>
                <input type="text" name="phone-number" id="phone-number">

                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>


                <input type="submit" name="create" id="register" value="Sign Up">
            </div>
        </form>
        <a href="login.php">Login</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(isset($_GET['success'])): ?>
    <script>
        Swal.fire({
            title: 'Tudo Certo!',
            text: 'Usuário salvo com sucesso!',
            icon: 'success'
        });
    </script>
    <?php endif; ?>

</body>
</html>