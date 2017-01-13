Basic Listing Website
=====================

Alicia Sedarski
---------------

Built with:
  * Symfony PHP framework
  * MVC framework format
  * Twitter Bootstrap 3
  * NPM
  * Gulp
  * Bower
  * jQuery
  * Composer
  * PHP SendMail
  * Doctrine
  * mySQL

To run locally:
  * run `composer update`
  * run `php bin/console server:run`
  * Open <http://localhost:8000/>

To update the database after making changes to Entity files:
  * run `php bin/console doctrine:generate:entities AppBundle`
    - Generates getters and setters for all of the AppBundle Entities
  * run `php bin/console doctrine:schema:update --force`
    - Updates the database with the defined Entity schemas
  * run `php bin/console doctrine:schema:validate`
    - Verifies database is up to date
  * NOTE: run `php bin/console doctrine:schema:update --dump-sql`
    - Shows the differences between the database and the Entity
