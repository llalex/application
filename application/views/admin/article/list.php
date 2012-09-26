<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="panel">
	<div class="panel-header">
		<h2><i class="icon-list-alt icon-blue"></i><?php echo __($model_name).__('List')?></h2>
		<div class="actions-bar">
			<div class="btn-group pull-right">
				<?php echo HTML::anchor(Route::url('admin', array('controller' => Request::$current->controller(), 'action'=>'create'), TRUE), '<i class="icon-plus"></i>'.__('Create').__($model_name), array('class' => 'btn btn-success btn-mini ajax'));?>
				<a class="btn btn-success btn-mini dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<?php echo HTML::anchor(Route::url('admin', array('controller' => Request::$current->controller(), 'action'=>'create')), '<i class="icon-plus"></i>'.__('Create').__($model_name), array('class' => 'ajax'));?>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="panel-content">
	<!-- //Search form -->
	<?php echo View::factory('admin/search')->bind('search', $search);?>

	<form action="<?php echo Route::url('admin/global', array('controller'=>$model_name, 'action'=>'batch'))?>" class="ajaxform" method="post">
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<td class="selections select-all"><input type="checkbox" value="1" class="selection select-all"></td>
				<?php foreach($list_row as $key => $value):?>
				<th><?php echo $value['comment'];?></th>
				<?php endforeach;?>
				<th><?php echo __('Operations')?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($model_list as $model):?>
			<tr>
				<td class="selections"><input class="selection" type="checkbox" name="ids[]" value="<?php echo $model->pk();?>"></td>
				<?php foreach($list_row as $key => $value):?>
				<td>
					<?php
					switch($key){
						case 'dateline':

						case 'update':
							echo date(Date::$timestamp_format, $model->$key);
							break;

						case 'publish':
							echo ($model->$key === '1')?'<a class="ajax" href="'.Route::url('admin/global', array('controller' => $model_name, 'action' => 'single', 'operation' => 'unpublish', 'id' => $model->pk())).'"><span class="label label-success"><i class="icon-eye-open icon-large"></i>'.__('Publish').'</span></a>':'<a class="ajax" href="'.Route::url('admin/global', array('controller' => $model_name, 'action' => 'single', 'operation' => 'publish', 'id' => $model->pk())).'"><span class="label label-warning"><i class="icon-eye-close icon-large"></i>'.__('Unpublish').'</span></a>';;
							break;

						default :
							echo  $model->$key;
							break;
					}
					?>
				</td>
				<?php endforeach;?>

				<td>
					<a class="btn btn-mini btn-info ajax" href="<?php echo Route::url('admin', array('controller'=>Request::$current->controller(), 'action' => 'edit', 'id'=>$model->pk()));?>"><i class="icon-edit"></i><?php echo __('Edit')?></a>
					<a class="btn btn-mini btn-danger ajax" href="<?php echo Route::url('admin', array('controller'=>Request::$current->controller(), 'action'=>'delete','id'=>$model->pk()));?>"><i class="icon-trash"></i><?php echo __('Delete')?></a>
				</td>
			</tr>
			<?php endforeach;?>

			</tbody>
		</table>
		<div class="well">
			<?php if(!empty($batch_operations)):?>
			<?php foreach($batch_operations as $batch_action => $batch):?>
				<a class="btn btn-small btn-<?php echo $batch['style'];?> batch" rel="<?php echo $batch_action?>"><i class="icon-<?php echo $batch['icon']?>"></i> <?php echo __($batch['name']).' '.__('selected');?></a>
				<?php endforeach;?>
			<?php endif;?>
			<a class="btn btn-small btn-danger batch" rel="delete"><i class="icon-remove"></i><?php echo __('Remove').' '.__('selected')?></a>
		</div>
	</form>
	<?php echo $pagination->render(); ?>

	</div>
</div>