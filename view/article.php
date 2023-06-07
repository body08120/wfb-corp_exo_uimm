<?php

require_once('src\model\classes\Connect.php');

// Récupération des informations de l'article, des images et de la catégorie de l'article selon son ID
$id_article = $_GET['id_article'];

$stmt = $connect->prepare("SELECT a.*, ca.category, i.image_head, i.image_content, u.name AS user_name, u.firstname AS user_firstname
                          FROM articles AS a 
                          LEFT JOIN users AS u ON u.id_user = a.id_user
                          LEFT JOIN images AS i ON a.id_article = i.id_article
                          LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                          WHERE a.id_article = :id_article");

$stmt->bindParam(':id_article', $id_article, PDO::PARAM_INT);
$stmt->execute();
$article = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérification si un article a été trouvé avec l'ID spécifié
if (empty($article)) {
    echo "Aucun article trouvé avec l'ID spécifié.";
    exit;
}

// Récupération des informations spécifiques de l'article
$title = $article['title'];
$enunciate = $article['enunciate'];
$intro = $article['intro'];
$p1 = $article['p1'];
$p2 = $article['p2'];
$p3 = $article['p3'];
$conclusion = $article['conclusion'];
$date = $article['date'];
$timestamp = strtotime($date);
// Créer le nouveau format à partir du timestamp
$date = date("d-m-Y", $timestamp);
$category = $article['category'];
$image_head = $article['image_head'];
$image_content = $article['image_content'];
$user_name = $article['user_name'];
$user_firstname = $article['user_firstname'];

// Récupération des derniers articles (excluant l'article actuel)
$stmt = $connect->prepare("SELECT a.*, ca.category, i.image_head
                          FROM articles AS a
                          LEFT JOIN images AS i ON a.id_article = i.id_article
                          LEFT JOIN category_articles AS ca ON a.id_category_article = ca.id_category_article
                          WHERE a.id_article <> :id_article
                          ORDER BY a.date DESC
                          LIMIT 3");

$stmt->bindParam(':id_article', $id_article, PDO::PARAM_INT);
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
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
                <?= $title ?>
            </h1>
            <h2 class="text-rose not-italic uppercase">
                <?= $category ?>
            </h2>
            <h2>
                <?= $enunciate ?>
            </h2>
            <div class="img">
                <img src="<?= $image_head ?>" alt="cybersecurite" class="w-3/4 mx-auto my-4 lg:w-6/12">
            </div>
            <p class="intro w-3/4 mx-auto lg:w-2/4">
                <?= $intro ?>
            </p>
            <p class="paragraph_1 w-3/4 mx-auto lg:w-2/4">
                <?= $p1 ?>
            </p>
            <p class="paragraph_2 w-3/4 mx-auto lg:w-2/4">
                <?= $p2 ?>
            </p>
            <p class="paragraph_3 w-3/4 mx-auto lg:w-2/4">
                <?= $p3 ?>
            </p>
            <div class="img">
                <img src="<?= $image_content ?>" alt="cybersecurite" class="height-auto w-3/4 mx-auto my-4 lg:w-6/12">
            </div>
            <p class="conclusion w-3/4 mx-auto lg:w-2/4">
                <?= $conclusion ?>
            </p>
            <div id="share-buttons">
                <span class="mx-auto italic">
                    <?= $user_firstname, " " . $user_firstname . " - " . $date ?>
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

                <div id="cards" style="margin: auto;">

                    <?php foreach ($articles as $article): ?>
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