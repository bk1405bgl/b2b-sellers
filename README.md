# B2Bsellers

Little App, to add, show, update and delete **B2B-sellers** and display them to other B2B-sellers, so they can connect to each other.

## Routings

### Routing in ``routes/web.php``
### Controller in ``app/Http/Controllers/ListingController.php``

- Routing to main page ``/`` with the router method ``Route::get`` combined with the ``ListingController::class`` **index**
- Routing to details page of one selected listing ``/listings/{listing}`` with the router method ``Route::get`` combined with the ``ListingController::class`` **show** 
- Routing to create form for a new listing-element ``/listings/create`` with the router method ``Route::get`` combined with the ``ListingController::class`` **create**
- Routing to store the filled form ``/listings`` with the router method ``Route::post`` combined with the ``ListingController::class`` **store**
- Routing to show the edit form ``/listings/{listing}/edit`` with the router method ``Route::post`` combined with the ``ListingController::class`` **edit**
- Routing to send the data inside the filled edit form to the db ``/listings/{listing}`` with the router method ``Route::post`` combined with the ``ListingController::class`` **update**
- Routing to delete the one shown listing element ``/listings/{listing}`` with the router method ``Route::delete`` combined with the ``ListingController::class`` **destroy**

## Components

### in ``resources/views/components``

- one component to outsource repeating code (cards of the listings on the homepage) 
- another component to outsource repeating code (tags of the listings on homepage and on the details page of every single listing")
- one component for the flashing message, to be displayed after creating, updating or deleting any listing element
- one component for the hole layout, which wraps every page of the application
- one component to outsource code (the card element of every single details page)

## Maria-DB (MySQL) database

- made the configuration in ``.env`` file to connect to the mysql database
- created the db manually on phpmyadmin (DB_NAME = laravel)
- created migration to automatically create tables in the db
- in ``database/factories/ListingFactory.php`` created a factory to fill the database with dummy data to have something to display (used seeders and faker for this factory)

## Controller

### in ``app/Http/Controllers/ListingController.php``

#### implemented functions

- index()
- show()
- create()
- store()
- edit()
- update()
- destroy()

to tell the Routes, what to do exactly, when visiting these routes.

## CSS & Template

- CSS with Tailwind.
- Template existed already. Made little customizations and split it into components.
