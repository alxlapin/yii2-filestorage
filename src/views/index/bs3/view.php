<?php
declare(strict_types = 1);

/**
 * @var View $this
 * @var FileStorage $fileStorageModel
 */

use pozitronik\filestorage\FSModule;
use pozitronik\filestorage\models\FileStorage;
use yii\i18n\Formatter;
use yii\web\View;
use yii\widgets\DetailView;

?>
<div class="panel">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<?= DetailView::widget([
					'formatter' => [
						'class' => Formatter::class,
						'nullDisplay' => 'Отсутствует'
					],
					'model' => $fileStorageModel
				]) ?>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<div class="btn-group">
			<?= FSModule::a('Скачать файл', ['index/download', 'id' => $fileStorageModel->id], ['class' => 'btn btn-warning pull-left']) ?>
			<?= FSModule::a('Загрузить ещё чего-нибудь', ['index/upload-simple'], ['class' => 'btn btn-success pull-left']) ?>
			<?= FSModule::a('Файловый менеджер', ['index/index'], ['class' => 'btn btn-info pull-left']) ?>
		</div>
	</div>
</div>