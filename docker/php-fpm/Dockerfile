FROM php:7.4-fpm-alpine as production

# Install needed modules to run the application
RUN apk update \
 && apk --quiet add \
    libzip-dev

# Add php extension to work with zip files
RUN docker-php-ext-install -j$(nproc) \
    zip

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
    && rm -rf /tmp/pear \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && apk del pcre-dev ${PHPIZE_DEPS}

# Install MYSQLI extension
RUN docker-php-ext-install mysqli

# Install PDO MYSQL extension
RUN docker-php-ext-install pdo_mysql

# Install OPCACHE extension
RUN docker-php-ext-install opcache

WORKDIR /opt/app

# Install XDEBUG extension
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-2.9.2 \
    && docker-php-ext-enable xdebug

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --version=2.0.9 --install-dir=/usr/local/bin --filename=composer

# Add prestissimo for parallel composer downloads
#RUN composer global require "hirak/prestissimo"

# Copy source code into container
COPY ./symfony/ .

# Install production dependencies
RUN composer install

FROM production as development

# Install with dev dependencies
CMD sh -c "composer install && docker-php-entrypoint php-fpm"
