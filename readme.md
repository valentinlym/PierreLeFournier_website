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
```