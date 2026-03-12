# Git Flow du projet

## Branches de référence

- `main` : version stable et déployable.
- `develop` : branche d'intégration pour les évolutions en cours.
- `feature/*` : nouvelles fonctionnalités.
- `fix/*` : corrections ciblées qui ne nécessitent pas un hotfix production.
- `hotfix/*` : correctifs urgents démarrés depuis `main`.

## Cadence recommandée

L'idée n'est pas de faire de gros commits tardifs. Il vaut mieux pousser après chaque étape cohérente : layout, animation, build, documentation, correctif.

Exemples de découpage utile :

```bash
git checkout develop
git pull origin develop
git checkout -b feature/modern-homepage

git add .
git commit -m "feat(hero): redesign landing section"
git push -u origin feature/modern-homepage

git add .
git commit -m "feat(frontend): add typescript asset pipeline"
git push

git add .
git commit -m "fix(ci): build frontend assets before static deploy"
git push
```

## Séquence type

### Nouvelle feature

```bash
git checkout develop
git pull origin develop
git checkout -b feature/nom-court
```

Puis, à chaque incrément stable :

```bash
git add .
git commit -m "feat(scope): message clair"
git push -u origin HEAD
```

### Correctif non urgent

```bash
git checkout develop
git pull origin develop
git checkout -b fix/nom-court
```

### Hotfix

```bash
git checkout main
git pull origin main
git checkout -b hotfix/nom-court
```

## Règles simples

- Garder les branches courtes.
- Pousser après chaque bloc de travail testable.
- Préférer plusieurs petits commits ciblés à un seul commit large.
- Rebaser ou merger `develop` avant d'ouvrir la PR si la branche a vécu plusieurs jours.
- Utiliser des messages explicites : `feat`, `fix`, `chore`, `docs`.

## Script d'aide

Un script PowerShell est fourni pour démarrer et publier rapidement une branche : `scripts/git-flow.ps1`.