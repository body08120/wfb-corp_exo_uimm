<?php
require_once('src/model/classes/User.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Instancier le UserRepository
    $userRepository = new UserRepository();

    // Vérifier si l'utilisateur existe
    $existingUser = $userRepository->getUserByEmail($email);
    if ($existingUser) {
        // Vérifier si le mot de passe est correct
        if ($userRepository->signin($email, $password)) {
            // L'utilisateur est connecté
            $_SESSION['user'] = $existingUser;

            // Rediriger vers une page de succès
            header('Location: ../../');
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
            exit();
        }
    } else {
        // Vérifier si les champs requis sont vides
        if (empty($email) || empty($password)) {
            echo "Veuillez remplir tous les champs.";
            exit();
        }

        // Vérifier si les mots de passe correspondent
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $confirmPassword = $_POST['verifmdp'];

        if ($password !== $confirmPassword) {
            echo "Les mots de passe ne correspondent pas.";
            exit();
        }

        // Vérifier si l'email est déjà utilisé
        $existingEmail = $userRepository->getUserByEmail($email);
        if ($existingEmail) {
            echo "Cet email est déjà utilisé par un autre utilisateur.";
            exit();
        }

        // Créer un nouvel utilisateur
        $user = new User();
        $user->setEmail($email);
        $user->setName($name);
        $user->setFirstName($firstname);
        $user->setPassword($password);

        // Inscrire l'utilisateur
        $userRepository->inscription($user);

        // Afficher un message de succès
        echo "Utilisateur enregistré avec succès : " . $user->getEmail();
    }
}
?>



<?php
require_once('src/model/classes/User.php');
require_once('src/controller/formController.php');
session_start();

// Importer le UserRepository
require_once('src/repository/UserRepository.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Instancier le UserRepository
    $userRepository = new UserRepository();

    // Vérifier si l'utilisateur existe
    $existingUser = $userRepository->getUserByEmail($email);
    if ($existingUser) {
        // Vérifier si le mot de passe est correct
        if ($userRepository->signin($email, $password)) {
            // L'utilisateur est connecté
            $_SESSION['user'] = $existingUser;

            // Rediriger vers une page de succès
            header('Location: ../../');
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
            exit();
        }
    } else {
        // Vérifier si les champs requis sont vides
        if (empty($email) || empty($password)) {
            echo "Veuillez remplir tous les champs.";
            exit();
        }

        // Vérifier si les mots de passe correspondent
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $confirmPassword = $_POST['verifmdp'];

        if ($password !== $confirmPassword) {
            echo "Les mots de passe ne correspondent pas.";
            exit();
        }

        // Vérifier si l'email est déjà utilisé
        $existingEmail = $userRepository->getUserByEmail($email);
        if ($existingEmail) {
            echo "Cet email est déjà utilisé par un autre utilisateur.";
            exit();
        }

        // Créer un nouvel utilisateur
        $user = new User();
        $user->setEmail($email);
        $user->setName($name);
        $user->setFirstName($firstname);
        $user->setPassword($password);

        // Inscrire l'utilisateur
        $userRepository->inscription($user);

        // Afficher un message de succès
        echo "Utilisateur enregistré avec succès : " . $user->getEmail();
    }
}

// Fonction pour supprimer un utilisateur
function deleteUser($id_user) {
    // Instancier le UserRepository
    $userRepository = new UserRepository();

    // Supprimer l'utilisateur
    $userRepository->deleteUserById($id_user);

    // Afficher un message de succès
    echo "Utilisateur supprimé avec succès " ;
}

// Fonction pour mettre à jour les informations d'un utilisateur
function updateUser($email, $name, $firstname) {
    // Instancier le UserRepository
    $userRepository = new UserRepository();

    // Récupérer l'utilisateur par email
    $user = $userRepository->getUserByEmail($email);

    if ($user) {
        // Mettre à jour les informations de l'utilisateur
        $user->setName($name);
        $user->setFirstName($firstname);

        // Enregistrer les modifications
        $userRepository->updateUser($user);

        // Afficher un message de succès
        echo "Utilisateur mis à jour avec succès : " . $user->getEmail();
    } else {
        echo "Utilisateur introuvable.";
    }
}
?>
