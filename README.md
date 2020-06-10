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
- [Laravel/ui - authentification](https://laravel.com/docs/7.x/frontend)
- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
- [caouecs / Laravel-lang](https://github.com/caouecs/Laravel-lang)

## A faire

- Bulma min CSS
- créer un layout responsive
  - head avec css
  - header
  - footer
  - main div container
- créer les pages
  - carnet de santé
  - modification fiche animal via compte user
  - modification fiche animal via compte véto
  - délimiter les modifications et vues possibles p/r compte connecté ==> **POLICIES** --> *wip*
- modifier les pages
  - fiche animal via scan
  - dashboard user (home)
  - dashboard véto (veto_home)
  - connexion
  - dashboards
  - inscription
  - mot de passe perdu
- encryption des id fiche dans l'URL
- BDD : rajouter une note sur l'animal, ex : "a peur des lumières vives (lampe torche), sinon est assez câlin"

### Fait

- Génération des models
- Multi auth
- Single session
- Langue FR dans locale + fichiers de trad
- AnimalController --resource
- créer des seeds
- Pages : fiche scan, profil user, profil véto, connexion véto

### URL Encrypt

- [jenssegers/optimus](https://github.com/jenssegers/optimus) --> package : transform id's to obfuscated integers
- [laravel/hashids](https://packagist.org/packages/hashids/hashids) --> package
- [hashids](https://hashids.org/) --> php module : transform id's to random strings
- [Laravel – How to encrypt ids in URL?](https://codersk.com/laravel-how-to-encrypt-ids-in-url/#:~:text=Method%202%3A%20Using%20The%20inbuilt,value%20using%20a%20decrypt%20helper.)

### Laravel Gates

- [Tutoriel Laravel : Gates et Policies - Grafikart.fr // YOUTUBE](https://www.youtube.com/watch?v=U_DoLOi2H0w)

### Single session

- [Laravel multi auth -> session check](https://pusher.com/tutorials/multiple-authentication-guards-laravel#set-up-the-controllers)
- [Single Session Login in Laravel](https://stackoverflow.com/questions/19510220/single-session-login-in-laravel)
- [Laravel allow one session per user](https://stackoverflow.com/questions/56437984/laravel-allow-one-session-per-user)
- [Laravel: Only allowing one session per user at a time](https://stackoverflow.com/questions/27938186/laravel-only-allowing-one-session-per-user-at-a-time)
- [Recherche Google](https://www.google.com/search?client=firefox-b-d&q=laravel+allow+only+one+auth)

### Multi Auth infos

- [multi auth laravel 6](https://www.codermen.com/blog/123/how-to-make-multi-auth-in-laravel-6) --> architecture multi construite avec ce tuto
- [Multiple Authentication in Laravel (Admins + User) / Youtube](https://www.youtube.com/watch?v=RuBO6RATkLs) --> architecture multi basée avec ce tuto
- [Package laravel/multiauth](https://github.com/bitfumes/laravel-multiauth) --> admin auth + user auth
- [playlist youtube package multiauth](https://www.youtube.com/playlist?list=PLe30vg_FG4OTO7KbQ6TByyY99AiSw1MDS)
- [tuto 5.2 multi auth 2 tables - texte](https://www.itsolutionstuff.com/post/laravel-52-multi-auth-example-using-auth-guard-from-scratchexample.html)
- [tuto 5.4 multi auth 2 tables - youtube](https://www.youtube.com/watch?v=iKRLrJXNN4M)
- [github : code du tuto youtube](https://github.com/DevMarketer/multiauth_tutorial/releases/tag/part_1)
- [article : change table and guard login](https://medium.com/@nasrulhazim/laravel-using-different-table-and-guard-for-login-bc426d067901)
- [tuto texte : multi auth](https://scotch.io/@sukelali/how-to-create-multi-table-authentication-in-laravel)
