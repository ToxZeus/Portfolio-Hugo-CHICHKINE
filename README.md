# Portfolio - Hugo Chichkine

Ce portfolio est développé avec PHP, utilisant une architecture MVC et des technologies modernes pour une meilleure maintenabilité et performance.

## 🛠 Technologies utilisées

- PHP 7.4+
- JavaScript (ES6+)
- Bootstrap 5
- HTML5 & CSS3

## 🚀 Installation

1. Cloner le repository :
```bash
git clone https://github.com/ToxZeus/Portfolio---Hugo-Chichkine.git
cd Portfolio---Hugo-Chichkine
```

2. Installer les dépendances :
```bash
composer install
```

3. Configurer le serveur web :
   - Point d'entrée : public/index.php
   - Configuration Apache ou Nginx nécessaire

4. Lancer le serveur de développement :
```bash
php -S localhost:8000 -t public
```

## 📁 Structure du projet

```
├── app/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   │   └── templates/
│   ├── Translation.php
│   ├── Router.php
│   └── bootstrap.php
├── config/
│   └── config.php
├── lang/
│   ├── fr.json
│   └── en.json
├── public/
│   ├── assets/
│   │   ├── css/
│   │   └── js/
│   └── index.php
└── composer.json
```

## 🌍 Fonctionnalités

- Architecture MVC
- Support multilingue (FR/EN)
- Design responsive
- Navigation fluide
- Composants réutilisables
- Gestion moderne des assets

## 🔀 Git Flow

Le projet suit une stratégie Git Flow simple:

- `main`: branche de production (stable)
- `develop`: branche d'intégration (développement courant)
- `feature/*`: nouvelles fonctionnalités
- `release/*`: préparation de version
- `hotfix/*`: correction urgente de production

### Initialisation

```bash
git checkout main
git checkout -b develop
git push -u origin develop
```

### Créer une feature

```bash
git checkout develop
git checkout -b feature/nom-feature
```

### Préparer une release

```bash
git checkout develop
git checkout -b release/x.y.z
```

### Créer un hotfix

```bash
git checkout main
git checkout -b hotfix/x.y.z
```

## 🧩 Issues & Labels

Le dépôt contient des templates d'issues GitHub:

- `bug_report.yml` (bug)
- `feature_request.yml` (enhancement)
- `task.yml` (chore)

Les templates sont bilingues FR/EN.

Les labels sont synchronisés automatiquement via GitHub Actions avec:

- fichier source: `.github/labels.yml`
- workflow: `.github/workflows/sync-labels.yml`

Pour forcer une synchro manuelle depuis GitHub: Actions > `Sync Labels` > `Run workflow`.

## 📝 License

MIT License