<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sppt */

$this->title = $model->KD_PROPINSI;
$this->params['breadcrumbs'][] = ['label' => 'Sppts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sppt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'KD_PROPINSI' => $model->KD_PROPINSI, 'KD_DATI2' => $model->KD_DATI2, 'KD_KECAMATAN' => $model->KD_KECAMATAN, 'KD_KELURAHAN' => $model->KD_KELURAHAN, 'KD_BLOK' => $model->KD_BLOK, 'NO_URUT' => $model->NO_URUT, 'KD_JNS_OP' => $model->KD_JNS_OP, 'THN_PAJAK_SPPT' => $model->THN_PAJAK_SPPT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'KD_PROPINSI' => $model->KD_PROPINSI, 'KD_DATI2' => $model->KD_DATI2, 'KD_KECAMATAN' => $model->KD_KECAMATAN, 'KD_KELURAHAN' => $model->KD_KELURAHAN, 'KD_BLOK' => $model->KD_BLOK, 'NO_URUT' => $model->NO_URUT, 'KD_JNS_OP' => $model->KD_JNS_OP, 'THN_PAJAK_SPPT' => $model->THN_PAJAK_SPPT], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'KD_PROPINSI',
            'KD_DATI2',
            'KD_KECAMATAN',
            'KD_KELURAHAN',
            'KD_BLOK',
            'NO_URUT',
            'KD_JNS_OP',
            'THN_PAJAK_SPPT',
            'SIKLUS_SPPT',
            'KD_KANWIL',
            'KD_KANTOR',
            'KD_TP',
            'NM_WP_SPPT',
            'JLN_WP_SPPT',
            'BLOK_KAV_NO_WP_SPPT',
            'RW_WP_SPPT',
            'RT_WP_SPPT',
            'KELURAHAN_WP_SPPT',
            'KOTA_WP_SPPT',
            'KD_POS_WP_SPPT',
            'NPWP_SPPT',
            'NO_PERSIL_SPPT',
            'KD_KLS_TANAH',
            'THN_AWAL_KLS_TANAH',
            'KD_KLS_BNG',
            'THN_AWAL_KLS_BNG',
            'TGL_JATUH_TEMPO_SPPT',
            'LUAS_BUMI_SPPT',
            'LUAS_BNG_SPPT',
            'NJOP_BUMI_SPPT',
            'NJOP_BNG_SPPT',
            'NJOP_SPPT',
            'NJOPTKP_SPPT',
            'PBB_TERHUTANG_SPPT',
            'FAKTOR_PENGURANG_SPPT',
            'PBB_YG_HARUS_DIBAYAR_SPPT',
            'STATUS_PEMBAYARAN_SPPT',
            'STATUS_TAGIHAN_SPPT',
            'STATUS_CETAK_SPPT',
            'TGL_TERBIT_SPPT',
            'TGL_CETAK_SPPT',
            'NIP_PENCETAK_SPPT',
        ],
    ]) ?>

</div>
