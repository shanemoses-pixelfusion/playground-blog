# Playground Blog
______________

A simple blog created as a playground project to play around with some new Laravel 5.5 features as well as use a MongoDB ORM instead of the usual MySQL.

___________

### Table of Contents:
 * [Getting Started](#getting-started)
 * [Setting up environment](#setting-up-environment)
 * [Build](#build)
 * [Migrate](#migrate)
 * [Serve](#serve)
____

 
 #### Getting Started
 First things first, make sure that your system meets all the requirements before you continue ahead 🙃
 
 Requirements

| PHP | MongoDB |
| --- | --- |
| v7.x | v3.4|
 
 
 ##### Setting up environment
 Once you've confirmed your system is ready to go, there's a couple more things to get through to ensure all is set!!!
 
 ###### Env
 Firstly, you will need your very own `.env` and have your values set so the application knows exactly what you want and where you want things to happen (i.e. File storage, DB storage and connections, etc...)
 
 Run in terminal:
 `cp .env.example .env`
 
 Then edit and make the changes as required.
 
 ###### Composer
 Then, we'll need to ensure we have all our dependancies around to make things a little easier 👌
 
 Run in terminal:
 `composer install`
 
 ##### Build
 Once composer is done fetching all our dependencies, you are ready to get the frontend dependencies as well as building of the assets and styles!
 
 Run in terminal:
 `npm install`
 
 This will now fetch and store the required node modules to ensure all is good and healthy within the Frontend of the application.
 
 ##### Migrate
 Sweet! We're nearly there... Now you will need to get your database ready by migrating all the tables for storing of the Users and Blog Posts
 
 Run in terminal:
 `php artisan migrate --seed`
 
 
 ##### Serve
 Lastly, phew we actually made it!.... Now you'll simply need to serve the application to access it and thats that! you're all set and ready to GOOOOOOOOOO 🏁
 
 Run in terminal:
 `php artisan serve`
 
 ____
 
 
 ## TODO:
 - [x] Auth
 - [x] Migrations
 - [x] Models
 - [x] API endpoints (Posts only, Topics to be done)
 - [x] Public View templates (Posts listing and single post view. Topics to be done)
 - [x] Admin View templates (Posts Create only. Topics views, create and edits to be done)
 - [ ] TDD and BDD (PHPUnit and Behat)
 - [ ] API Documentation (Swagger)
