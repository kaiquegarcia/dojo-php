FROM nanoninja/php-fpm:7.4.4

RUN apt-get update && apt-get install -y git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
