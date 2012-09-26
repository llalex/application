<?php defined('SYSPATH') or die('No direct script access.');?>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>教练信息标题</th>
        <th>创建时间</th>
        <th>更新时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($coach_list as $coach):?>
    <tr>
        <td><?php echo $pk = $coach->pk();?></td>
        <th><a href="<?php echo URL::site('coach/detail/'.$pk);?>"><?php echo $coach->title;?></a></th>
        <td><?php echo date('Y-m-d H:i', $coach->dateline);?></td>
        <td><?php echo date('Y-m-d H:i', $coach->update);?></td>
        <td>
            <a href="<?php echo URL::site('/coach/edit/'.$pk)?>" class="btn btn-info btn-mini">编辑</a>
            <a href="<?php echo URL::site('/coach/delete/'.$pk)?>" class="btn btn-danger btn-mini">删除</a>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>