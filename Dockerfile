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

RUN mysql -h  database-1.csa3amrvfiz3.us-east-1.rds.amazonaws.com -P 3306 -u raavendanp -p
RUN Eafit2017*
RUN exit
RUN cp .env.example .env
RUN php artisan key:generate 
RUN yes | php artisan migrate 
RUN php artisan storage:link
RUN chmod -R 777 storage
RUN a2enmod rewrite
RUN service apache2 restart
