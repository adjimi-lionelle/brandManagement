FROM php:8.1-apache

# Install dépendancies
RUN apt-get update && apt-get install -y zlib1g-dev g++ git libicu-dev zip unzip 
    
RUN  docker-php-ext-install intl pdo pdo_mysql
     
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- &&  mv composer.phar /usr/local/bin/composer 
     
RUN a2enmod rewrite     

WORKDIR /var/www

COPY apache.conf /etc/apache2/sites-available/000-default.conf


# Copy existing application directory contents
#COPY backend /var/www/backend
#COPY frontend /var/www/frontend

# Copy existing application directory permissions
RUN chown -R www-data:www-data /var/www


# Expose port 80 
EXPOSE 80 
CMD ["apache2-foreground"]