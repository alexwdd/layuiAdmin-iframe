<?php
namespace app\www\controller;
use app\common\controller\Base;

class Home extends Base
{
    public $user;

    public function _initialize(){
        parent::_initialize();        
        //空信息       
        $this->assign('empty','<div class="empty"><img src="/app/www/view/common/image/empty.png" /><p>空空如也~</p></div>');  

        unset($map);
        $map['cid'] = 1;
        $map['del'] = 0;
        $map['status'] = 1;
    	$news = db("Article")->field('id,title')->where($map)->order('id desc')->limit(4)->select();
    	$this->assign('footerNews',$news);
    }  
}
