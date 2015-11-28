<?php

use yii\db\Schema;
use yii\db\Migration;

class m151127_071043_create_clients_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('clients', [
            'id' => $this->primaryKey(),
            'family_name' => $this->string()->notNull(),
            'first_name' => $this->string()->notNull(),
            'birth_date' => $this->date()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('clients');
    }
}