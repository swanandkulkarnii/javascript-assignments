<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;


$this->title = 'Users Address';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Address', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($searchModel, 'search_city')->textInput(['maxlength' => true, 'placeholder' => 'Search City...']) ?>

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
            'address1',
            'address2',
            'zip',
            'city',
            'state',
            'country', 
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update}<br>{delete}<br>{view}<br>{view_users}',
                'buttons' => [
                    'view_users' => function ($url, $model, $key) {
                        return Html::a('View Users', ['/users', 'users_id'=>$model->id]);
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
