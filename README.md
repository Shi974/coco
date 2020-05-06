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

<!-- - rajouter colonne pour "type" ? différencier véto et user ? -->
- générer le auth -> multi auth
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

### Multi Auth infos

- [Package laravel/multiauth](https://github.com/bitfumes/laravel-multiauth) --> admin auth + user auth
- [playlist youtube package multiauth](https://www.youtube.com/playlist?list=PLe30vg_FG4OTO7KbQ6TByyY99AiSw1MDS)
- [tuto 5.2 multi auth 2 tables - texte](https://www.itsolutionstuff.com/post/laravel-52-multi-auth-example-using-auth-guard-from-scratchexample.html)
- [tuto 5.4 multi auth 2 tables - youtube](https://www.youtube.com/watch?v=iKRLrJXNN4M)
- [github : code du tuto youtube](https://github.com/DevMarketer/multiauth_tutorial/releases/tag/part_1)
- [article : change table and guard login](https://medium.com/@nasrulhazim/laravel-using-different-table-and-guard-for-login-bc426d067901)
- [tuto texte : multi auth](https://scotch.io/@sukelali/how-to-create-multi-table-authentication-in-laravel)
- [multi auth laravel 6](https://www.codermen.com/blog/123/how-to-make-multi-auth-in-laravel-6)