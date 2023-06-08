<?php
require_once('src/model/classes/Article.php');

$articleRepository = new ArticleRepository();
$dev = 1;
$design = 2;
$ref = 3;

$articles = $articleRepository->getArticles();
$articlesDev = $articleRepository->getArticlesByCategory($dev);
$articlesDesign = $articleRepository->getArticlesByCategory($design);
$articlesRef = $articleRepository->getArticlesByCategory($ref);

// var_dump($articlesDesign);
// die();
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
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.css">

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
                        <?php foreach ($articles as $article): ?>
                            <a href="index.php?action=article&id_article=<?= $article->getIdArticle(); ?>">
                                <div class="card text-justify lg:tracking-wider">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $article->getImage(); ?>" alt="Image de fond"
                                                class="w-full mx-auto my-4">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_articles">
                                                        <?= $article->getTitle(); ?>
                                                    </h3>
                                                    <h4 class="hidden lg:block">
                                                        <?= substr($article->getEnunciate(), 0, 100) . '...'; ?>
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


                <div id="dev-section" class="mt-4" style="display: none;">
                    <div class="cards" style="margin: auto;">
                        <?php foreach ($articlesDev as $articleDev): ?>
                            <a href="index.php?action=article&id_article=<?= $articleDev->getIdArticle(); ?>">
                                <div class="card text-justify lg:tracking-widest">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $articleDev->getImage(); ?>" alt="Image de fond"
                                                class="w-full mx-auto my-4">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_articles">
                                                        <?= $articleDev->getTitle(); ?>
                                                    </h3>
                                                    <h4 class="hidden lg:block">
                                                        <?= substr($articleDev->getEnunciate(), 0, 100) . '...'; ?>
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
                    <div class="cards" style="margin: auto;">
                        <?php foreach ($articlesDesign as $articleDes): ?>
                            <a href="index.php?action=article&id_article=<?= $articleDes->getIdArticle(); ?>">
                                <div class="card text-justify lg:tracking-widest">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $articleDes->getImage(); ?>" alt="Image de fond"
                                                class="w-full mx-auto my-4">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_articles">
                                                        <?= $articleDes->getTitle(); ?>
                                                    </h3>
                                                    <h4 class="hidden lg:block">
                                                        <?= substr($articleDes->getEnunciate(), 0, 100) . '...'; ?>
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
                    <!-- MODIFIER FOREACH -->
                    <div class="cards" style="margin: auto;">
                        <?php foreach ($articlesRef as $articleRef): ?>
                            <a href="index.php?action=article&id_article=<?= $articleRef->getIdArticle(); ?>">
                                <div class="card text-justify lg:tracking-widest">
                                    <div class="card-content">
                                        <div class="card-image">
                                            <img src="<?= $articleRef->getImage(); ?>" alt="Image de fond"
                                                class="w-full mx-auto my-4">
                                        </div>
                                        <div class="card-info-wrapper">
                                            <div class="card-info">
                                                <div class="card-info-title">
                                                    <h3 class="category_articles">
                                                        <?= $articleRef->getTitle(); ?>
                                                    </h3>
                                                    <h4 class="hidden lg:block">
                                                        <?= substr($articleRef->getEnunciate(), 0, 100) . '...'; ?>
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
    <script src="assets/js/tabs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>