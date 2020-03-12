<?php

namespace app\controllers;
use app\models\Student;
use app\models\Billing;
use app\components\BniHashing;


class StudentController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGetStudent()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $student = Student::find()->all();
        if(count($student) > 0 )
        {
            return array('status' => true, 'data'=> $student);
        }
        else
        {
            return array('status'=>false,'data'=> 'No Student Found');
        }
    }

    public function actionCreateStudent()
    {
    
        
       \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
       $student = new Student();
       $student->scenario = 'create';
       $student->attributes = \yii::$app->request->post();
       if($student->validate())
       {
        $student->save();
        return array('status' => true, 'data'=> 'Student record is successfully updated');
       }
       else
       {
        return array('status'=>false,'data'=>$student->getErrors());    
       }

    }

    public function actionUpdateStudent()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;     
        $attributes = \yii::$app->request->post();
       
        $student = Student::find()->where(['ID' => $attributes['id'] ])->one();
        if(count($student) > 0 )
        {
        $student->attributes = \yii::$app->request->post();
        $student->save();
            return array('status' => true, 'data'=> 'Student record is updated successfully');
        }
        else
        {
            return array('status'=>false,'data'=> 'No Student Found');
        }
    }

    public function actionDeleteStudent()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $attributes = \yii::$app->request->post();
        $student = Student::find()->where(['ID' => $attributes['id'] ])->one();  
        if(count($student) > 0 )
        {
        $student->delete();
        return array('status' => true, 'data'=> 'Student record is successfully deleted'); 
        }
        else
        {
        return array('status'=>false,'data'=> 'No Student Found');
        }
    }

    public function actionCreate()
    {
       \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
    //    $student = new Student();
    //    $student->scenario = Student:: SCENARIO_CREATE;
       $nama = \yii::$app->request->post();

    //    print_r($nama);
    //    exit;

       if($student->validate())
       {
        $student->save();
        return array('status' => true, 'data'=> 'Student record is successfully updated');
       }
       else
       {
        return array('status'=>false,'data'=>$student->getErrors());    
       }

    }
    
    public function actionCreates()
    {
    
        date_default_timezone_set('Asia/Jakarta');
        
       \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
    //    $student = new Student();
    //    $student->scenario = 'create';
    //    $student->attributes = \yii::$app->request->post();
        // $result = BniHashing::hashData($dataarray,$dataarray['client_id'],$secret_key);

        $prefix = "8";
        $client_id = "988";
        $secret_key = "7ac2f5ac62858afaf1fbb238b06c9e23";
        $transaction_date = date("Y-m-d H:i:s");

        $nama = \yii::$app->request->post();
        $result_array = BniHashing::parseData($nama['Name'], $client_id,$secret_key);
        $va = $result_array['virtual_account'];


        if ($result_array['trx_amount'] == $result_array['payment_amount']){

            $data = Billing::find()->where(['va'=>$va ])->one();
            $data->STATUS = 1;
            $data->TR_DATE = $transaction_date;

            $data->save();

            // print_r($data);
            // exit;

            return array('status' => "000");

        }else{
            return array('status' => "failed / pembayaran gagal");
        }
    }


}
