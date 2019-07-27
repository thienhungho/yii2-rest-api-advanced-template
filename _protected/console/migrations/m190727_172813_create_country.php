<?php

use yii\db\Migration;

/**
 * Class m190727_172813_create_country
 */
class m190727_172813_create_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(255)->unique()->notNull(),
            'name' => $this->string(32)->unique()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190727_172813_create_country cannot be reverted.\n";

        return false;
    }
    */
}
