FROM php:8.2-apache

# RUN docker-php-ext-install mysqli
# RUN chown -R www-data:www-data /var/www
# RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

# extension
RUN apt-get update && apt-get install -y \
    libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev zlib1g-dev libpng-dev libzip-dev \
    jpegoptim optipng gifsicle sendmail git-core build-essential openssl libssl-dev \
    mariadb-client libmagickwand-dev --no-install-recommends libonig-dev zip\
    && docker-php-ext-install mysqli gd zip mbstring gettext pdo_mysql \
    && pecl install xdebug-beta apcu mcrypt imagick \
    && docker-php-ext-enable mysqli xdebug imagick apcu mcrypt gd zip

# ioncube loader
RUN curl -o ioncube.tar.gz http://downloads3.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar -xvvzf ioncube.tar.gz \
    && mv ioncube/ioncube_loader_lin_8.2.so `php-config --extension-dir` \
    && rm -Rf ioncube.tar.gz ioncube \
    && docker-php-ext-enable ioncube_loader_lin_8.2

# composer
RUN curl -S https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer self-update

# php.ini
COPY php.ini /usr/local/etc/php/

# apache user
RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

# apache
RUN a2enmod rewrite
RUN a2enmod ssl

COPY entrypoint.sh /usr/local/bin/
RUN ["chmod", "+x", "/usr/local/bin/entrypoint.sh"]

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# intl ftp FFI exif cgi-fcgi calendar bcmath shmop soap sockets sysvmsg sysvsem sysvshm xsl wddx readline pcntl bz2 mongodb nd_mysqli nd_pdo_mysql newrelic
# amqp brotli dba dbase enchant gearman geoip gmagick gnupg grpc zmq igbinary imap inotify ioncube_loader jsmin ldap lzf mailparse memcache memcached oauth
# oci8 odbc opcache pcntl pdf pdo_dblib pdo_firebird pdo_oci pdo_odbc pdo_pgsql pdo_sqlsrv pgsql phalcon5 pspell psr raphf redis rrd snmp solr sourceguardian
# sqlsrv ssh2 swoole sysvmsg sysvsem sysvshm tideways_xhprof tidy timezonedb trader uploadprogress uuid xmlrpc yaf yaml
