<?php

namespace app\UsersAddressManager;
use app\models\UsersAddress;
use app\models\UsersAddressSearch;
use app\UsersAddressManager\UsersAddressInterface;
use Yii;

class UsersAddressManager implements UsersAddressInterface{

    public function index()
    {
        $request = Yii::$app->request;
        $searchModel = new UsersAddressSearch();
        $dataProvider = $searchModel->search($request->queryParams);

        return $array = [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ];
    }

    public function create(){
        $model = new UsersAddress();
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
        
        $model = UsersAddress::findOne($id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['users-address/view', 'id' => $model->id]);;
            }
            
        }
        return $model;
    }
    public function delete($id)
    {
        if(UsersAddress::findOne($id)->delete())
        {
            return 1;
        }

    }
    public function view($id)
    {
        return UsersAddress::findOne($id);
    }    
}

?>