FROM php:7.3-fpm

RUN apt update -y && apt install -y -q \
 libmcrypt-dev \
 libfreetype6-dev \
 libjpeg62-turbo-dev \
 libpng-dev \
 libpq-dev \
 libcurl4-openssl-dev \
 libxml2-dev \
 libxmlrpc-c++8-dev \
 libtidy-dev \
 libonig-dev \
 libzip-dev \
 git \
 unzip \
 && docker-php-ext-install -j$(nproc) pdo pdo_pgsql mbstring curl soap tidy xml xmlrpc zip \
 && docker-php-ext-configure gd && docker-php-ext-install gd \
 && yes | pecl install xdebug && docker-php-ext-enable xdebug \
 && apt-get -y clean

RUN echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=phpstorm" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "log_errors = On" >> /usr/local/etc/php/php.ini \
    && echo "error_log = /dev/stderr" >> /usr/local/etc/php/php.ini \
    && echo "date.timezone = Europe/Moscow" >> /usr/local/etc/php/php.ini \
    && echo "error_reporting = E_ALL" >> /usr/local/etc/php/php.ini
