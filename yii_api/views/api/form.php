<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use app\models\Project;
use app\models\Module;


/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */

$methods = ['GET' => 'GET', 'POST' => 'POST', 'PUT' => 'PUT', 'DELETE' => 'DELETE', 'PATCH' => 'PATCH'];
$requests = ['get' => 'get', 'batchUpdate' => 'batchUpdate', 'create' => 'create'];
$responses = [
    '200 OK' => '200 OK',
    '201 CREATED' => '201 CREATED',
    '204 NO CONTENT' => '204 NO CONTENT',
    '400 BAD REQUEST' => '400 BAD REQUEST',
    '401 UNAUTHORIZED' => '401 UNAUTHORIZED',
    '403 FORBIDDEN' => '403 FORBIDDEN',
    '404 NOT FOUND' => '404 NOT FOUND',
    '405 METHOD NOT ALLOWED' => '405 METHOD NOT ALLOWED',
    '406 NOT ACCEPTABLE' => '406 NOT ACCEPTABLE',
    '409 CONFLICT' => '409 CONFLICT',
    '415 UNSUPPORTED MEDIA TYPE' => '415 UNSUPPORTED MEDIA TYPE',
    '500 INTERNAL SERVER ERROR' => '500 INTERNAL SERVER ERROR',
  ];
?>

<div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_id')->dropdownList(
        ArrayHelper::map(Project::find()->all(),'id','title'
    ),
    [
        'prompt' => 'Select Project name',
        'onchange'=>'
                $.post( "'.Url::toRoute(['api/list', 'id' => '' ]).'"+$(this).val(), function( data ) {
                  $( "select#title" ).html( data );
                });
            '
    ]); ?>
    <?=
    $form->field($model, 'module_id')
        ->dropDownList(
            ArrayHelper::map(Module::find()->asArray()->all(), 'id', 'title'),
            ['id'=>'title']
        );?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'method')->dropDownList($methods, ['prompt'=>'Select Method...']); ?>

    <?= $form->field($model, 'request')->dropDownList($requests, ['prompt'=>'Select Request...']); ?>
    
    <?= $form->field($model, 'response')->dropDownList($responses, ['prompt'=>'Select Response...']); ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
