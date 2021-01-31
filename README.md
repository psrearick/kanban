# Kanban

This is a basic Kanban board.


## Installation
1. Clone this repository: `git clone https://github.com/psrearick/kanbanext.git`
2. install dependencies: `composer install`
3. update `.env` file, specifically:
    * `APP_URL`
    * `DB_DATABASE`
    * `DB_USERNAME`
    * `DB_PASSWORD`
4. Generate an app key: `php artisan key:generate`
5. migrate the database: `php artisan migrate`
6. Install JavaScript dependencies: `npm i`
7. Compile Frontend: `npm run dev` for development or `npm run prod` for production
