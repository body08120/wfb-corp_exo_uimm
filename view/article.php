<?php
require_once('helpers/autoloader.php');

// Récupération des informations de l'article, des images et de la catégorie de l'article selon son ID
$id_article = $_GET['id_article'];

$articleRepository = new ArticleRepository();
$article = $articleRepository->getArticleById($id_article);

$articles = $articleRepository->getArticles(3);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $article->getTitle(); ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,900&display=swap"
        rel="stylesheet">
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
    <link rel="stylesheet" href="assets/css/articles.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <?php include_once "view/includes/navbar.php"; ?>

    <section class="featured-image m-4">
        <article class="article mt-4">
            <h1 class="text-4xl m-4">
                <?= $article->getTitle(); ?>
            </h1>
            <h2 class="text-rose not-italic uppercase">
                <?= $article->getCategoryArticle(); ?>
            </h2>
            <h2>
                <?= $article->getEnunciate(); ?>
            </h2>
            <div class="img">
                <img src="<?= $article->getImage(); ?>" alt="cybersecurite" class="w-3/4 mx-auto my-4 lg:w-6/12">
            </div>
            <p class="intro w-3/4 mx-auto lg:w-2/4">
                <?= $article->getIntro(); ?>
            </p>
            <p class="paragraph_1 w-3/4 mx-auto lg:w-2/4">
                <?= $article->getP1(); ?>
            </p>
            <p class="paragraph_2 w-3/4 mx-auto lg:w-2/4">
                <?= $article->getP2(); ?>
            </p>
            <p class="paragraph_3 w-3/4 mx-auto lg:w-2/4">
                <?= $article->getP3(); ?>
            </p>
            <div class="img">
                <img src="<?= $article->getImageContent(); ?>" alt="cybersecurite" class="height-auto w-3/4 mx-auto my-4 lg:w-6/12">
            </div>
            <p class="conclusion w-3/4 mx-auto lg:w-2/4">
                <?= $article->getConclusion(); ?>
            </p>
            <div id="share-buttons">
                <span class="mx-auto italic">
                    <?= $article->getAuteur() . " - " . $article->getFormattedDate(); ?>
                </span>
                <span>Partager</span>
                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://exemple.com/projet_wfb/article.php"
                    class="facebook" target="_blank"><i class="fab fa-facebook" style="color: #fff;"></i></a>
                <!-- Twitter -->
                <a href="https://twitter.com/share?url=https://exemple.com/projet_wfb/article.php&text=Nouvel article sur mon site web"
                    class="twitter" target="_blank"><i class="fab fa-twitter" style="color: #fff;"></i></a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://exemple.com/projet_wfb/article.php&title=Les enjeux de la cybersécurité pour la création d'un site web ou web mobile&summary=Dans cet article, nous allons examiner les principaux enjeux de la cybersécurité dans la création d'un site web ou web mobile, ainsi que les mesures à prendre pour assurer la sécurité de votre site."
                    class="linkedin" target="_blank"><i class="fab fa-linkedin" style="color: #fff;"></i></a>
            </div>
            <hr>
            <div id="all-section-article" class="mt-4 w-full">
                <h2 class="m-10 no-italic">Ces articles pourraient vous intéresser</h2>

                <div class="cards" style="margin: auto;">

                    <?php foreach ($articles as $article): ?>
                        <a href="index.php?action=article&id_article=<?= $article->getIdArticle(); ?>">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-image">
                                        <img src="<?= $article->getImage(); ?>" alt="cybersecurite" width="250px">
                                    </div>
                                    <div class="card-info-wrapper">
                                        <div class="card-info">
                                            <div class="card-info-title">
                                                <h3 class="category_article">
                                                <?= $article->getTitle(); ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>
                <a href="index.php?action=articles" class="w-fit m-auto flex justify-center button-twitch bg-transparent text-blanc font-semibold hover:text-white py-2 px-4 border border-rose hover:border-transparent rounded mt-8 mb-20">
		<span class="z-10">Voir tous les articles</span>
		</a>

            </div>
            <?php include_once "view/includes/footer.php"; ?>
        </article>
    </section>
    <script src="assets/js/cards.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>


</html>