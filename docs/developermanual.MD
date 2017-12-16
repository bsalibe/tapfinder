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



## Database schema: INST377

 ### Tables:
 
  #### Admin - email and password for admins 
  * admin_id (Primary Key) - int
  * admin_email - varchar
  * admin_password - varchar
  
  #### Buildings- buildings on umd campus that contain water filling station
  * building_id (Primary Key) - int
  * building_name - varchar
  * building_type - enum('residence','academic','other')
  * building_access - enum('accessible','not accessible')
  * building_location - enum('north','south')
  * building_community - varchar
  
  #### Room- description and room number of water filling station
  * room_id (Primary Key) - int
  * room_description - varchar
  * building_id - int
  * room_number - int
  
  #### User- name, email, and passwords of users
  * user_id (Primary Key) - int
  * email - varchar
  * password - varchar
  * user_first_name - varchar
  * user_last_name - varchar
  
  #### User_save - saves buildings for users
  * save_id (Primary Key) - int
  * user_id - int
  * building_id - int
