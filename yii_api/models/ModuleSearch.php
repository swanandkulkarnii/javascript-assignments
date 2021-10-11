<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Module;


class ModuleSearch extends Module
{
    public $module_title;
    public $project_title;
    public $project_id;
    public function rules()
    {
        return [
            [['module_title', 'project_title', 'project_id'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Module::find();
        $query->joinWith(['project']);

        $this->load($params);
        // echo "<pre>";
        // print_r($_GET); 
        if(isset($_GET['project_id'])){

            $this->project_id = $_GET['project_id'];
        }
        $query->orFilterWhere(['like', 'module.title', $this->module_title])
        ->orFilterWhere(['like', 'project.title', $this->project_title])
        ->andFilterWhere(['=', 'project_id', $this->project_id]);

        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'attributes' => ['title', 'project_title'],
            ]
        ]);

        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        return $dataProvider;
    }
}
