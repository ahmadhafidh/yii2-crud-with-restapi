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
<?php $form = ActiveForm::begin(['action' => ['sppt/homeviewdetail'],'options' => ['method' => 'post']]) ?>
  <div class="form-group">
    <label for="nop">Nop:</label>
    <input type="text" class="form-control" id="nop" name="nop" placeholder="Nomer Objek Pajak" required>
  </div>
  <div class="form-group">
    <label for="tahun">Tahun:</label>
    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun Pajak" required>
  </div>
  <button type="submit" class="btn btn-default">Cari</button>

<?php ActiveForm::end(); ?>


</div>