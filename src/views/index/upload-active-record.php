<?php
declare(strict_types = 1);

/**
 * @var View $this
 * @var ActiveRecord $model
 * @var array $models
 */

use kartik\select2\Select2;
use pozitronik\filestoragewidgets\file_input\FileInputWidget;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>
	<div class="hpanel">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<label class="control-label">Файл</label>
					<?= $form->field($model, 'uploadFileInstance')->widget(FileInputWidget::class, [
						'options' => [
							'multiple' => true
						]
					])->label('Загрузка к ActiveRecord-модели') ?>
				</div>
				<div class="col-md-4">
					<label class="control-label">Выбранная модель (для тестов используются модель FileStorage)</label>
					<?= Select2::widget([
						'data' => $models,
						'name' => 'model'
					]) ?>
				</div>
				<div class="col-md-4">
					<label class="control-label">Произвольные теги</label>
					<?= Select2::widget([
						'data' => $model->attributeLabels(),
						'options' => [
							'placeholder' => 'Выберите или добавьте теги',
							'multiple' => true
						],
						'name' => 'tags',
						'pluginOptions' => [
							'tags' => true,
							'tokenSeparators' => [',', ' '],
							'maximumInputLength' => 10
						]
					]) ?>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<div class="btn-group">
				<?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary']) ?>
			</div>
		</div>
	</div>
<?php ActiveForm::end(); ?>