# How to Run on local 📖

- Must installed xampp (FOR WINDOWS) & MAMP (FOR MAC) 

Step -1   Download zip file 

Step -2   unzip it 

Step -3   Put gForm folder inside 

          /Applications/MAMP/htdocs/  folder  (FOR MAC)
          C:/xampp/htdocs/            folder  (FOR WINDOWS)

Step -4   Change in /Applications/MAMP/htdocs/gForm/environment.php. file (FOR MAC)
          
            <?php
               $env_server = "localhost";
               $env_username = "root";
               $env_password = "root";
               $env_database = "dB";
               $env_port = "8889";
            ?>

Step -4   Change in htdocs/gForm/environment.php. file (FOR WINDOWS)
          
            <?php
              $env_server = "localhost:3306";
              $env_username = "root";
              $env_password = "";
              $env_database = "dB";
              $env_port = "3306";
            ?>

Step -5   Setup db open 

          localhost:8888/phpmyadmin/   (FOR MAC)
          localhost/phpmyadmin/   (FOR WINDOWS)

Step -6   Create database 

Step -7   Database name  "dB"

Step -8   Add Three tables from "./ls" directory in database name "dB". 

            1) fields.sql
            2) forms.sql
            3) users.sql

Step -9   Run in browser 

          localhost:8888/gForm/     (FOR MAC)
          localhost/gForm/          (FOR WINDOWS)


