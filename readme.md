# Pierre LeFournier website

## Installation

```bash
git clone git@github.com:valentinlym/PierreLeFournier_website.git
```
Modifier la ligne 22 du ficher `.env` avec l'identifiant et le mot de passe de votre base de données.

```bash
composer install
symfony console doctrine:database:create
symfony console doctrine:migration:migrate
yarn install
yarn run build
```
Vous devez importer des données de test dans votre base de données avec le fichier data.sql ainsi vous pourrez vous connecter au back office avec l’identifiant : `admin@exemple.com` et le mot de passe : `admin`. Parfait, maintenant vous pouvez lancer le projet via symfony serve, celui ci se lancera en mode production.

Vous pouvez modifier la ligne 18 du fichier .env avec `APP_ENV=dev` pour avoir le mode de développemnt de Symfony.

[Maquette Figma >](https://www.figma.com/file/PWRu9rtuNtih3ku9GFV29s/Projet-L3-IHM?type=design&node-id=1%3A4&mode=design&t=dhOpQGSZErU6r9K2-1)