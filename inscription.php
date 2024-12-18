
<?php
session_start();

// var_dump ($_POST);
include_once 'header.php';
if ($_POST){
 
  if(
  isset($_POST['nom']) && !empty($_POST['nom'] )
  && isset($_POST['prenom']) && !empty($_POST['prenom'])
  && isset($_POST['ine']) && !empty($_POST['ine'])
  && isset($_POST['email']) && !empty($_POST['email'])
  && isset($_POST['password']) && !empty($_POST['password'])
  && isset($_POST['filiere']) && !empty($_POST['filiere'])
  && isset($_POST['eno']) && !empty($_POST['eno']))
    require_once 'conn.php';
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $email = strip_tags($_POST['email']);	
    $ine =strip_tags($_POST['ine']);
    $filiere =strip_tags($_POST['filiere']);
    $password =strip_tags($_POST['password']);
    $eno =strip_tags($_POST['eno']);
    
    $sql = 'INSERT INTO etudiant(nom, prenom, filiere, ine, email, password, eno) VALUES(:nom, :prenom, :email, :ine, :password; :filiere, :eno)';

    $query = $db->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':ine', $ine, PDO::PARAM_STR);
    $query->bindValue(':filiere', $filiere, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':eno', $eno, PDO::PARAM_STR);
    $query->execute(); 

    header('location: acceuil.php');
   $_SESSION['message']= "Apprenant est ajoiuté avec succès";

}else{
  $_SESSION['erreur']= "Veuiilez remplir tout les champs";

}
?>

<div class="row">
  <?php
  if ($_SERVER['REQUEST_METHOD']='POST'){
  if(!empty($_SESSION['erreur'])){
    echo'<div class="alert alert-danger">'
    .$_SESSION['erreur'].'
    </div>'; 
   }}
  ?>
    <div class="col-6">
      
    <div class="card bg-info m-3">
<form method="post">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">INE</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="ine">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Filere</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="filiere">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Eno</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="eno">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
    
    </div>
</div>
