# CoCo

## Installation

*prérequis* : avoir **Composer** et **Laravel installés** sur la machine

- cloner le repo
- copier coller le *.env.example* en **.env**
- modifier le .env avec les **infos bdd locale**
- run la commande *composer install*
- run la commande (au cas où) *composer update*
- run la commande *php artisan key:generate*
- run la commande *php artisan migrate*
- run la commande *php artisan serve*

## Packages utilisés

- [reliese/laravel](https://github.com/reliese/laravel) : génération de models

## A faire

- rajouter colonne pour "type" ? différencier véto et user ?
- générer le auth
- générer models
- créer des seeds
- créer un layout
  - head avec bootstrap cdn
  - header
  - footer
  - main div container
- créer les pages
  - fiche animal via scan
  - mon compte
  - fiche animal via compte
- modifier les pages
  - connexion
  - inscription
  - mot de passe perdu
