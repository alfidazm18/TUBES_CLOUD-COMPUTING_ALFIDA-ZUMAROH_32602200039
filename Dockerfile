FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install mysqli pdo pdo_mysql intl

COPY . /var/www/html/

WORKDIR /var/www/html

RUN sed -i "s|/var/www/html|/var/www/html/public|g" /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite
