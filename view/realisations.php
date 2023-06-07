<?php 
require_once('src/model/classes/Connect.php');

// Récupération des 6 derniers projets ajoutés
$stmt_all = $connect->prepare("SELECT p.*, cp.category_project
                              FROM projects AS p
                              INNER JOIN users AS u ON u.id_user = p.id_user
                              INNER JOIN category_projects AS cp ON p.id_category_project = cp.id_category_project
                              ORDER BY p.id_project DESC
                              LIMIT 6"); 
$stmt_all->execute();
$project_all = $stmt_all->fetchAll(PDO::FETCH_ASSOC);


// Récupération des 6 derniers projets avec la catégorie "Site Vitrine"
$stmt_vitrine = $connect->prepare("SELECT p.*, cp.category_project
                              FROM projects AS p
                              INNER JOIN users AS u ON u.id_user = p.id_user
                              INNER JOIN category_projects AS cp ON p.id_category_project = cp.id_category_project
                              WHERE cp.category_project = 'Site Vitrine'
                              ORDER BY p.id_project DESC
                              LIMIT 6"); 
$stmt_vitrine->execute();
$project_vitrine = $stmt_vitrine->fetchAll(PDO::FETCH_ASSOC);

// Récupération des 6 derniers articles avec la catégorie "e-Commerce"
$stmt_commerce = $connect->prepare("SELECT p.*, cp.category_project
                              FROM projects AS p
                              INNER JOIN users AS u ON u.id_user = p.id_user
                              INNER JOIN category_projects AS cp ON p.id_category_project = cp.id_category_project
                              WHERE cp.category_project = 'e-Commerce'
                              ORDER BY p.id_project DESC
                              LIMIT 6"); 
$stmt_commerce->execute();
$project_commerce = $stmt_commerce->fetchAll(PDO::FETCH_ASSOC);

// Récupération des 6 derniers articles avec la catégorie "Application"
$stmt_app = $connect->prepare("SELECT p.*, cp.category_project
                              FROM projects AS p
                              INNER JOIN users AS u ON u.id_user = p.id_user
                              INNER JOIN category_projects AS cp ON p.id_category_project = cp.id_category_project
                              WHERE cp.category_project = 'Application'
                              ORDER BY p.id_project DESC
                              LIMIT 6"); 
$stmt_app->execute();
$projet_application = $stmt_app->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="fr">

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


<body class="bg-primary">

    <?php include_once('includes/navbar.php') ?>

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
                            Sites vitrines</a>
                    </li>
                    <li class="l flex-1">
                        <a href="#design-section"
                            class="t text-gray-300 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Sites e-commerces
                        </a>
                    </li>
                    <li class="l flex-1">
                        <a href="#ref-section"
                            class="t text-gray-300 relative flex items-center justify-center gap-2 rounded-lg bg-[#141414] px-3 py-2 shadow hover:bg-[#171717] hover:text-gray-500">
                            Applications
                        </a>
                    </li>
                </ul>

                <div id="all-section" class="mt-4">
                    <div class="cards" style="margin: auto;">
                    <?php foreach($project_all as $rowall): 
                        ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="<?php echo $rowall['image']?>" alt="artificial intelligence"
                                        width="100%">
                                </div> 
                                <div class="card-info-wrapper">
                                    <div class="card-info"> 
                                        <div class="card-info-title"> 
                                            <h3 class="category_articles"><?php echo $rowall['title']?></h3>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>

                <div id="dev-section" class="mt-4" style="display: none;">
                    <div class="cards" style="margin: auto;">
                    <?php foreach($project_vitrine as $rowall): 
                        ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="<?php echo $rowall['image']?>" alt="cybersecurity" width="100%">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles"><?php echo $rowall['title']?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="design-section" class="mt-4" style="display: none;">
                    <div class="cards" style="margin: auto;">

                    <?php foreach($project_commerce as $rowall): 
                        ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="<?php echo $rowall['image']?>" alt="cybersecurity" width="100%">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles"><?php echo $rowall['title']?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div id="ref-section" class="mt-4" style="display: none;">
                    <div class="cards" style="margin: auto;">
                    <?php foreach($projet_application as $rowall): 
                        ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-image">
                                    <img src="<?php echo $rowall['image']?>" alt="cybersecurity" width="100%">
                                </div>
                                <div class="card-info-wrapper">
                                    <div class="card-info">
                                        <div class="card-info-title">
                                            <h3 class="category_articles"><?php echo $rowall['title']?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <?php include_once('includes/footer.php') ?>


    <!--SCRIPT CARDS-->
    <script src="assets/js/cards.js"></script>
    <script src="assets/js/tabs.js"></script>

    <!-- flowbite-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


</body>

</html>