# First open the terminal and run
$ Sudo apt-get update

# Then install apache
$ Sudo apt-get install apache2

# Installing mysql
$ Sudo apt-get install mysql-server

- configure your database root password in this process

Run the following command, only to slightly increase the security of your database

Sudo mysql_secure_installation

# Installing PHP
Sudo apt-get install php7.0 libapache2-mod-php7.0 php7.0-mcrypt

Change the server so it prioritizes .php files by accessing
$ Sudo nano /etc/apache2/mods-enabled/dir.conf

Exit index.php from where it is currently, and put it in the first option.

CTRL X to exit, pressing Y to confirm the change and enter to confirm file location

# Next step - Creating a virtual host
Create a folder in a location of your choice and give the following permission

$ Sudo chmod -R 775 / seucaminho / seuprojeto

Or if you prefer full permission for this folder.

Create a file in your folder and put some content inside it

Copy the original apache file and make the settings of your host

$ Sudo cp /etc/apache2/sites-available/000-default.conf/etc/apache2/sites-available/seuproject.conf

Uncomment the ServerName line and change to the path you want to access, and if you wanted to add the line
ServerAlias

Enable settings

$ Sudo a2ensite seuprojeto.conf

$ Sudo service apache2 restart

Add the following line in the / etc / hosts file

127.0.0.1 seuprojeto.com

# Installing composer

$ Sudo apt-get update

$ Sudo apt-get install curl php7.0-cli git

$ Curl -sS https://getcomposer.org/installer | Sudo php - --install-dir = / usr / local / bin --filename = composer

TWIG
$ Composer require twig / twig: ~ 1.0


Install Phinx
Sudo apt-get install php7.0-gd php7.0-mysql

$ Composer require robmorgan / phinx

$ Vendor / bin / phinx init
This will create a configuration file in your project

# Create your first migration

$ Vendor / bin / phinx create MinhaMigration

Or create the file manually.
<? Php
Use Phinx \ Migration \ AbstractMigration;
Class FirstMigration extends AbstractMigration
{
Public function change ()
{
$ Table = $ this-> table ('Users');
$ Table-> addColumn ('name', 'string')
-> addColumn ('password', 'string')
-> createTable ();
}
}

$ Php vendor / bin / phinx migrate -e development

#Adding Faker

$ Composer require fzaninotto / faker

Please request your file

Require_once '/path/to/Faker/src/autoload.php';

Make the path according to the folder for which was your installation.

To use just do this

$ Faker = Faker \ Factory :: create ();

// generate data by accessing properties
Echo $ faker-> name;

#Install Doctrine

Add "webdevbr / doctrine": "1.0.0" in composer.json and run

Composer install