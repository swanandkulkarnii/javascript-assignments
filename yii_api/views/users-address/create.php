<?php

use yii\helpers\Html;


$this->title = 'Create User Address';
$this->params['breadcrumbs'][] = ['label' => 'User Address', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>
