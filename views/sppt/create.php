<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sppt */

$this->title = 'Create Sppt';
$this->params['breadcrumbs'][] = ['label' => 'Sppts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sppt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
