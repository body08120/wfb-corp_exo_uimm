<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panneau administrateur</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
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


    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <main class="bg-rose">

        <?php include_once('view/includes/navbar.php'); ?>

        <div class="flex">

            <aside class="bg-grenat py-6 h-full w-max flex flex-col justify-around">
                <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xl font-semibold rounded hover:bg-gray-400"
                    href="index.php?admin=administration">Accueil administratif</a>
                <br />
                <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xl font-semibold rounded hover:bg-gray-400"
                    href="index.php?admin=utilisateurs">Gestion des utilisateurs</a>
                <br />
                <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xl font-semibold rounded hover:bg-gray-400"
                    href="index.php?admin=projets">Gestion des projets</a>
                <br />
                <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xl font-semibold rounded hover:bg-gray-400"
                    href="index.php?admin=articles">Gestion des articles</a>
                <br />
                <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xl font-semibold rounded hover:bg-gray-400"
                    href="index.php?admin=commentaires">Gestion des commentaires</a>
                <br />
                <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xl font-semibold rounded hover:bg-gray-400"
                    href="index.php?admin=faq">Gestion de la F.A.Q</a>
            </aside>

            <!-- __ -->

            <section class="m-auto px-8">
                <h1 class="tracking-widest text-center text-3xl font-semibold text-grenat md:text-4xl">Panneau
                    administratif</h1>
                <p class="tracking-wide text-justify text-sm text-blanc md:text-2xl">Bienvenue sur la section
                    administrative de notre site web. Ici, vous pouvez
                    gérer tous les aspects de votre compte utilisateur, y compris la modification de vos informations
                    personnelles, la réinitialisation de votre mot de passe et la gestion de vos préférences. Dans la
                    section "Projets", vous pouvez créer de nouveaux projets, les modifier ou les supprimer selon vos
                    besoins. De plus, la section "Articles" vous permet de rédiger et de publier des articles pertinents
                    liés à vos intérêts et à votre expertise. Vous pouvez également interagir avec vos lecteurs grâce à
                    la fonctionnalité de commentaire, où vous pouvez répondre à leurs questions et recevoir des
                    feedbacks précieux. Si vous avez des questions fréquemment posées, veuillez consulter notre section
                    FAQ qui fournit des réponses détaillées aux interrogations les plus courantes. N'hésitez pas à
                    explorer ces différentes sections pour tirer le meilleur parti de votre expérience sur notre site
                    web administratif.</p>
            </section>
        </div>


        <?php include_once('view/includes/footer.php'); ?>

    </main>

    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>