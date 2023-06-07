<?php
require_once('src/model/classes/Connect.php');


// Récupération des 6 derniers articles ajoutés
$stmt_all = $connect->prepare("SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                              FROM articles AS a 
                              INNER JOIN users AS u ON u.id_user = a.id_user
                              INNER JOIN images AS i ON a.id_article = i.id_article
                              INNER JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article 
                              ORDER BY a.date DESC
                              LIMIT 6");
$stmt_all->execute();
$articles_all = $stmt_all->fetchAll(PDO::FETCH_ASSOC);

// Récupération des 6 derniers articles avec la catégorie "Développement Web"
$stmt_dev = $connect->prepare("SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                              FROM articles AS a 
                              INNER JOIN users AS u ON u.id_user = a.id_user
                              INNER JOIN images AS i ON a.id_article = i.id_article
                              INNER JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                              WHERE ca.category = 'Développement Web'
                              ORDER BY a.date DESC
                              LIMIT 6");
$stmt_dev->execute();
$articles_dev = $stmt_dev->fetchAll(PDO::FETCH_ASSOC);

// Récupération des 6 derniers articles avec la catégorie "Web Design"
$stmt_design = $connect->prepare("SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                                 FROM articles AS a 
                                 INNER JOIN users AS u ON u.id_user = a.id_user
                                 INNER JOIN images AS i ON a.id_article = i.id_article
                                 INNER JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article 
                                 WHERE ca.category = 'Web Design'
                                 ORDER BY a.date DESC
                                 LIMIT 6");
$stmt_design->execute();
$articles_design = $stmt_design->fetchAll(PDO::FETCH_ASSOC);

// Récupération des 6 derniers articles avec la catégorie "Web Référencement"
$stmt_ref = $connect->prepare("SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                              FROM articles AS a 
                              INNER JOIN users AS u ON u.id_user = a.id_user
                              INNER JOIN images AS i ON a.id_article = i.id_article
                              INNER JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article 
                              WHERE ca.category = 'Web Référencement'
                              ORDER BY a.date DESC
                              LIMIT 6");
$stmt_ref->execute();
$articles_ref = $stmt_ref->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nos articles</title>
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1D1D1F',
                        card: '#1C242A',
                        blanc: '#F1F5F2',
                        rose: '#8c7284',
                        grenat: '#70163c',
                    }
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <!--CARDS HEADER -->
    <link rel="stylesheet" href="assets/css/cards.css">

    <!--flowbite-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

</head>

<body class="bg-primary">

    <?php
    include_once("view/includes/navbar.php");
    ?>

    <main class="h-full overflow-hidden flex items-center justify-center">
        <div class="space-y-5 w-full">
            <div class="overflow-hidden rounded-xl bg-[#141414]-50 p-1 mt-6">
                <ul class="flex items-center gap-2 text-sm font-medium ">
                    <li class="l flex-1">
                        <a href="#all-section"
                            class="t text-gray-300 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Tous</a>
                    </li>
                    <li class="l flex-1">
                        <a href="#dev-section"
                            class="t text-gray-300 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Pôle développement</a>
                    </li>
                    <li class="l flex-1">
                        <a href="#design-section"
                            class="t text-gray-300 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Pôle graphique
                        </a>
                    </li>
                    <li class="l flex-1">
                        <a href="#ref-section"
                            class="t text-gray-300 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Expert en référencement
                        </a>
                    </li>
                </ul>

                <div id="all-section" class="mt-4">

                    <div class="cards" style="margin: auto;">
                        <?php foreach ($articles_all as $article):  ?>
                            <?php 
                            $id_article = $article['id_article'];
                            $category = $article['category'];
                            $title = $article['title'];
                            $image_head = $article['image_head'];
                        ?>
                        <a href="index.php?action=article&id_article=<?= $article['id_article'] ?>">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="<?= $image_head ?>" alt="cybersecurite" class="w-full mx-auto my-4">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                                <h3 class="category_articles"><?= $category ?></h3>
                                            <h4><?= $title ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <div id="dev-section" class="mt-4" style="display: none;">
                <div class="cards" style="margin: auto;">
                        <?php foreach ($articles_dev as $article): ?>
                            <a href="index.php?action=article&id_article=<?= $article['id_article'] ?>">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $article['image_head'] ?>" alt="cybersecurite" width="250px">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_article">
                                                        <?= isset($article['category']) ? $article['category'] : '' ?>
                                                    </h3>
                                                    <h4>
                                                        <?= isset($article['title']) ? $article['title'] : '' ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="design-section" class="mt-4" style="display: none;">
                <div id="cards" style="margin: auto;">
                        <?php foreach ($articles_design as $article): ?>
                            <a href="index.php?action=article&id_article=<?= $article['id_article'] ?>">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $article['image_head'] ?>" alt="cybersecurite" width="250px">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_article">
                                                        <?= isset($article['category']) ? $article['category'] : '' ?>
                                                    </h3>
                                                    <h4>
                                                        <?= isset($article['title']) ? $article['title'] : '' ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="ref-section" class="mt-4" style="display: none;">
                    <div id="cards" style="margin: auto;">
                        <?php foreach ($articles_ref as $article): ?>
                            <a href="index.php?action=article&id_article=<?= $article['id_article'] ?>">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $article['image_head'] ?>" alt="cybersecurite" width="250px">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_article">
                                                        <?= isset($article['category']) ? $article['category'] : '' ?>
                                                    </h3>
                                                    <h4>
                                                        <?= isset($article['title']) ? $article['title'] : '' ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </main>

    <?php

    include_once("view/includes/footer.php");

    ?>

    <script>
        const sections = ['all-section', 'dev-section', 'design-section', 'ref-section'];

        sections.forEach((sectionId) => {
            const section = document.getElementById(sectionId);
            const link = document.querySelector(`a[href="#${sectionId}"]`);

            link.addEventListener('click', (e) => {
                e.preventDefault();

                // Hide all sections
                sections.forEach((id) => {
                    document.getElementById(id).style.display = 'none';
                });

                // Show selected section
                section.style.display = 'block';
            });
        });
    </script>
        <script src="assets/js/cards.js"></script>

</body>

</html>