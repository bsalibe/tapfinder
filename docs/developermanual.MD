# DEVELOPER MANUAL



## The following files are necessary to fully run tapFinder application:

 * about.jpeg - background picture for about tab
 * adminlog.php - page that allows admin to add buildings to database (Not implemented: future work)
 * background2.jpeg - background for the home tab
 * buildingsearch.php - connects to database and queries building name.
 * Config.php - credentials to login to database, called on by most pages that needs to call database
 * databaseDump.sql - queries to create database for this project named INST377
 * Db_config.php - update to database
 * update.sql - update to database
 * findstation.php - queries for database.
 * liveSearch.js - AJAX live search for database
 * logo.svg - tapfinder logo
 * logout.svg - icon for logout page
 * nobodyGuessAdminURL.php - login form for admin (Not implemented in the code: future work)
 * register.php - allows user to register and adds credentials to database, called on by signup.php
 * signup.php - form for user to sign up
 * tapfinder.css - CSS style for entire application, but bootstrap 4 is included in all pages as well
 * tapfinder.php - contains entire application with scrollable navigation, the first page that needs the user needs to see, without being logged in
 * userlogged.php - user logged in page, similar to tapfinder.php but includes user dashboard instead of login



## Database schema:

 ### Tables:
 * Admin - email and password for admins
 * Buildings- buildings on umd campus that contain water filling station
 * Room- description and room number of water filling station
 * User- name, email, and passwords of users
 * User_save - saves buildings for users
