<?php
session_start();
require_once('src/controller/homeController.php');
require_once('src/controller/adminController.php');



if (isset($_GET['action']) && $_GET['action'] !== '') {
    switch ($_GET['action']) {
        case 'presentation':
            vuePresentation();
            break;
        case 'articles':
            vueArticles();
            break;
        case 'article':
            vueArticle();
            break;
        case 'realisations':
            vueRealisations();
            break;
        case 'inscription':
            vueInscription();
            break;
        case 'connexion':
            vueLogin();
            break;
        
        // génère la home si aucun des cases n'est trouvé
    }
} elseif (isset($_GET['admin']) && $_GET['admin'] !== '') {
    //role rentrer en dur pour acceder panel admin
    $_SESSION['role_user'] = 2;
    if (isset($_SESSION['role_user']) && $_SESSION['role_user'] == 2) {
        switch ($_GET['admin']) {
            case 'administration':
                panelAdmin();
                break;
            case 'projets':
                crudProjects();
                break;
            case 'articles':
                crudPosts();
                break;
            case 'commentaires':
                crudComments();
                break;
            case 'faq':
                crudFaq();
                break;
            case 'utilisateurs':
                crudUsers();
                break;
            default:
                homepage();
                break;
        }
    } else {
        homepage();
    }
} else {
    homepage();
}
?>