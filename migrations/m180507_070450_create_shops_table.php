<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shops`.
 */
class m180507_070450_create_shops_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('shops', [
            'id' => $this->primaryKey(),
            'name' => $this->string('250'),
            'monday_open' => $this->time(),
            'tuesday_open' => $this->time(),
            'wednesday_open' => $this->time(),
            'thursday_open' => $this->time(),
            'friday_open' => $this->time(),
            'saturday_open' => $this->time(),
            'sunday_open' => $this->time(),
            'monday_close' => $this->time(),
            'tuesday_close' => $this->time(),
            'wednesday_close' => $this->time(),
            'thursday_close' => $this->time(),
            'friday_close' => $this->time(),
            'saturday_close' => $this->time(),
            'sunday_close' => $this->time(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shops');
    }
}
