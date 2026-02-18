<nav class="navbar navbar-dark bg-dark d-flex justify-content-around">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <div style="margin-left: 50px;">
    <a href="index.php" class="navbar-brand">HOME</a>
    <?php if ($_SESSION['user_profile'] === 'admin'):
      echo "<a href='usuario-list.php' class='navbar-brand'>Lista de Usuários</a>";
    ?>
    <?php endif; ?>
    </div>

    <span href="" class="navbar-brand text-light d-flex gap-2"><?php echo $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'];?> <div style="height: 30px; width: 30px; border-radius: 100%; background-color: grey; transform: translateY(4%)"></div></span>
  </div>
</nav>