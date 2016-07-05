<?php
namespace Home\Controller;
use Home\Controller;
class Yj921314Controller extends FontEndController {
    public function index(){
        $this->display();
    }
    public function begin() {
        $tikumodel=D('Tiku');
        //$map['xuanxiang'] = array('LIKE','a:3%');
        //$arr_id=$tikumodel->where($map)->select();
        //var_dump($arr_id);
        //exit();
        
        
        $arr_id=$tikumodel->getField('id',true);
        //$count=$tikumodel->count();
        //var_dump($count);
        $suiji=  rand(0, 480);
        $id=$arr_id[$suiji];
        $arr_timu=$tikumodel->where("id=$id")->find();
        $xuanxiang=  unserialize($arr_timu['xuanxiang']);
        $this->assign('xuanxiang',$xuanxiang);
        $this->assign('timu',$arr_timu);
        
        $this->display();
    }
    


}