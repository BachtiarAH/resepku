# Resepku

This project is to accomplice my Technical Assessment in [Metamataid](https://www.metamata.id/) as a test to take the interview session in the Internship Challenge From Home Batch 5 - Fullstack Developerrecruitment process. Using Laravel as backend and react js for the frontend.



## Prerequisites

Before getting started, ensure that you have the following installed:

 -   [PHP](https://www.php.net/) (>= 7.3)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/) (>= 12.0)
-   [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/) (optional)

## Getting Started

Follow these steps to set up and run the project:

1.  Clone the repository to your local machine:
    
    bashCopy code
    
    `git clone https://github.com/your-username/your-project.git` 
    
2.  Change to the project directory:
    
    bashCopy code
    
    `cd your-project` 
    
3.  Install the PHP dependencies:
    
    Copy code
    
    `composer install` 
    
4.  Install the Node.js dependencies:
    
    Copy code
    
    `npm install` 
    
    or if you prefer using Yarn:
    
    Copy code
    
    `yarn install` 
    
5.  Create a copy of the `.env` file:
    
    bashCopy code
    
    `cp .env.example .env` 
    
7.  Configure your database connection in the `.env` file.
    
8.  Run the database migrations:
    
    Copy code
    
    `php artisan migrate --seed` 
    
9.  Compile the frontend assets:
    
    arduinoCopy code
    
    `npm run dev` 
    
    or for production:
    
    arduinoCopy code
    
    `npm run build` 
    
    If you're using Yarn:
    
    arduinoCopy code
    
    `yarn run dev` 
    
    or for production:
    
    arduinoCopy code
    
    `yarn run production` 
    
10.  Start the development server:
    
   Copy code
    
    `php artisan serve` 
    
   This will start the Laravel development server. You can access the application at 	 
    `http://localhost:8000`.
    
   Note: If you prefer using a different server, make sure to configure it accordingly.
    

## Directory Structure

The project follows a standard Laravel directory structure with the addition of React components and assets. Here are the key directories:


-   `app/` - Contains the Laravel backend application code.
-   `resources/` - Contains the frontend assets and React components.
-   `routes/` - Contains the web routes.
-   `database/` - Contains the database migrations and seeders.
-   `public/` - Contains the compiled frontend assets.

## Further Information

For more information on how to use Laravel and React, please refer to their official documentation:

-   [Laravel Documentation](https://laravel.com/docs)
-   [React Documentation](https://react.dev/)
