<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * 评论Model
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: comment.php 56 2012-07-24 08:30:32Z Jie.Liu $
 */
class Model_Comment extends ORM{

	const unaudited = 0; //未审核
	const audited = 1; //已审核

    const author_min = 4;
    const author_max = 32;
    const content_min = 6;
    const content_max = 600;

	protected $_list_row = array( 'id', 'targetid', 'author', 'dateline', 'status' );

	protected $_search_row = array(	'author', 'status' );

    protected $_created_column = array(
        'column' => 'dateline',
        'format' => TRUE,
    );
    
    public function rules(){
        return array(
            'author' => array(
                array('min_length', array(':value', self::author_min)),
                array('max_length', array(':value', self::author_max)),
            ),
            'content' => array(
                array('min_length', array(':value', self::content_min)),
                array('max_length', array(':value', self::content_max)),
            ),
            'targetid' => array(
                array('numeric'),
            ),
        );
    }
    
    public function filters(){
        return array(
            'author' => array(
                array('trim'),
            ),
            'content' => array(
                array('trim'),
            ),
        );
    }

	public function status_showselect(){
		return Form::select('status',
			array(
				''=>__('Please select'),
				self::audited => __('audited'),
				self::unaudited => __('unaudited')
			),
			$this->status,
			array('class' => 'input-small')
		);
	}
    
}