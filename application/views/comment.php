<h4 class="comment">最新评论</h4>
<form method="post" action="<?php echo URL::site('comment/add/')?>" class="comment">
    <p>
        <label>姓名(必填)</label>
        <input id="author" name="author" type="text" value="" title="用户名<?php echo Model_Comment::author_min;?>-<?php echo Model_Comment::author_max;?>个字符" />
        <label for="author" id="author_msg" class="error"></label>
    </p>
    <p>
        <label></label>
        <textarea id="content" name="content" cols="80" rows="10" class="textarea" title="评论<?php echo Model_Comment::content_min;?>-<?php echo Model_Comment::content_max;?>个字符" ></textarea>
        <label id="content_msg" class="error"></label>
    </p>
    <p><label><input name="act" type="submit" value="发表" class="button" /></label></p>
</form>
<div class="combox" id="commentlist"></div>