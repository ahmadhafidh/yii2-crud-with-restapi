<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = "Hello CRUD";

?>

<div class="row">
    <div class="col-md-12">
        <h1>Team List</h1>
        <hr/>
        <?php

        echo Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", // template for all links
            'links' => [
                'Team List',
            ],
        ]);

        ?>
    </div>
</div>

<div>
    <div class="col-md-2">
        <div class="list-group">
          <a href="<?php echo Url::to(['hello-crud/add']); ?>" class="list-group-item"><i class="glyphicon glyphicon-plus"></i> Add Team</a>
          <a href="<?php echo Url::to(['hello-crud/delete-all']); ?>" class="list-group-item"><i class="glyphicon glyphicon-trash"></i> Delete All</a>
        </div>
    </div>
    <div class="col-md-10">
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>League</th>
                <th>Country</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php if (count($teams) > 0) { ?>
                    <?php foreach ($teams as $team): ?>
                        <tr>
                            <td><?= Html::encode("{$team['name']}") ?></td>
                            <td><?= Html::encode("{$team->league['name']}") ?></td>
                            <td><?= Html::encode("{$team['country']}") ?></td>
                            <td style="width:15%;text-align:center;">
                                <a class="btn btn-success btn-sm" href="<?php echo Url::to(['hello-crud/detail', 'id'=>$team['id']]); ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                            </td>
                          </tr>
                    <?php endforeach; ?>
                <?php } else { ?>
                <tr>
                    <td style="text-align:center;font-size:15px;padding:25px;" colspan="5">No data found...</td>
                </tr>
                <?php } ?>

            </tbody>
          </table>
    </div>
</div>
