FROM php:7.4-apache

WORKDIR /var/www/html

COPY . .

EXPOSE 80

RUN docker-php-ext-install mysqli

CMD ["php", "-S", "0.0.0.0:80"]
