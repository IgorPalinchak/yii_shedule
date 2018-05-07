<?php

    namespace app\modules\shopstores\models;

use Yii;

/**
 * This is the model class for table "shops".
 *
 * @property int $id
 * @property string $name
 * @property string $monday_open
 * @property string $monday_close
 * @property string $tuesday_open
 * @property string $tuesday_close
 * @property string $wednesday_open
 * @property string $wednesday_close
 * @property string $thursday_open
 * @property string $thursday_close
 * @property string $friday_open
 * @property string $friday_close
 * @property string $saturday_open
 * @property string $saturday_close
 * @property string $sunday_open
 * @property string $sunday_close
 */
class Shops extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shops';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'saturday_close'], 'required'],
            [['monday_open', 'monday_close', 'tuesday_open', 'tuesday_close', 'wednesday_open', 'wednesday_close', 'thursday_open', 'thursday_close', 'friday_open', 'friday_close', 'saturday_open', 'saturday_close', 'sunday_open', 'sunday_close'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'monday_open' => 'Monday Open',
            'monday_close' => 'Monday Close',
            'tuesday_open' => 'Tuesday Open',
            'tuesday_close' => 'Tuesday Close',
            'wednesday_open' => 'Wednesday Open',
            'wednesday_close' => 'Wednesday Close',
            'thursday_open' => 'Thursday Open',
            'thursday_close' => 'Thursday Close',
            'friday_open' => 'Friday Open',
            'friday_close' => 'Friday Close',
            'saturday_open' => 'Saturday Open',
            'saturday_close' => 'Saturday Close',
            'sunday_open' => 'Sunday Open',
            'sunday_close' => 'Sunday Close',
        ];
    }
}
