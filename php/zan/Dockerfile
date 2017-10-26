FROM php:7.1

COPY php.ini         /usr/local/etc/php/php.ini
COPY sources.list    /etc/apt/sources.list

ADD src/hiredis-0.13.3.tar.gz /opt

ADD src/php-ext-lz4.tar.gz /usr/src/php/ext

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng12-dev \
    libmcrypt-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    && rm -r /var/lib/apt/lists/*

RUN docker-php-ext-install -j$(nproc) mcrypt  \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) sockets \
    && docker-php-ext-install -j$(nproc) php-ext-lz4

RUN pecl install redis \
    && docker-php-ext-enable redis \
    && pecl install apcu \
    && docker-php-ext-enable apcu

RUN cd /opt/hiredis-0.13.3 \
    && make && make install && ldconfig \
    && ln -s /usr/local/lib/libhiredis.so /usr/local/lib/libhiredis_linux.so \
    && ln -s /usr/local/lib/libhiredis.a /usr/local/lib/libhiredis_linux.a

COPY src/zan/zan-extension /usr/src/php/ext/zan

RUN docker-php-ext-configure zan --enable-openssl \
    && docker-php-ext-install -j$(nproc) zan

EXPOSE 8030
