<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sppt;

/**
 * SpptSearch represents the model behind the search form of `app\models\Sppt`.
 */
class SpptSearch extends Sppt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KD_PROPINSI', 'KD_DATI2', 'KD_KECAMATAN', 'KD_KELURAHAN', 'KD_BLOK', 'NO_URUT', 'KD_JNS_OP', 'THN_PAJAK_SPPT', 'KD_KANWIL', 'KD_KANTOR', 'KD_TP', 'NM_WP_SPPT', 'JLN_WP_SPPT', 'BLOK_KAV_NO_WP_SPPT', 'RW_WP_SPPT', 'RT_WP_SPPT', 'KELURAHAN_WP_SPPT', 'KOTA_WP_SPPT', 'KD_POS_WP_SPPT', 'NPWP_SPPT', 'NO_PERSIL_SPPT', 'KD_KLS_TANAH', 'THN_AWAL_KLS_TANAH', 'KD_KLS_BNG', 'THN_AWAL_KLS_BNG', 'TGL_JATUH_TEMPO_SPPT', 'STATUS_PEMBAYARAN_SPPT', 'STATUS_TAGIHAN_SPPT', 'STATUS_CETAK_SPPT', 'TGL_TERBIT_SPPT', 'TGL_CETAK_SPPT', 'NIP_PENCETAK_SPPT'], 'safe'],
            [['SIKLUS_SPPT', 'LUAS_BUMI_SPPT', 'LUAS_BNG_SPPT', 'NJOP_BUMI_SPPT', 'NJOP_BNG_SPPT', 'NJOP_SPPT', 'NJOPTKP_SPPT', 'PBB_TERHUTANG_SPPT', 'FAKTOR_PENGURANG_SPPT', 'PBB_YG_HARUS_DIBAYAR_SPPT'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sppt::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'SIKLUS_SPPT' => $this->SIKLUS_SPPT,
            'TGL_JATUH_TEMPO_SPPT' => $this->TGL_JATUH_TEMPO_SPPT,
            'LUAS_BUMI_SPPT' => $this->LUAS_BUMI_SPPT,
            'LUAS_BNG_SPPT' => $this->LUAS_BNG_SPPT,
            'NJOP_BUMI_SPPT' => $this->NJOP_BUMI_SPPT,
            'NJOP_BNG_SPPT' => $this->NJOP_BNG_SPPT,
            'NJOP_SPPT' => $this->NJOP_SPPT,
            'NJOPTKP_SPPT' => $this->NJOPTKP_SPPT,
            'PBB_TERHUTANG_SPPT' => $this->PBB_TERHUTANG_SPPT,
            'FAKTOR_PENGURANG_SPPT' => $this->FAKTOR_PENGURANG_SPPT,
            'PBB_YG_HARUS_DIBAYAR_SPPT' => $this->PBB_YG_HARUS_DIBAYAR_SPPT,
            'TGL_TERBIT_SPPT' => $this->TGL_TERBIT_SPPT,
            'TGL_CETAK_SPPT' => $this->TGL_CETAK_SPPT,
        ]);

        $query->andFilterWhere(['like', 'KD_PROPINSI', $this->KD_PROPINSI])
            ->andFilterWhere(['like', 'KD_DATI2', $this->KD_DATI2])
            ->andFilterWhere(['like', 'KD_KECAMATAN', $this->KD_KECAMATAN])
            ->andFilterWhere(['like', 'KD_KELURAHAN', $this->KD_KELURAHAN])
            ->andFilterWhere(['like', 'KD_BLOK', $this->KD_BLOK])
            ->andFilterWhere(['like', 'NO_URUT', $this->NO_URUT])
            ->andFilterWhere(['like', 'KD_JNS_OP', $this->KD_JNS_OP])
            ->andFilterWhere(['like', 'THN_PAJAK_SPPT', $this->THN_PAJAK_SPPT])
            ->andFilterWhere(['like', 'KD_KANWIL', $this->KD_KANWIL])
            ->andFilterWhere(['like', 'KD_KANTOR', $this->KD_KANTOR])
            ->andFilterWhere(['like', 'KD_TP', $this->KD_TP])
            ->andFilterWhere(['like', 'NM_WP_SPPT', $this->NM_WP_SPPT])
            ->andFilterWhere(['like', 'JLN_WP_SPPT', $this->JLN_WP_SPPT])
            ->andFilterWhere(['like', 'BLOK_KAV_NO_WP_SPPT', $this->BLOK_KAV_NO_WP_SPPT])
            ->andFilterWhere(['like', 'RW_WP_SPPT', $this->RW_WP_SPPT])
            ->andFilterWhere(['like', 'RT_WP_SPPT', $this->RT_WP_SPPT])
            ->andFilterWhere(['like', 'KELURAHAN_WP_SPPT', $this->KELURAHAN_WP_SPPT])
            ->andFilterWhere(['like', 'KOTA_WP_SPPT', $this->KOTA_WP_SPPT])
            ->andFilterWhere(['like', 'KD_POS_WP_SPPT', $this->KD_POS_WP_SPPT])
            ->andFilterWhere(['like', 'NPWP_SPPT', $this->NPWP_SPPT])
            ->andFilterWhere(['like', 'NO_PERSIL_SPPT', $this->NO_PERSIL_SPPT])
            ->andFilterWhere(['like', 'KD_KLS_TANAH', $this->KD_KLS_TANAH])
            ->andFilterWhere(['like', 'THN_AWAL_KLS_TANAH', $this->THN_AWAL_KLS_TANAH])
            ->andFilterWhere(['like', 'KD_KLS_BNG', $this->KD_KLS_BNG])
            ->andFilterWhere(['like', 'THN_AWAL_KLS_BNG', $this->THN_AWAL_KLS_BNG])
            ->andFilterWhere(['like', 'STATUS_PEMBAYARAN_SPPT', $this->STATUS_PEMBAYARAN_SPPT])
            ->andFilterWhere(['like', 'STATUS_TAGIHAN_SPPT', $this->STATUS_TAGIHAN_SPPT])
            ->andFilterWhere(['like', 'STATUS_CETAK_SPPT', $this->STATUS_CETAK_SPPT])
            ->andFilterWhere(['like', 'NIP_PENCETAK_SPPT', $this->NIP_PENCETAK_SPPT]);

        return $dataProvider;
    }
}
