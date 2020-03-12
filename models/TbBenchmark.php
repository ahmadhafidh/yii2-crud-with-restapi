<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_benchmark".
 *
 * @property int $id
 * @property string $name
 * @property string $division
 */
class TbBenchmark extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_benchmark';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'division'], 'required'],
            [['division'], 'string'],
            [['name'], 'string', 'max' => 100],
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
            'division' => 'Division',
        ];
    }
}
