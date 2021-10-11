<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = 'Update User Address: ';
$this->params['breadcrumbs'][] = ['label' => 'Users Address', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Update User's Address", 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
