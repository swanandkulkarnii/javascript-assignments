<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\ActiveForm;


$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($searchModel, 'firstName')->textInput(['maxlength' => true, 'placeholder' => 'Search First Name...']) ?>

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
            'first_name',
            'last_name',
            'email',
            'gender',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Action',
                'headerOptions' => ['width:90'],
                'template' => '{update}<br>{delete}<br>{view}',
                'buttons' => ['class' => 'pagination'],
                
            ],
        ],
        'layout' => '{items}{pager}{summary}',
        'showOnEmpty' => false,
        'emptyCell' => false,
    ]);
    ?>


</div>
