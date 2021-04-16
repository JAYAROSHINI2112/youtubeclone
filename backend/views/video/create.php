<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>
<div>
 <div class="upload-icon">
 <i class="fa fa-upload"></i>
 </div>
 <p>Drag and Drop file you want to upload</p>
 <p class="text-muted">Your video will be private until you pulish it</p>
 <button class="btn btn-primary btn-file">
 Select File
 <input type="file"id="videoFile"name="video"> 
 </button>
 </div>
</div>
