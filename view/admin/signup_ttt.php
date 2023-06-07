<?php
session_start();
require '../../src\model\classes\Connect.php';
?>


<?php
$name=htmlspecialchars($_POST['name']);
$firstname=htmlspecialchars($_POST['firstname']);
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);
$verifmdp= htmlspecialchars($_POST['verifmdp']);
$code=htmlspecialchars($_POST['code']);

// tu verifies que tout est plein et rien n'est vide

if (isset($name, $firstname, $email, $password, $verifmdp, $code) && !empty($name) && !empty($firstname) && !empty($email) && !empty($password) && !empty($verifmdp) && !empty($code)) 
{
      // ici on verifie que c'est une vrai adresse mail
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $db->prepare($sql);
            $stmt->execute(['email' => $email]);
            $resultats = $stmt->fetch();
            $rowCount = $stmt->rowCount(); // nombre de lignes affectées
            if ($rowCount == 0) {

                  // ici on verifie que les 2 mots de pass sont identitques
                  if ($password == $verifmdp)
                  {
                        // Hashage du mot de passe
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $inscription = $db->prepare('INSERT INTO users(name, firstname, email, password,  id_role) VALUES(:name, :firstname, :email, :password, 2)');
                        $inscription->execute(array(
                        ':name' => $name,
                        ':firstname' => $firstname,
                        ':email' => $email,
                        ':password' => $hashed_password

                       
 
                        ));
                  

                        echo"<div class='mess_inscription'>Félicitation votre compte est crée vous pouvez vous connecter.<br>
                        <a href='loginForm.php' class='inscription_lien'>Je me connecte</a></div>";

                  }
                  else {
                        echo "<div class='mess_inscription'>les mots de pass ne correspondent pas
                        <br>
                        <a href='signupForm.php' class='inscription_lien'>Je m'inscris</a>
                        </div>";
                  }
            }
            else {
                  echo "<div class='mess_inscription'>L'adresse mail existe déjà<br>
                  <a href='loginForm.php' class='inscription_lien'>Je me connecte</a>
                  </div>";
            }
      }
      else {
            echo "<div class='mess_inscription'>L'adresse mail n'est pas valide<br>
            <a href='signupForm.php' class='inscription_lien'>Je minscris</a></div>";
      }
}
else{
      echo"<div class='mess_inscription'>Merci de remplir tous les champs<br>
      <a href='signupForm.php' class='inscription_lien'>Je minscris</a></div>";
}

?>

