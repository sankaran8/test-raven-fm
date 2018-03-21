FROM php:7.2-apache

COPY app/ /var/www/html/

COPY headers.load /etc/apache2/mods-enabled/

CMD ["apache2-foreground"]