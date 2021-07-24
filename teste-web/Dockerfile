FROM php:7.4-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /usr/src/teste-web
WORKDIR /usr/src/teste-web

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000