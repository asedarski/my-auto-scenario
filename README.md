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
  * TWIG

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

Why I chose these technologies:
-------------------------------
  * Symfony
    - Symfony is an easy framework to get going on. It has the capabilites to route requests with ease.  
      It readily supports an MVC framework pattern. Symfony creates a strong backbone for a project.
  * MVC Framework pattern
    - MVC is a clear cut way to organize code and responsibility.
  * Twitter Bootstrap 3
    - Bootstrap provides a uniform method of creating stunning websites. The class based styling and positioning  
      of HTML objects is an easy to use and easy to understand method to design a website. In addition, Bootstrap  
      has extensive online documentation and templates to get up and running.
  * NPM
    - NPM was used to import Node Module packages such as Gulp.
  * Gulp
    - Gulp is a good way to minify CSS and JavaScript into one file. This is good to increase site security,  
      decreases the size of the CSS and JS files which speeds up the website.
  * Bower
    - Bower was used to install Bootstrap and jQuery into the project.
  * jQuery
    - jQuery is used for real-time feedback and refreshing single elements on a page.
  * Composer
    - Composer is a dependency manager for PHP to require/install dependencies necessary for a project.
  * PHP SendMail
    - As a built in service to PHP, SendMail is used to send emails from PHP code to a email provider.
  * Doctrine
    - Doctrine is an intermediary between the models in Symfony and the data stores in mySQL for database interaction.  
      It reduces the amount of boiler plate code necessary for inserts, updates, deletes, searches, etc.
  * mySQL
    - A relational database was used to easily create relationships between different data stores. For example, a  
      Listing has a Seller which has Reviews, each of which would have their own table. Additionally, following the  
      Single Responsibility Principle, each controller has the ability to interact with a single table. This can allow  
      for each controller to focus on the business logic for that table only. mySQL was chosen specifically because  
      it is easily integrateable with Symfony and Doctrine and it's free of cost.
  * TWIG
    - TWIG is a template engine used in conjuction with HTML. The primary benefit of using TWIG is the ability  
      to easily include other templates. A close secondary benefit is the clear and concise way to use variables  
      within the template. Additionally, there are several security features built into TWIG like automatic output  
      escaping.
