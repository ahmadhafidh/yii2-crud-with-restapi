<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BillingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Billings';
// $this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-2">
<ul class="list-group">
  <li class="list-group-item"><a href="/sppt/home">Home</a></li>
  <li class="list-group-item"><a href="/billing/index">Billing</a></li>
  <li class="list-group-item"><a href="/billing/paid">Paid</a></li>
</ul>

</div>

<div class="col-md-10">

<div class="billing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a('Create Billing', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'NOP',
            'TAHUN',
            'NOMINAL',
            'VA',
            [
                'attribute' => 'EXPIRED_DATE',
                'label' => 'Exp Date',
                'format' => 'html',
                // 'value' => function($model) {
                //     return '<p style="color: green">'.$model->NOP.'</p>';
                // }
            ],
            [
                'attribute' => 'CREATED_DATE',
                'label' => 'Created Date',
                'format' => 'html',
                // 'value' => function($model) {
                //     return '<p style="color: green">'.$model->NOP.'</p>';
                // }
            ],
        ],
    ]); ?>


</div>
<!-- 
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NOP</th>
      <th scope="col">TAHUN</th>
      <th scope="col">NOMINAL</th>
      <th scope="col">VA</th>
      <th scope="col">Exp Date</th>
      <th scope="col">Created Date</th>
    </tr>
  </thead>
  <tbody>
    // echo "<pre>";
    // print_r($dataProvider->getModels())
    
    
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>
