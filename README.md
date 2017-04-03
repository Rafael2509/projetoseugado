# Primeiro abra o terminal e execute 
$ sudo apt-get update

# Depois instale o apache 
$ sudo apt-get install apache2 

# Instalando mysql
$ sudo apt-get install mysql-server

	-- configure sua senha de root do banco de dados nesse processo

	execute o seguinte comando, apenas para aumentar um pouco a segurança do seu banco de dados

	$ sudo mysql_secure_installation

# Instalando o PHP
sudo apt-get install php7.0 libapache2-mod-php7.0 php7.0-mcrypt

Altere o servidor para que ele de prioridades a arquivos .php acessando
	$ sudo nano /etc/apache2/mods-enabled/dir.conf

	Retire o index.php de onde ele se encontra atualmente, e o coloque na primeira opção.

	CTRL X para sair, apertando Y para confirmar a alteração e enter para confirmar local do arquivo

# Proximo passo - Criando um virtual Host 
	Crie uma pasta em um local de sua preferencia e dê a seguinte permissão

	$ sudo chmod -R 775 /seucaminho/seuprojeto

	ou se preferir de permissão total para esta pasta.

	Crie um arquivo na sua pasta e coloque algum conteudo dentro dele

	Copie o arquivo original do apache e faça as configurações do seu host

	$ sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/seuprojeto.conf

	descomente a linha do ServerName e altere para o caminho que deseja acessar, e caso queria adicione a linha 
	ServerAlias

	ative as configurações

	$ sudo a2ensite seuprojeto.conf

	$ sudo service apache2 restart

	adicione a seguinte linha no arquivo /etc/hosts

	127.0.0.1 seuprojeto.com

# Instalando composer

	$ sudo apt-get update

	$ sudo apt-get install curl php7.0-cli git 	

	$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
	
# TWIG
$ composer require twig/twig:~1.0


Instale o Phinx
sudo apt-get install php7.0-gd php7.0-mysql

$ composer require robmorgan/phinx

$ vendor/bin/phinx init 
Isso vai criar um arquivo de configuração no seu projeto

# Crie sua primeira migração

$ vendor/bin/phinx create MinhaMigration

ou crie o arquivo manualmente.
	<?php
	use Phinx\Migration\AbstractMigration;
	class PrimeiraMigration extends AbstractMigration
	{
	    public function change()
	    {
	        $table = $this->table('Usuarios');
	        $table->addColumn('nome', 'string')
	            ->addColumn('senha', 'string')
	            ->createTable();
	    }
	}

$ php vendor/bin/phinx migrate -e development

#Adionando Faker

$ composer require fzaninotto/faker

faça a requisição do seu arquivo

require_once '/path/to/Faker/src/autoload.php';

faça o caminho de acordo com a pasta pra que foi sua instalação.

para usar basta fazer isto

$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;

#Install Doctrine

add "webdevbr/doctrine": "1.0.0" in composer.json and run composer install