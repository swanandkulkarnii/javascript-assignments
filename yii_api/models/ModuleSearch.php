<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Module;


class ModuleSearch extends Module
{
    public $module_title;
    public $project_title;
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
        $query->andFilterWhere(['like', 'title', $this->module_title])
        ->andFilterWhere(['like', 'project.title', $this->project_title]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'attributes' => ['title'],
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
