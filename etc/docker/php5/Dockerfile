FROM ubuntu:14.04

RUN apt-get update && \
apt-get install -y php5 libapache2-mod-php5  \
php5-fpm php5-cli php5-mysqlnd php5-pgsql php5-sqlite php5-redis \
php5-apcu php5-intl php5-imagick php5-mcrypt php5-json php5-gd php5-curl php5-xdebug
 
# Configure apache
RUN a2enmod ssl
RUN a2enmod rewrite
ENV APACHE_DIR /var/www
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_SITES_ENABLED /etc/apache2/sites-enabled/

RUN php5enmod mcrypt

VOLUME ${APACHE_DIR}
VOLUME ${APACHE_LOG_DIR}
VOLUME ${APACHE_SITES_ENABLED}

RUN chown -R www-data:www-data ${APACHE_DIR}

RUN apt-get clean;\
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 80 443

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]