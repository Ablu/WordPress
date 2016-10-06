#!/bin/bash

sudo yum install -y httpd mariadb-server mariadb php php-mysql 
sudo systemctl enable httpd
sudo systemctl enable mariadb

sudo systemctl start mariadb
echo "CREATE DATABASE wordpress" | sudo mysql
echo "GRANT ALL ON wordpress.* TO 'username'@'localhost' IDENTIFIED BY 'password'" | sudo mysql
echo "FLUSH PRIVILEGES" | sudo mysql

sudo cp -r * /var/www/html/
