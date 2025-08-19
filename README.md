sudo apt install mysql-server -y
sudo apt install php libapache2-mod-php php-mysql -y
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html


# Dynamic-Website
CREATE DATABASE webdb;
USE webdb;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE USER 'webuser'@'localhost' IDENTIFIED BY 'webpass123';
GRANT ALL PRIVILEGES ON webdb.* TO 'webuser'@'localhost';
FLUSH PRIVILEGES;
EXIT;
