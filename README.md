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
  * run `php bin/console doctrine:schema:update --force`
  * run `php bin/console doctrine:schema:validate` to verify database is up to date
  * NOTE: run `php bin/console doctrine:schema:update --dump-sql` to see differences between schema and Entity
