FROM php:8.2.0RC1-apache
RUN apt update
RUN apt install -y traceroute
COPY ./sources/index.php /var/www/html/
COPY ./sources/main.css /var/www/html/
COPY ./sources/flag /var/www/html/
