FROM php:7.4-fpm-alpine

RUN apk update \
    && apk add build-base && apk add composer \
    && apk add ${PHPIZE_DEPS} git postgresql-dev bash-completion zlib-dev shadow \
        freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev acl fcgi file\
    && docker-php-ext-configure gd \
        --with-freetype \
    && docker-php-ext-install -j$(nproc) bcmath iconv ctype pgsql pdo_pgsql sockets iconv gd \
    && docker-php-ext-install opcache \
    && docker-php-ext-install sockets \
    && apk add openldap-dev \
    && docker-php-ext-install ldap \
    && apk del ${PHPIZE_DEPS} shadow \
    && rm -frv /var/cache/apk/*


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN ln -s $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
COPY docker/php/conf.d/php.prod.ini $PHP_INI_DIR/conf.d/php.ini

ENV COMPOSER_ALLOW_SUPERUSER=1

ENV PATH="${PATH}:/root/.composer/vendor/bin"

WORKDIR /var/www/backend

# prevent the reinstallation of vendors at every changes in the source code
COPY composer.json ./

# do not use .env files in production
COPY . ./

RUN mkdir 777 -p /var/run

ADD docker/php/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf

CMD ["php-fpm"]