
<?php 
session_start();

// var_dump ($_POST);
include_once 'header.php';
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary"  style=" margin-bottom:20px">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="logo-unchk.png" style="width:70px" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item " >
          <a class="nav-link active text-light hover-primary" aria-current="page" role="button" href="acceuil.php">Accueil</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link active text-light hover-primary" href="formation.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       Formation
          </a>
    
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link active text-light hover-primary" href="annonce.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Annonce
          </a>
    
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link active text-light hover-primary" href="login.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Connexion
          </a>
    
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary text-light" type="submit">Search</button>
        
      </form> -->
      <?php
        $pers_connecter= $_SESSION['prenom'].'  '.$_SESSION['user_name'];
        var_dump($pers_connecter);
        ?>
      <a href="" class="text-light"><?php
       
       echo htmlspecialchars($pers_connecter);

       ?>
       
         <a href="login.php" class="btn btn-primary m-2">Sign up</a>
        <a href="deconnexion.php" class="btn btn-danger">Deconnexion</a>
       
    </div>
  </div>
</nav> 
