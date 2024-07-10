FROM php:8.3.9-apache
WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql
COPY . .