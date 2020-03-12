<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sppt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'KD_PROPINSI') ?>

    <?= $form->field($model, 'KD_DATI2') ?>

    <?= $form->field($model, 'KD_KECAMATAN') ?>

    <?= $form->field($model, 'KD_KELURAHAN') ?>

    <?= $form->field($model, 'KD_BLOK') ?>

    <?php // echo $form->field($model, 'NO_URUT') ?>

    <?php // echo $form->field($model, 'KD_JNS_OP') ?>

    <?php // echo $form->field($model, 'THN_PAJAK_SPPT') ?>

    <?php // echo $form->field($model, 'SIKLUS_SPPT') ?>

    <?php // echo $form->field($model, 'KD_KANWIL') ?>

    <?php // echo $form->field($model, 'KD_KANTOR') ?>

    <?php // echo $form->field($model, 'KD_TP') ?>

    <?php // echo $form->field($model, 'NM_WP_SPPT') ?>

    <?php // echo $form->field($model, 'JLN_WP_SPPT') ?>

    <?php // echo $form->field($model, 'BLOK_KAV_NO_WP_SPPT') ?>

    <?php // echo $form->field($model, 'RW_WP_SPPT') ?>

    <?php // echo $form->field($model, 'RT_WP_SPPT') ?>

    <?php // echo $form->field($model, 'KELURAHAN_WP_SPPT') ?>

    <?php // echo $form->field($model, 'KOTA_WP_SPPT') ?>

    <?php // echo $form->field($model, 'KD_POS_WP_SPPT') ?>

    <?php // echo $form->field($model, 'NPWP_SPPT') ?>

    <?php // echo $form->field($model, 'NO_PERSIL_SPPT') ?>

    <?php // echo $form->field($model, 'KD_KLS_TANAH') ?>

    <?php // echo $form->field($model, 'THN_AWAL_KLS_TANAH') ?>

    <?php // echo $form->field($model, 'KD_KLS_BNG') ?>

    <?php // echo $form->field($model, 'THN_AWAL_KLS_BNG') ?>

    <?php // echo $form->field($model, 'TGL_JATUH_TEMPO_SPPT') ?>

    <?php // echo $form->field($model, 'LUAS_BUMI_SPPT') ?>

    <?php // echo $form->field($model, 'LUAS_BNG_SPPT') ?>

    <?php // echo $form->field($model, 'NJOP_BUMI_SPPT') ?>

    <?php // echo $form->field($model, 'NJOP_BNG_SPPT') ?>

    <?php // echo $form->field($model, 'NJOP_SPPT') ?>

    <?php // echo $form->field($model, 'NJOPTKP_SPPT') ?>

    <?php // echo $form->field($model, 'PBB_TERHUTANG_SPPT') ?>

    <?php // echo $form->field($model, 'FAKTOR_PENGURANG_SPPT') ?>

    <?php // echo $form->field($model, 'PBB_YG_HARUS_DIBAYAR_SPPT') ?>

    <?php // echo $form->field($model, 'STATUS_PEMBAYARAN_SPPT') ?>

    <?php // echo $form->field($model, 'STATUS_TAGIHAN_SPPT') ?>

    <?php // echo $form->field($model, 'STATUS_CETAK_SPPT') ?>

    <?php // echo $form->field($model, 'TGL_TERBIT_SPPT') ?>

    <?php // echo $form->field($model, 'TGL_CETAK_SPPT') ?>

    <?php // echo $form->field($model, 'NIP_PENCETAK_SPPT') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
