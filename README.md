# How to Run on local

Step -1   Download zip file 

Step -2   unzip it 

Step -3   Put gForm folder inside htdocs folder 

Step -4   Change in htdocs/gForm/environment.php. file (FOR MAC)
          
            <?php
               $env_server = "localhost";
               $env_username = "root";
               $env_password = "root";
               $env_database = "dB";
               $env_port = "8889";
            ?>

Step -5   in localhost:8888/phomyadmin/

Step -6   create database 

Step -7   Database name  "dB"

Step -8   Add Three tables from "./ls" directory in database name "dB". 

            1) fields.sql
            2) forms.sql
            3) users.sql

Step -9   Run in browser localhost:8888/gForm/
