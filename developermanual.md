#DEVELOPER MANUAL



The following files are necessary to fully run tapFinder application:

about.jpeg - picture for about page.
adminlog.php - page that allows admin to add buildings to database.
background2.jpeg
buildingsearch.php - connects to database and queries building name.
Config.php - credentials for database
databaseDump.sql - queries to create database, add tables, buildings.
Db_config.php - update to database
update.sql - update to database
findstation.php - queries for database.
liveSearch.js - AJAX live search for database
logo.svg - tapfinder logo
logout.svg - icon for logout page
nobodyGuessAdminURL.php - login form for admin
register.php - allows user to register and adds credentials to database
signup.php - form for user to sign up
tapfinder.css - style for entire application
tapfinder.php - contains entire application with scrollable navigation
User.css - style for user page
userAdd.php - adds user to database
userAddSearch - allows user to save locations
userlogged.php - login page for user



Database schema:

Tables:
Admin - email and password for admins
Buildings- buildings on umd campus that contain water filling station
Room- description and room number of water filling station
User- name, email, and passwords of users
User_save - saves buildings for users
