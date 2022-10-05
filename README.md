# How to Run on Local 📖

- Must install PHP version (FOR WINDOWS) & (FOR MAC) Both
- Tutorial - https://www.youtube.com/watch?v=mVBe75aGBHQ


- Must install xampp (FOR WINDOWS) & MAMP (FOR MAC) 
- Tutorial - https://www.youtube.com/watch?v=at19OmH2Bg4

-------*---------*----------

Step -1   Download zip file 

Step -2   Unzip it & Rename it to "gForm"

Step -3   Put gForm folder inside :

          /Applications/MAMP/htdocs/  folder  (FOR MAC)
          C:/xampp/htdocs/            folder  (FOR WINDOWS)

Step -4   Change in /Applications/MAMP/htdocs/gForm/environment.php. file (FOR MAC)
          
            <?php
               $env_server = "localhost";
               $env_username = "root";
               $env_password = "root";
               $env_database = "gForm";
               $env_port = "8889";
            ?>

Step -4   Change in htdocs/gForm/environment.php file (FOR WINDOWS)
          
            <?php
              $env_server = "localhost:3306";
              $env_username = "root";
              $env_password = "";
              $env_database = "gForm";
              $env_port = "3306";
            ?>

Step -5   Setup dB open 

          localhost:8888/phpmyadmin/   (FOR MAMP)
          localhost/phpmyadmin/   (FOR XAMPP)

Step -6   Create database 

Step -7   Database name  "dB"

Step -8   Import the database from "/htdocs/gForm/gForm.sql" directory in database.

Step -9   Run in browser 

          localhost:8888/gForm/     (FOR MAMP)
          localhost/gForm/          (FOR XAMPP)


