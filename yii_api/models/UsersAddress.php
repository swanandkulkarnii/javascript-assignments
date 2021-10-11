<?php

namespace app\models;

use Yii;

class UsersAddress extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users_address';
    }

    public function rules()
    {
        return [
            [['users_id', 'address1', 'address2', 'zip', 'city', 'country', 'state'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [ 
            'address1' => 'Resident Address',
            'address2' => 'Permenent Address',	
            'zip' => 'Zip Code',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country'
        ];
    }

    public function getUser(){
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }

    // public function getModule(){
    //     return $this->hasOne(Module::className(), ['id' => 'module_id']);
    // }
}
