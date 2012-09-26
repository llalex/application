<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="container">
    <ul class="breadcrumb">
        <?php foreach($breadcrumb as $item):?>
        <li><?php echo HTML::anchor($item['uri'], $item['title'], $item['attributes']);?><span class="divider">/</span></li>
        <?php endforeach;?>
        <li><?php echo Arr::get($current_item, 'title', $current_item['uri']);?></li>
    </ul><!-- breadcrumbs -->
</div>