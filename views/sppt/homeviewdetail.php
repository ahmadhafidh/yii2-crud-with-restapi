<?php
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;

?>
<!-- <a href="#">Inbox <span class="badge">42</span></a> -->
<div class="col-md-6">
<ul class="list-group">
  <li class="list-group-item"><a href="/sppt/home">Home</a></li>
  <li class="list-group-item"><a href="/billing/index">Billing</a></li>
  <li class="list-group-item"><a href="/billing/paid">Paid</a></li>
</ul>

</div>
<div class="col-md-6">
<?php $form = ActiveForm::begin(['action' => ['sppt/success'],'options' => ['method' => 'post']]) ?>

<?= $form->field($spptdata, 'nop')->textInput(['maxlength' => true, 'readonly' => true]) ?>

<div class="form-group">
    <label for="tahun">Tahun:</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $spptdata->THN_PAJAK_SPPT ?>" readonly>
    </div>
    <div class="form-group">
        <label for="namawajibpajak">Nama Wajib Pajak:</label>
        <input type="text" class="form-control" id="namawajibpajak" name="namawajibpajak" value="<?= $spptdata->NM_WP_SPPT ?>" readonly>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $spptdata->JLN_WP_SPPT.'-'.$spptdata->BLOK_KAV_NO_WP_SPPT ?>" readonly>
    </div>
    <div class="form-group">
        <label for="kota">Kota:</label>
        <input type="text" class="form-control" id="kota" name="kota" value="<?= $spptdata->KOTA_WP_SPPT ?>" readonly>
    </div>
    <div class="form-group">
        <label for="Kelurahan">Kelurahan:</label>
        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $spptdata->KELURAHAN_WP_SPPT ?>" readonly>
    </div>
    <div class="form-group">
        <label for="Tagihan">Tagihan:</label><br>
        <input type="hidden" name="tagihan" value="<?= $spptdata->PBB_YG_HARUS_DIBAYAR_SPPT ?>">
        <label name="tagihan" id="tagihan">Rp. <?= $spptdata->PBB_YG_HARUS_DIBAYAR_SPPT ?></label>
    </div>
    <div class="form-group">=      
        <label for="tanggaljatuhtempo">Tanggal Jatuh Tempo:</label><br>
        <input type="hidden" name="tanggaljatuhtempo" value="<?= $spptdata->TGL_JATUH_TEMPO_SPPT ?>">
        <label ><?= $spptdata->TGL_JATUH_TEMPO_SPPT ?></label>
    </div>
    <div class="form-group">
        <label for="status">Status:</label><br>
        <label >
        <?php
          $statusname = $spptdata['STATUS'];
          if ($statusname != 0){
            $statusname = "Terbayar";
          }else{
            $statusname = "Belum Dibayar";
          }
          echo $statusname;
        ?>

        <input type="hidden" name="status" value="<?= $statusname ?>">
        </label>
    </div>
    <div class="form-group">
        <label for="metodepembayaran">Pilih Metode Pembayaran:</label><br>
        <input type="radio" id="ecoll" name="metodepembayaran" value="ecoll">
        <label for="ecoll">E-collection</label>
        <br>
        <input type="radio" id="yap" name="metodepembayaran" value="yap">
        <label for="yap">Yap</label>
      <br><br>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>

<?php ActiveForm::end();?>

<?php
  
if(!empty($spptdata))
{
    // echo"<pre>";
    // print_r($spptdata);
    // echo"</pre>";

    // exit;



    // foreach($spptdata as $row)
    // {
    //   //condition for check status pembayaran
    //   $statusname = $row['STATUS'];
    //   if ($statusname != 0){
    //     $statusname = "Terbayar";
    //   }else{
    //     $statusname = "Belum Dibayar";
    //   }
      
    //   $form = ActiveForm::begin(["action" => ["sppt/homeviewdetail2"],"options" => ["method" => "post"]]);

    //   echo '
    //       <div class="form-group">
    //         <label for="nop">Nop:</label>
    //         <input type="text" class="form-control" id="nop" name="nop" value="'.$row['NOP'].'" readonly>
    //       </div>
    //       <div class="form-group">
    //         <label for="tahun">Tahun:</label>
    //          <input type="text" class="form-control" id="tahun" value="'.$row['THN_PAJAK_SPPT'].'" readonly>
    //       </div>
    //       <div class="form-group">
    //         <label for="namawajibpajak">Nama Wajib Pajak:</label>
    //         <input type="text" class="form-control" id="namawajibpajak" value="'.$row['NM_WP_SPPT'].'" readonly>
    //       </div>
    //       <div class="form-group">
    //         <label for="alamat">Alamat:</label>
    //         <input type="text" class="form-control" id="alamat" value="'.$row['JLN_WP_SPPT'].' '.$row['BLOK_KAV_NO_WP_SPPT'].'" readonly>
    //       </div>
    //       <div class="form-group">
    //         <label for="kota">Kota:</label>
    //         <input type="text" class="form-control" id="kota" value="'.$row['KOTA_WP_SPPT'].'" readonly>
    //       </div>
    //       <div class="form-group">
    //         <label for="Kelurahan">Kelurahan:</label>
    //         <input type="text" class="form-control" id="kelurahan" value="'.$row['KELURAHAN_WP_SPPT'].'" readonly>
    //       </div>
    //       <div class="form-group">
    //         <label for="Tagihan">Tagihan:</label><br>
    //         <label>Rp. '.$row['PBB_YG_HARUS_DIBAYAR_SPPT'].'</label>
    //       </div>
    //       <div class="form-group">=
          
    //         <label for="tanggaljatuhtempo">Tanggal Jatuh Tempo:</label><br>
    //         <label >'.$row['TGL_JATUH_TEMPO_SPPT'].'</label>
    //       </div>
    //       <div class="form-group">
    //         <label for="status">Status:</label><br>
    //         <label >'.$statusname.'</label>
    //       </div>
    //       <div class="form-group">
    //         <label for="pilihmetodepembayaran">Pilih Metode Pembayaran:</label><br>
    //         <input type="radio" id="ecoll" name="yap">
    //         <label for="ecoll">E-collection</label>
    //         <br>
    //         <input type="radio" id="yap" name="yap">
    //         <label for="yap">Yap</label>

    //         <br><br>

    //       </div>
    //       <button type="submit" class="btn btn-primary">Submit</button>

    //   ';
      //  ActiveForm::end();

        // echo "<pre>";
        // echo $row['NOP'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['THN_PAJAK_SPPT'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['NM_WP_SPPT'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['JLN_WP_SPPT'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['BLOK_KAV_NO_WP_SPPT'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['KOTA_WP_SPPT'];
        // echo "</pre>";
        
        // echo "<pre>";
        // echo $row['KELURAHAN_WP_SPPT'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['PBB_YG_HARUS_DIBAYAR_SPPT'];
        // echo "</pre>";

        // echo "<pre>";
        // echo $row['TGL_JATUH_TEMPO_SPPT'];
        // echo "</pre>";

    }
    // exit;

?>

</div>