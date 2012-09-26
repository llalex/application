<?php
/**
 * 文章Tag Model
 *
 * @author Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: tag.php 33 2012-06-29 07:32:34Z Jie.Liu $
 */
class Model_Tag extends ORM{
	
	protected $_created_column = array(
			'column' => 'dateline',
			'format' => TRUE,
	);
	
	protected $_updated_column = array(
			'column' => 'update',
			'format' => TRUE,
	);
	
	/**
	 * 关联文章
	 * @var array
	 */
	protected $_has_many = array(
		'articles' => array(
			'through' => 'articles_tags',
		),
	);
}