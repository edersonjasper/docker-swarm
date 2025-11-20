FROM php:7.4-apache

# Instalar extensão mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

EXPOSE 80