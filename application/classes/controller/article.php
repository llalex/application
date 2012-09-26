<?php
/**
 * 文章前台控制器
 *
 * @author  Jie.Liu (ljyf5593@gmail.com)
 * @Id $Id: article.php 45 2012-07-13 10:20:20Z Jie.Liu $
 */
class Controller_Article extends Controller_Frame{

	public function before(){
		parent::before();
		$this->breadcrumb->append('article', '文章');
	}
    
    public function action_index(){
        $this->request->redirect(URL::site('article/list'));
    }
    
    /**
     * 文章列表
     */
    public function action_list(){
		$this->breadcrumb->append('article/list', '文章列表');
        /**
		 * 文章分类ID
		 */
        $category_id = $this->request->param('id');
        
        if (intval($category_id)){
            $category = new Model_Article_Category($category_id);
            if ($category->loaded()){
                $this->appendTitle($category->catname);
                $articles = $category->articles;
                
            }else{
                $this->appendTitle(__(':model not exist', array(':model'=>__('category'))));
                $this->content = __(':model not exist', array(':model'=>__('category')));
                return ;
            }
        }else{
            $articles = new Model_Article();
            $this->appendTitle(__(':model list', array(':model'=>__('article'))));
        }
        if (isset($articles) AND $articles instanceof Model_Article){
            
            $pagination = new Pagination(array(
                'total_items' => $articles->count_all(),
            ));
            $this->content = View::factory('article/list')
                            ->set('articlelist', $articles->limit($pagination->items_per_page)->offset($pagination->offset)->find_all())
                            ->set('pagination', $pagination);
        }
    }
    
    /**
     * 文章浏览 
     * return_type
     */
    public function action_detail(){

        $id = $this->request->param('id');
        $message = '';
        if (intval($id)){
            $article = new Model_Article($id);
            if ($article->loaded()){
				$this->breadcrumb->append('article/view/'.$id, $article->title);
                $this->appendTitle($article->title);
                $this->setKeywords($article->keywords);
                $this->setDescription(strip_tags($article->getDescription()));
                $this->content = View::factory('article/view')->bind('article', $article);
            }else {
                $message = __(':model not exist', array(':model'=>__('article')));
            }
        }else {
            $message = '参数错误';
        }

        if ($message) {
            $this->showmessage($message, 'error', URL::site('/'));
        }
    }
    
    public function after(){
        parent::after();
    }
    
}