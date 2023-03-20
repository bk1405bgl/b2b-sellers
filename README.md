# B2Bsellers

Little App, to add B2B-sellers and display them to other B2B-sellers, so they can connect to each other.

## Routings
- [] Routing to main page "/" (later combined with Controller)
- [] Routing to details page of one selected listing "/listings/n" (later combined with Controller)

## Components
- [] one component to outsource repeating code (cards of the listings on "/") 
- [] another component to outsource repeating code (tags of the listings on "/" & "/listings/n")

## Maria-DB (MySQL) database
- [] made the configuration in .env file to connect to the mysql database
- [] created the db manually on phpmyadmin
- [] created migration to automatically create tables in the db
- [] in "database/factories/ListingFactory.php" created a factory to fill the database with dummy data to have something to display (used seeders for this)

## Services

## Controller
- [] app/Http/Controllers/ListingController.php
- [] Created Controller class and now have less Code in resources/routes/web.php to show the index page with all listings "/"
- [] Created Controller class and now have less Code in resources/routes/web.php to show the details page with one selected listing "/listings/n"
