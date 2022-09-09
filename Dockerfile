FROM php:8.1-apache

# Change the current working directory
WORKDIR /var/www/html

# Install necessary packages
RUN apt-get update -y && apt-get install -y libmariadb-dev

# Install PHP Extensions
RUN docker-php-ext-install mysqli 

# Change the owner of the container document root
RUN chown -R www-data:www-data /var/www