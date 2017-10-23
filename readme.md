# Student manager

Ported using Laravel

**Setting up**

1. Open a terminal
2. Run _cp .env.example .env_
3. Edit the .env file with your own APP_NAME and the database configuration you want to use
4. Run _composer install_ to install all the missing dependencies
5. Generate you application key using _php artisan key:generate_

**WARNING**: If there are some errors make sure you have installed these packages

- *php-cli*: PHP command line tool
- *php-dev*: PHP Development Package
- *php-mcrypt*: PHP mcrypt to encrypt the data
- *php-gd*: It can also be used to create and manipulate image files like GIF, PNG, JPEG, WBMP, and XPM
- *php-mbstring*: express more than 256 characters in the regular bytewise coding system
- *php-xml*: PHP XML Support
- *php-common*: Common PHP Modules
- *php-zip*: PHP Zip support
- *mysql-server*: MySQL Database Server
- *composer*:  Tool for dependency management in PHP
- *node*: NodeJS Javascript runtime enviroment
- *npm*: Package manager for NodeJS

Last step: install _nginx_ and setup your server using _php-fpm_