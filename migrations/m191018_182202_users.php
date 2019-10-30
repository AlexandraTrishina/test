<?php

use yii\db\Migration;

/**
 * Class m191018_182202_users
 */
class m191018_182202_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191018_182202_users cannot be reverted.\n";
        $this->dropTable('users');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191018_182202_users cannot be reverted.\n";

        return false;
    }
    */
}
