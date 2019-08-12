<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property int $sno
 * @property string $name
 * @property string $password
 * @property string $qualification
 * @property string $gender
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender'], 'string'],
            [['name'], 'string', 'max' => 52],
            [['password'], 'string', 'max' => 500],
            [['qualification'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sno' => 'Sno',
            'name' => 'Name',
            'password' => 'Password',
            'qualification' => 'Qualification',
            'gender' => 'Gender',
        ];
    }
}
