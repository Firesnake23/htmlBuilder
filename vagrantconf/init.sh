#!/bin/bash
echo Initializing
echo Installing nginx
apt-get -y install nginx
sudo service nginx restart
echo installing php
apt-get -y install php7.2 php7.2-fpm php-xml php-xdebug php7.2-mbstring php7.2-zip
echo installing composer
apt-get -y install composer
