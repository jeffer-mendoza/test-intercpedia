FROM php:7.2-apache

RUN apt-get update
RUN apt-get install -y git zip unzip 

RUN a2enmod rewrite && service apache2 restart

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

expose 81