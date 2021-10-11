<?php
namespace app\APIManager;
use app\models\Api;
use app\APIManager\APIInterface;
use Yii;

class APIManager implements APIInterface{
    public function create(){
        $model = new Api();
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
        
        $model = Api::findOne($id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['api/view', 'id' => $model->id]);;
            }
            
        }
        return $model;
    }
    public function delete($id)
    {
        if(Api::findOne($id)->delete())
        {
            return 1;
        }

    }
    public function view($id)
    {
        return Api::findOne($id);
    }    
}
?>