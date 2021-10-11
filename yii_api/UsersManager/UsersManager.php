<?php

namespace app\UsersManager;
use app\models\Users;
use app\models\UsersSearch;
use app\UsersManager\UsersInterface;
use Yii;

class UsersManager implements UsersInterface{

    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new Users();
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
        
        $model = Users::findOne($id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['users/view', 'id' => $model->id]);;
            }
            
        }
        return $model;
    }
    public function delete($id)
    {
        if(Users::findOne($id)->delete())
        {
            return 1;
        }

    }
    public function view($id)
    {
        return Users::findOne($id);
    }    
}

?>