<?php

namespace app\models;

use Yii;

class Users extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'gender', 'email'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [ 
            'first_name' => 'First Name', 
            'last_name' => 'Last Name', 
            'gender' => 'Gender',
            'email' => 'Email',
        ];
    }

    // public function getProject(){
    //     return $this->hasOne(Project::className(), ['id' => 'project_id']);
    // }

    // public function getModule(){
    //     return $this->hasOne(Module::className(), ['id' => 'module_id']);
    // }
}
