<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;


$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($searchModel, 'project_title')->textInput(['maxlength' => true, 'placeholder' => 'Search Title...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'Sr.No.',
            ],
            'title',
            'description',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update}<br>{delete}<br>{view}<br>{view_modules}<br>{view_apis}',
                'buttons' => [
                        'view_modules' => function ($url, $model, $key) {
                            return Html::a('View Modules', ['/module', 'project_id'=>$model->id]);
                        },
                        'view_apis' => function ($url, $model, $key) {
                            return Html::a('View Apis', ['/api', 'project_id'=>$model->id]);
                        },
                ]
            ],
        ],
        'layout' => '{items}{pager}{summary}',
        'showOnEmpty' => false,
        'emptyCell' => false,
    ]);
    ?>


</div>
