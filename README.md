
Based on <a href="https://www.weareriver.nz/development-test">this test</a>

To run pull this repo locally

Copy .env.example -> .env

Run <code>composer install</code>

Run <code>npm install</code>

On initial setup of the project run <code>php artisan migrate</code>

For Docker friendly environments run <code>docker-compose up -d</code>

On linux command line you can run from project root <code>./vendor/bin/sail up</code> (on Windows you will need to navigate to your project /mnt/c/Users/..)

Then navigate to http://localhost/

Notes: 

30 mins setup db migrations, routes, model, controllers & validation

30 mins Vue routes, views

30 mins Element UI (needed to use Element Plus for Vue3 compatibility)

30 mins markup & styles

30 mins Booking form

30 mins Booking Listings

30 mins Footer & general styles

30 mins Mobile & style tidy

I admit there is room for improvement, date & time format on the booking listings, calendar icon on the booking form,  sass could be structured better ie move out typography to separate style sheet, validation could be imported, error reporting could be improved, I would like to add a slider for the bookings list.
