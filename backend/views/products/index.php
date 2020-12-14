<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">


    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
        <div class="body-box">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
                    'title_ru',
//                    'title_uz',
//                    'title_en',
                    'photo',
                    //'phone',
                    //'price',
                    //'rangi',
                    //'company_id',
                    //'view',
                    //'boshqaruv_turi',
                    //'hajmi',
                    //'address',
                    //'country_id',
                    'person',
                    //'description_ru:ntext',
                    //'description_uz:ntext',
                    //'description_en:ntext',
                    //'dostavka_ru:ntext',
                    //'dostavka_uz:ntext',
                    //'dostavka_en:ntext',
                    //'payme_ru:ntext',
                    //'payme_uz:ntext',
                    //'payme_en:ntext',
                    //'telegram:ntext',
                    //'instagram:ntext',
                    //'facebook:ntext',
                    //'status',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

        </div>
    </div>
</div>
