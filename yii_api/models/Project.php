<?php

namespace app\models;

use Yii;

class Project extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'project';
    }

    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID', 
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    public function getModules(){
        return $this->hasMany(Module::className(), ['id' => 'module_id']);
    }

    public function getApis(){
        return $this->hasMany(Api::className(), ['id' => 'api_id']);
    }
}
