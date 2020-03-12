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
    <?php
        $datetime =$spptdatadetail->EXPIRED_DATE;
        $format = 'Y-m-d H:i:s';
        $date = DateTime::createFromFormat($format, $datetime);

    ?>
    <center>
    <div>
        <label>Silahkan Transfer Ke Virtual Account<label>
    </div>
    <div>
        <label><?= $spptdatadetail->VA; ?></label>
    </div>
    <div>
        <label>Rp. <?= $spptdatadetail->NOMINAL; ?></label>
    </div>
    <div>
        <label>Sebelum Pukul <?= $date->format('H:i') . "\n"; ?> WIB</label>
    </div>
    <button><a href="/sppt/home">HOME</a></button>

    </center>
</div>