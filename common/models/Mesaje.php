<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mesaje".
 *
 * @property integer $id
 * @property string $nume
 * @property string $email
 * @property string $mesaj
 * @property string $data
 * @property string $Validat
 */
class Mesaje extends \yii\db\ActiveRecord
{
    public $verifyCode;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mesaje';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nume', 'email', 'mesaj', 'data'], 'required'],
            [['mesaj'], 'string'],
            [['data'], 'safe'],
            [['nume'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 25],
            [['Validat'], 'string', 'max' => 5],
            ['verifyCode', 'captcha']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nume' => 'Nume',
            'email' => 'Email',
            'mesaj' => 'Mesaj',
            'data' => 'Data',
            'Validat' => 'Validat',
            'verifyCode' => 'Cod de verificare',
        ];
    }

    /**
     * @inheritdoc
     * @return MesajeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MesajeQuery(get_called_class());
    }
}
