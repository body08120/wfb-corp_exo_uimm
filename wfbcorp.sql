-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2023 at 01:37 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wfbcorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `enunciate` varchar(255) NOT NULL,
  `intro` varchar(255) NOT NULL,
  `p1` longtext NOT NULL,
  `p2` longtext NOT NULL,
  `p3` longtext NOT NULL,
  `conclusion` longtext NOT NULL,
  `date` datetime NOT NULL,
  `id_category_article` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `articles_category_articles_FK` (`id_category_article`),
  KEY `articles_users0_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `enunciate`, `intro`, `p1`, `p2`, `p3`, `conclusion`, `date`, `id_category_article`, `id_user`) VALUES
(1, 'Les enjeux de la cybersécurité pour la création d\'un site web ou web mobile', 'Dans cet article, nous allons examiner les principaux enjeux de la cybersécurité dans la création d\'un site web ou web mobile, ainsi que les mesures à prendre pour assurer la sécurité de votre site.', 'La cybersécurité est devenue un enjeu majeur pour toutes les entreprises qui créent des sites web ou des applications mobiles. La sécurité des données et la protection de la vie privée sont des aspects essentiels pour garantir la confiance des utilisateur', 'L\'installation d\'un certificat SSL/TLS est une mesure cruciale pour protéger les données en transit entre les utilisateurs et le serveur. Le protocole HTTPS est la norme en matière de sécurité pour les sites web et garantit que toutes les données sont chiffrées avant d\'être transmises entre le navigateur de l\'utilisateur et le serveur. Ainsi, il est important de prendre des mesures pour garantir la sécurité des données des utilisateurs pendant leur navigation sur votre site web.', 'La gestion des mots de passe est également essentielle pour la sécurité de votre site web. Les mots de passe sont souvent la première ligne de défense contre les cyberattaques, il est donc important de les protéger. Nous recommandons d\'utiliser des mots de passe complexes, de ne jamais les réutiliser et de les changer régulièrement. La mise en place de politiques de gestion des mots de passe peut aider à prévenir les cyberattaques et à renforcer la sécurité de votre site.', 'Les mises à jour régulières du site web sont également importantes pour garantir la sécurité de votre site. Les mises à jour de sécurité peuvent inclure des correctifs pour des vulnérabilités identifiées ou des améliorations de la sécurité pour répondre aux nouvelles menaces. Il est important de garder à jour tous les logiciels et plugins utilisés pour votre site web, ainsi que de surveiller l\'activité du site pour détecter toute activité suspecte. Enfin, il est recommandé d\'investir dans des outils de sécurité pour protéger votre site contre les cyberattaques.', 'La cybersécurité est un aspect crucial dans la création d\'un site web ou web mobile. Chez WFB Corp, nous sommes conscients de l\'importance de la sécurité des données et avons mis en place des mesures de sécurité rigoureuses pour protéger vos informations. Nous recommandons également à tous nos clients de suivre les meilleures pratiques en matière de cybersécurité pour garantir la sécurité de leur site. En prenant des mesures pour protéger votre site web, vous pouvez garantir la sécurité des données de vos utilisateurs et la pérennité de votre entreprise.', '2023-05-23 08:52:56', 1, 2),
(2, 'Les implications des technologies d\'Intelligence Artificielle (IA) dans différents domaines', 'Les technologies d\'Intelligence Artificielle (IA) ont pris une place de plus en plus importante dans la vie actuelle, avec des implications dans de nombreux domaines, de la médecine à la finance en passant par l\'industrie et la communication.', 'L\'Intelligence Artificielle (IA) est en train de transformer plusieurs domaines tels que la médecine, l\'industrie, la finance et la communication. Les avantages de l\'IA sont nombreux, notamment en ce qui concerne l\'optimisation des processus, la prise de ', 'Dans le domaine médical, les IA peuvent aider les professionnels de la santé à diagnostiquer les maladies et à élaborer des plans de traitement. Les IA peuvent également surveiller les patients en temps réel et alerter les médecins en cas de problèmes. Les avantages de l\'IA en médecine sont multiples, car elles peuvent réduire les erreurs médicales et améliorer la qualité des soins.', 'Dans l\'industrie, les IA peuvent être utilisées pour optimiser la production en surveillant les processus et en prévoyant les pannes de machines. Les IA peuvent également être utilisées pour améliorer la qualité des produits en identifiant les défauts de manière plus efficace que les humains. En outre, l\'IA peut aider à automatiser les tâches répétitives et améliorer l\'efficacité globale de la production.', 'Dans le domaine de la finance, les IA peuvent être utilisées pour aider les investisseurs à prendre des décisions éclairées en analysant les tendances du marché et les données financières. Les IA peuvent également être utilisées pour détecter les fraudes financières en surveillant les transactions en temps réel. Les avantages de l\'IA en finance sont considérables, car elles peuvent aider à réduire les risques et à améliorer la rentabilité des investissements.', 'Les technologies d\'IA ont des implications majeures dans de nombreux domaines de la vie actuelle et offrent de nombreux avantages potentiels. Toutefois, il est important de reconnaître les risques qu\'elles peuvent présenter en termes de sécurité et de vie privée. Il est donc essentiel de mettre en place des protocoles de cybersécurité efficaces pour garantir leur utilisation sûre et responsable.', '2023-05-31 11:54:25', 1, 2),
(3, 'Le développement de jeux vidéo : une industrie en constante évolution', 'Découvrez le processus complexe du développement de jeux vidéo, les outils et technologies utilisés, ainsi que la diversité des genres de jeux.', 'Les jeux vidéo ont connu une croissance phénoménale ces dernières années, tant en termes de popularité que de développement. Ils sont devenus une industrie gigantesque, générant des milliards de dollars chaque année et offrant des possibilités de carrière', 'Le processus de développement de jeux vidéo commence par la conceptualisation et la création d\'un concept de jeu. Les équipes de concepteurs travaillent sur l\'élaboration d\'une idée originale, en définissant les mécanismes de jeu, l\'histoire et les objectifs du jeu. Cette phase est cruciale pour déterminer la direction du projet et captiver les joueurs potentiels.', 'Après la phase de conceptualisation, les équipes entament la phase de développement proprement dite. Les programmeurs, les artistes et les testeurs collaborent pour donner vie au jeu. Les moteurs de jeu tels que Unity ou Unreal Engine sont couramment utilisés pour créer des environnements 3D, des effets spéciaux et des animations. Les développeurs exploitent également des langages de programmation comme C++ et Java pour mettre en place les systèmes de jeu, les mécanismes de contrôle et les intelligences artificielles.', 'Le développement de jeux vidéo est une industrie en constante évolution, avec l\'émergence régulière de nouveaux outils et technologies. Les développeurs doivent rester à jour avec les dernières avancées pour offrir des expériences de jeu innovantes. Cependant, ils sont également confrontés à des défis tels que les délais de production, la gestion de projets complexes et la concurrence féroce sur le marché. La capacité à s\'adapter rapidement aux nouvelles tendances est essentielle pour réussir dans cette industrie compétitive.', 'En conclusion, le développement de jeux vidéo est un processus complexe qui implique la collaboration entre de multiples équipes. Les jeux vidéo sont développés en utilisant des moteurs de jeu et des langages de programmation, et de nouveaux outils et technologies émergent régulièrement pour stimuler l\'innovation. Les jeux vidéo offrent une grande diversité en termes de genres, allant des jeux de rôle (RPG) aux jeux de tir à la première personne (FPS), en passant par les jeux mobiles populaires. L\'industrie du jeu vidéo continue de prospérer, offrant des expériences interactives et captivantes aux joueurs du monde entier.', '2023-05-31 12:01:52', 3, 2),
(4, 'Le maquettage : l\'étape cruciale de la conception de sites web et web mobile', 'Découvrez l\'importance du maquettage dans le processus de conception, les outils utilisés et les bonnes pratiques pour créer des maquettes efficaces.', 'Le maquettage est une étape essentielle dans le processus de conception d\'un site web ou web mobile. C\'est à ce stade préliminaire que la représentation visuelle de la structure, du contenu et de la navigation du site est créée. Dans cet article, nous exp', 'Le maquettage peut être réalisé à la main sur papier ou à l\'aide de logiciels de conception d\'interface utilisateur tels que Sketch ou Figma. Quel que soit l\'outil utilisé, cette étape est cruciale pour définir la hiérarchie des informations et la disposition des éléments sur le site web. Elle permet de visualiser précisément l\'apparence et le fonctionnement du site avant de passer à la phase de développement.', 'Lors de la création de maquettes, il est essentiel de prendre en compte les besoins de l\'utilisateur final. Il faut également accorder une attention particulière à la typographie lisible, aux couleurs appropriées et aux images pertinentes pour renforcer l\'expérience utilisateur. Chaque détail compte, car les décisions prises à ce stade peuvent avoir un impact sur l\'ensemble du projet.\r\n', 'Les maquettes peuvent être présentées aux clients pour leur permettre de visualiser le projet avant sa réalisation. Elles peuvent également être utilisées pour tester l\'ergonomie et l\'accessibilité du site. En les partageant avec les parties prenantes, il est possible d\'obtenir des retours précieux qui permettront d\'améliorer le design et de répondre aux attentes des utilisateurs finaux.', 'En somme, le maquettage est une étape clé dans le processus de conception de sites web ou web mobile. Il permet de créer une représentation visuelle de la structure et de la navigation du site, tout en testant l\'ergonomie et l\'accessibilité. Les maquettes doivent être conçues avec une attention particulière aux détails afin de garantir que chaque décision prise à ce stade soit cohérente avec le projet final. Grâce au maquettage, les concepteurs peuvent présenter des designs attractifs et fonctionnels, en offrant une expérience utilisateur optimale aux visiteurs du site.', '2023-05-31 12:01:52', 2, 1),
(5, 'L\'importance du cahier des charges dans le développement d\'un site web ou web mobile', 'Découvrez pourquoi le cahier des charges est un document crucial, les éléments clés à inclure et son rôle dans le processus de développement.', 'Le cahier des charges joue un rôle essentiel dans le processus de développement d\'un site web ou web mobile. Il décrit en détail les besoins, les fonctionnalités, les objectifs et les contraintes techniques et financières du projet. Dans cet article, nous', 'Le cahier des charges doit être précis et détaillé afin de permettre aux développeurs de comprendre clairement les attentes du client. Il doit inclure des spécifications techniques telles que les langages de programmation, les frameworks et les bases de données à utiliser. Ces informations sont cruciales pour garantir que le site web sera développé en utilisant les outils et les technologies appropriés.\r\n', 'Il est important de décrire les fonctionnalités et les interactions souhaitées sur le site web dans le cahier des charges. Cela peut inclure des éléments tels que les formulaires de contact, les pages de paiement, les fonctionnalités de recherche, les galeries d\'images, etc. De plus, il est essentiel de préciser les types de contenus à inclure sur le site, comme le texte, les images, les vidéos, etc.\r\nLe cahier des charges doit également décrire les exigences en matière de conception, telles que le choix des couleurs, des typographies, des icônes et des images. L\'inclusion d\'exemples de sites web similaires peut aider les développeurs à comprendre l\'apparence et la convivialité souhaitées pour le site. Cela facilite la création d\'un design attrayant et cohérent avec les attentes du client.', 'En conclusion, le cahier des charges est un document clé dans le processus de développement d\'un site web ou web mobile. Il joue un rôle crucial en décrivant les besoins, les fonctionnalités, les objectifs, les contraintes techniques et financières du projet. Un cahier des charges précis et détaillé permet aux développeurs de comprendre les attentes du client et de travailler efficacement sur le développement du site. En incluant des informations sur les fonctionnalités, les contenus, la conception, les délais, le budget et les rôles de l\'équipe, le cahier des charges assure une meilleure communication et garantit que le site web répondra aux attentes du client.', 'En plus des aspects techniques et de conception, le cahier des charges doit inclure des informations sur les délais et le budget du projet. Il est essentiel de définir clairement les attentes en termes de calendrier afin de planifier efficacement le développement. De plus, le cahier des charges doit préciser les rôles et les responsabilités de chaque membre de l\'équipe, ce qui favorise une collaboration harmonieuse et une répartition claire des tâches.', '2023-05-31 12:06:23', 3, 2),
(6, 'blah', 'Découvrez pourquoi le référencement est crucial pour augmenter la visibilité d\'un site web dans les résultats de recherche organiques, ainsi que les éléments clés à prendre en compte pour optimiser le référencement.', 'Le référencement d\'un site web est un élément essentiel de sa stratégie de marketing numérique. Il vise à optimiser le contenu, la structure et la performance du site pour les moteurs de recherche, afin d\'améliorer sa visibilité et de générer du trafic or', 'La première étape du référencement consiste à effectuer une recherche de mots-clés pertinents pour le site web. Cette recherche permet de comprendre les termes de recherche utilisés par les internautes pour trouver des sites similaires. En optimisant le contenu du site autour de ces mots-clés, on améliore la pertinence du site pour les moteurs de recherche et sa capacité à attirer des visiteurs organiques.', 'L\'optimisation de la structure du site est également cruciale pour le référencement. Cela comprend l\'utilisation de balises de titre et de méta-descriptions pour aider les moteurs de recherche à comprendre le contenu de chaque page du site. Une structure de navigation claire et facile à utiliser est également importante pour faciliter l\'exploration du site par les moteurs de recherche.\r\nLa performance du site joue également un rôle important dans le référencement. Les sites web lents et peu réactifs peuvent être pénalisés dans les résultats de recherche. Il est donc essentiel d\'optimiser la vitesse de chargement du site et de s\'assurer qu\'il est compatible avec tous les appareils, y compris les appareils mobiles.', 'La création de liens est un autre aspect essentiel du référencement. Les liens entrants de sites de qualité et pertinents renforcent la crédibilité du site aux yeux des moteurs de recherche. Cependant, il est important de veiller à ce que ces liens soient de qualité et pertinents pour éviter toute pénalité', 'En conclusion, le référencement joue un rôle vital dans la stratégie de marketing numérique d\'un site web. En optimisant le contenu, la structure et la performance du site, ainsi qu\'en créant des liens de qualité, on peut augmenter la visibilité du site dans les résultats de recherche organiques. En suivant ces pratiques de référencement, un site web peut attirer un trafic organique qualifié et renforcer sa présence en ligne.', '2023-05-31 12:06:23', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_articles`
--

DROP TABLE IF EXISTS `category_articles`;
CREATE TABLE IF NOT EXISTS `category_articles` (
  `id_category_article` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_articles`
--

INSERT INTO `category_articles` (`id_category_article`, `category`) VALUES
(1, 'Développement Web'),
(2, 'Web Design'),
(3, 'Web Référencement');

-- --------------------------------------------------------

--
-- Table structure for table `category_projects`
--

DROP TABLE IF EXISTS `category_projects`;
CREATE TABLE IF NOT EXISTS `category_projects` (
  `id_category_project` int NOT NULL AUTO_INCREMENT,
  `category_project` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category_project`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_projects`
--

INSERT INTO `category_projects` (`id_category_project`, `category_project`) VALUES
(1, 'Site vitrine'),
(2, 'e-Commerce'),
(3, 'Application');

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
CREATE TABLE IF NOT EXISTS `code` (
  `id_code` int NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id_image_article` int NOT NULL AUTO_INCREMENT,
  `image_head` varchar(255) NOT NULL,
  `image_content` varchar(255) NOT NULL,
  `id_article` int DEFAULT NULL,
  PRIMARY KEY (`id_image_article`),
  KEY `images_articles_FK` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image_article`, `image_head`, `image_content`, `id_article`) VALUES
(1, 'assets\\images\\articles\\cybersecurity1.webp\r\n', 'assets\\images\\articles\\cybersecurity1.webp', 1),
(2, 'assets\\images\\articles\\AI.webp', 'assets\\images\\articles\\cybersecurity1.webp', 2),
(3, 'assets\\images\\articles\\gaming.webp', 'assets\\images\\articles\\dev.webp', 3),
(4, 'assets\\images\\articles\\web_design.webp', 'assets\\images\\articles\\conception-web-ligne.webp', 4),
(6, 'assets\\images\\articles\\developpement-site-web.webp', 'assets\\images\\articles\\concept-fournitures-bureau-milieu-travail-contemporain.webp', 5),
(7, 'assets\\images\\articles\\cept-idees-ecran-ordinateur-portable.webp', 'assets\\images\\articles\\dev.webp', 6);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id_project` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_category_project` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_project`),
  KEY `projects_category_projects_FK` (`id_category_project`),
  KEY `projects_users0_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `id_role` int DEFAULT NULL,
  `image_user` varchar(250) NOT NULL,
  `job_title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `users_role_FK` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `firstname`, `email`, `password`, `token`, `active`, `id_role`, `image_user`, `job_title`, `description`, `facebook`, `twitter`, `linkedin`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.net', '$2a$12$HaL1hxGsvtrCnFQxlYzcSurL8WfZBmbyOQu.XWvAnvGLuegmIeTfO', '', 1, 1, 'assets\\images\\equipe\\team_thumb2.jpg', '', '', '', '', ''),
(2, 'Lambda', 'Anonymous', 'la@net.com', '123456', '', 1, 2, '', 'Manager', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://fr-fr.facebook.com/', 'https://fr-fr.facebook.com/', 'https://fr-fr.facebook.com/');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_articles_FK` FOREIGN KEY (`id_category_article`) REFERENCES `category_articles` (`id_category_article`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_articles_FK` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_projects_FK` FOREIGN KEY (`id_category_project`) REFERENCES `category_projects` (`id_category_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_users0_FK` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_FK` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
