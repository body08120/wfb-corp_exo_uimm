# WFB Corp - Plateforme Web Collaborative

## 📋 À propos

**WFB Corp** est une plateforme web complète développée en **PHP 8.2** avec **MySQL 8.0**. Ce projet démontre une architecture **MVC propre** avec gestion d'authentification, CRUD complet et interface d'administration.

Projet de formation réalisé en **travail de groupe** (d'où l'importance de la structure et de la documentation).

## 🎯 Fonctionnalités principales

### Pages publiques
- 🏠 **Accueil** : Présentation de l'entreprise avec carousel Sequence.js
- 📝 **Articles** : Blog avec système de commentaires
- 📋 **Présentation** : Détails sur l'entreprise et l'équipe
- 💼 **Réalisations** : Galerie des projets réalisés
- 📄 **FAQ** : Questions fréquemment posées

### Système d'authentification
- 🔐 **Inscription** : Création de compte utilisateur
- 🔍 **Connexion** : Authentification sécurisée
- 👤 **Gestion de rôles** : Admin et utilisateurs standard

### Panneau d'administration
- 📄 **Gestion des articles** : CRUD complet (création, lecture, modification, suppression)
- 📋 **Gestion des projets** : Gestion des réalisations
- 🗣️ **Gestion des commentaires** : Modération des commentaires
- 📚 **Gestion de la FAQ** : Maintenance des questions/réponses
- 👥 **Gestion des utilisateurs** : Administration des comptes

## 🛠️ Technologies utilisées

| Technologie | Version | Utilisation |
|---|---|---|
| **PHP** | 8.2 | Backend et logique métier |
| **MySQL** | 8.0 | Base de données |
| **HTML5** | - | Structure sémantique |
| **CSS3** | - | Stylisation custom |
| **JavaScript** | - | Interactivité (Sequence.js carousel) |
| **Apache** | 2.4 | Serveur web |
| **Docker** | - | Containerisation |

## 📁 Architecture du projet

```
wfb-corp_exo_uimm/
├── index.php                          # Point d'entrée principal (routing)
├── src/
│   ├── controller/
│   │   ├── homeController.php         # Contrôleur pages publiques
│   │   └── adminController.php        # Contrôleur panel admin
│   └── model/
│       └── classes/
│           └── Connect.php             # Classe de connexion PDO
├── view/
│   ├── accueil.php                    # Page d'accueil
│   ├── articles.php                   # Liste des articles
│   ├── article.php                    # Détail d'un article
│   ├── presentation.php               # Page présentation
│   ├── realisations.php               # Galerie de projets
│   └── ...
├── assets/
│   ├── css/                           # Feuilles de styles
│   ├── images/                        # Images du site
│   └── fonts/                         # Polices (Font Awesome, etc.)
├── wfbcorp.sql                        # Dump de la base de données
├── docker-compose.yml              # Configuration Docker
└── README.md
```

## 🚀 Installation avec Docker

### Prérequis

- **Docker Desktop** : [Télécharger](https://www.docker.com/products/docker-desktop)
- **Docker Compose** : Inclus dans Docker Desktop
- **Git** : Pour cloner le repository

### Démarrage rapide

1. **Cloner le repository**
   ```bash
   git clone https://github.com/[votre-username]/wfb-corp.git
   cd wfb-corp_exo_uimm
   ```

2. **Lancer les conteneurs Docker**
   ```bash
   docker compose up -d
   ```

3. **Accéder au site**
   - Site : `http://localhost:8000`
   - Admin : `http://localhost:8000/?admin=administration`

4. **Arrêter les conteneurs**
   ```bash
   docker compose down
   ```

### Voir les logs

```bash
docker compose logs -f php
docker compose logs -f mysql
```

## 🔧 Configuration

### Identifiants de base de données (Docker)

- **Host** : `mysql` (dans Docker) ou `localhost:3306` (depuis l'extérieur)
- **User** : `wfbcorp_user`
- **Password** : `wfbcorp_pass`
- **Database** : `wfbcorp`

### Identifiants de base de données (Local/WAMP)

- **Host** : `localhost`
- **User** : `root`
- **Password** : (vide)
- **Database** : `wfbcorp`

### Accès à l'administration

Le rôle admin est actuellement en dur dans `index.php` (ligne 33) :
```php
$_SESSION['role_user'] = 2; // 2 = admin
```

**⚠️ Important** : À modifier en production pour une authentification réelle.

## 📝 Notes de développement

### Points forts
- ✅ Architecture MVC bien structurée
- ✅ Classe de connexion PDO réutilisable
- ✅ Gestion de sessions pour l'authentification
- ✅ Design riche avec Sequence.js carousel
- ✅ Configuration Docker automatique avec import SQL

### Points d'amélioration
- ⚠️ Authentification admin en dur (à sécuriser)
- ⚠️ Pas de validation/sanitization des entrées utilisateur
- ⚠️ Pas de protection CSRF sur les formulaires
- ⚠️ Pas de gestion d'erreurs globale
- ⚠️ Pas de tests unitaires

### Commandes Docker utiles

```bash
# Accéder au shell PHP
docker compose exec php bash

# Accéder à MySQL
docker compose exec mysql mysql -u wfbcorp_user -p wfbcorp

# Voir tous les conteneurs
docker compose ps

# Reconstruire les images
docker compose build --no-cache
```

## 📄 Licence

Projet de formation - Tous droits réservés © 2023
