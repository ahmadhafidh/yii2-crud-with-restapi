<?php

namespace app\controllers;

use Yii;
use app\models\Sppt;
use app\models\SpptSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Billing;
use app\components\Ecoll;
use app\components\BniHashing;

/**
 * SpptController implements the CRUD actions for Sppt model.
 */
class SpptController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sppt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SpptSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sppt model.
     * @param string $KD_PROPINSI
     * @param string $KD_DATI2
     * @param string $KD_KECAMATAN
     * @param string $KD_KELURAHAN
     * @param string $KD_BLOK
     * @param string $NO_URUT
     * @param string $KD_JNS_OP
     * @param string $THN_PAJAK_SPPT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT)
    {
        return $this->render('view', [
            'model' => $this->findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT),
        ]);
    }

    /**
     * Creates a new Sppt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sppt();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'KD_PROPINSI' => $model->KD_PROPINSI, 'KD_DATI2' => $model->KD_DATI2, 'KD_KECAMATAN' => $model->KD_KECAMATAN, 'KD_KELURAHAN' => $model->KD_KELURAHAN, 'KD_BLOK' => $model->KD_BLOK, 'NO_URUT' => $model->NO_URUT, 'KD_JNS_OP' => $model->KD_JNS_OP, 'THN_PAJAK_SPPT' => $model->THN_PAJAK_SPPT]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sppt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $KD_PROPINSI
     * @param string $KD_DATI2
     * @param string $KD_KECAMATAN
     * @param string $KD_KELURAHAN
     * @param string $KD_BLOK
     * @param string $NO_URUT
     * @param string $KD_JNS_OP
     * @param string $THN_PAJAK_SPPT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT)
    {
        $model = $this->findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'KD_PROPINSI' => $model->KD_PROPINSI, 'KD_DATI2' => $model->KD_DATI2, 'KD_KECAMATAN' => $model->KD_KECAMATAN, 'KD_KELURAHAN' => $model->KD_KELURAHAN, 'KD_BLOK' => $model->KD_BLOK, 'NO_URUT' => $model->NO_URUT, 'KD_JNS_OP' => $model->KD_JNS_OP, 'THN_PAJAK_SPPT' => $model->THN_PAJAK_SPPT]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sppt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $KD_PROPINSI
     * @param string $KD_DATI2
     * @param string $KD_KECAMATAN
     * @param string $KD_KELURAHAN
     * @param string $KD_BLOK
     * @param string $NO_URUT
     * @param string $KD_JNS_OP
     * @param string $THN_PAJAK_SPPT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT)
    {
        $this->findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sppt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $KD_PROPINSI
     * @param string $KD_DATI2
     * @param string $KD_KECAMATAN
     * @param string $KD_KELURAHAN
     * @param string $KD_BLOK
     * @param string $NO_URUT
     * @param string $KD_JNS_OP
     * @param string $THN_PAJAK_SPPT
     * @return Sppt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($KD_PROPINSI, $KD_DATI2, $KD_KECAMATAN, $KD_KELURAHAN, $KD_BLOK, $NO_URUT, $KD_JNS_OP, $THN_PAJAK_SPPT)
    {
        if (($model = Sppt::findOne(['KD_PROPINSI' => $KD_PROPINSI, 'KD_DATI2' => $KD_DATI2, 'KD_KECAMATAN' => $KD_KECAMATAN, 'KD_KELURAHAN' => $KD_KELURAHAN, 'KD_BLOK' => $KD_BLOK, 'NO_URUT' => $NO_URUT, 'KD_JNS_OP' => $KD_JNS_OP, 'THN_PAJAK_SPPT' => $THN_PAJAK_SPPT])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionHome(){
        
        return $this->render('homeview');
        
    }
    
    public function actionHomeviewdetail(){
        
        $nop = $_POST['nop'];
        $tahun = $_POST['tahun'];

        $sppt2 = Sppt::find()
        ->select(["CONCAT(KD_PROPINSI,KD_DATI2,KD_KECAMATAN,KD_KELURAHAN,KD_BLOK,NO_URUT,KD_JNS_OP) AS nop"
        ,'THN_PAJAK_SPPT','SIKLUS_SPPT'
        ,'KD_KANWIL','KD_KANTOR','KD_TP','NM_WP_SPPT','JLN_WP_SPPT','BLOK_KAV_NO_WP_SPPT','RW_WP_SPPT','RT_WP_SPPT','KELURAHAN_WP_SPPT','KOTA_WP_SPPT','KD_POS_WP_SPPT','NPWP_SPPT','NO_PERSIL_SPPT','KD_KLS_TANAH','THN_AWAL_KLS_TANAH','KD_KLS_BNG','THN_AWAL_KLS_BNG','TGL_JATUH_TEMPO_SPPT','LUAS_BUMI_SPPT','LUAS_BNG_SPPT','NJOP_BUMI_SPPT','NJOP_BNG_SPPT','NJOP_SPPT','NJOPTKP_SPPT','PBB_TERHUTANG_SPPT','FAKTOR_PENGURANG_SPPT','PBB_YG_HARUS_DIBAYAR_SPPT','STATUS_PEMBAYARAN_SPPT','STATUS_TAGIHAN_SPPT','STATUS_CETAK_SPPT','TGL_TERBIT_SPPT','TGL_CETAK_SPPT','NIP_PENCETAK_SPPT','STATUS'])
        ->where(['CONCAT(KD_PROPINSI,KD_DATI2,KD_KECAMATAN,KD_KELURAHAN,KD_BLOK,NO_URUT,KD_JNS_OP)' => $nop])
        ->andWhere(['THN_PAJAK_SPPT' => $tahun])
        ->one();

        $sppt = Yii::$app->db->createCommand("SELECT CONCAT(KD_PROPINSI,KD_DATI2,KD_KECAMATAN,KD_KELURAHAN,KD_BLOK,NO_URUT,KD_JNS_OP) AS NOP,THN_PAJAK_SPPT,SIKLUS_SPPT,KD_KANWIL,KD_KANTOR,KD_TP,NM_WP_SPPT,JLN_WP_SPPT,BLOK_KAV_NO_WP_SPPT,RW_WP_SPPT,RT_WP_SPPT,KELURAHAN_WP_SPPT,KOTA_WP_SPPT,KD_POS_WP_SPPT,NPWP_SPPT,NO_PERSIL_SPPT,KD_KLS_TANAH,THN_AWAL_KLS_TANAH,KD_KLS_BNG,THN_AWAL_KLS_BNG,TGL_JATUH_TEMPO_SPPT,LUAS_BUMI_SPPT,LUAS_BNG_SPPT,NJOP_BUMI_SPPT,NJOP_BNG_SPPT,NJOP_SPPT,NJOPTKP_SPPT,PBB_TERHUTANG_SPPT,FAKTOR_PENGURANG_SPPT,PBB_YG_HARUS_DIBAYAR_SPPT,STATUS_PEMBAYARAN_SPPT,STATUS_TAGIHAN_SPPT,STATUS_CETAK_SPPT,TGL_TERBIT_SPPT,TGL_CETAK_SPPT,NIP_PENCETAK_SPPT,STATUS
        from sppt where CONCAT(KD_PROPINSI,KD_DATI2,KD_KECAMATAN,KD_KELURAHAN,KD_BLOK,NO_URUT,KD_JNS_OP) = '$nop' and THN_PAJAK_SPPT = $tahun")
            ->queryAll();
        
        
        return $this->render('homeviewdetail', array('spptdata' =>$sppt2));
        // echo "<pre>";
        // print_r($sppt2);
        // echo "</pre>";
        // exit;
        
    }

    public function actionHomeviewdetail2(){
        
        $nop = $_POST['Sppt']['nop'];
        $tahun = $_POST['tahun'];
        $tagihan = $_POST['tagihan'];
        $type = $_POST['metodepembayaran'];
        $status = $_POST['status'];
        
        //generate code va
        $digits = 16;
        $va = rand(pow(10, $digits-1), pow(10, $digits)-1);

        $createdDate = date('Y-m-d H:i:s');
        $expiredDate = date('Y-m-d H:i:s', time()+7200);

        $model = new Billing();
        $model->setAttributes([
            'NOP' => $nop,
            'TAHUN' => $tahun,
            'NOMINAL' => $tagihan,
            'VA' => $va,
            'TYPE' => $type,
            'status' => $status,
            'CREATED_DATE' => $createdDate,
            'EXPIRED_DATE' => $expiredDate

        ]);
        // echo "<pre>";
        // print_r($model);
        // echo "</pre>";

        // exit;

        if ($model->validate()){
            $model->save();
        }else{
             ($model->getErrors());
        }
        
        return $this->render('homeviewdetail2', array('spptdatadetail' =>$model));

        // echo "<pre>";
        // print_r($_POST);
        // echo "<br>";
        // print_r($nop);
        // echo "<br>";
        // print_r($tahun);
        // echo "<br>";
        // print_r($tagihan);
        // echo "<br>";
        // print_r($va);
        // echo "<br>";
        // print_r($metodepembayaran);
        // echo "<br>";
        // print_r($createdDate);
        // echo "<br>";
        // print_r($expiredDate);

        // echo "</pre>";
        
    }

    public function actionSuccess() {
        $model = new Billing();

        date_default_timezone_set('Asia/Jakarta');
        //generate TR ID
        $digits = 8;
        $TR = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $TRgenerate = "TR".$TR;
        
        
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 8; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $prefix = Yii::$app->params['prefix'];
        $client_id = Yii::$app->params['client_id'];
        $va = $prefix.$client_id.$randomString;
        
        // $createdDate = date('Y-m-d H:i:s');
        // $expiredDate = date('Y-m-d H:i:s', time()+7200);

        $create_date = date("Y-m-d H:i:s");
        $expired_date = date("Y-m-d H:i:s", time()+7200);
        if (Yii::$app->request->post() != null) {

            $data = Yii::$app->request->post();
            $model->NOP = $data['Sppt']['nop'];
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            // exit;
            // $type = $_POST['metodepembayaran'];
            $model->TYPE = $data['metodepembayaran'];
            
            // exit;
            $model->TAHUN = $data['tahun'];
            $model->NOMINAL = $data['tagihan'];
            $model->VA = $va;
            $model->EXPIRED_DATE = $expired_date;
            $model->CREATED_DATE = $create_date;
            $nama = $data['namawajibpajak'];
            // $param = array(
            //     'va' => $va,
            //     'nama' => $nama
            // );
            $param = [  
                "type" => "createbilling",
                "client_id" => "988",
                "trx_id" => $TRgenerate,
                "trx_amount"=> $model->NOMINAL,
                "billing_type"=>"c",
                "customer_name"=> $nama,
                // "payment_amount"=>"1000",
                // "cumulative_payment_amount"=>"1000",
                // "payment_ntb"=>"122122",
                // "datetime_payment"=>"2019-12-30 15:55:52",
                // "datetime_payment_iso8601"=>"2019-12-30T15:55:52+07:00"
            ];
            $secret_key = "7ac2f5ac62858afaf1fbb238b06c9e23";
            

            $ecoll = new Ecoll();
            $result = $ecoll->createBilling($param, $secret_key);
            // echo '<pre>',print_r($result),'</pre>';
            // var_dump($result);
            // echo "<br>";
            $result = json_decode($result);
            // var_dump($result);

            // exit;

            if($result->status != "000"){
                $searchModel = new SpptSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                Yii::$app->session->setFlash('danger', "Error Create Billing.".json_decode($result)->message);
                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            }
            else{
                //['payment_amount'];
                if (isset($result->data)) {
                    echo "Result : ";
                    // echo '<pre>',print_r(BniHashing::parseData($result->data, $client_id,$secret_key)),'</pre>';
                    $result_array = BniHashing::parseData($result->data, $client_id,$secret_key);
                    $trx_id = $result_array['trx_id'];
                    $va = $result_array['virtual_account'];

                    $model->TRX_ID = $trx_id;
                    $model->VA = $va;

                } 

                // $model->save();
                // echo "<pre>";
                // print_r($model);
                // echo "</pre>";

                // exit;
                if ($model->validate()){
                    $model->save();
                }else{
                    ($model->getErrors());
                }
                
                return $this->render('homeviewdetail2', array('spptdatadetail' =>$model));

                // return $this->render('success',[
                //     'model' => $model,
                // ]);
            }
        }
        else{

        }
        
        
    }

    public function actionUpdatebilling() {
        $model = new Billing();
        
        date_default_timezone_set('Asia/Jakarta');

        $nop = '147101000100109890';
        $sql = Yii::$app->db->createCommand("SELECT * FROM billing where NOP = '$nop'")
            ->queryall();
        // print_r($sql);
        // exit;

        $NOP = $sql['0']['NOP'];
        $TAHUN = $sql['0']['TAHUN'];
        $NOMINAL = $sql['0']['NOMINAL'];
        $VA = $sql['0']['VA'];
        $TRX_ID = $sql['0']['TRX_ID'];
        $TYPE = $sql['0']['TYPE'];
        $STATUS = $sql['0']['STATUS'];
        $EXPIRED_DATE = $sql['0']['EXPIRED_DATE'];
        $CREATED_DATE = $sql['0']['CREATED_DATE'];
        $trdate = date('Y-m-d H:i:s');

        $TR_DATE = $trdate;

        $prefix = Yii::$app->params['prefix'];
        $client_id = Yii::$app->params['client_id'];
        
        // $createdDate = date('Y-m-d H:i:s');
        // $expiredDate = date('Y-m-d H:i:s', time()+7200);

        $create_date = date("Y-m-d H:i:s");
        $expired_date = date("Y-m-d H:i:s", time()+7200);

            
            $dataarray = [  
                // "type" => "updatebilling",
                "client_id" => "988",
                "trx_id" => $TRX_ID,
                "virtual_account"=> $VA,
                "trx_amount"=> $NOMINAL,
                "payment_amount"=> $NOMINAL,

                // "billing_type"=>"c",
                // "customer_name"=> $nama,
                
                // "cumulative_payment_amount"=>"1000",
                // "payment_ntb"=>"122122",
                // "datetime_payment"=>"2019-12-30 15:55:52",
                // "datetime_payment_iso8601"=>"2019-12-30T15:55:52+07:00"



            ];
            $a = json_encode($dataarray);
            // $b = json_decode($a);

            // print_r($b);
            // exit;
            
            // if ($b->trx_amount == $b->payment_amount){
            //     echo "sama";
            // }else{
            //     echo "tidak sama";
            // }
            // exit;

            $secret_key = "7ac2f5ac62858afaf1fbb238b06c9e23";
            

            $ecoll = new Ecoll();
            $result = BniHashing::hashData($dataarray,$dataarray['client_id'],$secret_key);
            $result_array = BniHashing::parseData($result, $client_id,$secret_key);

            // echo '<pre>',print_r($result),'</pre>';
            echo "<pre>";           
            var_dump($result);
            echo "<pre>";
            echo "=================";
            echo "<pre>";           
            var_dump($result_array);
            echo "<pre>";
            // exit;
            if ($result_array['trx_amount'] == $result_array['payment_amount']){
                echo "sama";
            }else{
                echo "tidak sama";
            }
            exit;
            // echo "<br>";
            $result = json_decode($result);
            // var_dump($result);

            // exit;

            if($result->status != "000"){
                $searchModel = new SpptSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                Yii::$app->session->setFlash('danger', "Error Create Billing.".json_decode($result)->message);
                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            }
            else{
                //['payment_amount'];
                if (isset($result->data)) {
                    echo "Result : ";
                    // echo '<pre>',print_r(BniHashing::parseData($result->data, $client_id,$secret_key)),'</pre>';
                    $result_array = BniHashing::parseData($result->data, $client_id,$secret_key);
                    $trx_id = $result_array['trx_id'];
                    $va = $result_array['virtual_account'];

                    $model->TRX_ID = $trx_id;
                    $model->VA = $va;

                } 

                // $model->save();
                // echo "<pre>";
                // print_r($model);
                // echo "</pre>";

                // exit;
                if ($model->validate()){
                    $model->save();
                }else{
                     ($model->getErrors());
                }
                
                return $this->render('homeviewdetail2', array('spptdatadetail' =>$model));

                // return $this->render('success',[
                //     'model' => $model,
                // ]);
            }
        
        
    }
    public function actionDummyData(){

        $prefix = Yii::$app->params['prefix'];
        $client_id = Yii::$app->params['client_id'];
        
        $dataarray = [  
            "client_id" => "988",
            "trx_id" => "TR62166875",
            "virtual_account"=> "8988200311094601",
            "trx_amount"=> "17496",
            "payment_amount"=> "17496",
        ];

        $secret_key = "7ac2f5ac62858afaf1fbb238b06c9e23";
        

        $ecoll = new Ecoll();
        $result = BniHashing::hashData($dataarray,$dataarray['client_id'],$secret_key);

        return $result;

    }

}
