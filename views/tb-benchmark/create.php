<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBenchmark */

$this->title = 'Create Tb Benchmark';
$this->params['breadcrumbs'][] = ['label' => 'Tb Benchmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-benchmark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
