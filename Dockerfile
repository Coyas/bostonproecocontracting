FROM php:7.4-apache

WORKDIR /var/www/html

COPY . /var/www/html

RUN \
    apt update \
    && apt install make libssl-dev libghc-zlib-dev libcurl4-gnutls-dev libexpat1-dev gettext unzip \ 
    && apt clean all \
    && cd /tmp \
    && wget https://github.com/git/git.git \
    && unzip git.zip \
    && cd git-* \
    && make prefix=/usr/local all \
    && git config --global user.name "Boston Eco Pro Contracting" \
    && git config --global user.email "info@bostonecoprocontracting.com" \
    && make prefix=/usr/local install \
    && curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && HASH=a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1 \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && composer install

EXPOSE 80