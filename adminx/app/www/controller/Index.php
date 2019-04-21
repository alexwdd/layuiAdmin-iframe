<?php
namespace app\www\controller;
use think\Request;
use think\Db;

class Index extends Home
{
	public function index()
	{
        $map['path'] = array('like','0-4-%');
        $map['del'] = 0;
        $map['status'] = 1;
    	$product = db("Article")->field('id,title,picname')->where($map)->order('id desc')->limit(8)->select();
        $this->assign('product',$product);

        unset($map);
        $map['cid'] = 1;
        $map['del'] = 0;
        $map['status'] = 1;
    	$news = db("Article")->field('id,title,picname,intr')->where($map)->order('id desc')->limit(4)->select();
    	$this->assign('news',$news);
		return view();
	}

    public function about(){
        $id = input('param.id',1);
        $list = db("Onepage")->where("id",$id)->find();
        $this->assign('list',$list);
        return view();
    }

    public function service(){
        $id = 5;
        $list = db("Onepage")->where("id",$id)->find();
        $this->assign('list',$list);
        return view();
    }

    public function contact(){
        $id = 4;
        $list = db("Onepage")->where("id",$id)->find();
        $this->assign('list',$list);
        return view();
    }

    public function honor(){
        $map['del'] = 0;          
        $map['Status'] = 1;
        $map['cid'] = 2;

        //查询数据
        $list = db('Article')->where($map)->order('id desc')->paginate(12);
        $page = $list->render();
        $this->assign('list',$list);  
        $this->assign('page',$page);
        return view();
    }

    public function project(){
        $map['del'] = 0;          
        $map['Status'] = 1;
        $map['cid'] = 3;

        //查询数据
        $list = db('Article')->where($map)->order('id desc')->paginate(12);
        $page = $list->render();
        $this->assign('list',$list);  
        $this->assign('page',$page);
        return view();
    }

    public function yjb(){
        $id = 6;
        $list = db("Onepage")->where("id",$id)->find();
        $this->assign('list',$list);
        return view();
    }

    public function product(){
        $cid = input('param.cid');

        $cate = db("Category")->where('fid',4)->select();
        $this->assign('cate',$cate);

        //查询数据
        $map['del'] = 0;          
        $map['Status'] = 1;
        if ($cid!='' && is_numeric($cid)) {
            $map['cid'] = $cid;
        }else{
            $map['path'] = array('like','0-4-%');
        }
        $list = db('Article')->where($map)->order('id desc')->paginate(12);
        $page = $list->render();
        $this->assign('list',$list);  
        $this->assign('page',$page);
        $this->assign('cid',$cid);
        return view();
    }

    public function info(){
        $id = input('param.id');
        if ($id=='' || !is_numeric($id)) {
            $this->error('参数错误');
        }
        $map['id'] = $id;
        $map['status'] = 1;
        $map['del'] = 0;        
        $list = db('Article')->where($map)->find();
        if (!$list) {
            $this->error('产品不存在');
        }else{
            db('Article')->where($map)->setInc('hit');
            $this->assign('list',$list);           

            unset($map);
            $map['status'] = 1;
            $map['cid'] = $list['cid'];
            $map['del'] = 0;
            $map['id'] = array('neq',$list['id']);  
            $about = db('Article')->field('id,picname,title')->where($map)->order('sort asc,id desc')->limit(10)->select();
            $this->assign('about',$about);

            $cate = db("Category")->where('fid',4)->select();
            $this->assign('cate',$cate);
            return view();
        }
    }

    public function news(){
        $cid = 1;

        $cate = db("Category")->cache(true)->where('id',$cid)->find();
        $this->assign('cate',$cate);

        $map['del'] = 0;          
        $map['Status'] = 1;
        $map['cid'] = $cid;

        //查询数据
        $list = db('Article')->where($map)->order('id desc')->paginate(15);
        $page = $list->render();
        $this->assign('list',$list);  
        $this->assign('page',$page);  
        return view();
    }

    public function detail(){
        $id = input('param.id');
        if ($id=='' || !is_numeric($id)) {
            $this->error('参数错误');
        }
        $map['id'] = $id;
        $map['status'] = 1;
        $map['del'] = 0;        
        $list = db('Article')->where($map)->find();
        if (!$list) {
            $this->error('文章不存在');
        }else{
            db('Article')->where($map)->setInc('hit');
            $this->assign('list',$list);

            #上一篇
            unset($map);
            $map['cid']=$list['cid'];
            $map['id']=array('gt',$list['id']);
            $map['del'] = 0;
            $map['status'] = 1;
            $upArt = db('Article')->field('id,title')->where($map)->order('id asc')->find();
            if ($upArt) {
                $upArt = '<a href="'.url('index/detail',array('id'=>$upArt['id'])).'" title="'.$upArt['title'].'">'.$upArt['title'].'</a>';
            }else{
                $upArt = '没有了';
            }
            $this->assign('upArt',$upArt);

            #下一篇
            unset($map);
            $map['cid']=$list['cid'];
            $map['id']=array('lt',$list['id']);
            $map['status'] = 1;
            $map['del'] = 0;
            $nextArt = db('Article')->field('id,title')->where($map)->order('id desc')->find();
            if ($nextArt) {
                $nextArt = '<a href="'.url('index/detail',array('id'=>$nextArt['id'])).'" title="'.$nextArt['title'].'">'.$nextArt['title'].'</a>';
            }else{
                $nextArt = '没有了';
            }
            $this->assign('nextArt',$nextArt);

            unset($map);
            $map['status'] = 1;
            $map['cid'] = $list['cid'];
            $map['del'] = 0;
            $map['id'] = array('neq',$list['id']);  
            $about = db('Article')->field('id,title')->where($map)->order('sort asc,id desc')->limit(10)->select();
            $this->assign('about',$about);
            return view();
        }
    }

    public function feedback(){
        if (request()->isPost()) {
            if (!checkRequest()) {die;}
            
            $data = input('post.');
            $res = model('Feedback')->saveData( $data );
            if ($res) {
                $this->success('操作成功',url('index/contact'));
            }else{
                $this->error('操作失败');
            }
        }
    }
}
