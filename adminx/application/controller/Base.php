<?php
namespace app\controller;
use think\Controller;
use think\Request;
use think\Db;

class Base extends Controller {

    public function _initialize(){

    	$request= Request::instance();
    	$module = $request->module();
        $THEME_PATH = '/adminx/application/view/';
        define('RES', $THEME_PATH . 'common');


        $config = tpCache('basic');
        config('site',$config);    
    }
    
}
