FROM php:7.2-apache-stretch
RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN docker-php-ext-install pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . /var/www/html
COPY ./public/.htaccess /var/www/html/.htaccess
WORKDIR /var/www/html
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist
<<<<<<< HEAD
RUN cp .env.example .env
RUN php artisan key:generate 
RUN php artisan migrate --no-interaction
=======

RUN php artisan key:generate 
RUN php artisan migrate 
>>>>>>> 763dd69d69f869246427a10c9f79a867045b928f
RUN php artisan storage:link
RUN chmod -R 777 storage
RUN a2enmod rewrite
RUN service apache2 restart
