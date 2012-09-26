<div class="well span10">
	<?php if (count($articlelist)):?>
	<?php foreach ($articlelist as $article):?>
		<div class="item">
			<dl>
				<dt class="topic"><a href="<?php echo URL::site('article/view/'.$article->id)?>"><strong><?php echo $article->title?></strong></a></dt>
				<dd class="author"><span>发表于<?php echo date('Y-m-d h:s:m', $article->dateline)?>&nbsp;|&nbsp;<?php echo $article->hits;?>次阅读</span></dd>
				<dd class="desc"><?php echo $article->getDescription()?></dd>
			</dl>
			<dl>
				<dd class="detail"><span><a href="<?php echo URL::site('article/view/'.$article->id)?>">查看详情</a> | 已有<?php echo $article->comments->count_all()?>条评论</span></dd>
			</dl>
		</div>
		<?php endforeach;?>
	<?php echo $pagination;?>
	<?php endif;?>
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