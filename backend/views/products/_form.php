<?php

use common\models\Companies;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Общие</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Параметры</a></li>
                <?php //<li class=""><a href="#tab_6" data-toggle="tab" aria-expanded="false">Видео</a></li> ?>
                <?php /*
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                */ ?>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                    <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_title_1" data-toggle="tab" aria-expanded="true">Название RU</a></li>
                                <li class=""><a href="#tab_title_2" data-toggle="tab" aria-expanded="false">Название UZ</a></li>
                                <li class=""><a href="#tab_title_3" data-toggle="tab" aria-expanded="false">Название EN</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_title_1">
                                    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="tab-pane" id="tab_title_2">
                                    <?= $form->field($model, 'title_uz')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                                <div class="tab-pane" id="tab_title_3">
                                    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="clearfix"></span>
                    <div class="row">
                        <div class="col-md-6">


                            <?= $form->field($model, 'company_id')->dropDownList(
                                \yii\helpers\ArrayHelper::map(
                                    Companies::find()->all(),
                                    'id',
                                    'title_ru'
                                )
                            ) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
                        </div>

                    </div>

                </div>



                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">

                    <div class="panel box">
                        <div class="box-header">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="false" class="collapsed">
                                  Mahsulot xususiyatari
                                </a>
                            </h4>
                        </div>
                        <div id="collapse" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="box-body">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tabLang_1" data-toggle="tab" aria-expanded="true">RU</a></li>
                                        <li class=""><a href="#tabLang_2" data-toggle="tab" aria-expanded="true">UZ</a></li>
                                        <li class=""><a href="#tabLang_3" data-toggle="tab" aria-expanded="true">EN</a></li>
                                    </ul>
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="tabLang_1">

                                            <?= $form->field($model, 'description_ru')->textarea(['rows' => 14]) ?>

                                        </div>

                                        <div class="tab-pane " id="tabLang_2">

                                            <?= $form->field($model, 'description_uz')->textarea(['rows' => 14]) ?>
                                        </div>

                                        <div class="tab-pane " id="tabLang_3">

                                            <?= $form->field($model, 'description_en')->textarea(['rows' => 14]) ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group">

                        <div class="panel box">
                            <div class="box-header">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" class="collapsed">
                                        Tolov shartlari
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="box-body">
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tabLang_11" data-toggle="tab" aria-expanded="true">RU</a></li>
                                            <li class=""><a href="#tabLang_22" data-toggle="tab" aria-expanded="true">UZ</a></li>
                                            <li class=""><a href="#tabLang_33" data-toggle="tab" aria-expanded="true">EN</a></li>
                                        </ul>
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tabLang_11">

                                                <?= $form->field($model, 'payme_ru')->textarea(['rows' => 14]) ?>

                                            </div>

                                            <div class="tab-pane " id="tabLang_22">

                                                <?= $form->field($model, 'payme_uz')->textarea(['rows' => 14]) ?>

                                            </div>

                                            <div class="tab-pane " id="tabLang_33">

                                                <?= $form->field($model, 'payme_en')->textarea(['rows' => 14]) ?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box">
                                <div class="box-header">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" class="collapsed">
                                          yetkazib berish shartlari
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                        <div class="nav-tabs-custom">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tabLang_31" data-toggle="tab" aria-expanded="true">RU</a></li>
                                                <li class=""><a href="#tabLang_32" data-toggle="tab" aria-expanded="true">UZ</a></li>
                                                <li class=""><a href="#tabLang_322" data-toggle="tab" aria-expanded="true">EN</a></li>
                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane active" id="tabLang_31">

                                                    <?= $form->field($model, 'dostavka_ru')->textarea(['rows' => 14]) ?>

                                                </div>

                                                <div class="tab-pane " id="tabLang_32">

                                                    <?= $form->field($model, 'dostavka_uz')->textarea(['rows' => 14]) ?>

                                                </div>

                                                <div class="tab-pane " id="tabLang_322">

                                                    <?= $form->field($model, 'dostavka_en')->textarea(['rows' => 14]) ?>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box">
                                <div class="box-header">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" class="collapsed">
                                       Ijtimoiy tarmqolar
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">

                                <?= $form->field($model, 'telegram')->textInput(['rows' => 6]) ?>

                                <?= $form->field($model, 'instagram')->textInput(['rows' => 6]) ?>

                                <?= $form->field($model, 'facebook')->textInput(['rows' => 6]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nav-tabs-custom -->
        </div>


    </div>

<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>


        <?= $form->field($model, 'rangi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'person')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'hajmi')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-md-6">
        <?php echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions' => [
                'dropZoneTitle' => 'Загрузите аватар.',
                'msgPlaceholder' => 'Загрузите аватар.',
                'initialPreviewAsData'=>true,
                'initialPreview' => [
                    $model->photo ? '<img src="/uploads/file/' . $model->photo . '" width="200">': '<img src="/uploads/tab-panel/no-image.png" width="200">',
                ],
                'showRemove' => false,
                'showUpload' => false,

            ]
        ]); ?>
    </div>
</div>


    <?= $form->field($model, 'boshqaruv_turi')
        ->dropDownList(['1'=>'mexanik' , '2'=>'avtomatik'] ,
            $param = ['options' => [$model->status => ['Selected' => true]]]
        );
    ?>

    <?= $form->field($model, 'category_id')
        ->dropDownList(['1'=>'Muzlatkich' , '2'=>'mashinka', '3'=>'mikrovalnofka', '4'=>'televizor'] ,
            $param = ['options' => [$model->status => ['Selected' => true]]]
        );
    ?>

    <?= $form->field($model, 'country_id')
        ->dropDownList(['1'=>'O`zbekiston' , '2'=>'Rassiya', '3'=>'Xitoy', '4'=>'AQSH', '5'=>'Korea'] ,
            $param = ['options' => [$model->status => ['Selected' => true]]]
        );
    ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php $script = "$('document').ready(function(){
    var href = '{$_SERVER['REQUEST_URI']}';
    
	$(document).on('change','.image',function(){
	  var input = $(this)[0];
	  var obj = $(this);
	  if ( input.files && input.files[0] ) {
		if ( input.files[0].type.match('image.*') ) {
		  var reader = new FileReader();
		  reader.onload = function(e){ $('img#'+obj.attr('id')).attr('src', e.target.result);}
		  reader.readAsDataURL(input.files[0]);
		} else console.log('is not image mime type');
	  } else console.log('not isset files data or files API not support');  
	});  
	$('.img_preview').click(function(e){ e.preventDefault(); $('#img_preview.image').click(); });	
	$('.img_file').click(function(e){ e.preventDefault(); $('#img_file.file').click(); });	
    // удаление из фото галереи
	$('.remove-ajax').click(function(e){
		e.preventDefault();	
		if(!confirm('Подтвердите удаление')) return false;
		var id = $(this).data('id');		
		obj = $(this).parent();
		$.ajax({
			type: 'post',
            url: '/admin/transport/delete-gallery-item',            
            dataType: 'json',
            data: 'id='+id+'&_csrf='+yii.getCsrfToken(),
            success: function(data){
                if(data.status) obj.remove();
			},
            error: function(jqxhr, status, errorMsg) {
				alert('Статус: ' + status + ' Ошибка: ' + errorMsg );				
			}
        });		
	});
	$('.remove-file').click(function(e){
		e.preventDefault();
		if(!confirm('Подтвердите удаление')) return false;
		var id = $(this).data('id');		
		obj = $(this).parent();
		$.ajax({
			type: 'post',
            url: '/admin/transport/delete-file',            
            dataType: 'json',
            data: 'id='+id+'&_csrf='+yii.getCsrfToken(),
            success: function(data){
                if(data.status) window.location.href = href;                
			},
            error: function(jqxhr, status, errorMsg) {
				alert('Статус: ' + status + ' Ошибка: ' + errorMsg );				
			}
        });		
	});
});";

$this->registerJs($script, yii\web\View::POS_END);