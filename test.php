<?php 

include('src/model/classes/Connect.php');

// Récupération de l'ID de l'article depuis l'URL
if (!isset($_GET['id'])) {
    echo "L'ID de l'article n'a pas été spécifié.";
    exit;
}
$id_articles = $_GET['id'];

// Informations selon article , images et catégorie de l'article d'après l'id de l'article
$stmt = $db->prepare("SELECT a.*, ca.category , i.image_head, i.image_content, u.name, u.firstname
                      FROM articles a 
                      INNER JOIN users u ON u.id_user = a.id_user
                      INNER JOIN images i ON a.id_category_article = i.id_category_article
                      INNER JOIN category_articles ca ON a.id_category_article = ca.id_category_article 
                      WHERE a.id_article = ?");
$stmt->execute([$id_articles]);
$articles = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nos réalisations</title>
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

<body class="bg-[#141414]">

    <?php

    include_once("view/includes/navbar.php");

    ?>

    <main class="h-full overflow-hidden flex items-center justify-center" style="background: #141414;">
        <div class="space-y-5 w-10/12">

            <div class="overflow-hidden rounded-xl border border-[#171717] bg-[#141414]-50 p-1 mt-6">
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
                    <div id="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/AI.webp" alt="artificial intelligence"
                                        width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <a href=""> <h3 class="category_articles">Pôle développement</h3></a>
                                            <h4>Les enjeux de la cybersécurité pour la création d'un site web ou web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/gaming.webp " alt="gaming" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle développement</h3>
                                            <h4>Le développement de jeux vidéo : une industrie en constante évolution
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/web_design.webp" alt="web design" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Le maquettage : l'étape cruciale de la conception de sites web et web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.webp"
                                        alt="cybersécutité" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle référencement</h3>
                                            <h4> L'importance du référencement dans la stratégie de marketing numérique
                                                d'un site web</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/dev.webp" alt="web design" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/framework.webp" alt="framework" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <i class="fa-duotone fa-otter"></i>
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle développement</h3>
                                            <h4>Blabla</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dev-section" class="mt-4" style="display: none;">
                    <div id="cards" style="margin: auto;">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/AI.webp" alt="cybersecurity" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle développement</h3>
                                            <h4>Les enjeux de la cybersécurité pour la création d'un site web ou web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/gaming.webp " alt="jeux vidéos" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle développement</h3>
                                            <h4>Le développement de jeux vidéo : une industrie en constante évolution
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/dev.webp" alt="développement informatique"
                                        width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/framework.webp" alt="framework" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <i class="fa-duotone fa-otter"></i>
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle développement</h3>
                                            <h4>Blabla</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="design-section" class="mt-4" style="display: none;">
                    <div id="cards" style="margin: auto;">

                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/gaming.webp " alt="gaming" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle développement</h3>
                                            <h4>Le développement de jeux vidéo : une industrie en constante évolution
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/web_design.webp" alt="design UI/UX" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Le maquettage : l'étape cruciale de la conception de sites web et web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.webp"
                                        alt="cybersécurité" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle référencement</h3>
                                            <h4> L'importance du référencement dans la stratégie de marketing numérique
                                                d'un site web</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/dev.webp" alt="web design" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="ref-section" class="mt-4" style="display: none;">
                    <div id="cards" style="margin: auto;">

                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/web_design.webp" alt="designer UI/UX"
                                        width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Le maquettage : l'étape cruciale de la conception de sites web et web
                                                mobile</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/concept-cybersecurite-ordinateur-gros-plan.webp"
                                        alt="référencement" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle référencement</h3>
                                            <h4> L'importance du référencement dans la stratégie de marketing numérique
                                                d'un site web</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="assets/images/articles/dev.webp" alt="Typographies" width="250px">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles">Pôle design</h3>
                                            <h4>Les tendances récentes en web design : Couleurs audacieuses,
                                                typographies imposantes et expériences centrées sur l'utilisateur</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </main>

    <?php

    include_once("view/includes/footer.php");

    ?>

    <!--SCRIPT CARDS-->
    <script src="assets/js/cards.js"></script>
    <script src="assets/js/tabs.js"></script>

    <!-- flowbite-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


</body>

</html>