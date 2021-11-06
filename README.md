# GestionFactures

## 1-create new project :
  composer global require laravel/installer
  laravel new factures
## 2- generate auth :
    composer require laravel/ui
    php artisan ui bootstrap
    php artisan ui bootstrap --auth
    npm install && npm run dev

## 3/guide d'installation:
    Les étapes D'installation:
    -composer install
    -php artisan key:generate
    -creer la base de donnees : stars
    -php artisan migrate --seed ou importer directement le fichier stars.sql 
    -php artisan serve
