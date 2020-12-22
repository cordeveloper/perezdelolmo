FROM php:7.2.6-apache

RUN echo "deb [check-valid-until=no] http://archive.debian.org/debian jessie-backports main" > /etc/apt/sources.list.d/jessie-backports.list

RUN sed -i '/deb http:\/\/deb.debian.org\/debian jessie-updates main/d' /etc/apt/sources.list

RUN apt-get -o Acquire::Check-Valid-Until=false update 

RUN apt-get update -o Acquire::Check-Valid-Until=false && \
    apt-get install -y \
        zlib1g-dev

RUN apt-get install -y \
        libxml2-dev

RUN /usr/local/bin/docker-php-ext-install mysqli pdo pdo_mysql zip xmlwriter
RUN apt-get install libssl-dev -y



RUN /usr/local/bin/docker-php-ext-install zip

# Install mcrypt
RUN apt-get install -y libmcrypt-dev
RUN pecl install mcrypt-1.0.2
RUN docker-php-ext-enable mcrypt

# Install GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

# Install XSL
RUN apt-get install -y libxslt-dev
RUN docker-php-ext-install xsl

# Install intl
RUN docker-php-ext-install intl

RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2enmod headers
RUN usermod -u 1000 www-data
RUN usermod -G staff www-data


# Install utils
RUN apt-get install -y nano

# Install PECL extensions
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug