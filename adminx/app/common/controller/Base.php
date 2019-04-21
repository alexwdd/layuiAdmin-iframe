<?php
namespace app\common\controller;
use think\Controller;
use think\Request;
use think\Db;

class Base extends Controller {

    public function _initialize(){
    	$request= Request::instance();
    	$module = $request->module();
        $THEME_PATH = '/app/'.$module.'/view/';
        define('RES', $THEME_PATH . 'common');

        $config = tpCache('basic');
        config('site',$config);        
    }

    public function getCartNumber($user){
        $map['memberID'] = $user['id']; 
        $list = db("Cart")->where($map)->select();
        $total = 0;
        $weight = 0;
        foreach ($list as $key => $value) {
            $goods = db('GoodsIndex')->where('id='.$value['itemID'])->find(); 
            if ($user['group']==2) {
                $goods['price'] = $goods['price1'];
            }
            if ($value['server']!='') {
                $serverID = explode(",",$value['server']);
                unset($map);
                $map['id'] = array('in',$serverID);
                $serverMoney = db("server")->where($map)->sum('price');                
            }else{
                $serverMoney = 0;
            }

            //贴心服务需要计算商品个数，所以要乘套餐里边商品的数量
            $total += $value['number'] * ($goods['price']+$serverMoney*$goods['number']);  
            $weight += $value['goodsNumber'] * $goods['weight'];       
            $number = count($list);
        }
        return array('number'=>$number,'total'=>$total,'weight'=>number_format($weight,2)); 
    }

    public function getYunfeiJson($user,$kid,$province=null){
        $kuaidi = db('Wuliu')->where('id',$kid)->find();
        if (!$kuaidi) {
            return json_encode(['code'=>0,'msg'=>'快递公司不存在']);die;
        }
        $baoguoArr1 = [];
        $map['memberID'] = $user['id']; 
        $list = db("Cart")->where($map)->order('typeID asc,number desc')->select();
        foreach ($list as $key => $value) {
            $goods = db('GoodsIndex')->where('id='.$value['itemID'])->find();
            $list[$key]['name'] = $goods['name'];
            $list[$key]['weight'] = $goods['wuliuWeight'];
            if ($user['group']==2) {
                $list[$key]['price'] = $goods['price1'];
            }else{
                $list[$key]['price'] = $goods['price'];
            }

            if ($goods['wuliu']!='') { //套餐类的先处理掉
                for ($i=0; $i < $value['number']; $i++) { 
                    $baoguo = [
                        'type'=>$goods['typeID'],
                        'totalNumber'=>$goods['number'],
                        'totalWeight'=>$goods['wuliuWeight']*$goods['number'],
                        'yunfei'=>0,
                        'extend'=>0,
                        'kuaidi'=>$goods['wuliu'].'(包邮)',
                        'goods'=>array($goods),
                    ];
                    array_push($baoguoArr1,$baoguo);
                }
                unset($list[$key]);
            }
        }

        if ($list) {
            //这里主要是处理套餐类中包含多个商品
            foreach ($list as $key => $value) {
                $list[$key]['number'] = $value['goodsNumber'];
            }
            $cart = new \cart\Zhongyou($list,$kuaidi,$province);
            $baoguoArr2 = $cart->getBaoguo();
            $baoguoArr = array_merge($baoguoArr1,$baoguoArr2);
        }else{
            $baoguoArr =$baoguoArr1;
        }        
        $totalWeight = 0;
        $totalPrice = 0;
        $totalExtend = 0;
        foreach ($baoguoArr as $key => $value) {
            $totalWeight += $value['totalWeight'];
            $totalPrice += $value['yunfei'];
            $totalExtend += $value['extend'];
        }
        $data = [
            'totalWeight'=>$totalWeight,
            'totalPrice'=>$totalPrice,
            'totalExtend'=>$totalExtend,
            'baoguo'=>$baoguoArr
        ];      

        $data = fix_number_precision($data,2);  
        return json_encode(['code'=>1,'data'=>$data]);
    }

    public function getMultYunfeiJson($user,$kid,$cartIds,$cartNums,$province=null){
        $kuaidi = db('Wuliu')->where('id',$kid)->find();
        if (!$kuaidi) {
            return json_encode(['code'=>0,'msg'=>'快递公司不存在']);die;
        }
        $baoguoArr1 = [];
        $map['memberID'] = $user['id']; 
        $map['id'] = array('in',$cartIds);
        $list = db("Cart")->where($map)->order('typeID asc,number desc')->select();        
        foreach ($list as $key => $value) {
            $goods = db('GoodsIndex')->where('id='.$value['itemID'])->find();
            $list[$key]['name'] = $goods['name'];
            $list[$key]['weight'] = $goods['wuliuWeight'];

            if ($user['group']==2) {
                $list[$key]['price'] = $goods['price1'];
            }else{
                $list[$key]['price'] = $goods['price'];
            }  
            
            $list[$key]['number'] = $cartNums[$key];

            if ($goods['wuliu']!='') { //套餐类的先处理掉
                $number = $cartNums[$key]/$goods['number'];
                for ($i=0; $i < $number; $i++) { 
                    $baoguo = [
                        'type'=>$goods['typeID'],
                        'totalNumber'=>$goods['number'],
                        'totalWeight'=>$goods['wuliuWeight']*$goods['number'],
                        'yunfei'=>0,
                        'extend'=>0,
                        'kuaidi'=>$goods['wuliu'].'(包邮)',
                        'goods'=>array($goods),
                    ];
                    array_push($baoguoArr1,$baoguo);
                }
                unset($list[$key]);
            }
        }

        if ($list) {
            $cart = new \cart\Zhongyou($list,$kuaidi,$province);
            $baoguoArr2 = $cart->getBaoguo();
            $baoguoArr = array_merge($baoguoArr1,$baoguoArr2);
        }else{
            $baoguoArr =$baoguoArr1;
        }        
        $totalWeight = 0;
        $totalPrice = 0;
        $totalExtend = 0;
        foreach ($baoguoArr as $key => $value) {
            $totalWeight += $value['totalWeight'];
            $totalPrice += $value['yunfei'];
            $totalExtend += $value['extend'];
        }
        $data = [
            'totalWeight'=>$totalWeight,
            'totalPrice'=>$totalPrice,
            'totalExtend'=>$totalExtend,
            'baoguo'=>$baoguoArr
        ];      

        $data = fix_number_precision($data,2);  
        return json_encode(['code'=>1,'data'=>$data]);
    }

    public function getUserMoney($userid){
        $finance = db('Finance');
        $map['memberID'] = $userid;
        $list = $finance->field('type,money')->where($map)->select(); 
        $inMoney = 0;
        $outMoney = 0;      
        foreach ($list as $key => $value) {
            if ($value['type']==1) {
                $inMoney += $value['money'];
            }
            if ($value['type']==2) {
                $outMoney += $value['money'];
            }   
        }

        $money = $inMoney - $outMoney;
        return array(       
            'money' => $money,
            'inMoney'=>$inMoney,
            'outMoney'=>$outMoney
        );
    }

    public function setUserGroup($user){
        if ($user['money']<=0) {
            db("Member")->where('id',$user['id'])->setField('group',1);
        }
    }
    
    public function getRate(){
        if (cache("rate")) {
            return cache("rate");
        }else{
            require_once EXTEND_PATH.'omipay/OmiPayApi.php';
            require_once EXTEND_PATH.'omipay/OmiPayData.php';
            $domain = 'AU';
            // 设置'CN'为访问国内的节点 ,设置为'AU'为访问香港的节点
            $input = new \OmiPayExchangeRate();
            $input -> setMerchantNo(config('omipay.mchID'));
            $input -> setSercretKey(config('omipay.key'));
            $input -> setPlatform("设置查询平台'WECHATPAY/ALIPAY'");
            $omipay = new \OmiPayApi();
            $res = $omipay->exchangeRate($input,$domain);
            if ($res['success']) {
                $rate = $res['rate'];
            }else{
                $rate = 0;
            }
            cache("rate",$rate,3600);
            return $rate;
        }        
    }

    public function getAueToken(){
        if (cookie("aueToken")) {
            return cookie("aueToken");
        }else{
            $url = 'http://auth.auexpress.com/api/token';
            $data = config('aue');
            $res = $this->https_post($url,$data,true);
            $res = json_decode($res,true);
            if ($res['Token']) {
                $token = $res['Token'];
                cookie("aueToken",$token,43200);
                return $token;
            }else{
                return '';
            }           
        }
    }

    public function saveAuePng($orderNo){        
        $token = $this->getAueToken();
        $url = 'http://aueapi.auexpress.com/api/OrderLabelPrint?orderId='.$orderNo.'&printMode=1&fileType=0';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));
        $res = curl_exec($ch);
        if ($res=='') {
            return '';
        }else{
            $path = config('UPLOAD_PATH').'order/'.date("Ymd").'/'.$orderNo.'.png';
            $filename = '.'.$path;   // 文件保存路径
            $this->createDir(dirname($filename));
            $fp= @fopen($filename,"w"); 
            fwrite($fp,$res);
            return $path;
        }        
    }

    public function createDir($path){ 
        if (!file_exists($path)){ 
            $this->createDir(dirname($path)); 
            mkdir($path, 0777); 
        } 
    }

    public function https_post($url,$data = null,$json = false){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_SSLVERSION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        if (!empty($data)) {
            if ($json && is_array($data)) {
                $data = json_encode($data);
            }
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);            
            if ($json) {//发送JSON数据
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            }
        }
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);       
        return $output;
    }    
}
