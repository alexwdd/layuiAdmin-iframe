<?php
namespace app\controller;

class Index extends Admin {

    public function index(){
        $menu = $this->getMenu();
        $this->assign('menu',$menu);        
    	return view();
    }

    public function main(){
    	$info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            '主机名'=>$_SERVER['SERVER_NAME'],
            'WEB服务端口'=>$_SERVER['SERVER_PORT'],
            'ThinkPHP版本'=>THINK_VERSION,
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '用户的IP地址'=>$_SERVER['REMOTE_ADDR'],
        );
        $this->assign("info",$info);       
        return view();
    }

    public function getMenu(){
        if ($this->admin['administrator']!=1){
            $nodeArr = db('Access')->where(array('role_id'=>$this->admin['group']))->column('node_id');
            $map['id'] = array('in',$nodeArr);
        }
        $obj = db('Node');
        $map['display'] = 1;
        $list = $obj->where($map)->order('sort asc , id asc')->select();
        foreach ($list as $key => $value) {
            unset($map);
            $map['pid'] = $value['id'];
            $default = $obj->where($map)->find();
            if ($default) {
                $list[$key]['url'] = url($default['value']);
            }else{
                if ($value['level']==2) {
                    $list[$key]['url'] = url($value['value'].'/index');
                }else{
                    $list[$key]['url'] = url($value['value']);
                }
                
            }
        }
        $menu = $this->getTree($list,0);
        return $menu;
    }

    public function getTree($obj,$data='0'){
        $arr = array();
        foreach ($obj as $key=>$value){
            if($value['pid']==$data){
                $obj[$key]['childrens'] = $this->getTree($obj,$obj[$key]['id']);                
                if(count($obj[$key]['childrens'])==0){
                    $obj[$key]['childrens']=array();
                    $obj[$key]['leaf']=0;
                }else{
                    $obj[$key]['leaf']=1;
                }
                $arr[] = $obj[$key];
            }
        }
        return $arr;
    }    

    //清除缓存
    public function clearcache(){
        $this->delDirAndFile($_SERVER['DOCUMENT_ROOT']."/runtime");
        $this->success("操作成功");
    }

    public function delDirAndFile($path){
        $path=str_replace('\\',"/",$path);
        if (is_dir($path)) {
            $handle = opendir($path);
            if ($handle) {
                while (false !== ( $item = readdir($handle) )) {
                    if ($item != "." && $item != "..")
                        is_dir("$path/$item") ? $this->delDirAndFile("$path/$item") : unlink("$path/$item");
                }
                closedir($handle);
            }
        } else {
            return false;
        }
    }
}