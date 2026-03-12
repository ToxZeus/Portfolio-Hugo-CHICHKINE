# Portfolio - Hugo Chichkine

Portfolio personnel en PHP MVC, modernisé avec une couche TypeScript, une interface plus contemporaine et un déploiement GitHub Pages basé sur une génération statique.

## Stack

- PHP 7.4+
- TypeScript + esbuild
- JavaScript moderne
- Bootstrap 5
- HTML5 / CSS3
- GitHub Actions

## Installation

1. Cloner le dépôt.

```bash
git clone https://github.com/ToxZeus/Portfolio---Hugo-Chichkine.git
cd Portfolio---Hugo-Chichkine
```

2. Installer les dépendances PHP et frontend.

```bash
composer install
npm install
```

3. Générer les assets TypeScript.

```bash
npm run build
```

4. Lancer le serveur PHP.

```bash
php -S localhost:8000 -t public
```

## Scripts utiles

```bash
npm run build
composer test
composer analyze
php public/generate-static.php
```

## Git Flow recommandé

Le dépôt est pensé pour fonctionner avec un flux simple autour de `main` et `develop`.

- `main` contient ce qui est prêt à être déployé.
- `develop` centralise les intégrations avant merge vers `main`.
- `feature/*` pour les évolutions.
- `fix/*` pour les correctifs hors urgence.
- `hotfix/*` pour les corrections à sortir rapidement depuis `main`.

Un guide opérationnel est disponible dans `docs/git-flow.md`, avec un script PowerShell pour créer/publier rapidement les branches.

## Déploiement

Le workflow GitHub Actions construit les assets TypeScript puis génère la version statique avant déploiement sur GitHub Pages.

## Structure

```text
app/
config/
docs/
lang/
public/
scripts/
src/ts/
```

## License

MIT License