
   <nav class="navbar navbar-expand-lg  navbar-transparent bg-dark">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><img id="logohigia" src="/img/logo.png" width="25" height="35"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
       
        <li class="nav-item">
          <a  href="perfil.php" class="nav-link text-white fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>" >
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>Perfil</a>
        </li>
    
      <li   class="nav-item">
        <a href="cadas_dados.php" class="nav-link text-white fs-4   <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
        <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
        </svg>Cadastro Completo</a>
      </li>

        <li   class="nav-item">
          <a href="filter.php" class="nav-link text-white fs-4   <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
          <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
          <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
          </svg>Catagolo</a>
        </li>

        <li class="nav-item">
          <a href="index.php" class="nav-link text-white fs-4  <?php if(basename($_SERVER['PHP_SELF']) == "index.php"){echo "active";}else{echo "";}?>" aria-current="page" >
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
          </svg>Manual</a>
        </li>

      </ul>
    </div>
   
  </div>
</nav>

