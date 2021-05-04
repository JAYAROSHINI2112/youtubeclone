<?php

$this->title = $model->title . ' | ' . Yii::$app->name;
?>
<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?php echo $model->getVideoLink() ?>"
                   controls></video>
        </div>
        <h6 class="mt-2"><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
        <div>123views . <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
        </div>
<div>
<button class="btn btn-sm btn-outline-primary"> 
<i class="fas fa-thumbs-up"></i>100
</button>
<button class="btn btn-sm btn-outline-secondary"> 
<i class="fas fa-thumbs-down"></i>2
</button>
</div>
    </div>