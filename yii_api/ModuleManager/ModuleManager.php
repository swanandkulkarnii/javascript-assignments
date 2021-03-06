<?php

namespace app\ModuleManager;
use app\models\Module;
use app\ModuleManager\ModuleInterface;
use Yii;

class ModuleManager implements ModuleInterface{
    public function create(){
        $model = new Module();

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
        
        $model = Module::findOne($id);
        if ($model !== null) 
        {
            if ($request->isPost && $model->load($params) && $model->save()) {
                return Yii::$app->response->redirect(['module/view', 'id' => $model->id]);;
            }
            
        }
        return $model;
    }
    public function view($id)
    {
        return Module::findOne($id);
    } 

    public function delete($id)
    {
        if(Module::findOne($id)->delete())
        {
            return 1;
        }

    }  
}

?>