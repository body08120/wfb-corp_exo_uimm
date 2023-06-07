<?php
session_start();
require 'connx.php';
?>

<link rel="stylesheet" href="../../assets/css/error.css">

<?php

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

if (isset($email, $password) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $db->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $usercount = $stmt->rowCount();

        if ($usercount == 0) {
            echo "<div class='mess_inscription'>L'utilisateur n'existe pas.<br>
                <a href='loginForm.php' class='inscription_lien'>Je me connecte</a></div>";
        } else {
            if (password_verify($password, $user['password'])) {
                echo "Bienvenue";

                // Création de la session utilisateur
                $_SESSION["id_user"] = $user["id_user"];
                $_SESSION["id_role"] = $user["id_role"];
                // header("location:");
            } else {
                echo "<div class='mess_inscription'>Email ou mot de passe incorrect.<br>
                <a href='loginForm.php' class='inscription_lien'>Je me connecte</a></div>";
            }
        }

    } else {
        echo "<div class='mess_inscription'>Ce n'est pas une adresse mail valide<br>
        <a href='loginForm.php' class='inscription_lien'>Je me connecte</a></div>";
    }
} else {
    echo "<div class='mess_inscription'>Merci de remplir tous les champs<br>
    <a href='loginForm.php' class='inscription_lien'>Je me connecte</a></div>";
}
?>