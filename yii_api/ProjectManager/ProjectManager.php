<?php

namespace app\ProjectManager;
use app\models\Project;
use app\models\ProjectSearch;
use app\ProjectManager\ProjectInterface;
use Yii;

class ProjectManager implements ProjectInterface{

    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new ProjectSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new Project();
        $params = Yii::$app->getRequest()->getBodyParams();

        if (isset($params) && !empty($params)) {
            if ($model->load($params) && $model->save()) 
            {
                return $model;
            }
        } 
        else 
        {
            $model->loadDefaultValues();
        }
        return $model;
    }
    public function update($id)
    {
        $request = Yii::$app->request;
        $params = Yii::$app->getRequest()->getBodyParams();
        
        $model = Project::findOne($id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['project/view', 'id' => $model->id]);;
            }
            
        }
        return $model;
    }
    public function delete($id)
    {
        if(Project::findOne($id)->delete())
        {
            return 1;
        }

    }
    public function view($id)
    {
        return Project::findOne($id);
    }    
}

?>