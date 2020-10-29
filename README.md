# Assignment Overview
Simple UI consisting of a login page, signup page, a user profile page and a change password page. The UI allows users to login/register an account with the system, view thier account details which include their name, city and profile picture, as well as change their password and/or logout. 

The pages loginsignup.php, profile.php and passwordchange.php are HTML files styled with CSS, while the rest are 'server-side' pages that assist in making the previous pages functional.

Note: I have not included error messages/alerts i.e when a user enters a wrong password, it should display incorrect password etc, instead when an error is encountered it goes to a specific page. Also, the profile page is still under construction.

# Deployment
To deploy/test out this UI you should do the following:
* Download a local server on your machine such as XAMPP, incase you already have one you can:
* Clone this repository onto your local machine and save it in the xampp htdocs folder in your windows drive as with any name of your choice.
* Start up Apache and MySQL on xampp and ensure they are running.
* Set up the database called *iaplabassignment* in XAMPP, details are in the util.php file.
* Import the *iaplabassignment.sql* file into the database which contains the users table.
* On your web browser, run the following prompt localhost/folder-name/loginsignup.php. This will display the main page.
