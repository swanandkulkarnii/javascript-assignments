<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;


$this->title = 'Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Module', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($searchModel, 'module_title')->textInput(['maxlength' => true, 'placeholder' => 'Search Module Title...']) ?>
    <?= $form->field($searchModel, 'project_title')->textInput(['maxlength' => true, 'placeholder' => 'Search Project Title...']) ?>

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
            [
                'attribute' => 'project_title',
                'value' => 'project.title',
            ],
            'title',
            'description',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update} {delete} {view} {my_button}',
                'buttons' => [
                    'my_button' => function ($url, $model, $key) {
                        return Html::a('custom-update', ['update', 'id'=>$model->id]);
                    },
                    // 'update' => function ($url, $model, $key) {
                    //     return Html::a('update', ['update', 'id'=>$model->title]);
                    // }
                ]
            ],
        ],
        'layout' => '{items}{pager}{summary}',
        'showOnEmpty' => false,
        'emptyCell' => false,
    ]);
    ?>


</div>
