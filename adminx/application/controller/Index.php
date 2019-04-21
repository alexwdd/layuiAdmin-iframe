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
        $leftMenu = [
            [
                'menuId' => "1",
                'menuName'=>'后台应用',
                'menuIcon'=>'fa-cubes',
                'menuHref'=>'',
                'parentMenuId'=>"0",
            ], 
            [
                'menuId' => "1001",
                'menuName'=>'内容管理',
                'menuIcon'=>'fa-file',
                'menuHref'=>'',
                'parentMenuId'=>"1",
            ], 
            [
                'menuId' => "1002",
                'menuName'=>'会员管理',
                'menuIcon'=>'&#xe613;',
                'menuHref'=>'',
                'parentMenuId'=>"1",
            ],  
            [
                'menuId' => "1003",
                'menuName'=>'课程管理',
                'menuIcon'=>'fa-book',
                'menuHref'=>'',
                'parentMenuId'=>"1",
            ],
            [
                'menuId' => "1004",
                'menuName'=>'财务管理',
                'menuIcon'=>'fa-rmb',
                'menuHref'=>'',
                'parentMenuId'=>"1",
            ],
            [
                'menuId' => "1006",
                'menuName'=>'管理员设置',
                'menuIcon'=>'fa-user',
                'menuHref'=>'',
                'parentMenuId'=>"1",
            ], 
            [
                'menuId' => "1008",
                'menuName'=>'系统设置',
                'menuIcon'=>'fa-cogs',
                'menuHref'=>'',
                'parentMenuId'=>"1",
            ]
        ];
        if ($this->admin['administrator']==1) {
            //超级管理员菜单
            $menu = $leftMenu;
            foreach ($menu as $key => $value) {
                $child = db('Node')->field('id as menuId,name as menuName,icon as menuIcon,pid as parentMenuId,level,value')->where(array('status'=>1,'display'=>1,'level'=>2,'data'=>$value['menuName']))->order('sort asc, id asc')->select();
                foreach ($child as $j => $val) {
                    $val['menuHref'] = url($val['value'].'/index');
                    $val['parentMenuId'] = $value['menuId'];
                    $val['menuIcon']='';
                    array_push($menu,$val);
                }
            }
        }else{
            //普通用户组菜单
            $nodeArr = db('Access')->where(array('role_id'=>$this->admin['group']))->column('node_id');
            $menu = $leftMenu;
            foreach ($menu as $key => $value) {
                $map['id'] = array('in',$nodeArr);
                $map['data'] = $value['menuName'];
                $map['status'] = 1;
                $map['display'] = 1;
                $map['level'] = 2;
                $child = db('Node')->field('id as menuId,name as menuName,icon as menuIcon,pid as parentMenuId,level,value')->where($map)->order('sort asc, id asc')->select();
                if ($child) {
                    foreach($child as $j => $val) {
                        $val['menuHref'] = url($val['value'].'/index');
                        $val['parentMenuId'] = $value['menuId'];
                        $val['menuIcon']='';
                        array_push($menu,$val);
                    }
                }elseif($value['parentMenuId']!=0){
                    unset($menu[$key]);
                }         
            }
        }
        return $menu;
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