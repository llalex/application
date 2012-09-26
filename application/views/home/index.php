<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="main pull-left">
<div class="type-panel-bg">
	<div class="type-panel">
		<div class="row-fluid">
			<?php
				$loactions = array(
					'beijing' => '北京',
					'shanghai' => '上海',
					'guangzhou' => '广州',
					'shenzhen' => '深圳',
				);
				$types = array(
					'wangqiu' => '网球',
					'yumaoqiu' => '羽毛球',
					'pingpangqiu' => '乒乓球',
					'gaoerfu' => '高尔夫',
					'taiqiu' => '台球',
					'youyong' => '游泳',
					'yujia' => '瑜伽',
					'jianshen' => '健身',
					'jiewu' => '街舞',
					'guojiwu' => '国标舞',
					'dupiwu' => '肚皮舞',
					'taijiquan' => '太极拳',
					'gangqin' => '钢琴',
					'guzheng' => '古筝',
					'yingyu' => '英语',
					'peijia' => '陪驾',
				);
			?>
			<?php
			$num = 1;
			foreach($loactions as $item_key=>$item_location):
			$num++;
			?>
			<div class="span6">
				<div class="type-title"><span><a href="<?php echo URL::site('/coach/list/in/'.$item_key);?>"><?php echo $item_location;?>热门培训</a></span></div>
				<div class="type-content">
					<?php foreach($types as $item_label => $item_type):?>
					<a href="<?php echo URL::site('/coach/list/'.$item_label.'/in/'.$item_key)?>"><?php echo $item_type;?></a>
					<?php endforeach;?>
				</div>
            </div>
			<?php
			if($num%2):
			?>
		</div>
		<div class="row-fluid">
			<?php
			endif;
			endforeach;
		if($num%2){
			echo '</div>';
		}
		?>
	</div>
</div>

<div class="panel">
	<div class="panel-header black-white">
		<h4>最新教练</h4>
	</div>
	<div class="panel-content clearfix">
		<ul class="image-list">
			<?php $i = 0; foreach($new_coaches as $item): $i++;?>
			<li>
				<a href="<?php echo URL::site('/coach/detail/'.$item->pk());?>"><img width="99" height="99" src="<?php echo Model_User::avatar($item->user_id);?>"/></a>
				<span><a href="<?php echo URL::site('/coach/detail/'.$item->pk());?>"><?php echo $item->realname;?></a></span>
				<span><a href="<?php echo URL::site('/coach/detail/'.$item->pk());?>"><?php echo $item->title;?></a></span>
				<span><a href="<?php echo URL::site('/coach/detail/'.$item->pk());?>"><?php echo $item->meta_title;?></a></span>
			</li>
			<?php if($i === 6):?>
			<div class="hr clearfix"></div>
			<?php endif;?>
			<?php endforeach;?>
		</ul>
	</div>
</div>

<div class="panel coach-category">
	<div class="panel-header orange-white">
		<h4>教练分类</h4>
	</div>
	<div class="panel-content">
		<?php foreach($coach_types as $type):?>
		<div>
			<h4 id="tiyu"><?php echo $type['name']?></h4>
			<?php
			if($type['items']):
			foreach($type['items'] as $item):
			?>
			<span><a href="<?php echo URL::site('/coach/list/'.$type['label'].'/'.$item->label);?>" title="<?php echo $item->name;?>培训"><?php echo $item->name;?></a></span>
			<?php
			endforeach;
			endif;
			?>
		</div>
		<?php endforeach;?>
	</div>
</div>

<div class="panel">
	<div class="panel-header orange-white">
		<h4>友情连接</h4>
	</div>
	<div class="panel-content clearfix">
		<?php foreach($friend_links as $item):?>
		<span><a href="<?php echo URL::site($item->url);?>"><?php echo $item->name;?></a></span>
		<?php endforeach;?>
	</div>
</div>
</div>

<div class="sider-bar pull-right">

	<div class="slider" id="slider">
		<div class="slider-list">
			<ul id="pics" class="unstyled">
				<li>
					<a title="最美中国" href="http://comment.whb.cn/yinpin/list/21095">
						<img width="247" height="195" title="最美中国" src="<?php echo URL::site('/upload/banner3.jpg');?>" alt="">
					</a>
				</li>
				<li>
					<a title="最美中国1" href="http://comment.whb.cn/yinpin/list/21095">
						<img width="247" height="195" title="最美中国" src="<?php echo URL::site('/upload/banner2.jpg');?>" alt="">
					</a>
				</li>
				<li>
					<a title="最美中国2" href="http://comment.whb.cn/yinpin/list/21095">
						<img width="247" height="195" title="最美中国" src="<?php echo URL::site('/upload/banner3.jpg');?>" alt="">
					</a>
				</li>
				<li>
					<a title="最美中国3" href="http://comment.whb.cn/yinpin/list/21095">
						<img width="247" height="195" title="最美中国" src="<?php echo URL::site('/upload/banner4.jpg');?>" alt="">
					</a>
				</li>
			</ul>
		</div>
		<div class="slider-ctrl">
			<div class="slider-txt" id="slider-txt"></div>
			<ul id="ctrls" class="unstyled">
				<li> <a class="active" href="#">1</a></li>
				<li> <a href="#" class="">2</a></li>
				<li> <a href="#" class="">3</a></li>
				<li> <a href="#" class="">4</a></li>
			</ul>
		</div>
	</div>

	<div class="panel">
		<div class="panel-header black">
			<h4 class="pull-left">最新教学文章</h4>
		</div>
		<div class="panel-content">
			<ul>
				<?php foreach ($new_articles as $item):?>
				<li>
					<span><a href="<?php echo URL::site('article/detail/'.$item->pk());?>"><?php echo $item->title;?></a></span>
					<span class="date"><?php echo date('Y-m-d', $item->dateline);?></span>
				</li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>