<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sppt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sppt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KD_PROPINSI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_DATI2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_KECAMATAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_KELURAHAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_BLOK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_URUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_JNS_OP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'THN_PAJAK_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SIKLUS_SPPT')->textInput() ?>

    <?= $form->field($model, 'KD_KANWIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_KANTOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_TP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NM_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JLN_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BLOK_KAV_NO_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RW_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RT_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KELURAHAN_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KOTA_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_POS_WP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NPWP_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NO_PERSIL_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_KLS_TANAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'THN_AWAL_KLS_TANAH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'KD_KLS_BNG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'THN_AWAL_KLS_BNG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_JATUH_TEMPO_SPPT')->textInput() ?>

    <?= $form->field($model, 'LUAS_BUMI_SPPT')->textInput() ?>

    <?= $form->field($model, 'LUAS_BNG_SPPT')->textInput() ?>

    <?= $form->field($model, 'NJOP_BUMI_SPPT')->textInput() ?>

    <?= $form->field($model, 'NJOP_BNG_SPPT')->textInput() ?>

    <?= $form->field($model, 'NJOP_SPPT')->textInput() ?>

    <?= $form->field($model, 'NJOPTKP_SPPT')->textInput() ?>

    <?= $form->field($model, 'PBB_TERHUTANG_SPPT')->textInput() ?>

    <?= $form->field($model, 'FAKTOR_PENGURANG_SPPT')->textInput() ?>

    <?= $form->field($model, 'PBB_YG_HARUS_DIBAYAR_SPPT')->textInput() ?>

    <?= $form->field($model, 'STATUS_PEMBAYARAN_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_TAGIHAN_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_CETAK_SPPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_TERBIT_SPPT')->textInput() ?>

    <?= $form->field($model, 'TGL_CETAK_SPPT')->textInput() ?>

    <?= $form->field($model, 'NIP_PENCETAK_SPPT')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
