
<aside class="shadow" style=" min-width:200px;">
<?php echo \yii\bootstrap4\Nav::widget([
    'options' =>[
    'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
        [
            'label' => 'Home',
            'url'  => ['/site/index']
        ],
        [
            'label' => 'Histroy',
            'url'  => ['/histroy/index']
        ]
        ]
]) ?>
</aside>