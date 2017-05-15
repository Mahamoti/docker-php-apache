# docker-php-apache

[![Docker Build Statu](https://img.shields.io/docker/build/elnebuloso/php-apache.svg)](https://hub.docker.com/r/elnebuloso/php-apache/builds/)

## features

- ubuntu 16:04
- apache2
- php
- php-common
- php-apcu
- php-curl
- php-gd
- php-geoip
- php-imagick
- php-intl
- php-mbstring
- php-mcrypt
- php-memcache
- php-memcached
- php-mongo
- php-mongodb
- php-mysql
- php-sqlite3
- php-xml
- php-yaml
- php-zip


### environment variables

- these environment variables will start the container with predefined vhosts
- vhost.{standard}.{development}.conf
- if file exists /var/www/.docker/apache2/vhost.$APP_VHOST.$APP_ENV.conf, this file will be used, for your special vhost file

### APP_VHOST

- standard
- mod_rewrite standard for public/index.php
- symfony
- mod_rewrite symfony for web/app.php

### APP_ENV

- development
- production

## development

- useful commands developing this container

### start and build containers

```
docker-compose up --build -d
docker-compose up --build -d php56_standard
docker-compose up --build -d php56_symfony
docker-compose up --build -d php70_standard
docker-compose up --build -d php70_symfony
docker-compose up --build -d php71_standard
docker-compose up --build -d php71_symfony
```

### exec into running containers

```
docker-compose exec php56_standard bash
docker-compose exec php56_symfony bash
docker-compose exec php70_standard bash
docker-compose exec php70_symfony bash
docker-compose exec php71_standard bash
docker-compose exec php71_symfony bash
```

### output logs

```
docker-compose logs --follow
docker-compose logs --follow php56_standard
docker-compose logs --follow php56_symfony
docker-compose logs --follow php70_standard
docker-compose logs --follow php70_symfony
docker-compose logs --follow php71_standard
docker-compose logs --follow php71_symfony
```

### stop containers

```
docker-compose stop
```

## links 

- https://hub.docker.com/r/elnebuloso/php-apache/
- https://hub.docker.com/r/elnebuloso/php-apache/tags/