<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing".
 *
 * @property int $NOP
 * @property int $TAHUN
 * @property string $NOMINAL
 * @property int $VA
 * @property string $EXPIRED_DATE
 * @property string $CREATED_DATE
 */
class Billing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $secret_key;
    public $prefix;
    public $client_id;

    public static function tableName()
    {
        return 'billing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NOP', 'TAHUN', 'NOMINAL', 'VA','TRX_ID','TYPE', 'EXPIRED_DATE', 'CREATED_DATE'], 'required'],
            [['NOP', 'TAHUN', 'VA'], 'integer'],
            [['TYPE'], 'string'],
            [['EXPIRED_DATE', 'CREATED_DATE'], 'safe'],
            [['NOMINAL'], 'string', 'max' => 25],
            [['NOP'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NOP' => 'Nop',
            'TAHUN' => 'Tahun',
            'NOMINAL' => 'Nominal',
            'VA' => 'Va',
            'TRX_ID' => 'TRX ID',
            'EXPIRED_DATE' => 'Expired Date',
            'CREATED_DATE' => 'Created Date',
        ];
    }
}
