#!/bin/bash
echo "########################### Bienvenido a el script de instalacion de el programa ##########################"
echo "########################### Paso 1: Instalacion de el servidor http ######################################"
dnf install -y httpd
sudo systemctl start httpd
sudo systemctl enable httpd
firewall-cmd --permanent --add-service=http
firewall-cmd --permanent --add-service=https
firewall-cmd --reload

echo "############################ Paso 2: Instalacion de la base de datos MariaDB #############################"
dnf install mariadb-server mariadb -y
systemctl enable mariadb --now
mysql_secure_installation

echo "############################ Paso 3: Instalacion de PHP ##################################################"
dnf install http://rpms.remirepo.net/fedora/remi-release-36.rpm -y
dnf module enable php:remi-8.1 -y
sudo dnf install php -y
sudo dnf install php-cli php-fpm php-curl php-mysqlnd php-gd php-opcache php-zip php-intl php-common php-bcmath php-imagick php-xmlrpc php-json php-readline php-memcached php-redis php-mbstring php-apcu php-xml php-dom php-redis php-memcached php-memcache -y
systemctl restart httpd
echo "############################ Paso 4: Instalacion de phpMyAdmin ##################################"
dnf install phpMyAdmin -y
dnf install nano -y
nano /etc/httpd/conf.d/phpMyAdmin.conf
sudo systemctl restart httpd

echo "############################ Paso 5: Configuracion de usuarios. #####################"
useradd usuario1
passwd usuario1
echo "############################ ¡Instalacion completa! Se recomienda reiniciar e iniciar sesion con el usuario creado #####################"