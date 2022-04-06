<?php

use yii\db\Migration;

/**
 * Class m220406_175215_crear_table_usuarios
 */
class m220406_175215_crear_table_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuarios', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'nombre' => $this->text(),
            'apellido' => $this->text(),
            'edad' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuarios');

        return true;
    }
    /*
    public function up()
    {
    }

    public function down()
    {
        $this->dropTable('news');
    }*/
}
