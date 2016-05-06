<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "proiecte".
 *
 * @property integer $id
 * @property string $nume
 * @property string $email
 * @property string $idee
 * @property string $domeniu
 * @property string $buget
 * @property string $data
 * @property string $Validat
 */
class Proiecte extends \yii\db\ActiveRecord
{
        public $verifyCode;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proiecte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nume', 'email', 'idee', 'domeniu', 'data'], 'required'],
            [['idee', 'domeniu'], 'string'],
            [['data'], 'safe'],
            [['nume'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 25],
            [['buget'], 'string', 'max' => 20],
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
            'nume' => 'Nume şi prenume',
            'email' => 'Email',
            'idee' => 'Ideea pe care o aveţi',
            'domeniu' => 'Domeniul',
            'buget' => 'Bugetul necesar',
            'data' => 'Data',
            'Validat' => 'Validat',
            'verifyCode' => 'Cod de verificare',
        ];
    }
}
