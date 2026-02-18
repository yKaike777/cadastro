<?php include 'header.php' ?>

    <?php include 'navbar.php' ?>
    <?php if($_SESSION['user_profile'] === 'admin'):?>

        <p>administrador, <?php echo $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'];?></p>

    <?php elseif($_SESSION['user_profile'] === 'comum'): ?>

        <p>Bem-vindo, <?php echo $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'];?>!</p>

    <?php endif; ?>
    <button onclick="window.location.href='logout.php'" class="btn btn-danger">Sair</button>
<?php include 'footer.php' ?>