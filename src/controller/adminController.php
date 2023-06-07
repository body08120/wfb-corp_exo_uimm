<?php

function panelAdmin()
{
    require_once('view/admin/admin.php');
}

function vueInscription()
{
    require_once('view/admin/signupForm.php');
}
function vueLogin()
{
    require_once('view/admin/loginForm.php');
}

function crudUsers()
{
    require_once('view/admin/crud-utilisateur.php');
}

function crudPosts()
{
    require_once('view/admin/crud-article.php');
}

function crudProjects()
{
    require_once('view/admin/crud-projets.php');
}

function crudComments()
{
    require_once('view/admin/crud-commentaires.php');
}

function crudFaq()
{
    require_once('view/admin/crud-faq.php');
}