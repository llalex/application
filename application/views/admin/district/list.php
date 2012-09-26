<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="panel">
	<div class="panel-header">
		<h2><i class="icon-list-alt icon-blue"></i><?php echo __('District').__('List')?></h2>
	</div>

	<div class="panel-content">

		<!-- //search-form -->
		<form class="well form-inline ajaxform" action="<?php echo Route::url('admin', array('controller' => 'district', 'action' => 'list'));?>" method="get">
			<div id="change-submit">
			<select name="pid" class="input-medium">
				<option >-<?php echo __('province')?>-</option>
				<?php if(isset($province_list)):?>
				<?php foreach($province_list as $province):
					$province_id = $province->pk();
					$selected = ($pid == $province_id)?'selected="selected"':'';
				?>
				<option value="<?php echo $province_id;?>" <?php echo $selected;?>><?php echo $province->name;?></option>
				<?php endforeach;?>
				<?php endif;?>
			</select>
			<select name="cid" class="input-medium">
				<option >-<?php echo __('city')?>-</option>
				<?php if(isset($city_list)):?>
				<?php foreach($city_list as $city):
					$city_id = $city->pk();
					$selected = ($cid == $city_id)?'selected="selected"':'';
					?>
					<option value="<?php echo $city_id;?>" <?php echo $selected;?>><?php echo $city->name;?></option>
					<?php endforeach;?>
				<?php endif;?>
			</select>
			<select name="tid" class="input-medium">
				<option >-<?php echo __('county')?>-</option>
				<?php if(isset($county_list)):?>
				<?php foreach($county_list as $county):
					$county_id = $county->pk();
					$selected = ($tid == $county_id)?'selected="selected"':'';
					?>
					<option value="<?php echo $county_id;?>" <?php echo $selected;?>><?php echo $county->name;?></option>
					<?php endforeach;?>
				<?php endif;?>
			</select>
			</div>
		</form>

		<!-- //list-form -->
		<form action="<?php echo Route::url('admin', array('controller' => 'district', 'action' => 'update')).'?'.http_build_query(array('pid'=>$pid, 'cid'=>$cid, 'tid' => $tid))?>" class="ajaxform" method="post">
			<table id="list-table" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th><?php echo __('Display').__('Order')?></th>
						<th><?php echo __('Name');?></th>
						<th><?php echo __('Label');?></th>
						<th><?php echo __('Operations');?></th>
					</tr>
				</thead>
				<tbody>
				    <?php foreach($model_list as $model):?>
					<?php $id = $model->pk();?>
					 <tr>
						 <td><?php echo $id;?></td>
						 <td><input type="text" class="input-mini" name="model[<?php echo $id;?>][displayorder]" value="<?php echo $model->displayorder;?>" /></td>
						 <td><input type="text" class="input-xlarge" name="model[<?php echo $id;?>][name]" value="<?php echo $model->name;?>" /></td>
						 <td><input type="text" class="input-xlarge" name="model[<?php echo $id;?>][label]" value="<?php echo $model->label;?>" /></td>
						 <td>
							 <a class="btn btn-mini btn-danger ajax" href="<?php echo Route::url('admin', array('controller'=>'district', 'action'=>'delete','id'=>$id)).'?'.http_build_query(array('pid'=>$pid, 'cid'=>$cid, 'tid' => $tid));?>"><i class="icon-trash"></i><?php echo __('Delete')?></a>
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