# CarListingsPlusPlus
This is the Sencha CarListings tutorial with a Laravel5 back end used to demonstrate how Laravel and Sencha can be used in conjunction. 

The Sencha CarListings can be found [here in the sencha documentation](http://docs.sencha.com/architect/3/tutorials/first_desktop_application.html).


The Laravel back end has been built from the ground up using [Laravel 5](http://www.laravel.com). 

The integration of the two frameworks is actually pretty simple:

- Create the Laravel project
- Create the Sencha project within the Laravel public folder
- Make sure you keep **both** the `index.html` (sencha) and `index.php` (laravel) files
- In the laravel router, have the main root "/" redirect to `index.html`
- Point your Sencha store(s) to the other routes you define in the Laravel router

