<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="panel">
	<div class="panel-header">
		<h2><i class="icon-tasks icon-blue"></i><?php echo __($action).__($model_name);?></h2>
	</div>
	<div class="panel-content">
		<form class="form-horizontal ajaxform" method="post" action="<?php echo Route::url('admin', array('controller' => Request::$current->controller(), 'action' => 'update', 'id' => $model->pk()))?>">
			<fieldset>
				<?php
				$input = __('Input');
				$num = 0;
				foreach($list_columns as $key=>$value):
					$num++;

					echo $num%2?'<div class="row-fluid">':'';

					switch($key){
						case 'id':
							echo <<<HTML
                <div id="{$key}-control-group" class="control-group span6">
					<label for="{$key}" class="control-label">{$value['comment']}</label>
					<div class="controls">
						<span class="input-xlarge uneditable-input">{$model->id}</span>
					</div>
				</div>
HTML;
							break;

						case 'update':

						case 'dateline':
							$num--;
							break;

						/* 地区信息采用联动下拉菜单 start */
						case 'province':
						?>
				<div id="district-control-group" class="control-group span6">
					<label class="control-label" >选择地区</label>
					<div class="controls">
						<?php
						echo Form::select('province', $province_list, $model->province, array(
							'class' => 'chain input-small',
							'data-chain_target' => 'city',
							'data-chain_url' => Route::url('admin', array('controller' => 'district', 'action' => 'city')),
						));

						echo Form::select('city', $city_list, $model->city, array(
							'id' => 'city',
							'class' => 'chain input-small',
							'data-chain_target' => 'county',
							'data-chain_url' => Route::url('admin', array('controller' => 'district', 'action' => 'county')),
						));

						echo Form::select('county', $county_list, $model->county, array(
							'id' => 'county',
							'class' => 'chain input-small',
							'data-chain_target' => 'towns',
							'data-chain_url' => Route::url('admin', array('controller' => 'district', 'action' => 'towns')),
						));

						echo Form::select('towns', $towns_list, $model->towns, array(
							'id' => 'towns',
							'class' => 'input-small',
						));
						?>
						<span id="district-label" class="label label-important hide"></span>
					</div>
				</div>
						<?php
							break;
						case 'city':
						case 'county':
						case 'towns':
							$num--;
							break;
						/* 地区信息采用联动下拉菜单 end */

						/* 所属分类信息采用联动下拉菜单 start */
						case 'parent':
							?>
				<div id="category-control-group" class="control-group span6">
					<label class="control-label" >选择分类</label>
					<div class="controls">
					<?php
					echo Form::select('parent', $parent_list, $model->parent, array(
						'class' => 'chain input-small',
						'data-chain_target' => 'child',
						'data-chain_url' => Route::url('admin', array('controller' => 'category', 'action' => 'child')),
					));

					echo Form::select('child', $child_list, $model->child, array(
						'id' => 'child',
						'class' => 'chain input-small',
						'data-chain_target' => 'item',
						'data-chain_url' => Route::url('admin', array('controller' => 'category', 'action' => 'item')),
					));

					echo Form::select('item', $item_list, $model->item, array(
						'id' => 'item',
						'class' => 'input-small',
					));
					?>
					</div>
				</div>
								<?php
							break;
						case 'child':
						case 'item':
							$num--;
							break;
						/* 所属分类信息采用联动下拉菜单 end */

						case 'content':
							$num--;
							break;

						default:
							echo <<<HTML
                <div id="{$key}-control-group" class="control-group span6">
					<label for="{$key}" class="control-label">{$value['comment']}</label>
					<div class="controls">
						<input type="text" name="{$key}" value="{$model->$key}" id="{$key}" class="input-xlarge" placeholder="{$input} {$value['comment']}">
						<span id="{$key}-label" class="label label-important hide"></span>
					</div>
				</div>
HTML;
							break;
					}
					echo $num%2?'':'</div>';
				endforeach;
				echo $num%2?'</div>':'';
				?>
				<div id="content-control-group" class="control-group">
					<label for="content-edit" class="control-label"><?php echo __('content');?></label>
					<div class="controls">
						<textarea type="text" name="content" id="content-edit" class="span9" rows="15"><?php echo $model->content;?></textarea>
						<span id="content-label" class="label label-important hide"></span>
					</div>
				</div>
				<div class="form-actions span10">
					<button class="btn btn-primary" type="submit"><?php echo __('Save');?></button>
					<button class="btn" type="reset"><?php echo __('Reset');?></button>
				</div>

			</fieldset>
		</form>
	</div>
</div><!--/span-->