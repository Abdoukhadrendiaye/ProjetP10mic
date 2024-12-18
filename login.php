
<?php
include('header.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($mot_de_passe, $row['password'])) {
            var_dump($user['nom']);
            $_SESSION['user_name']=$user['nom'];
            $_SESSION['user_id']=$user['id'];
            $_SESSION['prenom']=$prenom['prenom'];
            $_SESSION['logged_in']=true;
            header('location:acceuil.php');

        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun compte trouvé avec cet email.";
    }
}
?>

<div class="row">
    <div class="col-6 center shadow p-3 mt-5 bg-body rounded" style="margin:20px">
        <?php
    if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
    //   unset($_SESSION['error']);//permet de supprimer le message deja afficher//
}
    
    ?>
    <form  method="POST" action="login.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address Email</label>
    <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" name="password" placeholder="Mot de passe" class="form-control" id="exampleInputPassword1" required>
  </div>
    <a href="acceuil.php"  class="btn btn-primary">Se connecter</a>

</form>
    </div>
</div>
