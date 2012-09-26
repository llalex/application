<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="panel">
	<div class="panel-header">
		<h2><i class="icon-list-alt icon-blue"></i><?php echo __('Category').__('List')?></h2>
	</div>

	<div class="panel-content">

		<!-- //search-form -->
		<form class="well form-inline ajaxform" action="<?php echo Route::url('admin', array('controller' => 'category', 'action' => 'list'));?>" method="get">
			<div id="change-submit">
			<select name="pid" class="input-medium">
				<option value="0">--请选择--</option>
				<?php if(isset($parent_list)):?>
				<?php foreach($parent_list as $praent):
					$parent_id = $praent->pk();
					$selected = ($pid == $parent_id)?'selected="selected"':'';
				?>
				<option value="<?php echo $parent_id;?>" <?php echo $selected;?>><?php echo $praent->name;?></option>
				<?php endforeach;?>
				<?php endif;?>
			</select>
			<select name="cid" class="input-medium">
				<option value="0">--请选择--</option>
				<?php if(isset($child_list)):?>
				<?php foreach($child_list as $child):
					$child_id = $child->pk();
					$selected = ($cid == $child_id)?'selected="selected"':'';
					?>
					<option value="<?php echo $child_id;?>" <?php echo $selected;?>><?php echo $child->name;?></option>
					<?php endforeach;?>
				<?php endif;?>
			</select>
			</div>
		</form>

		<!-- //list-form -->
		<form action="<?php echo Route::url('admin', array('controller' => 'category', 'action' => 'update')).'?'.http_build_query(array('pid'=>$pid, 'cid'=>$cid))?>" class="ajaxform" method="post">
			<table id="list-table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th><?php echo __('Display').__('Order')?></th>
						<th><?php echo __('Name');?></th>
						<th><?php echo __('Label');?></th>
						<th><?php echo __('Suffix');?></th>
						<th><?php echo __('Operations');?></th>
					</tr>
				</thead>
				<tbody>
				    <?php foreach($model_list as $model):?>
					<?php $id = $model->pk();?>
					 <tr>
						 <td><?php echo $id;?></td>
						 <td><input type="text" class="input-mini" name="model[<?php echo $id;?>][displayorder]" value="<?php echo $model->displayorder;?>" /></td>
						 <td><input type="text" class="input" name="model[<?php echo $id;?>][name]" value="<?php echo $model->name;?>" /></td>
						 <td><input type="text" class="input" name="model[<?php echo $id;?>][label]" value="<?php echo $model->label;?>" /></td>
						 <td><input type="text" class="input" name="model[<?php echo $id;?>][suffix]" value="<?php echo $model->suffix;?>" /></td>
						 <td>
							 <a class="btn btn-mini btn-danger ajax" href="<?php echo Route::url('admin', array('controller'=>'category', 'action'=>'delete','id'=>$id)).'?'.http_build_query(array('pid'=>$pid, 'cid'=>$cid));?>"><i class="icon-trash"></i><?php echo __('Delete')?></a>
						 </td>
					 </tr>
					<?php endforeach;?>

				</tbody>
			</table>

			<input type="hidden" name="upid" value="<?php echo $upid;?>"/>
			<input type="hidden" name="level" value="<?php echo $level;?>"/>

			<div class="form-actions">
				<button class="btn btn-primary" type="submit"><?php echo __('Save');?></button>
				<button class="btn" type="reset"><?php echo __('Reset');?></button>
				<div class="btn-group pull-right">
					<a class="btn btn-info addtr"><?php echo __('Add');?></a>
				</div>
			</div>
		</form>
	</div>
</div>