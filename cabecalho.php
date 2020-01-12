<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Página Inicial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/login.php"><?php echo isset($_SESSION['login']) ? "Painel Administrativo" : "Login"; ?></a>
      </li>      
    </ul>
  </div>
</nav>