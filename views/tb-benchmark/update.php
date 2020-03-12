<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBenchmark */

$this->title = 'Update Tb Benchmark: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tb Benchmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-benchmark-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
