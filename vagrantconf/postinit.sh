#!/bin/bash
echo Post init
echo configuring
sudo cp /vagrant/vagrantconf/default /etc/nginx/sites-available/default
sudo cp /vagrant/vagrantconf/php.ini /etc/php/7.2/fpm/
sudo cp /vagrant/vagrantconf/xdebug.ini /etc/php/7.2/mods-available
sudo service php7.2-fpm restart
cd /vagrant/
sudo cp /vagrant/vagrantconf/composer.json ./
su vagrant
composer install
sudo service nginx restart
echo end post init
touch /tmp/xdebug_remote.log
sudo chown vagrant /tmp/xdebug_remote.log