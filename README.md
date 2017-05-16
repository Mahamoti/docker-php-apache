# docker-php-apache

[![Docker Build Statu](https://img.shields.io/docker/build/elnebuloso/php-apache.svg)](https://hub.docker.com/r/elnebuloso/php-apache/builds/)


## Supported tags and respective `Dockerfile` links

- [`php56` (Dockerfile.php56)](https://github.com/elnebuloso/docker-php-apache/blob/master/Dockerfile.php56)
- [`php70` (Dockerfile.php70)](https://github.com/elnebuloso/docker-php-apache/blob/master/Dockerfile.php70)
- [`php71` (Dockerfile.php71)](https://github.com/elnebuloso/docker-php-apache/blob/master/Dockerfile.php71)

## Containers

- https://hub.docker.com/r/elnebuloso/php-apache/tags/

### PHP 5.6

- elnebuloso/php-apache:php56-latest
- elnebuloso/php-apache:php56-`[version]`

### PHP 7.0

- elnebuloso/php-apache:php70-latest
- elnebuloso/php-apache:php70-`[version]`

### PHP 7.1

- elnebuloso/php-apache:php71-latest
- elnebuloso/php-apache:php71-`[version]`

## Features

This PHP Modules are available in PHP 5.6, PHP 7.0, PHP 7.1

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

## Testing the Latest Image

```console
docker rm -f php-apache
docker pull elnebuloso/php-apache:php71-latest
docker run --name php-apache -p=8080:80 -e APP_VHOST=standard -e APP_ENV=development -d elnebuloso/php-apache:php71-latest
```

### Environment Variables

#### APP_VHOST

This variable chooses the defined vhost for the php application.
This Container comes with predefined vhost configurations for running modern php application like Symfony, Zend Framework, Laravel etc.

##### standard

- mod_rewrite for public/index.php
- usful for php applications like Zend Framework, Laravel etc.

##### symfony

- mod_rewrite for web/app.php
- mod_rewrite for web/app_dev.php (in development environment)

#### APP_ENV

##### development

- environment setting for development
- displaying errors etc.

##### production

- environment setting for production
- disabled displaying of errors etc.

### User Defined VHOST configuration / usage

As this container comes with predefined vhosts, you can override the vhost used by the apache webserver.
This can be achieved with a folder called `.docker` in your application directory.

If a File exists /var/www/.docker/apache2/vhost.`$APP_VHOST.$APP_ENV`.conf, this file will be used, as your special vhost file.

So when running your Container, you can choose your vhost File by setting the environment variables.

## Developing this Container

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