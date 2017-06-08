# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).


## [1.5.0] - 2017-06-09
### Added
- cron with demo crontab 'today'
- logrotate with demo lograte 'today'


## [1.4.0] - 2017-06-08
### Added
- installed libapache2-modsecurity, but not configured yet

### Changed
- apache2 security update and configuration
- php configuration, optional user definable
- init container script, optional user definable
- removed unused files


## [1.3.0] - 2017-05-18
### Changed
- added missing php5.6-cli
- added missing php7.0-cli
- added missing php7.1-cli
- updated layers by moving env variables


## [1.2.0] - 2017-05-16
### Changed
- php error reporting in development vhost
- preview phpinfo for each development for testing container
- updated README.md


## [1.1.0] - 2017-05-15
### Changed
- php error reporting in development vhost


## [1.0.0] - 2017-05-15
### Changed
- Initial Setup for PHP 5.6
- Initial Setup for PHP 7.0
- Initial Setup for PHP 7.1