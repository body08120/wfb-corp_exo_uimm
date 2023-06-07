<?php
require_once('src/model/classes/Article.php');

$articleRepository = new ArticleRepository();
$dev = 1;
$design = 2;
$ref = 3;

$arcticlesDev = $articleRepository->getArticlesByCategory($dev);
$arcticlesDesign = $articleRepository->getArticlesByCategory($design);
$arcticlesRef = $articleRepository->getArticlesByCategory($ref);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WFB Corp - Présentation</title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

  <!-- LOAD JQUERY LIBRARY -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>

  <!--slider content-->
  <link href="assets/css/sequence-theme.two-up.css" rel="stylesheet" media="all" />

  <!-- LOADING FONTS AND ICONS -->
  <link href="http://fonts.googleapis.com/css?family=Roboto%3A900%2C400" rel="stylesheet" property="stylesheet"
    type="text/css" media="all" />
  <link href="http://fonts.googleapis.com/css?family=Poppins:700|Oswald:300" rel="stylesheet" property="stylesheet"
    type="text/css" media="all">

  <link rel="stylesheet" type="text/css" href="assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="assets/css/settings.css">
  <!-- REVOLUTION LAYERS STYLES -->
  <link rel="stylesheet" type="text/css" href="assets/css/layers.css">
  <!-- REVOLUTION NAVIGATION STYLES -->
  <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">

  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="assets/js/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="assets/js/revolution.extension.video.min.js"></script>
</head>

<body class="bg-primary">

  <!--nav bar section-->
  <?php include_once('view/includes/navbar.php'); ?>

  <!--header section-->
  <div id="header" class=" h-[400px] flex bg-primary lg:h-[600px]">
    <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
      <div>
        <h1 class="text-3xl font-semibold text-rose md:text-4xl">
          Boostez votre présence en ligne avec <span class="text-grenat">notre expertise</span>
        </h1>
        <p class="mt-2 text-sm text-gray-500 md:text-base">
          Nous sommes une équipe passionnée et compétente spécialisée dans les domaines du développement, du
          référencement et du graphisme. Découvrez comment nous pouvons vous aider à atteindre vos objectifs en ligne
        </p>
        <div class="flex justify-center lg:justify-start mt-6">
          <a class="px-4 py-3 bg-grenat text-gray-200 text-xs font-semibold rounded hover:bg-gray-800"
            href="#sequence">Découvrir</a>
          <a class="mx-4 px-4 py-3 bg-gray-300 text-grenat text-xs font-semibold rounded hover:bg-gray-400"
            href="#team">Notre équipe</a>
        </div>
      </div>
    </div>
    <div class="hidden lg:block lg:w-1/2" style="clip-path: polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
      <div class="h-full object-cover"
        style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);">
        <div class="h-full bg-black opacity-25"></div>
      </div>
    </div>
  </div>

  <!--section presentation-->
  <div id="sequence" class="seq">
    <div class="seq-nav">
      <ul role="navigation" aria-label="Pagination" class="seq-pagination">
        <li>
          <a href="#step1" rel="step1"><span class="numeral">1</span><span class="seq-tooltip">Pôle
              développement</span></a>
        </li>
        <!--
            -->
        <li>
          <a href="#step2" rel="step2"><span class="numeral">2</span><span class="seq-tooltip">Pôle
              référencement</span></a>
        </li>
        <!--
            -->
        <li>
          <a href="#step3" rel="step3"><span class="numeral">3</span><span class="seq-tooltip">Pôle
              graphique</span></a>
        </li>
      </ul>

      <button class="seq-next seq-swipe" type="button" aria-label="Next">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21.5" viewBox="30.4 23.7 20 21.5"
          enable-background="new 30.4 23.7 20 21.5" role="img" aria-labelledby="title-swipe-icon">
          <title id="title-swipe-icon">Swipe</title>
          <path
            d="M33 23.7c-.1 0-.3.1-.4.2l-2.1 2.1c-.2.2-.2.6 0 .9l2.1 2.1c.2.2.6.2.9 0s.2-.6 0-.9l-1.1-1.1h5.2c.3 0 .6-.3.6-.6s-.3-.6-.6-.6h-5.2l1.1-1.1c.2-.2.3-.6 0-.9-.1-.1-.2-.1-.5-.1zm14.6 0c-.3 0-.6.3-.6.7 0 .1.1.3.2.4l1.1 1.1h-5.2c-.3 0-.6.3-.6.6s.2.5.6.5h5.2l-1.1 1.1c-.2.2-.2.6 0 .9s.6.2.9 0l2.1-2.1c.2-.2.2-.6 0-.9l-2.1-2.1c-.2-.2-.3-.2-.5-.2zm-7.3 1.3c-.8 0-1.4.6-1.4 1.4v8.8c-.5-.6-1.1-1.3-1.6-1.6-.3-.2-.7-.4-1.1-.4-.7 0-1.2.5-1.3 1.2-.1.8.4 1.6.8 2.2l1.5 2.4 1.2 1.9c.6 1 .7 1.8.7 2.9v1.2c0 .1.1.2.2.2h8.2c.1 0 .2-.1.2-.2.1-.8.2-1.6.4-2.4.7-2 1.3-3.9 1.3-6.4v-4c0-.8-.6-1.4-1.4-1.4-.4 0-.7.1-1.2.6 0-.8-.6-1.4-1.4-1.4-.5 0-.9.2-1.2.6-.1-.7-.7-1.2-1.4-1.2-.5 0-.9.2-1.2.6v-3.5c.2-.8-.5-1.5-1.3-1.5z" />
        </svg>
      </button>
    </div>

    <button class="seq-next-button seq-next" type="button" aria-label="Next">
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="16.1 -0.7 60 60"
        enable-background="new 16.1 -0.7 60 60" role="img" aria-labelledby="title-down-arrow">
        <title id="title-down-arrow">Précedent/Suivant</title>
        <path d="M46.407 1.399l27.435 27.435-28.213 28.213-27.435-27.435z" />
        <path fill="#fff"
          d="M46.1 59.3l-30-30 30-30 30 30-30 30zm-22.9-30l22.9 22.9 22.9-22.9-22.9-22.9-22.9 22.9zM39.278 23.872l11.031 11.031-4.172 4.172-11.031-11.031zM57.172 28.079l-11.031 11.031-4.172-4.172 11.031-11.031z" />
      </svg>
    </button>

    <div class="seq-screen">
      <ul class="seq-canvas">
        <li class="step1 seq-in">
          <div data-seq class="seq-feature seq-half">
            <div class="relative" style="background-image: url(assets/images/step1.png)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="assets/images/step1.png" alt="Un gros plan de feuilles de fougère verte" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-valign">
            <!--section-->
            <div>
              <h2 class="px-2 text-grenat">
                <span class="uppercase tracking-widest">Pôle développement</span>

                <hr />
                <span class="text-2xl">Notre méthode au centre du processus de développement de
                  notre division.</span>
              </h2>

              <h3 class="leading-6 text-xl px-4 py-4 text-rose">
                Pour la conception d'un site internet sur mesure, notre équipe
                met à votre disposition son savoir-faire. Nos experts en
                développement web abordent chaque projet avec une approche
                personnalisée et vous conseillent à chaque étape de la
                création de votre site internet. Vous bénéficiez d'un suivi de
                haute qualité et d'une expertise reconnue, quel que soit le
                type de support que vous choisissez : site internet, boutique
                en ligne, site vitrine, site responsive, etc. Ainsi, nous
                garantissons un rendu efficace, simple et intuitif pour vos
                utilisateurs.
              </h3>

              <!--CARDS DERNIERS ARTICLES-->
              <div class="flex justify-around py-4">

                <!-- UNE CARD1 -->
                <?php foreach ($arcticlesDev as $cardDev): ?>
                            <?php
                            $enunciate = $cardDev['enunciate'];
                            $title = $cardDev['title']; ?>

                              <div class="relative max-w-sm border border-gray-700 rounded-lg shadow hidden 2xl:block 2xl:mx-2">
                                <img src="<?= $cardDev['image_head']; ?>" alt="Image de fond"
                                  class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                                <div class="relative p-5 hover:bg-primary hover:bg-opacity-80">
                                    <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                                      <?= $title // TITRE ?> 
                                    </h5>
                                  <p class="mb-3 font-normal text-sm text-blanc">
                                    <?= substr($enunciate, 0, 50) . '...'; // ENONCER ?>
                                  </p>
                                  <a href="index.php?action=article&id_article=<?= $cardDev['id_article']; ?>"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Découvrir
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </a>
                                </div>
                              </div>
                <?php endforeach; ?>
                <!-- FIN CARD -->

              </div>
              <!--fin section-->

              <a class="seq-button rounded-[3px]" href="index.php?action=articles" target="_blank">VOIR PLUS</a>
            </div>
            <!--fin section-->
          </div>
        </li>

        <li class="step2">
          <div data-seq class="seq-feature seq-half seq-half-right">
            <div style="background-image: url(assets/images/step2.png)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="assets/images/step2.png"
                alt="Concentré sur une seule feuille d’automne suspendue à une fine branche. Plus de feuilles apparaissent floues en arrière-plan" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-half-left seq-valign">
            <!--section-->
            <div>
              <h2 class="px-2 text-grenat">
                <span class="uppercase tracking-widest">Expert en référencement</span>

                <hr />
                <span class="text-2xl">Le positionnement, la visibilité et le suivi sont des
                  éléments essentiels pour votre développement.
                </span>
              </h2>

              <h3 class="leading-6 text-xl px-4 py-4 text-rose">
                Notre équipe est là pour vous aider à augmenter votre
                visibilité sur les moteurs de recherche et les réseaux
                sociaux. De l'optimisation pour les moteurs de recherche (SEO)
                à la mise en place de campagnes Google AdWords (SEA) en
                passant par les médias sociaux, nos spécialistes vous aident à
                attirer un public ciblé et à vous rapprocher de vos futurs
                clients. La performance de vos campagnes digitales est
                étroitement étudiée afin d'ajuster votre stratégie,
                spécifiquement adaptée à votre secteur d'activité.
              </h3>

              <!--CARDS DERNIERS ARTICLES-->
              <div class="flex justify-around py-4">

                <!-- UNE CARD1 -->
                <?php foreach ($arcticlesRef as $cardRef): ?>
                            <?php
                            $enunciate = $cardRef['enunciate'];
                            $title = $cardRef['title']; ?>

                      <div class="relative max-w-sm border border-gray-700 rounded-lg shadow hidden 2xl:block 2xl:mx-2">
                        <img src="<?= $cardRef['image_head']; ?>" alt="Image de fond"
                          class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                        <div class="relative p-5 hover:bg-primary hover:bg-opacity-80">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                              <?= $title; ?>
                            </h5>
                          </a>
                          <p class="mb-3 font-normal text-sm text-blanc">
                            <?= $enunciate; ?>
                          </p>
                          <a href="index.php?action=article&id_article=<?= $cardRef['id_article']; ?>"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Découvrir
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                            </svg>
                          </a>
                        </div>
                      </div>
                <?php endforeach; ?>
                <!-- FIN CARD -->
              </div>
              <!--fin section-->

              <a class="seq-button rounded-[3px]" href="index.php?action=articles" target="_blank">VOIR PLUS</a>
            </div>
            <!--fin section-->
          </div>
        </li>

        <li class="step3">
          <div data-seq class="seq-feature seq-half seq-half-right">
            <div style="background-image: url(assets/images/step3.png)">
              <!-- This image is hidden via CSS and is only here for accessibility. The image shown is actually a background-image set via an inline style above -->
              <img src="assets/images/step3.png"
                alt="Un gros plan de plusieurs fleurs violettes avec des centres jaunes. Quelques gouttes de pluie s’assoient sur les pettels" />
            </div>
          </div>
          <div data-seq class="seq-content seq-half seq-half-left seq-valign">
            <!--section-->
            <div>
              <h2 class="px-2 text-grenat">
                <span class="uppercase tracking-widest">Pôle graphique</span>

                <hr />
                <span class="text-2xl">La créativité, le graphisme et l'esthétique sont les
                  principaux axes de notre équipe dédiée au design.
                </span>
              </h2>

              <h3 class="leading-6 text-xl px-4 py-4 text-rose">
                Que ce soit pour la création d'un nouveau logo, des besoins en
                webdesign ou une refonte complète de votre identité visuelle,
                notre studio graphique apporte ses idées et sa rigueur. Nous
                vous offrons des créations personnalisées et des propositions
                originales. De plus, notre équipe peut également gérer pour
                vous la conception graphique et l'impression de tous vos
                supports de communication, tels que les grands formats, les
                affiches, les flyers, les cartes de visite, et bien d'autres
                encore.
              </h3>

              <!--CARDS DERNIERS ARTICLES-->
              <div class="flex justify-around py-4">

                <!-- UNE CARD1 -->
                <?php foreach ($arcticlesDesign as $cardDes): ?>
                            <?php
                            $enunciate = $cardDes['enunciate'];
                            $title = $cardDes['title']; ?>

                    <div class="relative max-w-sm border border-gray-700 rounded-lg shadow hidden 2xl:block 2xl:mx-2">
                      <img src="<?= $cardDes['image_head']; ?>" alt="Image de fond"
                        class="absolute inset-0 w-full h-full object-cover filter blur" style="filter: blur(5px);" />
                      <div class="relative p-5 hover:bg-primary hover:bg-opacity-80">
                          <h5 class="mb-2 text-lg font-bold tracking-tight text-pink-800">
                            <?= $title ?>
                          </h5>
                        </a>
                        <p class="mb-3 font-normal text-sm text-blanc">
                          <?= $enunciate; ?>
                        </p>
                        <a href="index.php?action=article&id_article=<?= $cardDes['id_article']; ?>"
                          class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#70163C] rounded-lg hover:bg-[#8C7287] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Découvrir
                          <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                          </svg>
                        </a>
                      </div>
                    </div>
                    <!-- FIN CARD -->
                <?php endforeach; ?>
              </div>
              <!--fin section-->

              <a class="seq-button rounded-[3px]" href="index.php?action=articles" target="_blank">VOIR PLUS</a>
            </div>
            <!--fin section-->
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- section team -->
  <section id="team" class="example">
    <article class="content">
      <div id="rev_slider_1082_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="team"
        data-source="gallery" style="
            margin: 0px auto;
            padding: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
          ">
        <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
        <div id="rev_slider_1082_1" class="rev_slider fullwidthabanner" style="display: none" data-version="5.4.1">
          <ul>
            <!-- SLIDE  -->
            <li data-index="rs-3063" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="500"
              data-fsslotamount="7" data-saveperformance="off" data-title="First" data-param1="" data-param2=""
              data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
              data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_7.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3063-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 5;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3063-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 6; white-space: nowrap; text-transform: left">
                John Keller
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3063-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 7; white-space: nowrap; text-transform: left">
                Support Supervisor
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3063-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 8;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 5 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3063-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 9;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 6 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3063-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 10;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 7 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3063-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 11;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 8 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3063-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 12;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3064" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Second" data-param1=""
              data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
              data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_4.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 9 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3064-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 13;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 10 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3064-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 14; white-space: nowrap; text-transform: left">
                Maria Meyers
              </div>

              <!-- LAYER NR. 11 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3064-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 15; white-space: nowrap; text-transform: left">
                Graphic Designer
              </div>

              <!-- LAYER NR. 12 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3064-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 16;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 13 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3064-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 17;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 14 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3064-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 18;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 15 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3064-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 19;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 16 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3064-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 20;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3065" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Third" data-param1=""
              data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
              data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_9.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 17 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3065-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 21;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 18 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3065-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 22; white-space: nowrap; text-transform: left">
                Phil Schwartz
              </div>

              <!-- LAYER NR. 19 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3065-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 23; white-space: nowrap; text-transform: left">
                Public Relations
              </div>

              <!-- LAYER NR. 20 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3065-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 24;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 21 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3065-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 25;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 22 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3065-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 26;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 23 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3065-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 27;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 24 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3065-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 28;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3066" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Fourth" data-param1=""
              data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
              data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_5.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 25 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3066-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 29;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 26 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3066-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 30; white-space: nowrap; text-transform: left">
                Lisa Jameson
              </div>

              <!-- LAYER NR. 27 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3066-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 31; white-space: nowrap; text-transform: left">
                Customer Support
              </div>

              <!-- LAYER NR. 28 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3066-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 32;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 29 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3066-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 33;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 30 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3066-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 34;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 31 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3066-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 35;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 32 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3066-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 36;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3067" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Fifth" data-param1=""
              data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
              data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_6.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 33 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3067-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 37;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 34 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3067-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 38; white-space: nowrap; text-transform: left">
                Tom Miller
              </div>

              <!-- LAYER NR. 35 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3067-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 39; white-space: nowrap; text-transform: left">
                Conception
              </div>

              <!-- LAYER NR. 36 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3067-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 40;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 37 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3067-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 41;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 38 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3067-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 42;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 39 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3067-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 43;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 40 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3067-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 44;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3068" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Sixth" data-param1=""
              data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
              data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 41 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3068-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 45;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 42 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3068-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 46; white-space: nowrap; text-transform: left">
                Jenny Lieblich
              </div>

              <!-- LAYER NR. 43 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3068-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 47; white-space: nowrap; text-transform: left">
                CEO
              </div>

              <!-- LAYER NR. 44 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3068-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 48;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 45 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3068-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 49;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 46 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3068-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 50;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 47 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3068-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 51;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 48 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3068-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 52;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3069" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
              data-hideslideonmobile="off" data-easein="Power1.easeInOut" data-easeout="Power1.easeInOut"
              data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-title="Seventh" data-param1=""
              data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
              data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/images/equipe/team_2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina />
              <!-- LAYERS -->

              <!-- LAYER NR. 49 -->
              <div class="tp-caption tp-shape tp-shapewrapper" id="slide-3069-layer-4"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full"
                data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                data-responsive_offset="off" data-responsive="off"
                data-frames='[{"from":"opacity:0;","speed":500,"to":"o:1;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 53;
                    text-transform: left;
                    background-color: rgba(0, 0, 0, 0.25);
                    border-color: rgba(0, 0, 0, 0.5);
                    border-width: 0px;
                  "></div>

              <!-- LAYER NR. 50 -->
              <div class="tp-caption Team-Name tp-resizeme" id="slide-3069-layer-1"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['300','250','220','150']"
                data-fontsize="['70','70','50','50']" data-lineheight="['70','70','50','50']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 54; white-space: nowrap; text-transform: left">
                Maria Peters
              </div>

              <!-- LAYER NR. 51 -->
              <div class="tp-caption Team-Position tp-resizeme" id="slide-3069-layer-2"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['370','320','270','200']"
                data-fontsize="['30','30','20','20']" data-lineheight="['30','30','20','20']" data-width="none"
                data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;","delay":250,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                style="z-index: 55; white-space: nowrap; text-transform: left">
                Vice President
              </div>

              <!-- LAYER NR. 52 -->
              <div class="tp-caption Team-Description tp-resizeme" id="slide-3069-layer-3"
                data-x="['left','left','left','left']" data-hoffset="['150','100','50','30']"
                data-y="['top','top','top','top']" data-voffset="['450','400','320','250']"
                data-fontsize="['18','18','15','15']" data-lineheight="['28','28','25','25']"
                data-width="['640','640','640','360']" data-height="none" data-whitespace="normal" data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"x:-50px;opacity:0;","speed":500,"to":"o:1;rZ:360;","delay":500,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"x:50px;opacity:0;","ease":"Power1.easeInOut"}]'
                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 56;
                    min-width: 640px;
                    max-width: 640px;
                    white-space: normal;
                    text-transform: left;
                  ">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart. I am alone, and feel the charm of existence in
                this spot, which was created for the bliss of souls like mine.
              </div>

              <!-- LAYER NR. 53 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.facebook.com/themepunchofficial"
                target="_blank" id="slide-3069-layer-5" data-x="['left','left','left','left']"
                data-hoffset="['130','80','30','10']" data-y="['top','top','top','top']"
                data-voffset="['620','550','430','390']" data-width="50" data-height="none" data-whitespace="nowrap"
                data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 57;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-facebook"></i>
              </a>

              <!-- LAYER NR. 54 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://twitter.com/themepunch" target="_blank"
                id="slide-3069-layer-7" data-x="['left','left','left','left']" data-hoffset="['180','130','80','60']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 58;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-twitter"></i>
              </a>

              <!-- LAYER NR. 55 -->
              <a class="tp-caption Team-Social tp-resizeme" href="https://www.linkedin.com" target="_blank"
                id="slide-3069-layer-8" data-x="['left','left','left','left']" data-hoffset="['230','180','130','110']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','387']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 59;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-linkedin"></i>
              </a>

              <!-- LAYER NR. 56 -->
              <a class="tp-caption Team-Social tp-resizeme" href="mailto:support@envato.com" target="_self"
                id="slide-3069-layer-9" data-x="['left','left','left','left']" data-hoffset="['280','230','180','160']"
                data-y="['top','top','top','top']" data-voffset="['620','550','430','390']" data-width="50"
                data-height="none" data-whitespace="nowrap" data-type="text" data-actions="" data-responsive_offset="on"
                data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":500,"to":"o:1;sX:0.5;sY:0.5;","delay":750,"ease":"Power1.easeInOut"},{"delay":"wait","speed":500,"to":"auto:auto;","ease":"Power1.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0px 0px 0px 0px;"}]'
                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                    z-index: 60;
                    min-width: 50px;
                    max-width: 50px;
                    white-space: nowrap;
                    text-transform: left;
                    cursor: pointer;
                  "><i class="fa-icon-envelope"></i>
              </a>
            </li>
          </ul>
          <div styles="" class="tp-static-layers">
            <!-- LAYER NR. 57 -->
            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme tp-static-layer" id="slider-1082-layer-1"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="full"
              data-height="['100','100','100','50']" data-whitespace="nowrap" data-type="shape"
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"y:top;","speed":500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":8300,"speed":500,"to":"opacity:0;","ease":"nothing"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 61;
                  text-transform: left;
                  background-color: rgba(112, 22, 60, 0.25);
                  border-color: rgba(0, 0, 0, 0);
                  border-width: 0px;
                "></div>

            <!-- LAYER NR. 58 -->
            <div class="tp-caption Team-Thumb tp-resizeme tp-static-layer" id="slider-1082-layer-2"
              data-x="['center','center','center','center']" data-hoffset="['-453','-315','-315','-180']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3063","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;skX:0px;skY:0px;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);br:0 0 0px 0;"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 62;
                  line-height: 22px;
                  text-transform: left;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb7.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>

            <!-- LAYER NR. 59 -->
            <div class="tp-caption tp-resizeme tp-static-layer" id="slider-1082-layer-3"
              data-x="['center','center','center','center']" data-hoffset="['-302','-210','-210','-120']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3064","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);br:0px 0px 0px 0px;"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 63;
                  text-transform: left;
                  border-width: 0px;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb4.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>

            <!-- LAYER NR. 60 -->
            <div class="tp-caption tp-resizeme tp-static-layer" id="slider-1082-layer-4"
              data-x="['center','center','center','center']" data-hoffset="['-151','-105','-105','-60']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3065","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 64;
                  text-transform: left;
                  border-width: 0px;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb9.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>

            <!-- LAYER NR. 61 -->
            <div class="tp-caption tp-resizeme tp-static-layer" id="slider-1082-layer-5"
              data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3066","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 65;
                  text-transform: left;
                  border-width: 0px;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb5.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>

            <!-- LAYER NR. 62 -->
            <div class="tp-caption tp-resizeme tp-static-layer" id="slider-1082-layer-6"
              data-x="['center','center','center','center']" data-hoffset="['151','105','105','60']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3067","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 66;
                  text-transform: left;
                  border-width: 0px;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb6.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>

            <!-- LAYER NR. 63 -->
            <div class="tp-caption tp-resizeme tp-static-layer" id="slider-1082-layer-7"
              data-x="['center','center','center','center']" data-hoffset="['300','210','210','120']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3068","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 67;
                  text-transform: left;
                  border-width: 0px;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb3.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>

            <!-- LAYER NR. 64 -->
            <div class="tp-caption tp-resizeme tp-static-layer" id="slider-1082-layer-8"
              data-x="['center','center','center','center']" data-hoffset="['450','315','315','180']"
              data-y="['top','top','top','top']" data-voffset="['0','30','30','10']" data-width="none"
              data-height="none" data-whitespace="nowrap" data-type="image"
              data-actions='[{"event":"mouseenter","action":"jumptoslide","slide":"rs-3069","delay":""}]'
              data-responsive_offset="on" data-startslide="0" data-endslide="6"
              data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;sX:0.5;sY:0.5;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"500","ease":"Power2.easeInOut","to":"o:1;sX:1.01;sY:1.01;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);"}]'
              data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
              data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="
                  z-index: 68;
                  text-transform: left;
                  border-width: 0px;
                  cursor: pointer;
                ">
              <img src="assets/images/equipe/team_thumb2.jpg" alt="" data-ww="['200px','140px','140px','80px']"
                data-hh="['200px','140px','140px','80px']" width="300" height="300" data-no-retina />
            </div>
          </div>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important">
        </div>
        </div>
      </div>
      <!-- END REVOLUTION SLIDER -->
      <script type="text/javascript">
        var tpj = jQuery;

        var revapi1082;
        tpj(document).ready(function () {
          if (tpj("#rev_slider_1082_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1082_1");
          } else {
            revapi1082 = tpj("#rev_slider_1082_1")
              .show()
              .revolution({
                sliderType: "standard",
                jsFileLocation: "revolution/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                  onHoverStop: "off",
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1400, 1024, 778, 480],
                gridheight: [800, 700, 600, 500],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
                },
              });
          }
        }); /*ready*/
      </script>
    </article>
  </section>


  <!-- footer section -->
  <?php include_once('view/includes/footer.php'); ?>


  <!-- flowbite-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>


  <!-- slider script-->
  <script src="assets/scripts/imagesloaded.pkgd.min.js"></script>
  <script src="assets/scripts/hammer.min.js"></script>
  <script src="assets/scripts/sequence.min.js"></script>
  <script src="assets/scripts/sequence-theme.two-up.js"></script>

</body>

</html>