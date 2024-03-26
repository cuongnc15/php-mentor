FROM composer:2.5.5 as vendor

WORKDIR /app

COPY database/ database/

COPY composer.json composer.json
COPY composer.lock composer.lock
COPY . .
RUN composer install

FROM node:16.18.1 as vuejs
RUN mkdir -p /app/public
WORKDIR /app
COPY package.json package-lock.json /app/
COPY resources/ /app/resources/
COPY --from=vendor /app/vendor/ /app/vendor
COPY . .
RUN npm install && npm run build

#Final Image
FROM php:8.0.11-apache as base
#install php dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# change the document root to /var/www/html/public
RUN sed -i -e "s/html/html\/public/g" \
    /etc/apache2/sites-enabled/000-default.conf

# enable apache mod_rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . /var/www/html
COPY --from=vuejs /app/vendor/ /var/www/html/vendor/
#COPY --from=vuejs /app/public/js/ /var/www/html/public/js/
COPY --from=vuejs /app/public/build/ /var/www/html/public/build/

#RUN rm -rf /var/www/html/public/storage

# these directories need to be writable by Apache
RUN chown -R www-data:www-data /var/www/html/storage \
    /var/www/html/bootstrap/cache

RUN chown -R www-data:www-data \
    /var/www/html \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

RUN chmod -R 775 /var/www/html/storage

#RUN php artisan key:generate --ansi && php artisan storage:link

#VOLUME ["/var/www/html/storage", "/var/www/html/bootstrap/cache"]

EXPOSE 80
