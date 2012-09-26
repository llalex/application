<div class="well span10">
	<h2><?php echo $article->title;?></h2>
	<h5>日期：<?php echo date('Y年m月d日', $article->dateline)?><span>点击：</span><?php echo $article->hits + 1;?><a class="tmblog" title="分享到腾讯微博" rel="<?php echo $article->title;?>" href="javascript:void(0);">转播到腾讯微博</a></h5>
	<?php $tags = $article->tags->find_all();?>
	<?php if(count($tags)):?>
	<div class="tags">标签:
		<?php foreach ($tags as $tag):?>
			<span><a><?php echo $tag->name?></a></span>
			<?php endforeach;?>
	</div>
	<?php endif;?>
	<div class="summary"><strong>摘要：</strong><?php echo $article->getDescription();?></div>

	<div class="gut"><?php	$article->printContent();?>	</div>
	<div id="comment" class="comment" rev="article" rel="<?php echo $article->id;?>">
		<?php echo View::factory('comment')?>
	</div>
</div>

<div class="span2">
	<div class="well sidebar-nav">
		<ul class="nav nav-list">
			<li><a href="index.html"><i class="icon-home icon-aqua"></i> Home</a></li>
			<li><a href="charts.html"><i class="icon-signal icon-aqua"></i> Charts</a></li>
			<li class="active"><a href="form.html"><i class="icon-tasks icon-aqua"></i> Forms</a></li>
			<li><a href="table.html"><i class="icon-list-alt icon-aqua"></i> Table</a></li>
			<li><a href="errorpage.html"><i class="icon-exclamation-sign icon-aqua"></i> Error</a></li>
			<li><a href="gallery.html"><i class="icon-picture icon-aqua"></i> Gallery</a></li>
			<li class="nav-header">Another menu</li>
			<li><a href="loginform.html"><i class="icon-user icon-aqua"></i> Login form</a></li>
		</ul>
	</div>
</div><!--/span-->
