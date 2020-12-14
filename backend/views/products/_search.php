<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'rangi') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'view') ?>

    <?php // echo $form->field($model, 'boshqaruv_turi') ?>

    <?php // echo $form->field($model, 'hajmi') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'person') ?>

    <?php // echo $form->field($model, 'description_ru') ?>

    <?php // echo $form->field($model, 'description_uz') ?>

    <?php // echo $form->field($model, 'description_en') ?>

    <?php // echo $form->field($model, 'dostavka_ru') ?>

    <?php // echo $form->field($model, 'dostavka_uz') ?>

    <?php // echo $form->field($model, 'dostavka_en') ?>

    <?php // echo $form->field($model, 'payme_ru') ?>

    <?php // echo $form->field($model, 'payme_uz') ?>

    <?php // echo $form->field($model, 'payme_en') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'instagram') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
