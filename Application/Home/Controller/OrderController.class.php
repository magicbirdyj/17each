<?php
namespace Home\Controller;
use Home\Controller;
class OrderController extends FontEndController {
    public function index(){
         $status=$_GET['status'];
         $this->assign('canshu',$_GET['status']);
         $this->assign('title','我的订单');
         $ordermodel=D('Order');
         $user_id=$_SESSION['huiyuan']['user_id'];
         $status_count['all']=$ordermodel->where("user_id={$user_id} and deleted=0")->count();//获取全部订单条数
         $status_count['no_pay']=$ordermodel->where("user_id={$user_id} and pay_status=0 and deleted=0  and status<4")->count();//获取未付款条数
         $status_count['daiqueren']=$ordermodel->where("user_id={$user_id} and pay_status=1 and status=1 and deleted=0")->count();//获取待确认条数
         $status_count['daipingjia']=$ordermodel->where("user_id={$user_id} and pay_status=1 and status=2 and deleted=0")->count();//获取待评价条数
         $this->assign(status_count,$status_count);
         $time=  time();
         $this->assign('time',$time);
         if(empty($status)){
             $selected['all']="selected='selected'";//选中下拉菜单的全部订单
             $this->assign(selected,$selected);
             $count=$ordermodel->where("user_id={$user_id} and deleted=0")->count();
             $this->assign(count,$count);
             $page=$this->get_page($count, 10);
             $page_foot=$page->show();//显示页脚信息
             $list=$ordermodel->table('m_order t1,m_goods t2')->where("t1.deleted=0 and t1.user_id={$user_id} and t1.goods_id=t2.goods_id")->order('t1.created desc')->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.updated,t2.goods_img,t1.price,t1.dues')->limit($page->firstRow.','.$page->listRows)->select();
             $this->assign('list',$list);
             $this->assign('page_foot',$page_foot);
         }else if($status==='no_pay'){
             $selected['no_pay']="selected='selected'";//选中下拉菜单的未付款
             $this->assign(selected,$selected);
             $selected['all']='selected';
             $count=$ordermodel->where("user_id={$user_id} and pay_status=0 and deleted=0 and status<4")->count();
             $page=$this->get_page($count, 10);
             $page_foot=$page->show();//显示页脚信息
             $list=$ordermodel->table('m_order t1,m_goods t2')->where("t1.deleted=0 and t1.user_id={$user_id} and t1.pay_status=0  and t1.status<4 and t1.goods_id=t2.goods_id")->order('t1.created desc')->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.updated,t2.goods_img,t1.price,t1.dues')->limit($page->firstRow.','.$page->listRows)->select();
             $this->assign('list',$list);
             $this->assign('page_foot',$page_foot);
         }else if($status==='daiqueren'){
             $selected['daiqueren']="selected='selected'";//选中下拉菜单的待确认
             $this->assign(selected,$selected);
             $count=$ordermodel->where("user_id={$user_id} and pay_status=1 and status=1 and deleted=0")->count();
             $page=$this->get_page($count, 10);
             $page_foot=$page->show();//显示页脚信息
             $list=$ordermodel->table('m_order t1,m_goods t2')->where("t1.deleted=0 and t1.user_id={$user_id} and t1.pay_status=1 and t1.status=1 and t1.goods_id=t2.goods_id")->order('t1.created desc')->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.updated,t2.goods_img,t1.price,t1.dues')->limit($page->firstRow.','.$page->listRows)->select();
             $this->assign('list',$list);
             $this->assign('page_foot',$page_foot);
         }else if($status==='daipingjia'){
             $selected['daipingjia']="selected='selected'";//选中下拉菜单的待评价
             $this->assign(selected,$selected);
             $count=$ordermodel->where("user_id={$user_id} and pay_status=1 and status=2 and deleted=0")->count();
             $page=$this->get_page($count, 10);
             $page_foot=$page->show();//显示页脚信息
             $list=$ordermodel->table('m_order t1,m_goods t2')->where("t1.deleted=0 and t1.user_id={$user_id} and t1.pay_status=1 and t1.status=2 and t1.goods_id=t2.goods_id")->order('t1.created desc')->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.updated,t2.goods_img,t1.price,t1.dues')->limit($page->firstRow.','.$page->listRows)->select();
             $this->assign('list',$list);
             $this->assign('page_foot',$page_foot);
         }
         
         
         
         $this->display('index');
    }
    public function quxiao_order(){
        if(!empty($_GET['order_id'])){
            $order_id=$_GET['order_id'];
            $ordermodel=D('Order');
            $row=array(
                'status' => 4
            );
            $order_user_id=$ordermodel->where("order_id=$order_id")->getField('user_id');//登录用户无该订单权限
            if($order_user_id!=$_SESSION['huiyuan']['user_id']){//登录用户无该订单权限
                $result=false;
                $this->ajaxReturn($result);
                exit();
            }
            $result = $ordermodel->where("order_id=$order_id")->save($row);
            $this->ajaxReturn($result);
        }
    }
    
    public function delete_order(){
        if(!empty($_GET['order_id'])){
            $order_id=$_GET['order_id'];
            $ordermodel=D('Order');
            $row=array(
                'deleted' => 1
            );
            $order_user_id=$ordermodel->where("order_id=$order_id")->getField('user_id');//登录用户无该订单权限
            if($order_user_id!=$_SESSION['huiyuan']['user_id']){//登录用户无该订单权限
                $result=false;
                $this->ajaxReturn($result);
                exit();
            }
            $result = $ordermodel->where("order_id=$order_id")->save($row);
            $this->ajaxReturn($result);
        }
    }
    
    public function view(){
        $this->assign('title','我的订单');
        $user_id=$_SESSION['huiyuan']['user_id'];
        $this->assign('user_id',$user_id);
        $order_id=$_GET['order_id'];
        $ordermodel=D('Order');
        $order=$ordermodel->table('m_order t1,m_users t2,m_goods t3')->where("t1.order_id='{$order_id}' and t1.shop_id=t2.user_id and t1.goods_id=t3.goods_id")->field('t1.user_id,t1.shop_id,t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.created,t1.updated,t1.deleted,t2.true_name,t2.location,t2.mobile_phone,t3.goods_img,t1.price,t1.dues')->find();
        $maijia_id=$order['user_id'];
        if(empty($maijia_id)){
            $this->error('该订单不存在','/Home/Order/index');
        }
        $usermodel=D('Users');
        $maijia=$usermodel->where("user_id=$maijia_id")->field('user_name,mobile_phone')->find();
        $this->assign('maijia',$maijia);
        if($order['user_id']===$user_id||$order['shop_id']===$user_id){
            $this->assign('order',$order);
            $this->display('view');
        }else{
            $this->error('该订单不存在','/Home/Order/index');
        }
    }

    public function queren(){
        $this->assign('title','确认服务完成');
        $order_id=$_GET['order_id'];
        $ordermodel=D('Order');
        $order_user_id=$ordermodel->where("order_id=$order_id")->getField('user_id');//登录用户无该订单权限
        if($order_user_id!=$_SESSION['huiyuan']['user_id']){//登录用户无该订单权限
            $this->error('您没有该订单权限');
        }
        $order=$ordermodel->table('m_order t1,m_users t2,m_goods t3')->where("t1.order_id={$order_id} and t1.shop_id=t2.user_id and t1.goods_id=t3.goods_id")->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.created,t1.updated,t2.true_name,t2.location,t2.mobile_phone,t3.goods_img,t1.price,t1.dues,t1.fanxian')->find();
        $this->assign('order',$order);
        
        $this->display('queren');
    }
    
    public function yanzheng_zfmm(){
        if($_POST['check']=='yanzheng'){
            $user_id=$_SESSION['huiyuan']['user_id'];
            $zhifu_mima =$_POST['mima'];
            if(empty($user_id)||is_feifa($zhifu_mima)){
                exit();
            }
            $usersmodel=D('Users');
            $salt=$usersmodel->where("user_id='{$user_id}'")->getField('salt');
            $mima_md5=md5($zhifu_mima.$salt);
            $data=$usersmodel->where("user_id='{$user_id}' and zhifu_password='{$mima_md5}'")->count();
            $this->ajaxReturn($data);
            exit();
        }
    }
    public function queren_success(){
        $user_id=$_SESSION['huiyuan']['user_id'];
        $zhifu_mima =$_POST['zhifu_password'];
        $order_id=$_POST['order_id'];
        $ordermodel=D('Order');
        $order_user_id=$ordermodel->where("order_id=$order_id")->getField('user_id');//登录用户无该订单权限
        if($order_user_id!=$_SESSION['huiyuan']['user_id']){//登录用户无该订单权限
            $this->error('您没有该订单权限');
        }
        $usersmodel=D('Users');
        $salt=$usersmodel->where("user_id='{$user_id}'")->getField('salt');
        $mima_md5=md5($zhifu_mima.$salt);
        $data=$usersmodel->where("user_id='{$user_id}' and zhifu_password='{$mima_md5}'")->count();
        if($data==='1'){
            $row=array(
                'status'=>2,//确认完成
                'updated'=> mktime()
                );
            $ordermodel->where("order_id=$order_id")->save($row);
            
            //婚礼人账户余额增加
            $order=$ordermodel->where("order_id=$order_id")->find();
            $shop_id=$order['shop_id'];
            $dues=(float)($order['dues']-$order['fanxian']);
            $usersmodel=D('Users');
            $usersmodel->where("user_id=$shop_id")->setInc( 'credit_line',$dues );
            
            $this->redirect('Order/appraise',array('order_id'=>$order_id),0);

        }else{
            $this->error('非法进入，将转到主页',U('index/index'),3);
        }
        
    }
    
    public function appraise(){
        $this->assign('title','评价');
        $order_id=$_GET['order_id'];
        $this->assign('order_id',$order_id);
        $ordermodel=D('Order');
        $order_user_id=$ordermodel->where("order_id=$order_id")->getField('user_id');//登录用户无该订单权限
        if($order_user_id!=$_SESSION['huiyuan']['user_id']){//登录用户无该订单权限
            $this->error('您没有该订单权限');
        }
        $order=$ordermodel->table('m_order t1,m_users t2,m_goods t3')->where("t1.order_id={$order_id} and t1.shop_id=t2.user_id and t1.goods_id=t3.goods_id")->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.created,t1.updated,t2.true_name,t2.location,t2.mobile_phone,t3.goods_img,t1.price,t1.dues,t1.fanxian')->find();
        $this->assign('order',$order);
        $order=$ordermodel->where("order_id=$order_id")->find();
        $this->display('appraise');
    }
    public function file_jia(){
        $file_info=$this->upload('image/temp/');//获取上传文件信息
        if($file_info[0]==='error'){
            $data=array(
                'result'=>'error',
                'error'=>$file_info[1]
            );
            $this->ajaxReturn($data,'JSON');
            exit();

        }
        //获取图片URL
        $data=array();
        $data['src']=UPLOAD.$file_info[1]['file_img']['savepath'].$file_info[1]['file_img']['savename'];
        $index=strripos($data['src'],"/");
        $img_url=substr($data['src'],0,$index+1);
        $img_name=substr($data['src'],$index+1); 
        $this->thumb($img_url,$img_name,300,300);//创建图片的缩略图
        $data['src_thumb']=$img_url.'thumb/'.$img_name;
        $this->ajaxReturn($data,'JSON');
    }
        
    private function thumb($url,$name,$a,$b){
        $image = new \Think\Image(); 
        $image->open($url.$name);
        creat_file($url.'thumb');//创建文件夹（如果存在不会创建）
        $image->thumb($a, $b)->save($url.'thumb/'.$name);
    }
    
    public function appraise_success(){
        $this->assign('title','评价成功');
        $order_id=$_GET['order_id'];
        $ordermodel=D('Order');
        $user_id=$_SESSION['huiyuan']['user_id'];
        $order_user_id=$ordermodel->where("order_id=$order_id")->getField('user_id');//登录用户无该订单权限
        if($order_user_id!=$user_id){//登录用户无该订单权限
            $this->error('您没有该订单权限');
        }
        $content=$_POST;//获取提交的内容
        $pinglun=$content['pingjia_text'];

        //获取图片URL,分割成数组
        if($content['goods_img']!==''){
            $arr_img=explode('+img+',$content['goods_img']);
            //移动文件 并且改变url
            foreach ($arr_img as &$value) {
                $today=substr($value,26,8);//获取到文件夹名  如20150101
                creat_file(UPLOAD.'image/appraise/'.$today);//创建文件夹（如果存在不会创建）
                rename($value, str_replace('Public/Uploads/image/temp', UPLOAD.'image/appraise',$value));//移动文件
                $value=str_replace('Public/Uploads/image/temp', '/'.UPLOAD.'image/appraise',$value);
            }
            $str_img=serialize($arr_img);//序列化数组
        }
        unset($content['goods_img']);//从数组中删除goods_img
        
        
        if(is_feifa($pinglun)){
            $this->error('评论含有非法字符');
            exit();
        }
        if($pinglun==''){
            $pinglun='服务很好，特别专业，我很满意';//如果没有留下评论，自动评论为这句话
        }
        unset($content['pingjia_text']);//从数组中删除评论
        foreach($content as $value){
            if($value==''||  is_feifa($value)){
                $this->error('评分为空或者含有非法字符');
                exit();
            }
            $pingfen[]=$value;
            $score=$score+$value;
        }
        $score=$score/3;
        $score=number_format($score, 1);
        $pingfen=serialize($pingfen);//序列化数组      
        
        //更新order表里面的数据，存入数据库
        $order_status=$ordermodel->where("order_id=$order_id")->getField('status');//订单是否是已确认状态
        if($order_status!='2'){
            $this->error('订单状态不是已确认状态');
            exit();
        }
        $row=array(
            'status'=>3,//支付状态为已评价
            'appraise'=>$pinglun,
            'score'=>$score,
            'pingfen'=>$pingfen,
            'appraise_img'=>$str_img,
            'updated'=> mktime()
                );
        $ordermodel->where("order_id=$order_id")->save($row);
        
        //评论后购买人的账户余额增加返现金额
        $order=$ordermodel->where("order_id=$order_id")->find();
        $fanxian=$order['fanxian'];
        if($fanxian!=='0.00'){
            $fanxian=(float)$fanxian;
            $usersmodel=D('Users');
            $usersmodel->where("user_id=$user_id")->setInc( 'credit_line',$fanxian );
        }
        
        //更新商品表里面的分数和评价人数，存入
        $goods_id=$ordermodel->where("order_id=$order_id")->getField('goods_id');//得到商品id
        $array_score=$ordermodel->where("goods_id=$goods_id and status=3")->getField('score',true);
        $goods_score=0;
        foreach ($array_score as $score_value){
            $goods_score+=$score_value;
        }
        $score_count=count($array_score);
        $goods_score=$goods_score/$score_count;
        $row1=array(
            'score'=>$goods_score,
            'comment_number'=>$score_count
        );
        $goodsmodel=D('Goods');
        $goodsmodel->where("goods_id=$goods_id")->save($row1);
        
        $this->redirect('Order/appraise_manage',array('order_id'=>$order_id),0);

    }
    
    public function appraise_manage(){
        $this->assign('title','我已评价');
        $ordermodel=D('Order');
        $user_id=$_SESSION['huiyuan']['user_id'];
        $count=$ordermodel->where("user_id={$user_id} and pay_status=1 and status=3")->count();
        $page=$this->get_page($count, 10);
        $page_foot=$page->show();//显示页脚信息
        $list=$ordermodel->table('m_order t1,m_goods t2')->where("t1.user_id={$user_id} and t1.pay_status=1 and t1.status=3 and t1.goods_id=t2.goods_id")->order('t1.updated desc')->field('t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.updated,t1.pingfen,t1.appraise,t2.goods_img')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('page_foot',$page_foot);
         
        $this->display('appraise_manage');
    }
    
    
    public function tuikuang() {
        $this->assign('title','一起网-申请退款');
        $user_id=$_SESSION['huiyuan']['user_id'];
        $this->assign('user_id',$user_id);
        $order_id=$_GET['order_id'];
        $ordermodel=D('Order');
        $order=$ordermodel->table('m_order t1,m_users t2,m_goods t3')->where("t1.order_id={$order_id} and t1.shop_id=t2.user_id and t1.goods_id=t3.goods_id")->field('t1.user_id,t1.shop_id,t1.order_id,t1.order_no,t1.goods_id,t1.goods_name,t1.server_day,t1.shop_name,t1.status,t1.pay_status,t1.created,t1.updated,t1.deleted,t2.true_name,t2.location,t2.mobile_phone,t3.goods_img,t1.price,t1.dues')->find();
        $maijia_id=$order['user_id'];
        if(empty($maijia_id)){
            $this->error('该订单不存在','/Home/Order/index');
        }
        if($order[pay_status]==='0'){
            $this->error('该订单未付款','/Home/Order/index');
        }
        $usermodel=D('Users');
        $maijia=$usermodel->where("user_id=$maijia_id")->field('user_name,mobile_phone')->find();
        $this->assign('maijia',$maijia);
        if($order['user_id']===$user_id||$order['shop_id']===$user_id){
            $this->assign('order',$order);
            $this->display('tuikuang');
        }else{
            $this->error('该订单不存在','/Home/Order/index');
        }
    }
    
    public function tuikuang_check() {
        $order_id=$_POST['order_id'];
        if(empty($order_id)){
            exit();
        }
        $ordermodel=D('Order');
        $order=$ordermodel->where("order_id=$order_id")->field("user_id,shop_id,goods_id,server_day,dues")->find();
        $s_d=$order['server_day'];
        $order_user=$order['user_id'];
        $user_id=$_SESSION['huiyuan']['user_id'];
        if($order_user!==$user_id){
            exit();
        }
        $usersmodel=D('Users');
        if($_POST['check']==='tuikuang_befor_hunli'){
            $server_day= mktime(0, 0, 1,  substr($s_d,4,2), substr($s_d,6,2), substr($s_d,0,4)); 
            $time=time();
            if($server_day-$time>432000){//大于5天 100%无条件退款$_POST['cause']==='商家时间冲突，无法预约'){
                $order_row=array(
                    'pay_status'=>3,
                    'tuikuang_cause'=>$_POST['cause']
                );
                $ordermodel->where("order_id=$order_id")->save($order_row);
                $usersmodel->where("user_id=$order_user")->setInc( 'credit_line',$order['dues']);
                $this->ajaxReturn('success');
            }else{
                if($_POST['cause']==='商家时间冲突，无法预约'){
                    $order_row=array(
                        'pay_status'=>2,
                        'tuikuang_cause'=>$_POST['cause']
                    );
                    $ordermodel->where("order_id=$order_id")->save($order_row);
                    $this->ajaxReturn('shenqing');
                }else{//小于5天 退款80%
                    $order_row=array(
                        'pay_status'=>3,
                        'tuikuang_cause'=>$_POST['cause']
                    );
                    $ordermodel->where("order_id=$order_id")->save($order_row);
                    $usersmodel->where("user_id=$order_user")->setInc( 'credit_line',$order['dues']*0.8);
                    $this->ajaxReturn('success');
                }
            }
        }
    }
}