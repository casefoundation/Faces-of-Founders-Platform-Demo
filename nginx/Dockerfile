FROM vcarreira/nginx-php5-fpm

WORKDIR /tmp

# Common PHP pages across containers
RUN apt-get update -y && \
    DEBIAN_FRONTEND=noninteractive \
    apt-get install -y \
    php5-imagick
