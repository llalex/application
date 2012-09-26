<?php
/**
 * 文章内容Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: content.php 33 2012-06-29 07:32:34Z Jie.Liu $
 */
class Model_Article_Content extends ORM{

	protected $_primary_key = 'article_id';

	protected $_belongs_to = array('article' => array());
}