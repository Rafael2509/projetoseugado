<?php

use Phinx\Migration\AbstractMigration;

class CreateTable extends AbstractMigration
{
    public function up()
    {
        $exists_occupation = $this->hasTable('tb_occupation');
        if (!$exists_occupation){
            $this->execute('
                    CREATE TABLE `tb_occupation` (
                        id_occupation integer AUTO_INCREMENT NOT NULL PRIMARY KEY,
                        company varchar(80) NOT NULL,
                        telphone   varchar(80) NOT NULL,
                        responsibility varchar(80) NOT NULL,
                        description text,
                        start_date datetime NOT NULL,
                        finish_date datetime,
                        current int(1),
                        active int(1)
                    )
                ');
        };

        $exists_employed = $this->hasTable('tb_employed');
        if(!$exists_employed){
            $this->execute('
                    CREATE TABLE `tb_employed` (
                        id_employed integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
                        cpf varchar(15) NOT NULL UNIQUE,
                        email VARCHAR(255) NOT NULL UNIQUE,
                        password VARCHAR(25) NOT NULL,
                        name VARCHAR(40) NOT NULL,
                        lastname VARCHAR(80),
                        birthday datetime,
                        type_user char(1),
                        id_occupation INTEGER DEFAULT 1,
                        active INT(1),
                        CONSTRAINT fk_occupation_id FOREIGN KEY(id_occupation) REFERENCES tb_occupation(id_occupation)
                    )
                ');            
        };
    }
}
