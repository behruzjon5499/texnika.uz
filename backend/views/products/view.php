<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title_ru',
            'title_uz',
            'title_en',
            'photo',
            'phone',
            'price',
            'rangi',
            'company_id',
            'view',
            'boshqaruv_turi',
            'hajmi',
            'address',
            'country_id',
            'person',
            'description_ru:ntext',
            'description_uz:ntext',
            'description_en:ntext',
            'dostavka_ru:ntext',
            'dostavka_uz:ntext',
            'dostavka_en:ntext',
            'payme_ru:ntext',
            'payme_uz:ntext',
            'payme_en:ntext',
            'telegram:ntext',
            'instagram:ntext',
            'facebook:ntext',
            'status',
        ],
    ]) ?>

</div>
